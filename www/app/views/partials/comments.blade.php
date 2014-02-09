{{-- Requires $comments, $issue_id --}}
<div class="row">
    @if(count($comments))
        <div class="col-xs-12">
            <h3>Comments</h3>
            @foreach( $comments as $comment)
                @include('partials.indexes.comment', array('comment' => $comment))
            @endforeach
        </div>
    @endif
    <div class="col-xs-12">
        @include('partials.forms.comment', array('issue_id' => $issue_id))
    </div>
</div>