<?php

$profile_id = PROFILE_ID;

$stmt = $pdo->prepare('select * from profile where id=:id');
$stmt->bindParam(':id', $profile_id);
$stmt->execute();

$profile = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$profile) {
    json(['message' => 'Data not found.'], 404);
}

$stmt = $pdo->prepare('select * from social_media');
$stmt->execute();
$stmt->execute();

$profile['social_media'] = [];

$social_medias = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($social_medias as $social_media) {
    $profile['social_media'][$social_media['name']] = $social_media['link'];
}

json($profile);