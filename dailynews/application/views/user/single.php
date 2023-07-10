<?php $this->load->view('user/connections/nav')?>
<div id="fh5co-title-box"
    <?php if($getSingleNews['img']){?>
        style="background-image: url('<?php echo base_url('uploads/news/'.$getSingleNews['img']); ?>');" data-stellar-background-ratio="0.5">
    <?php }else{?>
        style="background-image: url('<?php echo base_url('public/admin/images/logo.jpg');?>');" data-stellar-background-ratio="0.5">
    <?php }?>

    <div class="overlay"></div>
    <div class="page-title">



    </div>
</div>
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <h2><?php echo $getSingleNews['title']?></h2>
                <br>
                <span><?php echo date('M j,Y',strtotime($getSingleNews['date']))?></span>
                <br>
                <br>
                <br>
                <p>
                    <?php echo $getSingleNews['description']?>
                </p>
            </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags</div>
                </div>
                <div class="clearfix"></div>
                <div class="fh5co_tags_all">
                    <a href="#" class="fh5co_tagg">Business</a>
                    <a href="#" class="fh5co_tagg">Technology</a>
                    <a href="#" class="fh5co_tagg">Sport</a>
                    <a href="#" class="fh5co_tagg">Art</a>
                    <a href="#" class="fh5co_tagg">Lifestyle</a>
                    <a href="#" class="fh5co_tagg">Three</a>
                    <a href="#" class="fh5co_tagg">Photography</a>
                    <a href="#" class="fh5co_tagg">Lifestyle</a>
                    <a href="#" class="fh5co_tagg">Art</a>
                    <a href="#" class="fh5co_tagg">Education</a>
                    <a href="#" class="fh5co_tagg">Social</a>
                    <a href="#" class="fh5co_tagg">Three</a>
                </div>
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Most Popular</div>
                </div>

                <?php foreach ($allNewsPopular as $news){?>
                    <div class="row pb-3">
                        <div class="col-5 align-self-center">
                            <?php if($news['img']){?>
                                <img src="<?php echo (base_url('uploads/news/'.$news['img'])) ?>" alt="" class="fh5co_most_trading1"/>
                            <?php }else{?>
                                <img src="<?php echo (base_url('public/admin/images/logo.jpg'))?>" alt="" class="fh5co_most_trading1"/>
                            <?php }?>
                        </div>
                        <div class="col-7 paddding">
                            <div class="most_fh5co_treding_font"> <?php echo $news['title']?></div>
                            <div class="most_fh5co_treding_font_123"> <?php echo date('M j,Y',strtotime($news['date']))?></div>
                        </div>
                    </div>
                <?php }?>

            </div>
        </div>
    </div>
</div>
<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">All News</div>
        </div>
        <div class="owl-carousel owl-theme" id="slider2">
            <?php foreach ($allNews as $news){?>
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_news_img">
                            <?php if($news['img']){?>
                                <img src="<?php echo (base_url('uploads/news/'.$news['img'])) ?>" alt=""/>
                            <?php }else{?>
                                <img src="<?php echo (base_url('public/admin/images/logo.jpg'))?>" alt="" "/>
                            <?php }?>
                        </div>
                        <div>
                            <a href="<?php echo base_url('single/'.$news['id'])?>" class="d-block fh5co_small_post_heading"><span class=""><?php echo $news['title']?></span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> <?php echo date('M j,Y',strtotime($news['date']))?></div>
                        </div>
                    </div>
                </div>
            <?php }?>

        </div>
    </div>
</div>
<?php $this->load->view("user/connections/footer")?>
</body>
</html>