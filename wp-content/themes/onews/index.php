<?php get_header(); ?>

<h2>Latest news</h2>
<section id="posts">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article>
            <?php
            $categories = get_the_category();
            foreach ($categories as $category):
            ?>
            <span class="category-badge category-badge--<?= $category->slug ?>"><?= $category->name ?></span>
            <?php endforeach; ?>
            <h3 class="post-title"><?php the_title(); ?></h3>
            <div class="meta">
                <?php echo get_avatar(get_the_author_meta('id'), 32); ?>
                <span><strong><?php the_author(); ?></strong> le <?= get_the_date(); ?></span>
            </div>
            <p class="excerpt"><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="post-more">Continue reading</a>
        </article>
    <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</section>

<?php get_footer(); ?>
