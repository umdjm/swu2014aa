<?php 
	$label="default";
	if ( $issue->priority >= 3 ) {
		$label="danger";
	}
	else if ( $issue->priority == 2 ) {
		$label="warning";
	}
	else {
		$label="success";
	}
?>
<p>
	Priority
	<span class="label label-{{ $label }}">
		{{ $issue->priority_string() }}
	</span>
</p>
<?php
	$label="default";
	switch ($issue->status) {
		case "new": $label="danger"; break;
		case "active": $label="warning"; break;
		case "success": $label="success"; break;
	}	
?>
<p>
	Status
	<span class="label label-{{ $label }}">
		{{ $issue->status }}
	</span>
</p>