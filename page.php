<?php get_header(); ?>
<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        $parent_id = $post->post_parent;
        $page_id = get_the_ID();;
        ?>
        <div class="inner_page_top_section">
            <div class="inner_section_heading_title">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1><?php the_title(); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    endwhile;
endif;
?>
<?php if (have_posts()) : 
    while (have_posts()) : the_post();
        ?>

<section class="inner_default_page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                    if ('' !== get_post()->post_content) {
                  ?>
                <div class="page_content">
                    <?php the_content(); ?>
                </div>
                <?php
                } else {
                    ?>
                <div class="page_content">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>
<?php 
endwhile;
 endif; 
 ?>
<?php get_footer(); ?>