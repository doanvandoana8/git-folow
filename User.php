<?php


class User
{
    public function getUserById($id)
    {
        return "User ID #$id";
    }

    public function getUsers()
    {
        return "Users";
    }

    public function updateUser($user, $id)
    {
        return "User updated";
    }
}