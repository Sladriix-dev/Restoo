<?php

const ERROR_LOG_FILE = "errors.log";

function connect_db ($host, $username, $password, $port, $db)
{
    try
    {
        $connect = new PDO ("mysql:host=$host; dbname=$db; port=$port", $username, $password);
        $connect -> setAttribue (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connect;
    }
    catch (PDOexception $e)
    {
        file_put_contents(ERROR_LOG_FILE, $e->getMESSAGE(), FILE_APPEND);
        die ("PDO ERROR : ".$e->getMessage()."storage in ".ERROR_LOG_FILE."\n");
    }
}