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
                    <a href="<?php echo base_url().'admin/addnewpost' ?>" class="btn btn-info">
                     Add New post
                    </a>
                </div>
    <div class="containe mb-5">
        <h2 class="mb-4">Post's List</h2>
        <table class="table table-fluid" id="myTable">
        <thead>
         <tr><th>#</th><th>File</th><th>Duration</th><th>Group</th><th>Action</th> </tr>
        </thead>
        <tbody>
        <?php 
        $i=0;
        foreach($adminlist as $ad){ ?>
            <tr>
                <td><?php echo ++$i; ?></td>
                <td><a href="<?php echo $ad['background']; ?>" target="blank">Preview</a></td>
                <td><?php echo $ad['duration'] ." Sec"; ?></td>     
                <td><?php if($ad['group_id'] ==0) {?>
                    No Group

                <?php }else{ 
                echo $this->db->where('group_id',$ad['group_id'])->get('group')->row()->title;
                 } ?>
                </td>
               
                <td><a href="<?php echo base_url().'admin/taskdelete/'.$ad['postdata_id']; ?>">Delete</a></td>
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