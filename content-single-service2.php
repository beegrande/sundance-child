<?php
/**
 * 
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content hentry">
        <!--<div class="post-item">-->
        <!--<div class="post-info">-->
        <h2 class="entry-title">
            <a href="<?php get_the_permalink( $post->post_ID ) ?>" title="<?php the_title_attribute(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>
        <!--<p class="post-meta">Posted by <?php the_author(); ?></p>-->
        <!--</div>-->
        <div class="post-content">

            <?php
            
            the_content();

            ?>
        </div>
        <!--<hr>-->
    </div>
</article><!-- #post-<?php the_ID(); ?> -->