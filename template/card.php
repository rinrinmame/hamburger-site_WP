<div class="p-card c-flexbox__container">
    <figure class="p-card__item c-grid__card">
        <?php 
            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            $noimage = get_template_directory_uri() . '/images/noimage.jpg';
        ?>
        <?php if ($url) : ?>
            <img src=<?php echo esc_url($url); ?>>
        <?php else : ?>
            <img src=<?php echo esc_url($noimage); ?>>
        <?php endif; ?>
        <figcaption class="c-card__all">
            <div class="c-inner__figcaption">
                <div class="c-inner__card">
                    <h2 class="c-card__title"><?php the_title(); ?></h2><p class="c-card__tag"><?php the_tags(); ?></p>
                    <?php
                        $content = $post->post_content;
                        //$content = strip_tags($content); // タグ除去
                        $mb_content = mb_strlen($content,"UTF-8"); // 文字量取得

                        if ($mb_content > 230) {
                            // 230文字より多い場合（「...」をつけて出力）
                            $content = mb_substr($content, 0, 230) . '...';
                        } else {
                            // 230文字以下の場合（そのまま出力）
                            $content = $content;
                        }
                            echo $content;
                    ?>
                </div>
                <div class="c-card__button-area">
                    <div class="c-inner__button-area">
                        <button class="c-card__button"><a href="<?php echo esc_url(get_permalink()); ?>">詳しく見る</a></button>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>