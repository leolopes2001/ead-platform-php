<?php

$mysqli = new mysqli("db", "root", "1234", "albuns");

if ($mysqli->errno) {
    die("Database error");
}
