<?php


class User
{
    public function getUserById($id)
    {
        return "User ID #$id";
    }

    public function getUsers()
    {
        return "Users index";
    }

    public function updateUser($user, $id)
    {
        return "User updated";
    }

    public function getUserAge($user)
    {
        return "Age of user is ".rand(10,40);
    }
}