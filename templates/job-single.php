<?php include 'inc/header.php' ?>

   <div class="card border-dark p-4">
    <div class="card-body">
    <h2 class="page-header"><?php echo $job->job_title;?> (<?php echo $job->location;?>)</h2>
    <small>Posted By <?php echo $job->contact_user;?> on <?php echo $job->post_date;?></small>
    <p class="lead"><?php echo $job->description;?></p>

    <div>
    <ul class="list-group">
      <li class="llist-group-item"><strong>Company</strong><?php echo $job->company;?></li>
      <li class="llist-group-item"><strong>Salary</strong><?php echo $job->salary;?></li>
      <li class="llist-group-item"><strong>Email</strong><?php echo $job->contact_email;?></li>
    </ul>
    <br><br>
    <a href="index.php">Go Back »</a>
    <br><br>
    </div>
      <?php
            if(isset($_SESSION['id'])){
              if($_SESSION['id'] != 'guest'){
                 echo '<div class="well">
                 <a class="btn btn-light" href="edit.php?id=<?php echo $job->id;?>">Edit</a>
           
                 <form action="job.php" method="POST" style="display:inline">
                 <input type="hidden" name="del_id" value="<?php echo $job->id; ?>">
                 <input type="submit" class="btn btn-danger" value="Delete">  
                 </form>
             </div>';
              }
            }
        ?>    
      
   </div>
  </div>
<?php include 'inc/footer.php' ?>