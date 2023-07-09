<?php

namespace Libs\Database;

use mysqli;

class UsersTable{
    private $db;
    public function __construct(MySQL $mysql)
    {
        $this->db=$mysql->connect();
    }
    public function insert($data){
        $statement=$this->db->prepare("INSERT INTO users (name,email,phone,address,password,created_at)
         VALUES(:name,:email,:phone,:address,:password,NOW())");
         $statement->execute($data);

         return $this->db->lastInsertId();
    }

    public function findByEmailAndPassword($email,$password){
        $statement=$this->db->prepare("SELECT * FROM users WHERE email=:email AND password=:password");
        $statement->execute(["email"=>$email,"password"=>$password]);

        $user=$statement->fetch();
        return $user?? false;
    }

    public function updatePhoto($id,$photo){
        $statement=$this->db->prepare("UPDATE users SET photo=:photo WHERE id=:id");
        $statement->execute(['id'=>$id,'photo'=>$photo]);

        return $statement->rowCount();

    }
} 