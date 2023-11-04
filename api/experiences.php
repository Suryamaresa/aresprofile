<?php

$stmt = $pdo->prepare("select * from experience order by 'order' asc");
$stmt->execute();

$experiences = $stmt->fetchAll(PDO::FETCH_ASSOC);

json($experiences);