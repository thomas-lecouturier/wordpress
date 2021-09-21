<?php get_header(); ?>

<?php if ( have_posts() ) : the_post(); ?>
<h2><?php the_title(); ?></h2>
<section id="posts">
    <article>
        <?php
        $categories = get_the_category();
        foreach ($categories as $category):
        ?>
        <span class="category-badge category-badge--<?= $category->slug ?>"><?= $category->name ?></span>
        <?php endforeach; ?>
        <div class="meta">
            <?php echo get_avatar(get_the_author_meta('id'), 32); ?>
            <span><strong><?php echo get_the_author_posts_link(); ?></strong> le <?= get_the_date(); ?></span>
        </div>
        <p class="excerpt"><?php the_content(); ?></p>
        <a href="<?php echo home_url(); ?>" class="post-more">Back to home</a>
    </article>
</section>
<?php endif; ?>

<?php get_footer(); ?>
