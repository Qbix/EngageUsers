<?php
	
function EngageUsers_about_response_content()
{
	$communityId = Users::currentCommunityId(true);
	Q_Response::addStylesheet("css/pages/about.css");
	return Q::view('EngageUsers/content/about.php', compact("communityId"));
}