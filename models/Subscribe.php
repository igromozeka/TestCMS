<?php


class Subscribe
{
    public static function doSubscribe($email,$fname,$lname){
        $pdo = DBconnect::getConnection();
        $query = "INSERT INTO `subscribe` (`email`, `fname`, `lname`) VALUES ('$email', '$fname', '$lname');";
        return $pdo->query($query)->fetchAll();
    }
}