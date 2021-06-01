<?php

/**
 * Template Name: Template Contact
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');

if (is_front_page()) {
    get_template_part('global-templates/hero');
}
?>
<div class="page-header-holder" <?php if (has_post_thumbnail()) { ?> style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);" <?php } ?>>
    <div class="container">
        <header class="entry-header">
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        </header><!-- .entry-header -->
    </div>
</div>

<div class="wrapper template-contact-us" id="full-width-page-wrapper">

    <div class="<?php echo esc_attr($container); ?>" id="content">

        <div class="row">

            <div class="col-lg-6">
                <main class="site-main" id="main" role="main">

                    <?php
                    while (have_posts()) {
                        the_post();
                        get_template_part('loop-templates/content', 'page');
                    }
                    ?>

                </main><!-- #main -->

            </div><!-- -->
            <div class="offset-lg-1 col-lg-5">
                <div class="iframe-holder">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.516447368991!2d-73.98852808505659!3d40.7286602445339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2599c569bcac3%3A0xc7ef0ebb4d3d5760!2s324%20E%209th%20St%2C%20New%20York%2C%20NY%2010003%2C%20USA!5e0!3m2!1sen!2sin!4v1622098625498!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="iframe-holder">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.516447368991!2d-73.98852808505659!3d40.7286602445339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2599c569bcac3%3A0xc7ef0ebb4d3d5760!2s324%20E%209th%20St%2C%20New%20York%2C%20NY%2010003%2C%20USA!5e0!3m2!1sen!2sin!4v1622098625498!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="iframe-holder">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.516447368991!2d-73.98852808505659!3d40.7286602445339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2599c569bcac3%3A0xc7ef0ebb4d3d5760!2s324%20E%209th%20St%2C%20New%20York%2C%20NY%2010003%2C%20USA!5e0!3m2!1sen!2sin!4v1622098625498!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div><!-- .row end -->

    </div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
