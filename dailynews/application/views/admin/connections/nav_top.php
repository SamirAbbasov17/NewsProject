<?php $adminData = $this->db->select('id,username,name,img,status')->where('id',$_SESSION['user_id'])->get('admin_list')->row_array();?>
<div class="topbar">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="full">
            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
            <div class="right_topbar">
                <div class="icon_info">
                    <ul class="user_profile_dd">
                        <li>
                            <a class="dropdown-toggle" data-toggle="dropdown"><img width="35" height="35" class="img-responsive rounded-circle" src="<?php echo base_url('uploads/news/'.$adminData['img']) ?>" alt="#" /><span class="name_user"><?php echo $adminData['name'] ?></span></a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo base_url('logOut')?>"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">

