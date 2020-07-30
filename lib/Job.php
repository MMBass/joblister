<?php

class Job{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    //Get all jobs 
    public function getAllJobs(){
        $this->db->query("SELECT jobs.*, categories.name AS cname FROM jobs 
        INNER JOIN categories
        ON jobs.category_id = categories.id
        ORDER BY post_date DESC");

        //Assign Result Set
        $result = $this->db->resultSet();

        return $result;
    }

    public function getCategories(){
        $this->db->query("SELECT * FROM categories");

        //Assign Result Set
        $result = $this->db->resultSet();

        return $result;
    }

    public function getByCategory($category){
        $this->db->query("SELECT jobs.*, categories.name AS cname FROM jobs 
        INNER JOIN categories
        ON jobs.category_id = categories.id
        WHERE jobs.category_id = $category
        ORDER BY post_date DESC");

        //Assign Result Set
        $result = $this->db->resultSet();

        return $result;
    }

    public function getCategory($category_id){
        $this->db->query("SELECT * FROM categories WHERE id=:category_id");

        $this->db->bind(':category_id',$category_id);

        //Result Row
        $row = $this->db->single();

        return $row;
    }

    public function getJob($id){
        $this->db->query("SELECT * FROM jobs WHERE id=:id");

        $this->db->bind(':id',$id);

        //Result Row
        $row = $this->db->single();

        return $row;
    }
    
    public function create($data){

        $this->db->query("INSERT INTO `jobs`(`category_id`, `company`, `job_title`, `description`, `salary`, `location`, `contact_user`, `contact_email`) VALUES (:category_id,:company,:job_title,:description,:salary,:location,:contact_user,:contact_email)");
  
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

    //Delete Job
    public function delete($id){

        $this->db->query("DELETE FROM jobs WHERE id = $id");       

        //Execute
        if($this->db->execute()){
          return true;
        }else{
          return false;
        }

    }

    public function update($id,$data){

        $this->db->query("UPDATE `jobs` 
           SET
            `category_id`=:category_id,
            `company`=:company,
            `job_title`=:job_title,
            `description`=:description,
            `salary`=:salary,
            `location`=:location,
            `contact_user`=:contact_user,`contact_email`=:contact_email
             WHERE id=$id"
             );

        $this->db->bind(':category_id',$data['category_id']);
        $this->db->bind(':job_title',$data['job_title']);
        $this->db->bind(':company',$data['company']);
        $this->db->bind(':description',$data['description']);
        $this->db->bind(':salary',$data['salary']);
        $this->db->bind(':location',$data['location']);
        $this->db->bind(':contact_user',$data['contact_user']);
        $this->db->bind(':contact_email',$data['contact_email']);

        //Execute
        if($this->db->execute()){
          return true;
        }else{
          return false;
        }

    }

}