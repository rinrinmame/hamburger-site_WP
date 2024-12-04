<?php get_header(); //header.phpを読み込むテンプレートタグ（インクルードタグ）?>
<main class="l-main c-grid__body__child--main">
    <?php
        if( have_posts() ) :
            while( have_posts() ) :
                the_post();
    ?>
    <article id="post-<?php the_ID(); ?>" class="l-main__title p-title"<?php post_class(); ?>>
    <?php
        //アイキャッチ画像のID取得
        $ID = get_post_thumbnail_id( $post->ID );

        //アイキャッチ画像があるときの処理
        $url = wp_get_attachment_url( $ID ); //アイキャッチ画像のID→アイキャッチ画像URL取得
        $alt = get_post_meta( $ID, '_wp_attachment_image_alt', true ); //アイキャッチ画像alt属性取得
        
        //アイキャッチ画像がないときの処理（ダミー画像表示）
        $noimage = get_template_directory_uri() . '/images/noimage.jpg'; //テーマディレクトリURL＋ダミー画像URL
    ?>
    <?php if ( $url ) : ?>
        <div class="c-background__title-single">
            <img src="<?php echo esc_url( $url ); ?>" alt="<?php echo esc_html( $alt ); ?>" />
            <h1 class="c-title__single"><?php the_title(); ?></h1>
        </div>
    <?php else : ?>
        <div class="c-background__title-single">
            <img src="<?php echo esc_url( $noimage ); ?>" alt="ダミー画像" aria-hidden="true" />
            <h1 class="c-title__single"><?php the_title(); ?></h1>
        </div>
    <?php endif; ?>
    </article>
    <article class="l-main__contents">
        <div id="post-<?php the_ID(); ?>" class="c-inner__single">
            <?php the_content(); ?>
            <section class="p-page c-flexbox__page">
                <?php wp_pagenavi(); //ページネーション?>
            </section>
            <?php endwhile; else : ?>
                <p>表示する記事がありません</p>
                <?php wp_link_pages(); ?>
            <?php
                endif;
            ?>
        </div>
    </article>
</main>
<?php get_sidebar(); //siderbar.phpを読み込むテンプレートタグ（インクルードタグ）?>
<?php get_footer(); //footer.phpを読み込むテンプレートタグ（インクルードタグ）?>