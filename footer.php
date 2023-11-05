        <footer class="footer" role="contentinfo">
            <div class="top_footer">
                <div class="container">
                    <div class="d-grid grid-3-col-20vw grid-1-col_mb">
                        <div>
                            <h6>What is ABRAP</h6>
                            <p>
                                The global scenario of sustentability is in bad situation. And yet no one is talking about it. We are here to give focus to the right people. People that are actually doing something. People who talks about what matters. If you want to save the planet you are more than welcome.
                            </p>
                        </div>
                        <div>
                            <nav class="footer__nfavigation">
                                <?php wp_nav_menu(['theme_location' => 'footer', 'menu_class' => 'nav nav--footer']); ?>
                            </nav>
                        </div>
                        <div>
                            <?php
                                $args = array(
                                    'number' => 7, // Limit the number of tags to 7
                                    'orderby' => 'name',
                                    'order' => 'ASC'
                                );
                                
                                $tags = get_tags($args);
                                
                                foreach ($tags as $tag) {
                                    $tag_link = get_tag_link($tag->term_id);
                                    $tag_name = $tag->name;
                                
                                    echo '<a href="' . esc_url($tag_link) . '">' . esc_html($tag_name) . '</a><br />';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom_footer">
                <p class="footer__copyright">&copy; <?php echo get_bloginfo( 'name' ); ?> <?php echo date('Y'); ?></p>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>
