<?php
    header("Content-Type: application/json");
    header("Access-Control-Allow-Origin: *");

    $contentType = $_SERVER["CONTENT_TYPE"] ? trim($_SERVER["CONTENT_TYPE"]) : "Not Set";

    if($contentType === "application/json"){
        $contents = trim(file_get_contents("php://input"));

        $decoded = json_decode($contents, true);

    }
    else{
        echo json_encode([
            "Error!!\nUnrecognized Content Type"
        ]);
    }
?>