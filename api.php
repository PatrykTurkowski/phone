<?php

$request_body = file_get_contents('php://input');
$data = json_decode($request_body, true);
filter_var($data, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
if(isset($data['number'])){
$number = $data['number'];
if (isset($data['total'])) {
    $total = $data['total'];
} else {
    $total = '';
}

$total .= $number;

$data = [

    "total" => $total,
];

echo json_encode($data);
}else
{
    http_response_code(400);
    echo '400 - bad request';
}