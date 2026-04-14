<?php get_header(); ?>

<main class="main-content">
    <div class="container">

        <h1>Welcome to <?php bloginfo('name'); ?></h1>
        <p>Fresh recipes every day!</p>

        <?php
        $args = array(
            'post_type' => 'recipe',
            'posts_per_page' => 9,
        );
        $recipes = new WP_Query($args);
        ?>

        <?php if ($recipes->have_posts()) : ?>

            <div class="recipe-grid">

                <?php while ($recipes->have_posts()) : $recipes->the_post(); ?>

                    <div class="recipe-card">

                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium'); ?>
                            </a>
                        <?php endif; ?>

                        <div class="recipe-card-body">
                            <h2>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn">
                                View Recipe
                            </a>
                        </div>

                    </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

            </div>

        <?php else : ?>
            <p>No recipes found!</p>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>