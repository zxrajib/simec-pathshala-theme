<?php get_header(); ?>
<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        $page_id = get_the_ID();;
        $post_thumb_one = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
        if ($post_thumb_one) {
            $image_url = $post_thumb_one['0'];
        } else {
            $image_url = get_template_directory_uri() . '/assets/img/simec-system.jpg';
        }
        $sister_concern_title = get_field('sister_concern_title');
        if (!$sister_concern_title) {
            $sister_concern_title =  'Enter Page Title';
        }
        $sister_concern_post_content = get_the_content();
        if (!$sister_concern_post_content) {
            $sister_concern_post_content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been industrys standard dummy text ever Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been industrys standard dummy text ever';
        }


        $sister_concern_single_cat = get_field('sister_concern_taxonomy');
        ?>
        <section class="inner_page_bg_sec" style="background-image:url('<?php echo $image_url ?>');"></section>
        <div id="main_inner_div">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading_top_content text_left">
                            <h2><?php echo $sister_concern_title; ?></h2>
                        </div>
                        <div>
                            <?php echo $sister_concern_post_content; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
    endwhile;
endif;
?>

<?php
    if($sister_concern_single_cat){
        ?>
        <section class="main_sec_inner_page"> 
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading_top_content text_left">
                    <h2>Service :</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $args = array(
                'post_type'  => 'sic_single_service',
                'posts_per_page'    => -1,
                'order'    => 'ASC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'sic_single_service_cat',
                        'field' => 'term_id',
                        'terms' => $sister_concern_single_cat
                    )
                )
            );
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post();
                $sister_concern_single_service_icon = get_field('sister_concern_single_service_icon');
                if ($sister_concern_single_service_icon) {
                    $single_service_icon_image_url = $sister_concern_single_service_icon['url'];
                } else {
                    $single_service_icon_image_url = get_template_directory_uri() . '/assets/img/software-solution.png';
                }
                $single_service_post_content = get_the_content();
                if (!$service_post_content) {
                    $single_service_post_content = 'Lorem Ipsum is simply dummy text printing and typesetting industry. Lorem Ipsum has been industrys standard';
                }
                $sister_concern_single_service_link = get_field('sister_concern_single_service_link');
                if(!$sister_concern_single_service_link){
                    $sister_concern_single_service_link = '#';
                }
                ?>
                <div class="col-lg-4 col-md-6">
                <a href="<?php echo $sister_concern_single_service_link;?>"> 
                    <div class="our_service_div">
                        <div class="service_icon">
                            <img class="img-fluid" src="<?php echo $single_service_icon_image_url ?>" alt="">
                        </div>
                        <div class="our_service_details">
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo $single_service_post_content; ?></p>
                        </div>
                    </div>
            </a>
                </div>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
        <?php
    }
?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        $sister_concern_second_title = get_field('sister_concern_second_title');
        $sister_concern_second_content = get_field('sister_concern_second_content');
        if($sister_concern_second_title) {
         ?>

<section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading_top_content text_left">
                            <h2><?php echo $sister_concern_second_title; ?></h2>
                        </div>
                        <div>
                            <?php echo $sister_concern_second_content; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <?php   
        }
        ?>
<?php
    endwhile;
endif;
?>
</div>
<?php get_footer(); ?>