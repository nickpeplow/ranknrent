<?php get_header(); ?>

<div class="container" style="padding-top: 60px;"> <!-- Add inline padding here -->
    <div class="row">
        <div class="col-md-8 main-content">
            <article id="post-<?php the_ID(); ?>" <?php post_class('single-service'); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="service-featured-image">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content">
                    <?php the_content(); ?>

                    <!-- Placeholder content starts here -->
                    <h2>Service Overview</h2>
                    <p>This is where you can provide a brief overview of the service. Explain what it is and why it's valuable to your clients.</p>

                    <h2>Key Features</h2>
                    <ul>
                        <li>Feature 1: Description of the first key feature</li>
                        <li>Feature 2: Description of the second key feature</li>
                        <li>Feature 3: Description of the third key feature</li>
                    </ul>

                    <h2>Benefits</h2>
                    <p>
                </div>

                <div class="service-meta">
                    <p>Last updated: <?php the_modified_date(); ?></p>
                </div>

                <!-- Related Services Section -->
                <?php
                $related_query = new WP_Query(array(
                    'post_type' => 'services',
                    'posts_per_page' => 3,
                    'post__not_in' => array(get_the_ID()),
                    'orderby' => 'rand',
                ));

                if ($related_query->have_posts()) : ?>
                    <div class="related-services">
                        <h2>Other Services</h2>
                        <ul>
                            <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                <?php
                endif;
                wp_reset_postdata();
                ?>
                <!-- End Related Services Section -->
            </article>
        </div>

        <div class="col-md-4 sidebar-content">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
