<?php

$stmt = $pdo->prepare("select * from gallery");
$stmt->execute();

$gallery = $stmt->fetchAll(PDO::FETCH_ASSOC);

json($gallery);