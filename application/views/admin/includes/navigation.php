<div class="header">
  <a href="#" id="menu-action">
    <i class="fa fa-bars"></i>
    <span>Close</span>
  </a>
  <div class="d-flex">
  <div class="logo d-flex align-items-center">
  Pi Dynamic Picture Scroller APPLICATION
  </div>

  
  
  <div class="bell-gold d-flex ml-auto align-items-center">
    
    <div class="d-flex dropdown pt-1 show flex-row user-profile-dropdown pr-2">
      <a class="d-flex text-decoration-none" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     
      <img class="rounded-circle" src="https://t3.ftcdn.net/jpg/03/62/56/24/360_F_362562495_Gau0POzcwR8JCfQuikVUTqzMFTo78vkF.jpg" height="50px" width="50px">
      <div class="d-flex flex-column justify-content-start ml-3">
        <span class="d-block text-white font-weight-bold username-comment">
        <?php echo $this->session->userdata('name');?></span>
        <span class="date user-date text-white">@
        <?php echo $this->session->userdata('login_type');?> </span>
      </div>
    </a>
      <div class="dropdown-menu shadow custom-dropdown-menu" aria-labelledby="dropdownMenuLink">
        <!--
        <a class="dropdown-item" href="#"><img class="img-fluid" src="<?php echo base_url() . 'assets/'; ?>images/settings-icon.png" alt=""> Settings</a>
        <a class="dropdown-item" href="#"><img class="img-fluid" src="<?php echo base_url() . 'assets/'; ?>images/help-icon.png" alt=""> Help</a>
-->
        <a class="dropdown-item" href="<?php echo base_url() . 'site/logout'; ?>"><img class="img-fluid" src="<?php echo base_url() . 'assets/'; ?>images/log-icon.png" alt=""> Logout</a>
      </div>
    </div>

  </span>

</div>

</div>

</div>

<div class="sidebar" style="position: absolute;">
  <ul>
    <li><a href="<?php echo base_url() . 'admin'; ?>"><i class="fa fa-object-group"></i><span>Groups</span></a></li>
    <li><a href="<?php echo base_url() . 'admin/pi'; ?>"><i class="fa fa-cube"></i><span>Raspberry Pi</span></a></li>
    <li><a href="<?php echo base_url() . 'admin/post'; ?>"><i class="fa fa-file"></i><span>Post</span></a></li>
    <!--
    <li><a href="<?php echo base_url() . 'admin/systemsetting'; ?>"><i class="fa fa-cogs"></i><span>System Setting</span></a></li>
-->
    <li><a href="<?php echo base_url() . 'site/logout'; ?>"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>
   
   

  </ul>
</div>
