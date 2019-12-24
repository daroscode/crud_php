<?php

require 'core/dbconnect.php';

$query = '';
$result = '';
$read = array();
$update = array();

// CREATE
if (isset($_POST['btnCreate'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    
    $query = "INSERT INTO users (name, surname, caddate) VALUES('{$name}', '{$surname}', NOW())";
    $query = $db->query($query);
    header("Location: index.php");
}

// READ
$query = "SELECT * FROM users";
$query = $db->query($query);
$result = $query->rowCount();

if ($result) {
    $read = $query->fetchAll();
}

// UPDATE
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $query = "SELECT * FROM users WHERE id = {$_GET['id']}";
    $query = $db->query($query);
    $result = $query->rowCount();
    $update = $query->fetchAll();
}

if (Isset($_POST['btnUpdate'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];

    $query = "UPDATE users SET name = '{$name}', surname = '{$surname}' WHERE id = {$_GET['id']}";
    $query = $db->query($query);
    header("Location: index.php");
}

// DELETE
if (isset($_GET['delid']) && !empty($_GET['delid'])) {
    $query = "DELETE FROM users WHERE id = {$_GET['delid']}";
    $query = $db->query($query);
    header("Location: index.php");
}