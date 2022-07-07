<?php

const ALLOWED_KEYS = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0, '*', '#'];

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'method not allowed!']);
    exit();
    return;
}
$request_body = file_get_contents('php://input');
$data = json_decode($request_body, true);
$total = isset($data['total']) ? $data['total'] : '';
filter_var_array($data, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if (
    !isset($data['key']) ||
    !in_array($data['key'], ALLOWED_KEYS) ||
    !isValidTotal($total)
) {
    http_response_code(400);
    echo json_encode(['error' => 'error']);
    exit();
    return;
}
header('Content-Type: application/json; charset=utf-8');

echo json_encode($data = ['total' => $total . $data['key']]);

function isValidTotal($total)
{
    $chars = str_split($total);
    foreach ($chars as $char) {
        if (!in_array($char, ALLOWED_KEYS) && $total != '') {
            return false;
        }
    }
    return true;
}
