<?php
function connect(){
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbName = 'testphp';

    $connect = mysqli_connect($hostname, $username, $password,$dbName)
    or die('No connection with data base');
    mysqli_query($connect, 'SET NAMES utf-8');

    return $connect;
}