<?php $this->load->view('admin/connections/head')?>
<?php $this->load->view('admin/connections/nav_left')?>
<?php $this->load->view('admin/connections/nav_top')?>
<div class="col-md-12">
    <div class="page_title">
        <h2>Admin</h2>
    </div>
</div>
<div class="col-md-12">
    <div class="white_shd full margin_bottom_30">
        <div class="full graph_head">
            <div class="heading1 margin_0">
                <h2>Admin List</h2>
            </div>
            <a href="<?php echo base_url('create_admin')?>"><button type="button" class="btn btn-success pull-right">Create</button></a>
        </div>
        <div class="table_section padding_infor_info">
            <div class="table-responsive-sm">
                <table class="table">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>UserName</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $say = 1; foreach ($get_all_admins as $admin){ ?>
                        <tr>
                            <td><?php echo $say++?></td>
                            <td><?php echo $admin['name'];?></td>
                            <td><?php echo $admin['username'];?></td>
                            <td><?php echo $admin['status'];?></td>
                            <td>
                                <?php if($admin['img']){?>
                                    <img width="50px" height="50px" src="<?php echo base_url('uploads/news/'.$admin['img']);?>" alt="">
                                <?php }else{?>
                                    <img width="50px" height="50px" src="<?php echo base_url('public/admin/images/logo.jpg');?>" alt="">

                                <?php }?>
                            </td>
                            <td>
                                <a href="<?php echo base_url('detailAdminNews/'.$admin['id'])?>">
                                    <button class="btn btn-warning">Description</button>
                                </a>

                                <a onclick="return confirm('Are you sure ?')" href="<?php echo base_url('deleteAdminNews/'.$admin['id'])?>">
                                    <button class="btn btn-danger">Delete</button>
                                </a>
                                <a href="<?php echo base_url('updateAdminNews/'.$admin['id'])?>">
                                    <button class="btn btn-success">Update</button>
                                </a>
                            </td>

                        </tr>
                    <?php }?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('admin/connections/foot')?>
