<?php get_header(); //header.phpを読み込むテンプレートタグ（インクルードタグ）?>
<main class="l-main">
    <?php
        if( have_posts() ) :
            while( have_posts() ) :
                the_post(); ?>
    <article class="l-main__title p-title">
        <?php 
            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            $noimage = get_template_directory_uri() . './images/noimage.jpg';
        ?>
        <?php if ($url) : ?>
            <div class="c-background__title-single" style="background-image: url( '<?php echo $url; ?>' );">
                <div class="c-background__cheeseburger-cover u-cover__single">
                    <h1 class="c-title__single"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h1>
                </div>
            </div>
        <?php else : ?>
            <div class="c-background__title-single" style="background-image: url( '<?php echo $noimage; ?>' );">
                <div class="c-background__cheeseburger-cover u-cover__single">
                    <h1 class="c-title__single"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h1>
                </div>
            </div>
        <?php endif; ?>
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