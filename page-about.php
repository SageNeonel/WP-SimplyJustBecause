<!-- controls about page-->
<?php

get_header();
//loop through blogs
if (have_posts()):
while (have_posts()): the_post();?>
<!-- blog titles and content-->
<article class="text-center">
<div class="text-center">
<h2><?php the_title(); ?></h2>
</div>
<div class="blog-words">
<?php the_content(); ?>
    </div>
<div class="seperator"></div>
</article>


<?php
endwhile;
else:echo'<p> No content found</p> ';
endif;
get_footer();
?>