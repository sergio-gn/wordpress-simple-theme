<?php get_header(); ?>
<?php get_template_part( 'template-parts/menu', '1' );?>

<main class="main" role="main">
    <div class="container py-2">
        <?php // ************************************** HERO PRINCIPAL ********************************************/ ?>
        <div class="row justify-space-between gap-1">
            <div class="col-xl-4 d-flex">
                <?php
            
                    // set up the arguments for the query to select the main post
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'category_name' => 'Main Post',
                        'posts_per_page' => 1
                    );
                
                    // create a new WP_Query instance with the arguments
                    $query = new WP_Query( $args );
                
                    // start the loop
                    if ( $query->have_posts() ) : 
                        while ( $query->have_posts() ) : $query->the_post(); 
                    ?>
                            <article class="d-flex">
                                <div class="first-post bg-white">
                                    <?php
                                        $tags = get_the_tags();
                                        if (has_post_thumbnail()): ?>
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="img-wrapper_first-post <?php
                                                // Get the first tag from the tags array
                                                if ($tags) {
                                                    $first_tag = reset($tags); // Get the first tag
                                                    echo 'border-' . $first_tag->slug . ' ';
                                                }
                                                ?>">
                                                    <div class="post__thumbnail">
                                                        <?php if (has_post_thumbnail()) :
                                                            $thumbnail_id = get_post_thumbnail_id(); // Get the ID of the post thumbnail
                                                            $thumbnail = wp_get_attachment_image($thumbnail_id, 'full', false, array('class' => 'post__thumbnail')); // Get the HTML for the post thumbnail without lazy loading
                                                            ?>
                                                            <?php echo $thumbnail; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </a>
                                        <?php
                                        endif;
                                        
                                        if ($tags) {
                                            echo '<div class="post-tags">';
                                            $first_tag = reset($tags); // Get the first tag (again, in case it was used above)
                                            echo '<a href="' . get_tag_link($first_tag->term_id) . '" class="tag-' . $first_tag->slug . '">' . $first_tag->name . '</a> ';
                                            echo '</div>';
                                        }
                                        ?>

                                    <header class="post__header p-2" role="heading">
                                      <h2 class="fs-2 <?php foreach ( $tags as $tag ) { echo 'title-' . $tag->slug . ' '; } ?>">
                                        <a href="<?php the_permalink(); ?>">
                                          <?php the_title(); ?>
                                        </a>
                                      </h2>
                                      <p class="post__date"><time><?php echo human_time_diff(strtotime($post->post_date)) . ' ' . __('ago'); ?></time></p>
                                      <p class="fc-5">
                                        <?php 
                                          $excerpt = get_the_excerpt();
                                          $excerpt = wp_trim_words( $excerpt, 20, '...' );
                                          echo $excerpt;
                                        ?>
                                      </p>
                                    </header>
                                </div>
                            </article>
                    <?php
                        endwhile;
                    endif;
                
                    // reset the query
                    wp_reset_postdata();
                ?>
            </div>
            <div class="d-flex col-xl-5_5 d-grid grid-2-col grid-1-col_mb gap-1_5">
                <?php

                    // set up the arguments for the query to select the main post
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'category_name' => 'News',
                        'posts_per_page' => 4
                    );
                
                    // create a new WP_Query instance with the arguments
                    $query = new WP_Query( $args );
                
                    // start the loop
                    if ( $query->have_posts() ) : 
                        while ( $query->have_posts() ) : $query->the_post(); 
                    ?>
                        <article class="bg-white border-r-1" <?php post_class(); ?>>
                            <div class="quarter-post">
                                <?php 
                                $tags = get_the_tags();
                                if(has_post_thumbnail()): ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="img-wrapper_quarter-post <?php foreach ( $tags as $tag ) { echo 'border-' . $tag->slug . ' '; } ?>">
                                            <div class="post__thumbnail"><?php the_post_thumbnail(); ?></div>
                                        </div>
                                    </a>
                                <?php endif;
                                    if ( $tags ) {
                                      echo '<div class="post-tags">';
                                      foreach ( $tags as $tag ) {
                                        echo '<a href="' . get_tag_link( $tag->term_id ) . '" class="tag-' . $tag->slug . '">' . $tag->name . '</a> ';
                                      }
                                      echo '</div>';
                                    }
                                ?>
                                <header class="post__header p-1" role="heading">
                                    <h3 class="post__title fs-1 pt-1 <?php foreach ( $tags as $tag ) { echo 'title-' . $tag->slug . ' '; } ?>">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>
                                    <p class="post__date"><time><?php echo human_time_diff(strtotime($post->post_date)) . ' ' . __('ago'); ?></time></p>
                                    <p class="line-h-1 fc-5">
                                        <?php 
                                          $excerpt = get_the_excerpt();
                                          $excerpt = wp_trim_words( $excerpt, 10, '...' );
                                          echo $excerpt;
                                        ?>
                                    </p>
                                </header>
                            </div>
                        </article>
                    <?php
                        endwhile;
                    endif;
                
                    // reset the query
                    wp_reset_postdata();
                ?>
            </div>
            <div class="d-flex col-xl-2 ads">
                ads
            </div>
        </div>
        <?php // ************************************** SIX PACK **************************************************/ ?>
        <div class="my-8">
            <div class="row justify-space-between">
                <div class="col-xl-8_5 d-flex">
                    <div class="d-grid grid-3-col grid-1-col_mb gap-1">
                        <?php
                            // set up the arguments for the query to select the main post
                            $args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'category_name' => 'six pack',
                                'posts_per_page' => 20 
                            );
                        
                            // create a new WP_Query instance with the arguments
                            $query = new WP_Query( $args );
                        
                            // start the loop
                            if ( $query->have_posts() ) : 
                                while ( $query->have_posts() ) : $query->the_post(); 
                            ?>
                            
                                    <article class="bg-white border-r-1" <?php post_class(); ?>>
                                        <?php if(has_post_thumbnail()): ?>
                                            <div class="img-wrapper_sixpack <?php foreach ( $tags as $tag ) { echo 'border-' . $tag->slug . ' '; } ?>">
                                                <div class="img-wrapper_thumbnail">
                                                    <?php the_post_thumbnail(array(200, 200)); ?>
                                                </div>
                                            </div>
                                        <?php endif;
                                            if ( $tags ) {
                                              echo '<div class="post-tags">';
                                              foreach ( $tags as $tag ) {
                                                echo '<a href="' . get_tag_link( $tag->term_id ) . '" class="tag-' . $tag->slug . '">' . $tag->name . '</a> ';
                                              }
                                              echo '</div>';
                                            }
                                        ?>
                                        <header class="post__header p-2" role="heading">
                                            <h3 class="post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            <p class="post__date"><time><?php echo human_time_diff(strtotime($post->post_date)) . ' ' . __('ago'); ?></time></p>
                                            <p class="fc-5">
                                                <?php 
                                                  $excerpt = get_the_excerpt();
                                                  $excerpt = wp_trim_words( $excerpt, 10, '...' );
                                                  echo $excerpt;
                                                ?>
                                            </p>
                                        </header>
                                    </article>
                            <?php
                                endwhile;
                            endif;
                            // reset the query
                            wp_reset_postdata();
                        ?>
                    </div>
                </div>
                <div class="col-xl-3 d-flex">
                    <div style="border-bottom: 1px solid #414141;" class="d-grid grid-1-col">
                        <?php
                            // set up the arguments for the query to select the main post
                            $args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'category_name' => 'six pack',
                                'posts_per_page' => 5 
                            );
                        
                            // create a new WP_Query instance with the arguments
                            $query = new WP_Query( $args );
                        
                            // start the loop
                            if ( $query->have_posts() ) : 
                                while ( $query->have_posts() ) : $query->the_post(); 
                        ?>
                                <div style="border-top: 1px solid #414141;">
                                    <article <?php post_class(); ?>>
                                        <div style="padding: 1rem 0;" class="d-flex align-items-center">
                                            <?php if(has_post_thumbnail()): ?>
                                                <div class="img-wrapper_sixpack_sidebar">
                                                    <div style="border-radius:.5rem" class="img-wrapper_thumbnail">
                                                        <?php the_post_thumbnail( array(80, 80) ); ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <header class="post__header px-1" role="heading">
                                                <h3 class="post__title">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_title(); ?>
                                                    </a>
                                                </h3>
                                            </header>
                                        </div>
                                    </article>
                                </div>
                        <?php
                                endwhile;
                            endif;
                            // reset the query
                            wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </div>
        
        <?php // ************************************** ADS WIDTH *************************************************/ ?>
        <div class="my-3">
            <div class="ads py-3">
                ads
            </div>
        </div>
        
        <?php // ************************************** EIGHT PACK ****************************************************/?>
        <div class="my-8">
            <div class="row justify-space-between">
                <div class="col-xl-12 d-flex">
                    <div class="d-grid grid-4-col grid-1-col_mb gap-1">
                        <?php
                
                            // set up the arguments for the query to select the main post
                            $args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'category_name' => 'six pack',
                                'posts_per_page' => 8
                            );
                        
                        
                            // create a new WP_Query instance with the arguments
                            $query = new WP_Query( $args );
                        

                            // start the loop
                            if ( $query->have_posts() ) :
                                while ( $query->have_posts() ) : $query->the_post(); 
                            ?>
                            
                                    <article class="bg-white border-r-1" <?php post_class(); ?>>
                                        <?php if(has_post_thumbnail()): ?>
                                            <div class="img-wrapper_sixpack <?php foreach ( $tags as $tag ) { echo 'border-' . $tag->slug . ' '; } ?>">
                                                <div class="img-wrapper_thumbnail">
                                                    <?php the_post_thumbnail(array(200, 200)); ?>
                                                </div>
                                            </div>
                                        <?php endif;
                                            if ( $tags ) {
                                              echo '<div class="post-tags">';
                                              foreach ( $tags as $tag ) {
                                                echo '<a href="' . get_tag_link( $tag->term_id ) . '" class="tag-' . $tag->slug . '">' . $tag->name . '</a> ';
                                              }
                                              echo '</div>';
                                            }
                                        ?>
                                        <header class="post__header p-2" role="heading">
                                            <h3 class="post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            <p class="post__date"><time><?php echo human_time_diff(strtotime($post->post_date)) . ' ' . __('ago'); ?></time></p>
                                            <p class="fc-5">
                                                <?php 
                                                  $excerpt = get_the_excerpt();
                                                  $excerpt = wp_trim_words( $excerpt, 10, '...' );
                                                  echo $excerpt;
                                                ?>
                                            </p>
                                        </header>
                                    </article>
                            <?php
                                endwhile;
                            endif;
                            // reset the query
                            wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </div>
        
        
        
    </div>
</main>

<?php get_footer(); ?>