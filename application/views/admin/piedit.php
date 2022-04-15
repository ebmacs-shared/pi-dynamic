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
    <h2 class="mb-4">Edit Raspberry Pi</h2>


<?php include('includes/alert-msgs.php'); ?>        
    <form action="<?php echo base_url().'admin/updatepiedata/'.$pi_id ;?>" method="post">

<div class="row my-5">



    <div class="col-12 col-md-8">
        <div class="form-group">
            <label class="label-ls" for="client">Title:</label>
            <input type="text" name="title" value="<?php echo $setting['title']; ?>" required class="form-control input-ls" required  placeholder="write here">
        </div>
        
    </div>
    <div class="col-12 col-md-8">
        <div class="form-group">
            <label class="label-ls" for="client">Mac Address:</label>
            <input type="text" name="mac" value="<?php echo $setting['mac']; ?>" required class="form-control input-ls" required  placeholder="write here">
        </div>
        
    </div>
       <div class="col-12 col-md-8">
        <div class="form-group">
            <label class="label-ls" for="client">Latitude:</label>
            <input type="text" name="lat" value="<?php echo $setting['lat']; ?>" required class="form-control input-ls" required  placeholder="write here">
        </div>
        
    </div>
        <div class="col-12 col-md-8">
        <div class="form-group">
            <label class="label-ls" for="client">Longitude:</label>
            <input type="text" name="lng" value="<?php echo $setting['lng']; ?>" required class="form-control input-ls" required  placeholder="write here">
        </div>
        
    </div>
    <div class="col-12 col-md-8">
        <div class="form-group">
            <label class="label-ls" for="client">Group:</label>
            <select class ="form-control" name="group_id">
                <option <?php if($setting['group_id']=="0"){echo 'selected';} ?> value="0">NO Group</option>  
                <?php foreach($adminlist as $al){ ?>  
                <option  <?php if($setting['group_id']==$al['group_id']){echo 'selected';} ?> value="<?php echo $al['group_id']; ?>"><?php echo $al['title']; ?></option>
                <?php } ?>
        </select>

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