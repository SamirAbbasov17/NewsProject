<?php $this->load->view("user/connections/nav")?>
<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4"><?php echo $news?></div>
                </div>
                <?php foreach ($Category as $cate){?>
                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img">
                                <?php if($cate['img']){?>
                                    <img src="<?php echo (base_url('uploads/news/'.$cate['img'])) ?>" alt=""/>
                                <?php }else{?>
                                    <img src="<?php echo (base_url('public/admin/images/logo.jpg'))?>" alt="" "/>
                                <?php }?>
                            </div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7 animate-box">
                        <a href="<?php echo base_url('single/'.$cate['id'])?>" class="fh5co_magna py-2"><?php echo $cate['title']?> </a> <a href="single.php" class="fh5co_mini_time py-3">
                            <?php echo date('M j,Y',strtotime($cate['date']))?></a>
                        <div class="fh5co_consectetur">
                            <?php echo mb_substr($cate['description'],0,250,'utf-8')?> ...
                        </div>
                    </div>
                </div>
                <?php }?>
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
        <div class="row mx-0">
            <div class="col-12 text-center pb-4 pt-4">
                <p class="myPagination"><?php echo $links?></p>
<!--                <a href="#" class="btn_mange_pagging"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp; Previous</a>-->
<!--                <a href="#" class="btn_pagging">1</a>-->
<!--                <a href="#" class="btn_pagging">2</a>-->
<!--                <a href="#" class="btn_pagging">3</a>-->
<!--                <a href="#" class="btn_pagging">...</a>-->
<!--                <a href="#" class="btn_mange_pagging">Next <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp; </a>-->
             </div>
        </div>
    </div>
</div>
<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Trending</div>
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