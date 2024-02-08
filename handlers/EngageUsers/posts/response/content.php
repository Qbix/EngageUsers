<?php

function EngageUsers_posts_response_content()
{
    $communityId = Users::communityId();
    $categoryName = 'Streams/external/posts';
    Q_Response::addStylesheet('css/pages/posts.css');
    return Q::view('EngageUsers/content/posts.php', compact(
        'communityId', 'categoryName'
    ));
}