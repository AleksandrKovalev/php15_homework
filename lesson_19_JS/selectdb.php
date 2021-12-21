<?php
if(!$mysql = mysqli_connect('127.0.0.1', 'root','','php15db'))
{
die("Connection failed:" . $mysql->connect_error);
}

function runQuery($query){
    global $mysql;
    return mysqli_query($mysql, $query);
}

function getDbData($query){
    $res = runQuery($query);

    return $res
        ? mysqli_fetch_all($res, MYSQLI_ASSOC)
        :null;
}


$query = "SELECT * FROM posts";

echo json_encode(getDbData($query));
