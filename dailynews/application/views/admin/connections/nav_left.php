<?php $adminData = $this->db->select('id,username,name,img,status')->where('id',$_SESSION['user_id'])->get('admin_list')->row_array();?>
<nav id="sidebar">
    <div class="sidebar_blog_1">
        <div class="sidebar-header">
            <div class="logo_section">
                <a href="index.html"><img class="logo_icon img-responsive" src="<?php echo (base_url('public/admin/')) ?>images/logo/logo_icon.png" alt="#" /></a>
            </div>
        </div>
        <div class="sidebar_user_info">
            <div class="icon_setting"></div>
            <div class="user_profle_side">
                <div class="user_img"><img width="70" height="70" class="img-responsive" src="<?php echo base_url('uploads/news/'.$adminData['img']) ?>" alt="#" /></div>
                <div class="user_info">
                    <h6><?php echo $adminData['name'] ?></h6>
                    <p><span class="online_animation"></span> Online</p>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar_blog_2">
        <h4>General</h4>
        <ul class="list-unstyled components">

            <li><a href="<?php echo base_url('dashboard')?>"><i class="fa fa-table purple_color2"></i> <span>Dashboard</span></a></li>

            <li><a href="<?php echo base_url('news')?>"><i class="fa fa-briefcase blue1_color"></i> <span>News</span></a></li>

            <li><a href="<?php echo base_url('admin_list')?>"><i class="fa fa-user red_color"></i> <span>Admin</span></a></li>

            <li><a href="<?php echo base_url('admin_video_list')?>"><i class="fa fa-video-camera green_color"></i> <span>Video</span></a></li>

            <li><a href="<?php echo base_url('admin_contact_list')?>"><i class="fa fa-phone yellow_color"></i> <span>Contact</span></a></li>

        </ul>
    </div>
</nav>
<div id="content">