        <?php get_header(); //header.phpを読み込むテンプレートタグ（インクルードタグ）?>
        <main class="l-main">
            <article class="l-main__title p-title">
                <div class="c-background__cheeseburger">
                    <div class="c-background__cheeseburger-cover">
                        <ul class="c-flexbox__title">
                            <?php the_archive_title(); ?>
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
                    <?php get_template_part( 'card' ); //card.phpを読み込み?>
                </div>
            </section>
            <section class="p-page c-flexbox__page">
                <?php wp_pagenavi(); //ページネーション?>
            </section>
        </main>
        <?php get_sidebar(); //siderbar.phpを読み込むテンプレートタグ（インクルードタグ）?>
        <?php get_footer(); //footer.phpを読み込むテンプレートタグ（インクルードタグ）?>
    </body>
</html>