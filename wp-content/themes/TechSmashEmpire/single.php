<?php
    get_header();
while (have_posts()) {
    the_post();?>
    <h2><?php the_title();?></h2>
    <?php the_content();?>
    </p>This was posted on <?php the_date();?></p>
    </p>This was posted By: <?php the_author();?></p>
    <hr>

<?php }
    get_footer();
?>

