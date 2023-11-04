<?php

$stmt = $pdo->prepare('select * from skill');
$stmt->execute();

$skills = $stmt->fetchAll(PDO::FETCH_ASSOC);

json($skills);