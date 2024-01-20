<?php

class Users extends Db {

    protected function getUser($name){
        $sql = "SELECT * FROM students WHERE first_name = ?";
        $data = $this->connect()->prepare($sql);
        $data ->execute([$name]);

        $results = $data->fetchAll();
        return $results ;
    }
    
}