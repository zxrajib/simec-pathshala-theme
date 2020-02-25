<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        $parent_id = $post->post_parent;
        $page_id = get_the_ID();
        $header_page_title = get_field('header_page_title');
        if(!$header_page_title){
            $header_page_title = get_the_title();
        }
        $google_play_store_link = get_field('google_play_store_link');
        $app_store_link = get_field('app_store_link');
        ?>        
        <div class="header_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header_inner_content">
                            <h1><?php echo $header_page_title; ?></h1>
                            <?php
                                if('' !== get_post()->post_content){
                                    the_content();
                                } else{
                                    ?>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <?php
                                }                                 
                                if (is_front_page()) {
                                    ?>
                                        <ul>
                                            <li>
                                                <a href="<?php echo $google_play_store_link; ?>">
                                                    <img src="<?php echo bloggermart_THEMEROOT ?>/assets/img/gplay_icon.png" alt="" class="img-fluid" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo $app_store_link; ?>">
                                                    <img src="<?php echo bloggermart_THEMEROOT ?>/assets/img/aplay_icon.png" alt="" class="img-fluid" />
                                                </a>
                                            </li>
                                        </ul>
                                    <?php
                                }
                            ?>                           
                                
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
<?php
    endwhile;
endif;
?>