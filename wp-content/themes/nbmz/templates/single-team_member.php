<?php get_header(); ?>

<div class="single-team-member">
    <h1><?php the_title(); ?></h1>
    <?php if (has_post_thumbnail()) : ?>
        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="<?php the_title_attribute(); ?>">
    <?php endif; ?>
    <p><?php the_field('position'); ?></p> <!-- Должность -->
    <div class="content">
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>
