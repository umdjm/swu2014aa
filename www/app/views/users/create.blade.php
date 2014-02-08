@extends('layout.default')

<p> Create a user here. </p>

<form action="">
	<label>email:</label>
	<input type="email" name="email" placeholder="email address">
	<label>password:</label>
	<input type="password" name="password" placeholder="password">
	<label>re-enter password:</label>
	<input type="password" name="reenter-password" placeholder="re-enter password">
	<input type="submit">
</form>