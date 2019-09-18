<?php get_header(); ?>

<div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">

        <h1 class="my-4">Blog
            <small>Read Latest Posts</small>
        </h1>

        <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>


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
                        <?php the_author_link() ?>
                    </div>
                </div>


            <?php endwhile; ?>


            <!-- Pagination -->
            <ul class="pagination justify-content-center mb-4">
                <?php if (get_previous_posts_link()) : ?>
                    <li class="page-item">
                        <span class="page-link"><?php previous_posts_link('&laquo; Newer'); ?></span>
                    </li>
                <?php else : ?>
                    <li class="page-item">
                        <span class="page-link text-muted">&laquo; Newer</span>
                    </li>
                <?php endif;
                    if (get_next_posts_link()) : ?>
                    <li class="page-item">
                        <span class="page-link"><?php next_posts_link('Older &raquo;'); ?></span>
                    </li>
                <?php else : ?>
                    <li class="page-item">
                        <span class="page-link text-muted">Older &raquo;</span>
                    </li>
                <?php endif; ?>
            </ul>

        <?php else : ?>
            <div class="card mb-4">
                <h1>Write something awesome ..</h1>
            </div>
        <?php endif; ?>

    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <form class="card-body" method="get" action="<?php site_url('/'); ?>">
                <div class="input-group">
                    <input name="s" type="text" class="form-control" placeholder="Search for..." value="<?php get_search_query(); ?>">
                    <span class="input-group-btn">
                        <input class="btn btn-secondary" type="submit" value="Search" />
                    </span>
                </div>
            </form>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#">Web Design</a>
                            </li>
                            <li>
                                <a href="#">HTML</a>
                            </li>
                            <li>
                                <a href="#">Freebies</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#">JavaScript</a>
                            </li>
                            <li>
                                <a href="#">CSS</a>
                            </li>
                            <li>
                                <a href="#">Tutorials</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
                You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
        </div>

    </div>

</div>
<!-- /.row -->

<?php get_footer(); ?>