@extends('layouts.default')

@section('content')
<h1> Create a user here. </h1>

<form method="POST" action="/users">
	<label>email:</label>
	<input type="email" name="email" placeholder="email address">
	<label>password:</label>
	<input type="password" name="password" placeholder="password">
	<label>re-enter password:</label>
	<input type="password" name="reenter-password" placeholder="re-enter password">
	<input type="submit">
</form>
@stop