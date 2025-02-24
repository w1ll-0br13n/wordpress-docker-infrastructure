<?php
/**
 * The Template for displaying a custom page.
 * Template Name: Custom Page Template
 * Description: A custom template for overriding plugin data on a single page.
 * @package Stylish Fashion Designer
 */

get_header(); ?>

<main id="skip_content" role="main">
    <div class="container">
        <div class="main-wrapper py-5 px-0">
            <?php
            // Start the loop
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();

                    // Display the post title
                    echo '<h1 class="entry-title">' . get_the_title() . '</h1>';

                    // Display the post thumbnail
                    if ( has_post_thumbnail() ) {
                        echo '<div class="post-thumbnail">';
                        the_post_thumbnail();
                        echo '</div>';
                    }

                    // Display the post content
                    echo '<div class="entry-content pt-4">';
                    the_content();
                    echo '</div>';

                    // Display comments template
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                }
            }
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>