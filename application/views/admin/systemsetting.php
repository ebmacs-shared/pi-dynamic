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
    <h2 class="mb-4">System Setting</h2>


<?php include('includes/alert-msgs.php'); ?>        
    <form action="<?php echo base_url().'admin/updatesettingdata' ?>" enctype="multipart/form-data" method="post">

<div class="row my-5">


    <div class="col-12 col-md-8">
        <div class="form-group">
            <label class="label-ls" for="client">Font:</label>
            <select name="font" required class="form-control input-ls" required >
                <option <?php if($setting['font']=="Times New Roman"){echo 'selected';} ?> value="Times New Roman">Times New Roman</option>
                <option <?php if($setting['font']=="Georgia"){echo 'selected';} ?> value="Georgia">Georgia</option>
                <option <?php if($setting['font']=="Garamond"){echo 'selected';} ?> value="Garamond">Garamond</option>
                <option <?php if($setting['font']=="Arial"){echo 'selected';} ?> value="Arial">Arial</option>
                <option <?php if($setting['font']=="Verdana"){echo 'selected';} ?> value="Verdana">Verdana</option>
                <option <?php if($setting['font']=="Helvetica"){echo 'selected';} ?> value="Helvetica">Helvetica</option>

            </select>
        
        </div>
        <div class="form-group">
            <label class="label-ls" for="client">Orientation:</label>
            <select name="orientation" required class="form-control input-ls" required >
                <option <?php if($setting['orientation']=="Horizantal"){echo 'selected';} ?> value="Horizantal">Horizantal</option>
                <option <?php if($setting['orientation']=="Vertical"){echo 'selected';} ?> value="Vertical">Vertical</option>
               
            </select>
        </div>

        <div class="form-group">
                          <label for="field-1" class=" label-ls">Photo</label>
                          
                          <div class="col-sm-9">
                              <div class="fileinput fileinput-new" data-provides="fileinput"><input type="hidden">
                                  <div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
                                      <img src="<?php  echo $setting['background'] ?>" alt="...">
                                  </div>
                                  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 6px;"></div>
                                  <div>
                                      <span class="btn btn-white btn-file">
                                          <span class="fileinput-new">Select image</span>
                                          <span class="fileinput-exists">Change</span>
                                          <input type="file" name="userfile" accept="image/*">
                                      </span>
                                      <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                  </div>
                              </div>
                          </div>
                      </div>

    </div>
    <div class="col-12 col-md-12 d-flex justify-content-end">
        <button class="btn btn-success" type="submit">Update Setting</button>
                  
    </div>

</div>
</form>

    </div>
    
   


</div>





    <?php include('includes/footer.php'); ?>
    <?php include('includes/bottom_links.php'); ?>
    
</body>

</html>