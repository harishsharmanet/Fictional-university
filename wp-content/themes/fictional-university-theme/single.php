<?php
get_header();

while(have_posts()){
    the_post(); ?>
<h1><?php the_title();?></h1>
<p><?php the_content();?></p>
    <hr>
<?php }?>

    <center><h3>Single.php</h3>
    <?php get_footer(); ?>
    </center>