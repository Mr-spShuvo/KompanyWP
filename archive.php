<?php get_header(); ?>

<div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">

        <h1 class="my-4">
            <?php 
            if(is_author()){
                echo 'All posts from - ' . get_the_author(); 
            } else{
                the_archive_title(); 
            }
            
            ?>

            

        </h1>

        <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <!-- Blog Post -->
                <div class="card mb-4">
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
            <form class="card-body" method="get" action="<?php echo site_url('/'); ?>">
                <div class="input-group">
                    <input name="s" type="text" class="form-control" placeholder="Search for..." value="<?php get_search_query(); ?>">
                    <span class="input-group-btn">
                        <input class="btn btn-secondary" type="submit" value="Search" />
                    </span>
                </div>
            </form>
        </div>

        <?php dynamic_sidebar( 'main-sidebar' ); ?>

    </div>

</div>
<!-- /.row -->

<?php get_footer(); ?>