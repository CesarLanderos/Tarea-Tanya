<?php

$users = [
  [
    "email" => "a",
    "password" => "s",
    "area" => "d",
  ],
  [
    "email" => "1",
    "password" => "2",
    "area" => "3",
  ],
  [
    "email" => "4",
    "password" => "5",
    "area" => "6",
  ],
];

$logged = false;
foreach ($users as $index => $user) {
  if ($_POST['email'] === $user["email"]) {
    $logged = true;
    echo "Bienvenid@ a ♦A volar! Agencia de viajes♦";
  }
}

if (!$logged) {
  echo "error, no existe el usuario";
}
