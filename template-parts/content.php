<!-- Blog Post -->
<div class="card mb-4">
    <?php if (has_post_thumbnail()) : ?>
        <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="Card image cap">
    <?php endif; ?>
    <div class="card-body">
        <h2 class="card-title"> <?php the_title(); ?> </h2>
        <p class="card-text"><?php echo wp_trim_words(get_the_content(), 40, null); ?></p>
        <a href="<?php the_permalink() ?>" class="btn btn-primary">Read More &rarr;</a>
    </div>
    <div class="card-footer text-muted">
        Posted on <?php the_date('M d, Y ') ?> by
        <a href="<?php echo get_author_posts_url(get_the_author_ID()) ?>"><?php the_author() ?></a>
    </div>
</div>