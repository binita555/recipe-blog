<?php get_header(); ?>

<main class="main-content">
    <div class="container">
        <div class="single-recipe">

            <?php while (have_posts()) : the_post(); ?>

                <h1><?php the_title(); ?></h1>

                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large'); ?>
                <?php endif; ?>

                <div class="recipe-info-bar">

                    <?php $cooking_time = get_field('cooking_time'); ?>
                    <?php if ($cooking_time) : ?>
                        <span>⏱ <?php echo esc_html($cooking_time); ?></span>
                    <?php endif; ?>

                    <?php $serving = get_field('serving'); ?>
                    <?php if ($serving) : ?>
                        <span>🍽 <?php echo esc_html($serving); ?></span>
                    <?php endif; ?>

                    <?php $difficulty = get_field('difficulty'); ?>
                    <?php if ($difficulty) : ?>
                        <span>📊 <?php echo esc_html($difficulty); ?></span>
                    <?php endif; ?>

                </div>

                <?php $ingredients = get_field('ingredients'); ?>
                <?php if ($ingredients) : ?>
                    <div class="recipe-ingredients">
                        <h2>Ingredients</h2>
                        <p><?php echo esc_html($ingredients); ?></p>
                    </div>
                <?php endif; ?>

                <div class="recipe-instructions">
                    <h2>Instructions</h2>
                    <?php the_content(); ?>
                </div>

            <?php endwhile; ?>

        </div>
    </div>
</main>

<?php get_footer(); ?>