<?php

$dbfile = "/tmp/db.sqlite";

if (file_exists($dbfile)) {
    $db = new PDO("sqlite:$dbfile");
} else {
    $db = new PDO("sqlite:$dbfile");
    $db->query("Create table users(id int primary key not null, username varchar(60) not null, password varchar(60) not null)");
    $db->query("insert into users(id, username, password) values(1, 'admin', 's3kr3t')");
    $db->query("insert into users(id, username, password) values(2, 'joe', 's1mpl3')");

}

$username = $_POST['username'];
$password = $_POST['password'];
$sql = "select * from users where username = '$username' and password = '$password'";
//echo "SQL: $sql<hr>";
$result = $db->query($sql);
$rows = $result->fetchAll();
if (count($rows) == 1) {
    $_SESSION['user'] = $_POST['username'];
    header("Location: /");
} else {
    header("Location: /");
}
