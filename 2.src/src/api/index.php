<?php
header("Content-Type: application/json");

echo json_encode([
    "status" => "success",
    "message" => "API is working correctly!"
]);
