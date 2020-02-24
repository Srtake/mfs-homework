<?php

$username = $_POST['username'];

try {
    $dbh = new PDO(
        "mysql:host=localhost;dbname=account_info;charset=UTF8",
        "username",
        "password"
    );
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

$sql = "select * from account where username = '" . $username . "'";
$selectObj = $dbh->prepare($sql);
$selectObj->execute();
$result = $selectObj->fetchAll(PDO::FETCH_ASSOC);

if (count($result) > 0) {
    echo "<span style='color: red'>该用户名已被占用</span>";
} else {
    echo "<span style='color: green'>该用户名可以使用</span>";
}

