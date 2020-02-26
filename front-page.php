<?php get_header(); ?>
<?php
    $var = ['pagename' => 'about-us'];
    $service_page = new WP_Query($var);
    while ($service_page->have_posts()) : $service_page->the_post();  
    
    $post_thumb_one = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');    
?>
    <section class="aboutus_sec" id="about" style="background-image: url('<?php echo $post_thumb_one[0];?>');">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12 col-lg-6 col-xl-6">
                    <div class="aboutus_sec_inner">                    
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>                    
                    </div>
                </div>
                <div class="col-lg-12 d-xl-none">
                    <img class="img-fluid" src="<?php echo $post_thumb_one[0];?>" alt="">
                </div>
            </div>
        </div>
    </section>
<?php
    endwhile;
    wp_reset_postdata();
?>
    <section class="feature_sec">
        <div class="container">
            <div class="row">
               
                <?php
                    $args = array(
                        'post_type'=> 'feature_cpt',
                        'posts_per_page' => -1,
                        'order' => 'ASC'
                    );
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post();
                        $post_thumb_one = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                        if ($post_thumb_one) {
                            $image_url = $post_thumb_one['0'];
                        } else {
                            $image_url = get_template_directory_uri(). '/assets/img/attendance.png';
                        }
                        ?>
                        <div class="col-md-6">
                            <h4><?php the_title();?></h4>
                            <div class="feature_sec_inner">
                                <?php the_content();?>
                                    <img src="<?php echo $image_url; ?>" alt="" class="img-fluid" />
                            </div>
                        </div>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
               
            </div>
        </div>
    </section>

    <section class="why_us_sec">
       <div class="container">
           <div class="row">
               <div class="col-md-12 col-lg-6">
                    <div>
                    <?php
                        $var = ['pagename' => 'why-us'];
                        $service_page = new WP_Query($var);
                        while ($service_page->have_posts()) : $service_page->the_post();                   
                    ?>
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    ?>
                    </div>
               </div>
           </div>
       </div>
    </section>
    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center pb-5">
                    <h2>Our VAluable Clients</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <ul class="owl-carousel owl-theme">
                            <li>
                                <img src="<?php echo bloggermart_THEMEROOT ?>/assets/img/client_logo/05.png" class="img-fluid" alt=""/>
                            </li>
                            <li>
                                <img src="<?php echo bloggermart_THEMEROOT ?>/assets/img/client_logo/01.png" class="img-fluid" alt=""/>
                            </li>
                            <li>
                                <img src="<?php echo bloggermart_THEMEROOT ?>/assets/img/client_logo/02.png" class="img-fluid" alt=""/>
                            </li>                            
                            <li>
                                <img src="<?php echo bloggermart_THEMEROOT ?>/assets/img/client_logo/04.png" class="img-fluid" alt=""/>
                            </li>                            
                            <li>
                                <img src="<?php echo bloggermart_THEMEROOT ?>/assets/img/client_logo/06.png" class="img-fluid" alt=""/>
                            </li>
                            <li>
                                <img src="<?php echo bloggermart_THEMEROOT ?>/assets/img/client_logo/07.png" class="img-fluid" alt=""/>
                            </li>
                            <li>
                                <img src="<?php echo bloggermart_THEMEROOT ?>/assets/img/client_logo/08.png" class="img-fluid" alt=""/>
                            </li>
                            <li>
                                <img src="<?php echo bloggermart_THEMEROOT ?>/assets/img/client_logo/09.png" class="img-fluid" alt=""/>
                            </li>
                            <li>
                                <img src="<?php echo bloggermart_THEMEROOT ?>/assets/img/client_logo/Law-Ministary.png" class="img-fluid" alt=""/>
                            </li>
                            <li>
                                <img src="<?php echo bloggermart_THEMEROOT ?>/assets/img/client_logo/10.png" class="img-fluid" alt=""/>
                            </li>                            
                            <li>
                                <img src="<?php echo bloggermart_THEMEROOT ?>/assets/img/client_logo/armey.png" class="img-fluid" alt=""/>
                            </li>
                            <li>
                                <img src="<?php echo bloggermart_THEMEROOT ?>/assets/img/client_logo/Bangladesh-Krishi.png" class="img-fluid" alt=""/>
                            </li>
                            <li>
                                <img src="<?php echo bloggermart_THEMEROOT ?>/assets/img/client_logo/Bof.png" class="img-fluid" alt=""/>
                            </li>
                            <li>
                                <img src="<?php echo bloggermart_THEMEROOT ?>/assets/img/client_logo/Brf.png" class="img-fluid" alt=""/>
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact_sec" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Say Hello</h2>
                    <h4>Any query? Feel free to write us!</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="contact_form">
                        <form>
                            <div class="row mb-3">
                              <div class="col-md-12">
                                <input type="text" name ="fullName" class="form-control" placeholder="Name">
                              </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                  <input type="email" name="emailAddress" class="form-control" placeholder="Last name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                  <input type="text" name ="subject" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary mb-2 submit_button">Send Message</button>
                                </div>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </section>    
    <?php get_footer(); ?>