<?php

    /**
     * Template Name: Rank Unique Page
     */

    get_header();

?>
<header>
  Banner PHoto Background
</header>
<main class="main" role="main">
    <div class="container">
            <div class="row flex">
                <div class="col col--xs-12 col--sm-12 col--md-8 col--lg-8">
                    <div class="content <?php the_field('colour'); ?>">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="col col--xs-12 col--sm-12 col--md-4 col--lg-4">
                    <?php get_sidebar('party-data'); ?>
                </div>
            </div>
    </div>
</main>

<?php get_footer(); ?>
