<div class="row">
  <ul class="list-inline">
    <li class="square-issue" style="border:solid; border-color: lightgrey; background-image:url({{ URL::to('imgs/post-an-issue.png')}}); background-size:100%" onclick="location.href = '/issues/create';">
       <div class="image-label" style="margin-left:0px">
        <h1>Click to Submit</h1>
      </div>
    </li>
            
    @foreach ($issues as $index=>$issue)
      <li class="square-issue" style="border:solid; border-color: lightgrey; background-image:url({{ $issue->photo }});" onclick="location.href = '/issues/{{ $issue->id }}';">
        <div class="circleBase idea-status status-{{ $issue->priority_string() }}" ></div>
       <div class="image-label">
        <h1>{{ $issue->name }}</h1>


<!--
        <div class="pill overlay description">
            Priority:{{ $issue->priority_string()}}
            <p>{{ $issue->desc }}</p>
        </div>

-->

      </div>
      </li>

      <!--<li class="square-issue thumbnail"><a class="cover" href="/issues/{{ $issue->id }}"><img src="{{ $issue->photo }}" alt="sq-image" /></a></li>-->
    @endforeach


  </ul>

</div><!-- everything that goes in da block o' blocks -->

