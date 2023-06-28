<?php
session_start();

$_SESSION["naam"] = "eric";

header("Location: /");
?>