<?php
//return [
//    'provider' => 'pgsql',
//    'hostname' => '194.190.152.134',
//    'database' => 'shot',
//    'username' => 'shot',
//    'password' => 'potok8'
//];

const DB_PROVIDER = 'pgsql';
const DB_HOST = '194.190.152.134';
const DB_BASENAME = 'shot';
const DB_USERNAME = 'shot';
const DB_PASSWORD = 'shot';

function db_connect(){
    $pdo = new PDO(
        DB_PROVIDER.':host='.DB_HOST.';dbname='.DB_BASENAME,
        DB_USERNAME,
        DB_PASSWORD
    );
    return $pdo;
}

function query($sql, $params = []){
    $pdo = db_connect();
    $que = $pdo->prepare($sql);
    if (!empty($params)){
        foreach ($params as $key => $value){
            $que->bindValue(':'.$key, $value);
        }
    }
    $que->execute();
    return $que;
}
function select($sql, $params = []){
    $que = query($sql, $params);
    $que->setFetchMode(PDO::FETCH_ASSOC);
    return $que->fetchAll();
}
function update($sql, $params =[]){
    $que = query($sql, $params);
    return $que->rowCount();
}

function delete($sql, $params =[]){
    $que = query($sql, $params);
    return $que->rowCount();
}

function insert($sql, $params =[]){
    $pdo = db_connect();
    $que = $pdo->prepare($sql);
    if (!empty($params)){
        foreach ($params as $key => $value){
            $que->bindValue(':'.$key, $value);
        }
    }
    $que->execute();
    return $pdo->lastInsertId();
}