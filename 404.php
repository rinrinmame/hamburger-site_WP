<?php get_header(); //header.phpを読み込むテンプレートタグ（インクルードタグ）?>
        <main class="l-main">
            <article class="l-main__title p-title">
                <div class="c-background__cheeseburger">
                    <div class="c-background__cheeseburger-cover">
                        <ul class="c-flexbox__title">
                            <li class="c-title__archive"><h2>404 Not Found</h2></li>
                        </ul>
                    </div>
                </div>
            </article>
            <section class="l-main__discription p-discription">
                <div class="c-inner__archive">
                    <div class="c-background__discription">
                        <div class="c-inner__discription">
                            <div class="c-flexbox__discription">
                                <h2 class="c-title__discription">お探しのページは見つかりませんでした</h2>
                                <p>このページは削除されたかURLが変更されたため、表示することができません。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php get_sidebar(); //siderbar.phpを読み込むテンプレートタグ（インクルードタグ）?>
        <?php get_footer(); //footer.phpを読み込むテンプレートタグ（インクルードタグ）?>
    </body>
</html>