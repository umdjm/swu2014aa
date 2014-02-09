{{-- Requires $comment --}}
<div class="col-xs-12 well">
    <span>
        <strong><i class="fa fa-comments-o"></i> {{ $comment->user->name }}</strong>
        <em>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $comment->created_at)->diffForHumans() }}</em>
    </span>
    <p>{{ $comment->body }}</p>
</div>