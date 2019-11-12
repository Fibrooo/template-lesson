<?php get_header() ?>

<?php

while (have_posts()): the_post(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card" >
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title()?></h5>
                        <p class="card-text"><?php the_content(); ?></p>
                        <a href="<?php the_permalink()?>" class="btn btn-primary">Переход куда-нибудь</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>

<?php get_footer() ?>
