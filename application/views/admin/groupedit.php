<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/toplinks.php'); ?>
</head>

<body>
    <?php include('includes/navigation.php'); ?>


<!-- Content   offers -->
<div class="main">
  
    <div class="containe mb-5">
        <br>
    <h2 class="mb-4">Edit Group</h2>


<?php include('includes/alert-msgs.php'); ?>        
    <form action="<?php echo base_url().'admin/updategroupdata/'.$group_id ?>" enctype="multipart/form-data" method="post">

<div class="row my-5">

<div class="col-12 col-md-8">
        <div class="form-group">
            <label class="label-ls" for="client">Title:</label>
            <input type="text" name="title" value="<?php echo $setting['title']; ?>" required class="form-control input-ls" required  placeholder="write here">
        </div>
        
    </div>

    <div class="col-12 col-md-12 d-flex justify-content-end">
        <button class="btn btn-success" type="submit">Update </button>
                  
    </div>

</div>
</form>

    </div>
    
   


</div>





    <?php include('includes/footer.php'); ?>
    <?php include('includes/bottom_links.php'); ?>
    
</body>

</html>