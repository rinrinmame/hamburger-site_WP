<div class="p-card c-flexbox__container">
    <figure class="p-card__cheeseburger c-grid__card">
        <img src="<?php echo get_template_directory_uri(); ?>./images/main__archive.jpg" alt="チーズバーガーの写真">
        <figcaption class="c-card">
            <div class="c-inner__figcaption">
                <div class="c-inner__card">
                    <h2 class="c-card__title"><?php the_title(); ?></h2>
                    <h3 class="c-card__title-sub"><?php the_content(); ?></h3>
                    <p class="c-card__text"></p>
                </div>
                <div class="c-card__button-area">
                    <div class="c-inner__button-area">
                        <button class="c-card__button"><a <?php the_excerpt( '詳しく見る' ); ?>></a></button>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>