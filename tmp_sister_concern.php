<?php // Template Name: Sister concern 
get_header();
get_template_part('innerpage-top-sec');
 ?>
 <section class="bg_two sister_concern_sec_inner_page ">
    <div class="container">      
    <div class="row">
            <div class="col-md-12">
                <?php
                $var = ['pagename' => 'sister-concerns'];
                $sister_concern_page = new WP_Query($var);
                while ($sister_concern_page->have_posts()) : $sister_concern_page->the_post();
                    $service_page_content = get_the_content();
                    if (!$sister_concern_page_content) {
                        $sister_concern_page_content = '';
                    }
                    ?>
                    <div class="heading_top_content">
                        <h2><?php the_title(); ?></h2>
                        <div class="heading_content">
                            <p><?php echo $sister_concern_page_content; ?></p>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div> 
        <div class="row">
            <?php
            $args = array(
                'post_type'  => 'sister_concer',
                'order'    => 'ASC'
            );
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post();
                $sister_concern_icon = get_field('sister_concern_logo');
                $sister_concern_link = get_field('sister_concern_link');
                if(!$sister_concern_link){
                    $sister_concern_link = '#'; 
                }
                ?>
                <div class="col-lg-4">
                    <div class="hs_service">
                        <div class="hs_service_inner">
                            <img class="img-fluid" src="<?php echo $sister_concern_icon['url'] ?>" alt="">
                        </div>
                        <div class="see_more">
                        <a href="<?php echo $sister_concern_link ?>" target="_blank">See more</a>
                        </div>
                    </div>
                </div>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
 <?php get_footer(); ?>