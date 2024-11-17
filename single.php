<?php get_header(); //header.phpを読み込むテンプレートタグ（インクルードタグ）?>
<main class="l-main c-grid__body__child--main">
    <?php
        if( have_posts() ) :
            while( have_posts() ) :
                the_post();
    ?>
    <article id="post-<?php the_ID(); ?>" class="l-main__title p-title"<?php post_class(); ?>>
        <?php 
            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        ?>
        <?php if ($url) : ?>
            <div class="c-background__title-single" style="background-image: url( '<?php echo esc_url($url); ?>' );">
                <div class="c-background__archive-cover u-cover__single">
                    <h1 class="c-title__single"><?php the_title(); ?></h1>
                </div>
            </div>
        <?php else : ?>
            <div class="c-background__title-single">
                <div class="c-background__archive-cover u-cover__single">
                    <h1 class="c-title__single"><?php the_title(); ?></h1>
                </div>
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