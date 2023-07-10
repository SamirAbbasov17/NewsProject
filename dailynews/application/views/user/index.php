<?php $this->load->view("user/connections/nav")?>


<div class="container-fluid paddding mb-5">
    <div class="row mx-0">
        <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
            <div class="fh5co_suceefh5co_height">
                <?php if($getNewsLimit[0]['img']){?>
                    <img src="<?php echo (base_url('uploads/news/'.$getNewsLimit[0]['img'])) ?>" alt="img"/>
                <?php }else{?>
                    <img src="<?php echo (base_url('public/admin/images/logo.jpg'))?>" alt=""/>
                <?php }?>

                <div class="fh5co_suceefh5co_height_position_absolute"></div>
                <div class="fh5co_suceefh5co_height_position_absolute_font">
                    <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo date('d-m-Y',strtotime($getNewsLimit[0]['date']))?>
                    </a></div>
                    <div class=""><a href="<?php echo base_url('single/'.$getNewsLimit[0]['id'])?>" class="fh5co_good_font"> <?php echo $getNewsLimit[0]['title']?> </a></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co_suceefh5co_height_2">
                        <?php if($getNewsLimit[1]['img']){?>
                            <img src="<?php echo (base_url('uploads/news/'.$getNewsLimit[1]['img'])) ?>" alt="img"/>
                        <?php }else{?>
                            <img src="<?php echo (base_url('public/admin/images/logo.jpg'))?>" alt=""/>
                        <?php }?>
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                            <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp<?php echo date('d-m-Y',strtotime($getNewsLimit[1]['date']))?> </a></div>
                            <div class=""><a href="<?php echo base_url('single/'.$getNewsLimit[1]['id'])?>" class="fh5co_good_font_2"> <?php echo $getNewsLimit[1]['title']?> </a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co_suceefh5co_height_2">
                        <?php if($getNewsLimit[2]['img']){?>
                            <img src="<?php echo (base_url('uploads/news/'.$getNewsLimit[2]['img'])) ?>" alt="img"/>
                        <?php }else{?>
                            <img src="<?php echo (base_url('public/admin/images/logo.jpg'))?>" alt=""/>
                        <?php }?>
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                            <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo date('d-m-Y',strtotime($getNewsLimit[2]['date']))?> </a></div>
                            <div class=""><a href="<?php echo base_url('single/'.$getNewsLimit[2]['id'])?>" class="fh5co_good_font_2"> <?php echo $getNewsLimit[2]['title']?></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co_suceefh5co_height_2">
                        <?php if($getNewsLimit[3]['img']){?>
                            <img src="<?php echo (base_url('uploads/news/'.$getNewsLimit[3]['img'])) ?>" alt="img"/>
                        <?php }else{?>
                            <img src="<?php echo (base_url('public/admin/images/logo.jpg'))?>" alt=""/>
                        <?php }?>
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                            <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo date('d-m-Y',strtotime($getNewsLimit[3]['date']))?> </a></div>
                            <div class=""><a href="<?php echo base_url('single/'.$getNewsLimit[3]['id'])?>" class="fh5co_good_font_2"> <?php echo $getNewsLimit[3]['title']?> </a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co_suceefh5co_height_2">
                        <?php if($getNewsLimit[4]['img']){?>
                            <img src="<?php echo (base_url('uploads/news/'.$getNewsLimit[4]['img'])) ?>" alt="img"/>
                        <?php }else{?>
                            <img src="<?php echo (base_url('public/admin/images/logo.jpg'))?>" alt=""/>
                        <?php }?>
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                            <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo date('d-m-Y',strtotime($getNewsLimit[4]['date']))?>  </a></div>
                            <div class=""><a href="<?php echo base_url('single/'.$getNewsLimit[4]['id'])?>" class="fh5co_good_font_2"> <?php echo $getNewsLimit[4]['title']?> </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pt-3">
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Sports</div>
        </div>
        <div class="owl-carousel owl-theme js" id="slider1">
            <?php foreach ($sportCategory as $sport) {?>
                <div class="item px-2">
                    <div class="fh5co_latest_trading_img_position_relative">

                        <div class="fh5co_latest_trading_img">
                            <?php if($sport['img']){?>
                                <img src="<?php echo (base_url('uploads/news/'.$sport['img'])) ?>" alt="" class="fh5co_img_special_relative1"/>
                            <?php }else{?>
                                <img src="<?php echo (base_url('public/admin/images/logo.jpg'))?>" alt="" class="fh5co_img_special_relative1"/>
                            <?php }?>
                        </div>
                        <div class="fh5co_latest_trading_img_position_absolute"></div>
                        <div class="fh5co_latest_trading_img_position_absolute_1">
                            <a href="<?php echo base_url('single/'.$sport['id'])?>" class="text-white"><?php echo $sport['title']?> </a>
                            <div class="fh5co_latest_trading_date_and_name_color"> <?php echo date('d-m-Y',strtotime($sport['date']))?></div>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</div>
<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News</div>
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
<div class="container-fluid fh5co_video_news_bg pb-4">
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom pt-5 pb-2 mb-4  text-white">Video News</div>
        </div>
        <div>
            <div class="owl-carousel owl-theme" id="slider3">
                <?php foreach ($videoLink as $video){?>
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_hover_news_img_video_tag_position_relative">
                            <div class="fh5co_news_img">
                                <iframe class="video" width="100%" height="200"
                                        src="<?php echo $video['video']?>?rel=0&amp;showinfo=0"
                                        frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide">
                                <?php if($video['img']){?>
                                    <img src="<?php echo (base_url('uploads/news/'.$video['img'])) ?>" alt=""/>
                                <?php }else{?>
                                    <img src="<?php echo (base_url('public/admin/images/logo.jpg'))?>" alt="" "/>
                                <?php }?>
                            </div>
                            <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide play-video">
                                <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                        <span><i class="fa fa-play"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-2">
                            <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                            <span class=""><?php echo $video['title']?></span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> <?php echo date('M j,Y',strtotime($video['Date']))?></div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News</div>
                </div>
                <?php foreach ($results as $news){?>
                    <div class="row pb-4">
                        <div class="col-md-5">
                            <div class="fh5co_hover_news_img">
                                <div class="fh5co_news_img">
                                    <?php if($news['img']){?>
                                        <img src="<?php echo (base_url('uploads/news/'.$news['img'])) ?>" alt=""/>
                                    <?php }else{?>
                                        <img src="<?php echo (base_url('public/admin/images/logo.jpg'))?>" alt="" "/>
                                    <?php }?>
                                </div>
                                <div></div>
                            </div>
                        </div>
                        <div class="col-md-7 animate-box">
                            <a href="<?php echo base_url('single/'.$news['id'])?>" class="fh5co_magna py-2"><?php echo $news['title']?> </a> <a href="single.php" class="fh5co_mini_time py-3">
                                <?php echo date('M j,Y',strtotime($news['date']))?></a>
                            <div class="fh5co_consectetur">
                                <?php echo mb_substr($news['description'],0,250,'utf-8')?> ...
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
        <div class="row mx-0 animate-box" data-animate-effect="fadeInUp">
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

<?php $this->load->view("user/connections/footer")?>
</body>
</html>