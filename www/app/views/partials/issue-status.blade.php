<p>
	Priority
	<span class="label label-{{ array('success', 'warning', 'danger')[$issue->priority]}}">
		{{ $issue->priority_string() }}
	</span>
</p>
<p>
	Status
	<span class="label label-{{ array('new'=>'danger', 'active'=>'warning', 'closed'=>'success')[$issue->status]}}">
		{{ $issue->status }}
	</span>
</p>