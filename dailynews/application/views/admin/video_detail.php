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
                <h2>Video Detail</h2>
            </div>
            <a href="<?php echo base_url('admin_video_list')?>">
                <button class="btn btn-success pull-right">Back</button>
            </a>
        </div>

        <div style="padding: 20px">
            <br>
            <br>
            <br>
            <?php if($this->session->flashdata('err')){?>
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo $this->session->flashdata('err')?>
                </div>
            <?php } ?>
            <label for="title">Title:</label>
            <p><?php echo $get_single_news['title'];?></p>

            <label for="desc">Description:</label>
            <p><?php echo $get_single_news['video'];?></p>

            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="display: inline-block;float: left;padding-left: 0px;">
                    <label for="cate">Category:</label>
                    <p><?php echo $get_single_news['category'];?></p>
            </div>

            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 dateCol" style="display: inline-block;float: left">
                <label for="date">Date:</label>
                <p><?php echo $get_single_news['Date'];?></p>

            </div>

            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="display: inline-block;float: left">
                    <label for="stat">Status:</label>
                    <p><?php echo $get_single_news['Status'];?></p>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="display: inline-block;float: left">
                <img width="70px" src="<?php echo base_url('uploads/news/'.$get_single_news['img'])?>" alt="">

            </div>

            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"">
        </div>

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
