<div class="row">
  <ul class="list-inline">
    <li class="square-issue" style="background-image:url({{ URL::to('imgs/post-an-issue.png')}});" onclick="location.href = '/issues/create';"></li>
            
    @foreach ($issues as $index=>$issue)
      <li class="square-issue" style="background-image:url({{ $issue->photo }});" onclick="location.href = '/issues/{{ $issue->id }}';">
       <!-- <div class="circleBase idea-status status-{{ $issue->priority_string() }}" ></div>-->
        <h1 class="important h4 overlay issue-name" >{{ $issue->name }}</h1>
      </li>

      <!--<li class="square-issue thumbnail"><a class="cover" href="/issues/{{ $issue->id }}"><img src="{{ $issue->photo }}" alt="sq-image" /></a></li>-->
    @endforeach


  </ul>

</div><!-- everything that goes in da block o' blocks -->