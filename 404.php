<?php get_header(); //header.phpを読み込むテンプレートタグ（インクルードタグ）?>
        <main class="l-main">
            <article class="l-main__title p-title">
                <div class="c-background__cheeseburger">
                    <div class="c-background__cheeseburger-cover">
                        <ul class="c-flexbox__title">
                            <li class="c-title__archive"><h2>Search:</h2></li>
                            <li class="c-title__archive-sub"><p><?php the_archive_title(); ?></p></li>
                        </ul>
                    </div>
                </div>
            </article>

            <p>お探しのページは見つかりませんでした</p>
            <section class="p-page c-flexbox__page">
                <?php wp_pagenavi(); //ページネーション?>
            </section>
        </main>
        <?php get_sidebar(); //siderbar.phpを読み込むテンプレートタグ（インクルードタグ）?>
        <?php get_footer(); //footer.phpを読み込むテンプレートタグ（インクルードタグ）?>
    </body>
</html>