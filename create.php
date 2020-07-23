<?php include_once 'config/init.php'; ?>

<?php 

$job = new Job;

if(isset($_POST['submit'])){
   //Create Data Array
   $data = array();
   $data['job_title'] = "kkk";
   $data['company'] = $_POST["company"];
   $data['category_id'] = $_POST["category_id"];
   $data['description'] = $_POST["description"];
   $data['location'] = $_POST["location"];
   $data['salary'] = $_POST["salary"];
   $data['contact_email'] = $_POST["contact_email"];
   $data['contact_user'] = $_POST["contact_user"];
   console_log($data);

   if($job->create($data)){
     redirect('index.php','Your Job has been listed','success');
   }else{
     redirect('index.php','something went wrong','error');
   }
}else{

}

$template = new Template("templates/create-job.php");

$template->categories = $job->getCategories();

echo $template;
?>