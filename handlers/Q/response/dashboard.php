<?php

function Q_response_dashboard()
{	
	$app = Q::app();
	$slogan = "Powered by Qbix.";
	$user = Users::loggedInUser(false, false);
	$text = Q_Text::get("EngageUsers/content");
	$isMobile = Q_Request::isMobile();

	if ($user) {
		$tabs = array('home' => $text['dashboard']["Home"]);
	} else {
		$tabs = array('welcome' => $text['dashboard']["Welcome"]);
	}
	$tabs = array_merge($tabs, array(
		'about' => $text['dashboard']["About"],
		'posts' => $text['dashboard']["Posts"]
	));
	$urls = array(
		'welcome' => 'EngageUsers/welcome',
		'home' => 'EngageUsers/home',
		'posts' => 'EngageUsers/posts',
		'about' => 'EngageUsers/about'
	);
	return Q::view("$app/dashboard.php", @compact('slogan', 'user', 'tabs', 'urls', 'text', 'isMobile'));
}
