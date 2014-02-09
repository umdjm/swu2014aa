@extends('layouts.default')

@section('content')

<div class="row">
  <div class="col-md-4">
       <h4>Issue Types</h4>
  </div>
  <div class="col-md-4">
       <h4>Departments</h4>
  </div>
  <div class="col-md-4">
       <h4>Issue Owner</h4>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
        <div id="typeChart" ></div>
  </div>
  <div class="col-md-4">
        <div id="deptChart" ></div>
  </div>
  <div class="col-md-4">
        <div id="ownerChart" ></div>
  </div>
</div>


<div class="row">
  <div class="col-md-6">
       <h4>Issue Status</h4>
  </div>
  <div class="col-md-6">
       <h4>Days Open</h4>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
        <div id="statusChart" ></div>
  </div>
  <div class="col-md-6">
        <div id="daysOpenChart" ></div>
  </div>
</div>


<div class="row">
  <div class="col-md-12">
       <h4>Date Opened</h4>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
        <div id="dateChart" ></div>
  </div>
</div>

<div class="row">
  <div class="col-md-12 col-centered">
    <button type="button" class="btn btn-info reset" onclick="javascript:dc.filterAll();dc.redrawAll();">Clear Filters</button>
  </div>
</div>


<script>

var statuses = ["Open", "Escalated", "Resolved", "In Progress"];
var statusColors = ["#9ecae1", "#f3643c", "#2ca02c", "#3182bd"];
function getDaysDiff(d1, d2) {
            var t2 = d2.getTime();
            var t1 = d1.getTime();

            return parseInt((t2-t1)/(24*60*60*1000));
    }

function addDays(date, days) {
        var result = new Date(date);
        result.setDate(date.getDate() + days);
        return result;
    }

var chartExample = {
    initChart: function (issues) {
        var typeChart = dc.rowChart("#typeChart");
        var deptChart = dc.rowChart("#deptChart");
        var ownerChart = dc.rowChart("#ownerChart");
        var statusChart = dc.pieChart("#statusChart");
        var daysOpenChart = dc.rowChart("#daysOpenChart");
        var dateChart = dc.barChart("#dateChart");

        var ndx = crossfilter(issues),
            typeDimension = ndx.dimension(function (d) {
                return d.Type;
            }),
            typeGroup     = typeDimension.group().reduceCount(),
            deptDimension = ndx.dimension(function (d) {
                return d.Department;
            }),
            deptGroup     = deptDimension.group().reduceCount(),
            ownerDimension = ndx.dimension(function (d) {
              return d.Owner;
            }),
            ownerGroup     = ownerDimension.group().reduceCount(),
            statusDimension = ndx.dimension(function (d) {
              return d.Status;
            }),
            statusGroup     = statusDimension.group().reduceCount(),
            dateDimension = ndx.dimension(function (d) {
               return d3.time.month.floor(d.OpenedDate);
            }),
            dateGroup     = dateDimension.group().reduceCount(),
            daysOpenDimension = ndx.dimension(function (d) {
             return d.DaysOpened;
            }),
            daysOpenGroup     = daysOpenDimension.group().reduceCount(),
            extent            = d3.extent(issues, function(d){return d.OpenedDate;});;

    dateChart
            .elasticY(true)
            .renderHorizontalGridLines(true)
            .width(1366)
            .height(280)
            .gap(10)
            .valueAccessor(function (d) {
                return d.value;
            })
            .keyAccessor(function (d) {
                return d.key;
            })
            .xUnits(d3.time.months)
            .x(d3.time.scale().domain(extent))
            .round(d3.time.month.round)
            .yAxisLabel("Issues")
            .dimension(dateDimension)
            .group(dateGroup)
            .yAxis().ticks(3);

    var monthFormat = d3.time.format("%b %Y");
    dateChart.xAxis().tickFormat(function(v) {return monthFormat(v);});

    typeChart
            .width(400)
            .height(280)
            .dimension(typeDimension)
            .group(typeGroup)
            .elasticX(true)
            .xAxis().ticks(4);
    deptChart
            .width(400)
            .height(280)
            .dimension(deptDimension)
            .group(deptGroup)
            .elasticX(true)
            .xAxis().ticks(4);
    ownerChart
        .width(400)
        .height(280)
        .dimension(ownerDimension)
        .group(ownerGroup)
        .elasticX(true)
        .xAxis().ticks(4);

    statusChart
        .width(600)
        .height(280)
        .colors(d3.scale.ordinal().domain(statuses).range(statusColors))
        .dimension(statusDimension)
        .group(statusGroup);

    daysOpenChart
            .width(600)
            .height(280)
            .dimension(daysOpenDimension)
            .colors(d3.scale.ordinal().domain([""]).range(["#3182bd"]))
            .group(daysOpenGroup)
            .elasticX(true)
            .xAxis().ticks(4);

        dc.renderAll();
    },
    initData: function () {
        var issues = [];

        var types = ["Fixes", "Cleaning", "Restock"];
        var departments = [
                    {Name:"Janitorial", Owners:["Bob Jenkins", "Pat Farley"]},
                    {Name:"Receptionist", Owners:["Barry Foster", "Pam Wilkens"]}
                    ];
        var startDate = new Date(2013,1,1,0,0) ;
        var endDate = new Date(2014,0,31,0,0) ;
        var dateDiff = getDaysDiff(startDate, endDate);
        var daysOpenedSet = [0, 0, 0, 1, 1, 1, 1, 1, 1, 2, 2, 2, 2, 2, 3, 3, 3, 3, 4, 4, 4, 5, 5, 5, 6, 6, 7, 7, 8, 8, 9, 10];
        for(var i = 0; i < 1000; i++)
        {
            var type = types[Math.floor(Math.random() * types.length)];
            var dept = departments[Math.floor(Math.random() * departments.length)];
            var owner = dept.Owners[Math.floor(Math.random() * dept.Owners.length)];
            var status = statuses[Math.floor(Math.random() * statuses.length)];
            var openedDate = addDays(startDate, Math.random()*dateDiff);
            var daysOpened = daysOpenedSet[Math.floor(Math.random() * daysOpenedSet.length)];
            if(addDays(openedDate, daysOpened) >  endDate)
                daysOpened = getDaysDiff(openedDate, endDate);

            var issue = {Type:type, Department: dept.Name, Owner: owner, Status:status, OpenedDate: openedDate,  DaysOpened: daysOpened};
            issues.push(issue);
        }
        chartExample.initChart(issues);
    }
};

chartExample.initData();

</script>

@stop