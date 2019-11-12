<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 justify-content-center">
                <?php the_posts_pagination([
                    'show_all' => false,
                    'end_size' => 2,
                    'mid_size' => 1,
                    'prev_next' => false,
                    'type' => 'list'
                ])?>
            </div>
        </div>
        <div class="row">

            <div class="col">
                <!-- Начало цикла Post -->
                <?php if (have_posts()): while (have_posts()): the_post(); ?>

                    <div class="card" >
                        <div class="card-header">
                            <h5 class="card-title"><?php the_title()?></h5>
                        </div>
                        <div class="card-body">

                            <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('thumbnail'); ?>
                            <?php else: ?>
                                <img src="https://www.fillmurray.com/150/150" width="150" height="150" alt="">
                            <?php endif; ?>

                            <p class="card-text"><?php the_excerpt(); ?></p>

                        </div>

                        <div class="card-footer">
                            <a href="<?php the_permalink()?>" class="btn btn-primary">Переход куда-нибудь</a>
                        </div>
                    </div>

                <?php endwhile; ?>

            </div>

            <?php get_sidebar() ?>

                <!-- Сами посты-->
        </div>

        <div class="row">

            <div class="col-md-12 justify-content-center">
                <?php the_posts_pagination([
                    'show_all' => false,
                    'end_size' => 2,
                    'mid_size' => 1,
                    'prev_next' => false,
                    'type' => 'list'
                ])?>
            </div>

                <!-- Навигация постов -->
            <?php else: ?>
                <!-- Если постов нет -->
            <?php endif; ?>
            <!-- Конец цикла Post -->

        </div>
        <div class="row">
            <div class="col-lg-3">Test</div>
            <div class="col-lg-9">Test</div>
        </div>
    </div>

<?php get_footer(); ?>