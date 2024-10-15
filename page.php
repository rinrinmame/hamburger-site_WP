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
            <div class="c-background__title-single" style="background-image: url( '<?php echo esc_url($url); ?>' );">
                <div class="c-background__cheeseburger-cover u-cover__single">
                    <h2 class="c-title__single"><?php the_title(); ?></h2>
                </div>
            </div>
        <?php else : ?>
            <div class="c-background__title-single" style="background-image: url( '<?php echo esc_url($noimage); ?>' );">
                <div class="c-background__cheeseburger-cover u-cover__single">
                    <h2 class="c-title__single"><?php the_title() ?></h2>
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
                <?php wp_link_pages(); ?>
                <?php the_posts_navigation(); ?>
            <?php
                endif;
            ?>
        </div>
    </article>
</main>
<?php wp_list_comments(); ?>
<?php get_sidebar(); //siderbar.phpを読み込むテンプレートタグ（インクルードタグ）?>
<?php get_footer(); //footer.phpを読み込むテンプレートタグ（インクルードタグ）?>