<?php $this->load->view('admin/connections/head')?>
<?php $this->load->view('admin/connections/nav_left')?>
<?php $this->load->view('admin/connections/nav_top')?>
<div class="col-md-12">
    <div class="page_title">
        <h2>News</h2>
    </div>
</div>

<div class="col-md-12">
    <div class="white_shd full margin_bottom_30">
        <div class="full graph_head">
            <div class="heading1 margin_0">
                <h2>News List</h2>
            </div>
            <a href="<?php echo base_url('create')?>"><button type="button" class="btn btn-success pull-right">Create</button></a>
        </div>
        <div class="table_section padding_infor_info">
            <div class="table-responsive-sm">
                <table class="table">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Image</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $say = 1; foreach ($get_all_news as $news){ ?>
                        <tr>
                            <td><?php echo $say++?></td>
                            <td><?php echo $news['title'];?></td>
                            <td><?php echo $news['category'];?></td>
                            <td><?php echo $news['status'];?></td>
                            <td><?php echo $news['date'];?></td>
                            <td>
                                <?php if($news['img']){?>
                                    <img width="50px" height="50px" src="<?php echo base_url('uploads/news/'.$news['img']);?>" alt="">
                                <?php }else{?>
                                    <img width="50px" height="50px" src="<?php echo base_url('public/admin/images/logo.jpg');?>" alt="">

                                <?php }?>
                            </td>
                            <td>
                                <a href="<?php echo base_url('detailNews/'.$news['id'])?>">
                                    <button class="btn btn-warning">Description</button>
                                </a>

                                <a onclick="return confirm('Are you sure ?')" href="<?php echo base_url('deleteNews/'.$news['id'])?>">
                                    <button class="btn btn-danger">Delete</button>
                                </a>
                                <a href="<?php echo base_url('updateNews/'.$news['id'])?>">
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
