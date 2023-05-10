<?php


class User
{
    public static function getUserById($id){

        $pdo = DBconnect::getConnection();

        $query = "SELECT id AS user_id, *
							FROM user
							WHERE user_id = ".$id.";";
        return $pdo->query($query)->fetchAll();

    }

}