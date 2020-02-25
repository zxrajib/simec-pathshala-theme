<?php // Template Name: Product Tour

get_header();
 ?>
 <section class="aboutus_sec product_tour_about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="aboutus_sec_inner">
                    <?php
                       if (have_posts()) : 
                        while (have_posts()) : the_post();
                        $take_the_video_tour_title= get_field('take_the_video_tour_title');
                        $take_the_video_tour_content= get_field('take_the_video_tour_content');
                    
                        $post_thumb_one = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');                   
                    ?>
                        <h2><?php echo $take_the_video_tour_title; ?></h2>
                        <?php echo $take_the_video_tour_content; ?>
                    <?php
                        endwhile;
                    endif; 
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    $cat_args = array(
        'taxonomy' => 'product_features_cat',        
        'orderby' => 'id',
        'order' => 'ASC'
    );

    $cats = get_categories($cat_args);
    $cat_count_sec = 0;
    foreach($cats as $cat) {
        $cat_count_sec++;   
        ?>
            <section class="product_features_cat_sec <?php if($cat_count_sec % 2 == 0){ echo "left_sec"; } else{  echo "right_sec";}  ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="feature_cat">
                                <h2><?php echo $cat->name; ?></h2>
                                <p><?php echo $cat->description; ?></p>
                            </div>                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="vr_nav_tab_sec">
                                <div class="nav flex-column nav-pills nav_tab_sec" id="v-pills-tab-<?php echo $cat->slug; ?>" role="tablist" aria-orientation="vertical">
                                    <?php
                                        $args = array(
                                            'post_type' => 'product_features',
                                            'orderby' => 'menu_order',
                                            'order' => 'ASC',
                                            'posts_per_page' => -1,                
                                            'tax_query' => array(
                                                array(
                                                    'taxonomy' => 'product_features_cat',
                                                    'field' => 'name',
                                                    'terms' => $cat->name
                                                )
                                            )
                                        );
                                        $loop = new WP_Query($args);
                                        $counter = 0;
                                        while ($loop->have_posts()) : $loop->the_post();
                                        $counter++;
                                        ?>                                    
                                        <a class="nav-link post-<?php the_ID(); ?> <?=($counter == 1) ? 'active' : ''?>" id="post-<?php the_ID(); ?>-tab" data-toggle="pill" href="#post-<?php the_ID(); ?>" role="tab" aria-controls="v-pills-<?php the_ID(); ?>" aria-selected="<?=($counter == 1) ? 'true' : 'false'?>"><?php the_title();?></a>

                                    <?php
                                    endwhile;
                                    wp_reset_query();
                                    ?>
                                </div>  
                            </div>
                            
                            <div class="tab-content" id="v-pills-tabContent-<?php echo $cat->slug; ?>">
                                <?php
                                    $args = array(
                                        'post_type' => 'product_features',
                                        'orderby' => 'menu_order',
                                        'order' => 'ASC',
                                        'posts_per_page' => -1,                
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'product_features_cat',
                                                'field' => 'name',
                                                'terms' => $cat->name
                                            )
                                        )
                                    );
                                    $loop = new WP_Query($args);
                                    $counter = 0;
                                    while ($loop->have_posts()) : $loop->the_post();
                                    $counter++;
                                    $post_thumb_one = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                                    if ($post_thumb_one) {
                                        $image_url = $post_thumb_one['0'];
                                    } else {
                                        $image_url = 'http://via.placeholder.com/445x300/37a2ff/ffffff';
                                    }
                                    ?>                                    
                                        <div class="vr_nav_tab_sec_content tab-pane fade <?=($counter == 1) ? 'show active' : ''?>" id="post-<?php the_ID(); ?>" role="tabpanel" aria-labelledby="post-<?php the_ID(); ?>">
                                           
                                            <div class="row">
                                                <div class="col-md-5 <?php if($cat_count_sec % 2 == 0){ echo "order-lg-2"; }   ?>">
                                                    <div>
                                                        <img src="<?php echo $image_url;?>" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div>
                                                        <h3><?php the_title();?></h3>
                                                        <?php
                                                            if('' !== get_post()->post_content){
                                                                the_content();
                                                            } else{
                                                                ?>
                                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                                <?php
                                                            }
                                                            ?>
                                                    </div>
                                                </div>
                                            </div>                                       

                                        </div>                                        
                                    <?php
                                    endwhile;
                                ?>                            
                            </div>                          
                        </div>
                    </div>
                </div>
            </section>  
        <?php
     }    

?>


 <?php get_footer(); ?>