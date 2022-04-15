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
                    <a href="<?php echo base_url().'admin/addnew' ?>" class="btn btn-info">
                     Add New Group
                    </a>
                </div>
    <div class="containe mb-5">
        <h2 class="mb-4">Group's List</h2>
        <table class="table table-fluid" id="myTable">
        <thead>
         <tr><th>#</th><th>Title</th><th>Action</th> </tr>
        </thead>
        <tbody>
        <?php 
        $i=0;
        foreach($adminlist as $ad){ ?>
            <tr>
                <td><?php echo ++$i; ?></td>
                <td><?php echo $ad['title']; ?></td>
                
                
                <td><a href="<?php echo base_url().'admin/groupedit/'.$ad['group_id']; ?>">Edit</a>/<a href="<?php echo base_url().'admin/taskdelete/'.$ad['group_id']; ?>">Delete</a></td>
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