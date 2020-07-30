<?php include_once 'config/init.php'; ?>

<?php 

$job = new Job;

$job_id = isset($_GET['id']) ? $_GET['id'] : null;

if(isset($_POST['submit'])){
   //Create Data Array
   $data = array();
   $data['job_title'] = $_POST["job_title"];
   $data['company'] = $_POST["company"];
   $data['category_id'] = $_POST["category_id"];
   $data['description'] = $_POST["description"];
   $data['location'] = $_POST["location"];
   $data['salary'] = $_POST["salary"];
   $data['contact_email'] = $_POST["contact_email"];
   $data['contact_user'] = $_POST["contact_user"];
   console_log($data);

   if($job->update($job_id, $data)){
     redirect('index.php','Your Job has been updated','success');
   }else{
     redirect('index.php','something went wrong','error');
   }
}else{

}

$template = new Template("templates/edit-job.php");

$template->job = $job->getJob($job_id);
$template->categories = $job->getCategories();

echo $template;

//todo delete after
    function console_log( $data ){
        echo '<script>';
        echo 'console.log('. json_encode( $data ) .')';
        echo '</script>';
    }
?>