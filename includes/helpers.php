<?php

function current_page(): string
{
    $input = filter_input(INPUT_SERVER, 'REQUEST_URI', FILTER_SANITIZE_STRING);
    $input = htmlentities(strip_tags($input));

    return strtok(trim($input), '?');
}

function json(array $data, int $status_code = 200)
{
    header('Content-Type: application/json');
    http_response_code($status_code);

    echo json_encode($data);
}
