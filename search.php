<?php get_header(); ?>
<body>
<main>
    <h1 class="text-center">
        <?php _e('Search Results Found For', 'locale'); ?> : <b><?php the_search_query(); ?></b>
    </h1>
    <?php if (have_posts()) { ?>
        <?php while (have_posts()) {
            the_post(); ?>
            <div class="site-content clearfix">
                <div class="main-column">
                    <div class="main-split">
                        <div class="card">
                            <div class="card-body text-center">
                                <?php the_post_thumbnail('small_thumbnail'); ?>
                                <div class="card-title">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                </div>
                                <p class="card-text"><?php echo wp_trim_words(get_the_content(), 30, ' ...'); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        <?php } ?>
        </div>
        <div class="clear text-center">
            <br>
            <?php
            echo fauzan_pagination();
            ?>
            <br>
        </div>
    <?php } else {

    } ?>
    <div class="clear">
        <?php get_footer(); ?>
    </div>
</main>
</body>
