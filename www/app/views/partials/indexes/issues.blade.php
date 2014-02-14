<div class="wrapper" id="idea-wrapper">
  <ol id="idea-list" class="block-list grid main-grid">
      <li data-count="2" data-totalcount="12" class="grid-block pill">
      	<article class="grid-idea">
              <a class="cover" href="/issues/create">
      			<img src="{{ URL::to('imgs/post-an-issue.png')}}" class="pill grid-img photo" alt="IdeaPot" width="500px" height="1000px">
              </a>
      	</article>
      </li>
    @foreach ($issues as $issue)
      <li data-count="2" data-totalcount="12" class="grid-block pill">
      	<article class="grid-idea">
              <a class="cover" href="/issues/{{ $issue->id }}">

                  <div class="circleBase idea-status status-{{ $issue->priority_string() }}" >
                  </div>
                  <h1 class="important h4 overlay issue-name" >{{ $issue->name }}</h1>
            @if($issue->photo != "")
      			 <img src="{{ $issue->photo }}" class="pill grid-img photo" alt="IdeaPot" width="1000px" height="1000px">
            @else
             <img src="/imgs/FW-Default-wrench.jpg" class="pill grid-img photo" alt="IdeaPot" width="1000px" height="1000px">
            @endif
      			<div class="pill overlay description">
                      Priority:{{ $issue->priority_string() }}
                      <p>{{ $issue->desc }}</p>
                  </div>
              </a>
      	</article>
      </li>
    @endforeach
  </ol>
</div>