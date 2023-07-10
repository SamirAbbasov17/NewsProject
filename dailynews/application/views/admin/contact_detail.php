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
                <h2>Contact Detail</h2>
            </div>
            <a href="<?php echo base_url('admin_contact_list')?>">
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
            <label for="title">Name:</label>
            <p><?php echo $get_single_news['name'];?></p>

            <label for="desc">Mail:</label>
            <p><?php echo $get_single_news['mail'];?></p>

            <label for="stat">Subject:</label>
            <p><?php echo $get_single_news['subject'];?></p>

            <label for="stat">Text:</label>
            <p><?php echo $get_single_news['text'];?></p>


<!--            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="display: inline-block;float: left">-->
<!--                <div class="row">-->
<!--                    <label for="stat">Subject:</label>-->
<!--                    <p>--><?php //echo $get_single_news['subject'];?><!--</p>-->
<!---->
<!--                </div>-->
<!--            </div>-->


            <br>
            <br>
            <br>
            <br>
            <br>

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
