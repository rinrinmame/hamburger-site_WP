        <?php get_header(); //header.phpを読み込むテンプレートタグ（インクルードタグ）?>
        <main class="l-main">
            <article class="l-main__title p-title">
                <?php 
                    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                    $noimage = get_template_directory_uri() . './images/noimage.jpg';
                ?>
                <?php if ($url) : ?>
                    <div class="c-background__cheeseburger" style="background-image: url( '<?php echo $url; ?>' );">
                        <div class="c-background__cheeseburger-cover">
                            <ul class="c-flexbox__title">
                                <li class="c-title__archive"><h2></h2></li>
                                <li class="c-title__archive-sub"><p><?php the_archive_title(); ?></p></li>
                            </ul>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="c-background__cheeseburger" style="background-image: url( '<?php echo $noimage; ?>' );">
                        <h2 class="c-title__front">No image</h2>
                    </div>
                <?php endif; ?>
            </article>
            <section class="l-main__discription p-discription">
                <div class="c-inner__archive">
                    <div class="c-background__discription">
                        <div class="c-inner__discription">
                            <div class="c-flexbox__discription">
                                <h2 class="c-title__discription">小見出しが入ります</h2>
                                <p class="c-text__discription">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>   
                            </div>
                        </div>
                    </div>
                    <div class="p-card c-flexbox__container">
                        <figure class="p-card__cheeseburger c-grid__card">
                            <img src="<?php echo get_template_directory_uri(); ?>./images/main__archive.jpg" alt="チーズバーガーの写真">
                            <figcaption class="c-card">
                                <div class="c-inner__figcaption">
                                    <div class="c-inner__card">
                                        <h2 class="c-card__title">チーズバーガー</h2>
                                        <h3 class="c-card__title-sub">小見出しが入ります</h3>
                                        <p class="c-card__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                    </div>
                                    <div class="c-card__button-area">
                                        <div class="c-inner__button-area">
                                            <button class="c-card__button"><a <?php the_content( '詳しく見る' ); ?>></a></button>
                                        </div>
                                    </div>
                                </div>                    
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </section>
            <section class="p-page c-flexbox__page">
                <?php wp_pagenavi(); ?>
            </section>
        </main>
        <?php get_sidebar(); //siderbar.phpを読み込むテンプレートタグ（インクルードタグ）?>
        <?php get_footer(); //footer.phpを読み込むテンプレートタグ（インクルードタグ）?>
    </body>
</html>