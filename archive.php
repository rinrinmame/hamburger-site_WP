<?php get_header(); //header.phpを読み込むテンプレートタグ（インクルードタグ）?>
<main class="l-main">
    <article class="l-main__title p-title">
        <div class="c-background__cheeseburger">
            <div class="c-background__cheeseburger-cover">
                <ul class="c-flexbox__title">
                    <?php esc_html(the_archive_title()); ?>
                </ul>
            </div>
        </div>
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
            <?php if (have_posts() ) :
                while ( have_posts() ) :
                the_post();
            ?>
            <?php get_template_part( 'card' ); //card.phpを読み込み?>
            <?php endwhile; else : ?>
                <p>記事はありません</p>
            <?php endif; ?>
        </div>
    </section>
    <section class="p-page c-flexbox__page">
        <?php if ( $wp_query -> max_num_pages > 1 ); ?>
            <?php wp_pagenavi(); //ページネーション?>
    </section>
</main>
<?php get_sidebar(); //siderbar.phpを読み込むテンプレートタグ（インクルードタグ）?>
<?php get_footer(); //footer.phpを読み込むテンプレートタグ（インクルードタグ）?>