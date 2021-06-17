<?php

function getKey() {
    return ["kthana", "rahasia", "wsana", "bisa"];
}

function isValid($input) {
    $apikey = $input["api_key"];
    if (in_array($apikey, getKey())) {
        return true;
    } else {
        return false;
    }
}

function jsonOut($status, $message, $data) {
    $respon = ["status" => $status, "message" => $message, "data" => $data];

    header("Content-type: application/json");
    echo json_encode($respon);
}

function getLagu() {
    $lagu = [
        ["title" => "Butter", "ket" => "Lagu single bahasa inggris ke-2"],
        ["penyanyi" => "BTS", "ket" => "Boygrup asal Korea Selatan"],
        ["genre" => "POP", "ket" => "pop bernuansa disco"]
    ];
    return $lagu;
}

if (isValid($_GET)) {
    jsonOut("berhasil", "apikey valid", getLagu());
} else {
    jsonOut("gagal", "apikey not valid!!!", null);
}

?>