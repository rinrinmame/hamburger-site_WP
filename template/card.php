<div class="p-card c-flexbox__container">
    <figure class="p-card__item c-grid__card">
        <?php
            $ID = get_post_thumbnail_id( $post->ID ); //アイキャッチ画像のID取得

            $url = wp_get_attachment_url( $ID ); //アイキャッチ画像のID→アイキャッチ画像URL取得
            $noimage = get_template_directory_uri() . '/images/noimage.jpg'; //テーマディレクトリURL＋アイキャッチ画像URL

            $alt = get_post_meta( $ID, '_wp_attachment_image_alt', true ); //アイキャッチ画像alt属性取得
        ?>
        <?php if ( $url ) : ?>
            <img src="<?php echo esc_url( $url ); ?>" alt="<?php echo esc_html( $alt ); ?>">
        <?php else : ?>
            <img src="<?php echo esc_url( $noimage ); ?>" alt="">
        <?php endif; ?>
        <figcaption class="c-card__all">
            <div class="c-inner__figcaption">
                <div class="c-inner__card">
                    <h2 class="c-card__title"><?php the_title(); ?></h2><p class="c-card__tag"><?php the_tags(); ?></p>
                    <?php
                        $content = $post->post_content;
                        $mb_content = mb_strlen( $content,"UTF-8" ); //文字量取得

                        if ( $mb_content > 230 ) {
                            //230文字より多い場合（「...」をつけて出力）
                            $content = mb_substr( $content, 0, 230 ) . '...';
                        } else {
                            //230文字以下の場合（そのまま出力）
                            $content = $content;
                        }
                            echo $content;
                    ?>
                </div>
                <div class="c-card__button-area">
                    <div class="c-inner__button-area">
                        <button class="c-card__button"><a href="<?php echo esc_url( get_permalink() ); ?>">詳しく見る</a></button>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>