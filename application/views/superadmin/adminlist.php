<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/toplinks.php'); ?>
</head>

<body>
    <?php include('includes/navigation.php'); ?>


<!-- Content   offers -->

<div class="main">
  
<div class="col-12 col-md-12 d-flex justify-content-end">
                    <a href="<?php echo base_url().'superadmin/addnewadmin' ?>" class="btn btn-info">
                     Add New Admin
                    </a>
                </div>
    <div class="containe mb-5">
        <h2 class="mb-4">Admin's List</h2>
        <table class="table table-fluid" id="myTable">
        <thead>
         <tr><th>Name</th><th>Email</th> <th>Site Name</th> <th>Action</th> </tr>
        </thead>
        <tbody>
        <?php foreach($adminlist as $ad){ ?>
            <tr>
                <td><?php echo $ad['username']; ?></td>
                <td><?php echo $ad['email']; ?></td>
                <td>
                <?php 
                 $sitlist=$this->db->where('user_id',$ad['id'])->get('adminsite')->result_array();
                 foreach($sitlist as $sl){
                   echo   $this->db->where('site_id',$sl['site_id'])->get('site')->row()->title;


                 }
                ?>


                </td>
                <td>Edit/Delete</td>
            </tr>
            <?php } ?>
    </tbody>
        </table>
    </div>
    
   


</div>





    <?php include('includes/footer.php'); ?>
    <?php include('includes/bottom_links.php'); ?>
    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
    } );
        </script>

</body>

</html>