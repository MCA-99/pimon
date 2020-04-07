<?php
try {
    $hostname = "172.18.0.4:3306";
    $dbname = "db";
    $username = "root";
    $pw = "root";
    $collation = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    $con = new PDO ("mysql:host=$hostname;dbname=$dbname","$username","$pw", $collation);
    return $conn;
} catch (PDOException $e) {
    echo "Failed to get DB handle: " . $e->getMessage() . "\n";
    exit;
}
?>