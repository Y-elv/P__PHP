<?php

class Test extends Db {

public function getUsers(){
    $sql="SELECT * FROM students ";
    $data = $this->connect()->query($sql);

    while($row = $data->fetch()){
        echo $row['first_name'] .'<br>';

    }


}

public function getOneUser($firstname,$secondname){
    $sql="SELECT * FROM students WHERE first_name = ? AND last_name = ? ";
    $data = $this->connect()->prepare($sql);
    $data->execute([$firstname, $secondname]);
    $names = $data->fetchAll();

    foreach($names as $name){

        echo $name['first_name'] .'<br>';
    }


   


}

public function setUser($firstname,$secondname,$age){
    $sql="INSERT INTO students(first_name,last_name,age) VALUES (?,?,?)";
    $data = $this->connect()->prepare($sql);
    $data->execute([$firstname, $secondname ,$age]);
   


   


}


}