<?php

class Connection
{
    public static function make()
    {
        try {
            return new PDO('mysql:host=localhost;dbname=academy', 'ibra', 'Password123$');
        } catch (PDOException $exception) {
            die($exception->getMessage());
        }
    }
}