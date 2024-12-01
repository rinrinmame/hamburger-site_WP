<?php get_header(); //header.phpを読み込むテンプレートタグ（インクルードタグ）?>
<main class="l-main c-grid__body__child--main">
    <article class="l-main__title p-title">
        <div class="c-background__archive">
            <img src="<?php echo get_template_directory_uri() . '/images/main__takeout.jpg'; ?>" alt="" aria-hidden="true">
            <ul class="c-flexbox__title">
                <li class="c-list__archive"><h2 class="c-title__archive">Menu:</h2></li>
                <li class="c-list__archive"><p class="c-title__archive-sub"><?php esc_html( the_archive_title() ); ?></p></li>
            </ul>
        </div>
    </article>
    <section class="l-main__discription p-discription">
        <div class="c-inner__archive">
            <div class="c-background__discription">
                <div class="c-inner__discription">
                    <div class="c-flexbox__discription">
                        <?php
                            if( is_category() && category_description() ) {
                                echo ( category_description() );
                            }
                        ?>
                    </div>
                </div>
            </div>
            <?php if ( have_posts() ) :
                while ( have_posts() ) :
                the_post();
            ?>
            <?php get_template_part( 'template/card' ); //card.phpを読み込み?>
            <?php endwhile; else : ?>
                <p>記事はありません</p>
                <?php wp_link_pages(); ?>
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