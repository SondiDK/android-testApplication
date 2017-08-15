<?php

sleep(1);

$accounts = unserialize(file_get_contents('data.json'));

$input = file_get_contents('php://input');
$input = (array) json_decode($input, true);

$requestData = array_merge($_GET, $_POST, $input);

if (! $accounts or isset($requestData['reset'])) {
  $accounts = [
      [
          "id" => 100001,
          "name" => "ahmad 1",
          "gender" => "male",
          "flag_banned" => false,
          "flag_inactive" => false
      ],
      [
          "id" => 100002,
          "name" => "احمد2",
          "gender" => "male",
          "flag_banned" => false,
          "flag_inactive" => false
      ],
      [
          "id" => 100003,
          "name" => "سميرة1",
          "gender" => "female",
          "flag_banned" => false,
          "flag_inactive" => false
      ],
      [
          "id" => 100004,
          "name" => "سميرة2",
          "gender" => "female",
          "flag_banned" => false,
          "flag_inactive" => false
      ],
      [
          "id" => 100100,
          "name" => "DJahmad",
          "gender" => "male",
          "flag_banned" => false,
          "flag_inactive" => false
      ],
      [
          "id" => 100101,
          "name" => "Susii",
          "gender" => "female",
          "flag_banned" => false,
          "flag_inactive" => false
      ],
      [
          "id" => 100102,
          "name" => "taghrida",
          "gender" => "female",
          "flag_banned" => false,
          "flag_inactive" => false
      ],
      [
          "id" => 100103,
          "name" => "mohbad52",
          "gender" => "male",
          "flag_banned" => false,
          "flag_inactive" => false
      ],
      [
          "id" => 100104,
          "name" => "hamoda",
          "gender" => "male",
          "flag_banned" => false,
          "flag_inactive" => false
      ],
      [
          "id" => 100105,
          "name" => "hiba",
          "gender" => "female",
          "flag_banned" => false,
          "flag_inactive" => false
      ]
  ];
}

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

if (isset($requestData['account'])) {
  $account = [
    "id" => mt_rand(100000, 200000),
    "name" => $requestData['account']['name'],
    "gender" => $requestData['account']['gender'],
    "flag_banned" => false,
    "flag_inactive" => false
  ];

  $accounts[] = $account;
  echo json_encode($account, JSON_PRETTY_PRINT), PHP_EOL;
} else {
  echo json_encode(['accounts' => $accounts], JSON_PRETTY_PRINT), PHP_EOL;
}

file_put_contents('data.json', serialize($accounts));
