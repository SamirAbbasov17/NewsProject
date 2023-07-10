<?php $this->load->view('admin/connections/head')?>
<?php $this->load->view('admin/connections/nav_left')?>
<?php $this->load->view('admin/connections/nav_top')?>

<div class="col-md-12">
    <div class="page_title">
        <h2>Contact</h2>
    </div>
</div>
<div class="col-md-12">
    <div class="white_shd full margin_bottom_30">
        <div class="full graph_head">
            <div class="heading1 margin_0">
                <h2>Contact List</h2>
            </div>
        </div>
        <div class="table_section padding_infor_info">
            <div class="table-responsive-sm">
                <table class="table">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Mail</th>
                        <th>Subject</th>
                        <th>Text</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $say = 1; foreach ($get_all_contact as $admin){ ?>
                        <tr>
                            <td><?php echo $say++?></td>
                            <td><?php echo $admin['name'];?></td>
                            <td><?php echo $admin['mail'];?></td>
                            <td><?php echo $admin['subject'];?></td>
                            <td><?php echo substr($admin['text'],0,60);?>...</td>
                            <td>
                                <a href="<?php echo base_url('detailContactAdminNews/'.$admin['id'])?>">
                                    <button class="btn btn-warning">Description</button>
                                </a>
                                <a onclick="return confirm('Are you sure ?')" href="<?php echo base_url('deleteContactAdminNews/'.$admin['id'])?>">
                                    <button class="btn btn-danger">Delete</button>
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

