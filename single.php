<?php get_header(); //header.phpを読み込むテンプレートタグ（インクルードタグ）?>
<main class="l-main">
    <?php
        if( have_posts() ) :
            while( have_posts() ) :
                the_post(); ?>
    <article class="l-main__title p-title">
        <div class="c-background__title-single u-title__page">
            <h1 class="c-title__single">h1 <?php the_title() ?></h1>
        </div>
    </article>
    <article class="l-main__contents">
        <div id="post-<?php the_ID(); ?>" class="c-inner__single">
            <?php the_content(); ?>
            <?php endwhile;
                else :
            ?>
                <p>表示する記事がありません</p>
            <?php
                endif;
            ?>
        </div>
    </article>
</main>
<?php get_sidebar(); //siderbar.phpを読み込むテンプレートタグ（インクルードタグ）?>
<?php get_footer(); //footer.phpを読み込むテンプレートタグ（インクルードタグ）?>