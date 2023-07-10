<?php $this->load->view('admin/connections/head')?>
<?php $this->load->view('admin/connections/nav_left')?>
<?php $this->load->view('admin/connections/nav_top')?>
<div class="col-md-12">
    <div class="page_title">
        <h2>Video</h2>
    </div>
</div>
<div class="col-md-12">
    <div class="white_shd full margin_bottom_30">
        <div class="full graph_head">
            <div class="heading1 margin_0">
                <h2>Video Update</h2>
            </div>
            <a href="<?php echo base_url('admin_video_list')?>">
                <button class="btn btn-success pull-right">Back</button>
            </a>
        </div>

        <div style="padding: 20px">


            <form action="<?php echo base_url('updateVideoAdminAct/'.$get_single_news['id'])?>" method="post" enctype="multipart/form-data">
                <br>
                <br>
                <br>
                <?php if($this->session->flashdata('err')){?>
                    <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo $this->session->flashdata('err')?>
                    </div>
                <?php } ?>
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="<?php echo $get_single_news['title'];?>">
                <br>

                <label for="desc">Video Link</label>
                <input type="text" name="video" id="video" class="form-control" value="<?php echo $get_single_news['video'];?>">

                <br>
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="display: inline-block;float: left">
                    <div class="row">
                        <label for="cate">Category</label>
                        <select name="cate" id="cate" class="form-control">
                            <option <?php if($get_single_news['category'] == ""){echo "SELECTED";}?> value="">-SELECT-</option>
                            <option <?php if($get_single_news['category'] == "Sport"){echo "SELECTED";}?> value="Sport">Sport</option>
                            <option <?php if($get_single_news['category'] == "Technology"){echo "SELECTED";}?> value="Technology">Technology</option>
                            <option <?php if($get_single_news['category'] == "Finance"){echo "SELECTED";}?> value="Finance">Finance</option>
                            <option <?php if($get_single_news['category'] == "Sosial"){echo "SELECTED";}?> value="Sosial">Sosial</option>
                        </select>

                    </div>
                </div>

                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 dateCol" style="display: inline-block;float: left">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date" value="<?php echo $get_single_news['Date'];?>">

                </div>

                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="display: inline-block;float: left">
                    <div class="row">
                        <label for="stat">Status</label>
                        <select name="stat" id="stat" class="form-control">
                            <option <?php if($get_single_news['Status'] == ""){echo "SELECTED";}?> value="">-SELECT-</option>
                            <option <?php if($get_single_news['Status'] == "Active"){echo "SELECTED";}?> value="Active">Active</option>
                            <option <?php if($get_single_news['Status'] == "Deactive"){echo "SELECTED";}?> value="Deactive">Deactive</option>
                            <option <?php if($get_single_news['Status'] == "Pending"){echo "SELECTED";}?> value="Pending">Pending</option>
                        </select>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="display: inline-block;float: left">
                    <label for="file">
                        <img src="http://irancable.com/wp-content/uploads/2019/08/canva-folder-file-yellow-document-info-icon.-vector-graphic-MAB7OE9Jppw.png" width="80px" alt="">
                    </label>
                    <input type="file" class="form-control" id="file" name="file" style="display: none">
                    <img width="70px" src="<?php echo base_url('uploads/news/'.$get_single_news['img'])?>" alt="">

                </div>

                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"">
                <div class="row">
                    <button type="submit" class="btn btn-success btn-block">Update</button>
                </div>
        </div>
        </form>

    </div>
</div>
</div>





<?php $this->load->view('admin/connections/foot')?>
<style>
    @media only screen and (max-width: 768px) {
        .dateCol{
            padding: 0px;
        }
    }
</style>

