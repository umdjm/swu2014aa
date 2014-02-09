{{-- Requires $issue_id --}}
{{ Form::open(array('url' => 'comments', 'method' => 'POST')) }}
    <fieldset>
        <div class="form-group">
            {{ Form::hidden('issue_id', $issue_id) }}
            {{ Form::label('body', 'Leave a comment:') }}
            {{ Form::textarea('body', null, array('class'=>'form-control required', 'rows'=>3)) }}
        </div>
    </fieldset>
    <div class="form-group">
        {{ Form::submit('Submit', array('class'=>'btn btn-primary')) }}
    </div>
{{ Form::close() }}