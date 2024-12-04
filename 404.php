<?php get_header(); //header.phpを読み込むテンプレートタグ（インクルードタグ）?>
<main class="l-main c-grid__body__child--main">
    <article class="l-main__title p-title">
        <div class="c-background__archive">
            <img src="<?php echo get_template_directory_uri() . '/images/main__takeout.jpg'; ?>" alt="3つのハンバーガーとポテトの写真" aria-hidden="true" />
            <ul class="c-flexbox__title">
                <li class="c-list__archive"><h2 class="c-title__archive">404 Not Found</h2></li>
            </ul>
        </div>
    </article>
    <section class="l-main__discription p-discription__404">
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