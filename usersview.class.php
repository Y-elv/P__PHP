<?php

class UsersView extends Users {

    public function showUser($name) {
        $results = $this->getUser($name);

        if (!empty($results)) {
            echo "Full name: " . $results[0]['first_name'] . " " . $results[0]['second_name'] . "<br>";
            echo "Date of Birth: " . $results[0]['age'];
        } else {
            echo "User not found";
        }
    }

}
?>
