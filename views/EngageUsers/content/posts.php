<div id="content">

    <h1><?= $posts['Posts'] ?></h1>
    <h2><?= $posts['PostsAreBelow'] ?></h2>
    <?= Q::tool('Streams/related', array(
        'publisherId' => $communityId,
        'streamName' => $categoryName
    )) ?>

</div>