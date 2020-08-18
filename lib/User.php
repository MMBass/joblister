<?php

class User{
    private $db;

    public function __construct(){
      $this->db = new usersDatabase;
    }
      
    //Check user exist
    public function getUser($data){
        echo $data['mailuid'];
  
        $this->db->query("SELECT * FROM users WHERE userName =:name OR email=:email");
        
        $this->db->bind(':email',$data['mailuid']);
        $this->db->bind(':userName',$data['mailuid']);

         //Assign Result Set
         $result = $this->db->resultSet();

         return $result;
    }

      //todo change from jobs to users;
    public function createUser($data){

        $this->db->query("INSERT INTO `users`(`category_id`, `company`, `job_title`, `description`, `salary`, `location`, `contact_user`, `contact_email`) VALUES (:category_id,:company,:job_title,:description,:salary,:location,:contact_user,:contact_email)");
  
        $this->db->bind(':category_id',$data['category_id']);
        $this->db->bind(':job_title',$data['job_title']);
        $this->db->bind(':company',$data['company']);
        $this->db->bind(':description',$data['description']);
        $this->db->bind(':salary',$data['salary']);
        $this->db->bind(':location',$data['location']);
        $this->db->bind(':contact_user',$data['contact_user']);
        $this->db->bind(':contact_email',$data['contact_email']);
        // $this->db->bind(':post_date',$data['post_date']);

        //Execute
        if($this->db->execute()){
          return true;
        }else{
          return false;
        }

    }

    
}
