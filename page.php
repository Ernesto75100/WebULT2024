<?php get_header(); ?>

<style>
@media (max-width: 768px) {
    .ppo {
        display: block;
    }
}
</style>

<section class="event_list section_padding">
    <div class="container">
        <?php
        // Start the loop.
        while (have_posts()) : the_post();
        ?>
        <div class="single_blog_content">
            <div class="post_author">
                <div class="ppo">
                    <br>
                </div>

                <h1><?php the_title(); ?></h1>
                <br>

                <p><?php the_content(); ?></p>
            </div>
        </div>
        <?php
        // End of the loop.
        endwhile;
        ?>
    </div>
</section>

<?php get_footer(); ?>
