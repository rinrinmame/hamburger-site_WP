    <?php get_header(); //header.phpを読み込むテンプレートタグ（インクルードタグ）?>
    <main class="l-main">
        <article class="l-main__title p-title">
            <div class="c-background__cheeseburger">
                <div class="c-background__cheeseburger-cover">
                    <ul class="c-flexbox__title">   
                        <li class="c-title__archive"><h2>Search:</h2></li>
                        <li class="c-title__archive-sub"><p><?php the_search_query(); ?></p></li>
                    </ul>
                </div>
            </div>
        </article>
        <section class="l-main__discription p-discription">
            <div class="c-inner__archive">
                <div class="c-background__discription">
                    <div class="c-inner__discription">
                        <div class="c-flexbox__discription">
                            <h2 class="c-title__discription">「 <?php the_search_query(); ?> 」の検索結果：<?php echo $wp_query->found_posts; ?>件</h2>
                        </div>
                    </div>
                </div>
                <?php  if (have_posts() && get_search_query()) :
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