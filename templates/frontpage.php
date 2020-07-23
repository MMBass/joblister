<?php include 'inc/header.php' ?>
<body>

  <main role="main">

    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Find A Job</h1>
        <form method="GET" action="index.php">
          <select name="category" class="form-control" id="">
            <option value="0">Choose Category</option>
            <?php foreach($categories as $category): ?>
              <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
            <?php endforeach; ?>
          </select>

          <p><button class="btn btn-primary btn-lg mt-4" href="#" role="button">Let's Find  »</button></p>
        </form>
       
      </div>
    </div>

    <div class="container">
      <h2><?php echo $title;?></h2>
      <?php  foreach($jobs as $job):  ?>
          <div class="row mt-3">
            <div class="col-md-4">
              <h3><?php echo $job->job_title; ?></h3>
              <p><?php echo $job->description; ?></p>
              <p><a class="btn btn-secondary" href="job.php?id=<?php echo $job->id; ?>" role="button">View details »</a></p>
            </div>
          </div>
          <hr>
      <?php  endforeach; ?>
    </div>
    
  </main>

</body>
<?php include 'inc/footer.php' ?>