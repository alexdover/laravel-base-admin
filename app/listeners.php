<?php

/*
|---------------------------------------------------------
| Update the last login when a user logs into the system
|---------------------------------------------------------
*/
Event::listen('user.login', function($user)
{
	$user->last_login = new DateTime;
	$user->save();
});