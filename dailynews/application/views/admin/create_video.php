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
                    <h2>Create Video List</h2>
                </div>
                <a href="<?php echo base_url('admin_video_list')?>">
                    <button class="btn btn-success pull-right">Back</button>
                </a>
            </div>

            <div style="padding: 20px">

                <form action="<?php echo base_url('createVideoAdminAct')?>" method="post" enctype="multipart/form-data">
                    <br>
                    <br>
                    <br>
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                    <br>

                    <label for="video">Video Link</label>
                    <input type="text" name="video" id="video" class="form-control">

                    <br>
                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="display: inline-block;float: left">
                        <div class="row">
                            <label for="cate">Category</label>
                            <select name="cate" id="cate" class="form-control">
                                <option value="">-SELECT-</option>
                                <option value="Sport">Sport</option>
                                <option value="Technology">Technology</option>
                                <option value="Finance">Finance</option>
                                <option value="Sosial">Sosial</option>
                            </select>

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 dateCol" style="display: inline-block;float: left">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" name="date">

                    </div>

                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="display: inline-block;float: left">
                        <div class="row">
                            <label for="stat">Status</label>
                            <select name="stat" id="stat" class="form-control">
                                <option value="">-SELECT-</option>
                                <option value="Active">Active</option>
                                <option value="Deactive">Deactive</option>
                                <option value="Pending">Pending</option>
                            </select>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="display: inline-block;float: left">
                        <label for="file">
                            <img src="http://irancable.com/wp-content/uploads/2019/08/canva-folder-file-yellow-document-info-icon.-vector-graphic-MAB7OE9Jppw.png" width="80px" alt="">
                        </label>
                        <input type="file" class="form-control" id="file" name="file" style="display: none">

                    </div>

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"">
                    <div class="row">
                        <button type="submit" class="btn btn-success btn-block">Insert</button>
                    </div>
            </div>
            </form>

        </div>
    </div>
    </div>





<?php $this->load->view('admin/connections/foot')?>