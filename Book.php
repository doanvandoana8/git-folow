<?php


class Book
{
    public function getBookById($id)
    {
        return "get book by id";
    }

    public function getAuthorOfBook($id)
    {
        return "Author of book is ".random_bytes(10);
    }
}