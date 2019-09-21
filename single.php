<?php get_header(); ?>

<div class="row">
    <?php while (have_posts()) : the_post(); ?>
        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Title -->
            <h1 class="mt-4"><?php the_title(); ?></h1>

            <!-- Author -->
            <p class="lead">
                by
                <a href="#"><?php the_author(); ?></a>
            </p>

            <hr>

            <!-- Date/Time -->
            <p>Posted on <?php the_date('M d, Y') ?> at <?php the_time('g:i a') ?></p>

            <hr>

            <!-- Preview Image -->
            <img class="img-fluid rounded" src="<?php the_post_thumbnail_url(); ?>" alt="">

            <hr>

            <!-- Post Content -->
            <div>
                <?php the_content(); ?>
            </div>

            <hr>

          

            <!-- Comments Form -->
            <div class="card my-4">
            <?php if (comments_open() || get_comments_number()) :
                    comments_template();
                endif; ?>
                

            </div>
        </div>
        <?php endwhile ?>
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Search Widget -->
            <div class="card my-4">
                <h5 class="card-header">Search</h5>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button">Go!</button>
                        </span>
                    </div>
                </div>
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