<?php // Template Name: Pricing  
get_header();
?>
<?php
    if (have_posts()) : 
    while (have_posts()) : the_post();
    $free_tools_resources_title= get_field('free_tools_resources_title');
    $free_tools_resources_content= get_field('free_tools_resources_content');

    $post_thumb_one = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
    
?>
    <section class="price_sec" style="background-image: url(<?php echo $post_thumb_one[0];?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="aboutus_sec_inner">
                        <h2><?php echo $free_tools_resources_title; ?></h2>
                        <?php echo $free_tools_resources_content;?>
                    </div>
                </div>
                <!-- <div class="col-md-6">
                    <img class="img-fluid" src="<?php echo $post_thumb_one[0];?>" alt="">
                </div> -->
            </div>
        </div>
    </section>
    <section class="pricing_full_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pricing_sec">
                    <h2>Pricing</h2>
                    <p>We invite you to take a self-guided tour through the Pi-HR experience. Stop, start, and 
                    review at your own pace. When you're ready for more, just schedule a demo or start your 
                    free HR software trial.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-md-4">
                    <div class="price_table">
                    <div class="price_table_heading">
                        <h2 class="card-title pricing-card-title">$2000 <small class="text-muted">/ mo</small>
                        <span>Excluding Vat & Tax</span>
                        </h2>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Package-Tiny</h4>
                        </div>
                        <div class="card-body">                           
                            <ul>
                                <li><span><i class="fas fa-check"></i></span>Lorem ipsum dolor sit amet, consectetuer adipiscing</li>
                                <li><span><i class="fas fa-check"></i></span>Lorem ipsum dolor sit amet, consectetuer adipiscing</li>
                                <li><span><i class="fas fa-check"></i></span>Lorem ipsum dolor sit amet, consectetuer adipiscing</li>
                               <li><span><i class="fas fa-times"></i></span>Lorem ipsum dolor sit amet, consectetuer adipiscing</li>                            
                                <li><span><i class="fas fa-times"></i></span>Lorem ipsum dolor sit amet, consectetuer adipiscing</li>                            
                            </ul>
                            <div class="text-center pt-5 pb-3">
                                <a href="#" class="btn btn-outline-danger rounded-pill buy_now_button">BUY NOW</a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price_table">
                    <div class="price_table_heading p_small">
                        <h2 class="card-title pricing-card-title">$2000 <small class="text-muted">/ mo</small>
                        <span>Excluding Vat & Tax</span>
                        </h2>
                    </div>
                    <div class="card p_small">
                        <div class="card-header">
                            <h4>Package-Small</h4>
                        </div>
                        <div class="card-body">                           
                            <ul>
                                <li><span><i class="fas fa-check"></i></span>Lorem ipsum dolor sit amet, consectetuer adipiscing</li>
                                <li><span><i class="fas fa-check"></i></span>Lorem ipsum dolor sit amet, consectetuer adipiscing</li>
                                <li><span><i class="fas fa-check"></i></span>Lorem ipsum dolor sit amet, consectetuer adipiscing</li>
                               <li><span><i class="fas fa-times"></i></span>Lorem ipsum dolor sit amet, consectetuer adipiscing</li>                            
                                <li><span><i class="fas fa-times"></i></span>Lorem ipsum dolor sit amet, consectetuer adipiscing</li>                            
                            </ul>
                            <div class="text-center pt-5 pb-3">
                                <a href="#" class="btn btn-outline-violet rounded-pill buy_now_button">BUY NOW</a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price_table">
                    <div class="price_table_heading p_mid">
                        <h2 class="card-title pricing-card-title">$2000 <small class="text-muted">/ mo</small>
                        <span>Excluding Vat & Tax</span>
                        </h2>
                    </div>
                    <div class="card p_mid">
                        <div class="card-header">
                            <h4>Package-Tiny</h4>
                        </div>
                        <div class="card-body">                           
                            <ul>
                                <li><span><i class="fas fa-check"></i></span>Lorem ipsum dolor sit amet, consectetuer adipiscing</li>
                                <li><span><i class="fas fa-check"></i></span>Lorem ipsum dolor sit amet, consectetuer adipiscing</li>
                                <li><span><i class="fas fa-check"></i></span>Lorem ipsum dolor sit amet, consectetuer adipiscing</li>
                               <li><span><i class="fas fa-times"></i></span>Lorem ipsum dolor sit amet, consectetuer adipiscing</li>                            
                                <li><span><i class="fas fa-times"></i></span>Lorem ipsum dolor sit amet, consectetuer adipiscing</li>                            
                            </ul>
                            <div class="text-center pt-5 pb-3">
                                <a href="#" class="btn btn-outline-warning rounded-pill buy_now_button">BUY NOW</a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price_table">
                    <div class="price_table_heading p_large">
                        <h2 class="card-title pricing-card-title">$2000 <small class="text-muted">/ mo</small>
                        <span>Excluding Vat & Tax</span>
                        </h2>
                    </div>
                    <div class="card p_large">
                        <div class="card-header">
                            <h4>Package-Large</h4>
                        </div>
                        <div class="card-body">                           
                            <ul>
                                <li><span><i class="fas fa-check"></i></span>Lorem ipsum dolor sit amet, consectetuer adipiscing</li>
                                <li><span><i class="fas fa-check"></i></span>Lorem ipsum dolor sit amet, consectetuer adipiscing</li>
                                <li><span><i class="fas fa-check"></i></span>Lorem ipsum dolor sit amet, consectetuer adipiscing</li>
                               <li><span><i class="fas fa-times"></i></span>Lorem ipsum dolor sit amet, consectetuer adipiscing</li>                            
                                <li><span><i class="fas fa-times"></i></span>Lorem ipsum dolor sit amet, consectetuer adipiscing</li>                            
                            </ul>
                            <div class="text-center pt-5 pb-3">
                                <a href="#" class="btn btn-outline-info rounded-pill buy_now_button">BUY NOW</a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center pricing_contact_sec">
                    <h2>Want to try our PI HR live Demo?</h2>
                    <h5>please click below button to contact with us</h5>
                    <a href="#" class="contact_us_button">CONTACT US</a>
                    </div>
                </div>
             </div>
        </div>
    </section>
<?php 
    endwhile;
    endif; 
get_footer();
?>