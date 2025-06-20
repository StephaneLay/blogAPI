<?php

namespace App\Repository;

use App\Entity\User;

class UserRepository{
    public function persist(User $user){
        $connection = Database::connect();

        $query = $connection->prepare("INSERT INTO users (name,firstname,email) VALUES (:name,:firstname,:email)");
        $query->bindValue("name",$user->getName());
        $query->bindValue("firstname",$user->getFirstname());
        $query->bindValue("email",$user->getEmail());
        $query->execute();
    }

    public function findByEmail(string $email){
        $connection = Database::connect();

        $query = $connection->prepare("SELECT * FROM users where email=:email");
        $query->bindValue("email",$email);

        $query->execute();

        $line = $query->fetch();
        if ($line) {
            return new User($line["name"],
            $line["firstname"],
            $line["email"],
            $line["profile_picture"],
            $line["id"]
        );
        }else {
            return false;
        }
    }
}