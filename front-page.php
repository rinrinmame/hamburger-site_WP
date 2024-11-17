        <?php get_header(); //header.phpを読み込むテンプレートタグ（インクルードタグ）?>
        <main class="l-main c-grid__body__child--main">
            <article class="l-main__contents p-title">
            <?php 
                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                $noimage = get_template_directory_uri() . '/images/noimage.jpg';
            ?>
                <?php if ($url) : ?>
                    <div class="c-background__title" style="background-image: url( '<?php echo esc_url($url); ?>' );">
                        <h2 class="c-title__front"><?php the_title(); ?></h2>
                    </div>
                <?php else : ?>
                    <div class="c-background__title" style="background-image: url( '<?php echo esc_url($noimage); ?>' );">
                        <h2 class="c-title__front"><?php the_title(); ?></h2>
                    </div>
                <?php endif; ?>
                <div class="p-branch-menu c-background__branch-menu">
                    <div class="c-inner__branch-menu">
                        <ul class="c-flexbox__branch-menu">
                            <?php
                                $cat = get_category_by_slug( 'takeout' ); //takeoutのスラッグ取得
                            ?>
                            <li class="p-branch-menu__takeout c-category">
                                <a href="<?php echo esc_html((get_category_link( $cat->cat_ID ))); //takeoutのURL取得 ?>">
                                    <h3>
                                        <?php echo esc_html((get_cat_name( $cat->cat_ID ))); //takeoutのタイトル取得 ?>
                                    </h3>
                                    <dl class="c-list">
                                        <div class="c-inner__category">
                                            <div class="c-background__category">
                                                <div class="c-inner__list">
                                                    <dt>Take OUT</dt>
                                                    <dd>当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで</dd>
                                                </div>
                                            </div>
                                            <div class="c-background__category">
                                                <div class="c-inner__list">
                                                    <dt>Take OUT</dt>
                                                    <dd>当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで</dd>
                                                </div>
                                            </div>
                                        </div>
                                    </dl>
                                </a>
                            </li>                              
                            <?php
                                $cat = get_category_by_slug( 'eatin' ); //eatinのスラッグ取得
                            ?>
                            <li class="p-branch-menu__eatin c-category"> 
                                <a href="<?php echo esc_html(get_category_link( $cat->cat_ID )); //eatinのURL取得 ?>">
                                    <h3>
                                        <?php echo esc_html(get_cat_name( $cat->cat_ID )); //eatinのタイトル取得 ?>
                                    </h3>
                                    <dl class="c-list">                                                           
                                        <div class="c-inner__category">
                                            <div class="c-background__category">
                                                <div class="c-inner__list">
                                                    <dt>Eat In</dt>
                                                    <dd>店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです</dd>
                                                </div>
                                            </div>
                                            <div class="c-background__category">
                                                <div class="c-inner__list">
                                                    <dt>Eat In</dt>
                                                    <dd>店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです</dd>
                                                </div>
                                            </div>
                                        </div>
                                    </dl>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </article>
            <section class="l-main__access p-access">
                <div class="p-access__map">
                    <div class="c-background__map-all">
                        <div class="p-access__comment c-background__map-comment">
                            <div class="c-inner__text">
                            <?php
                                $args = array (
                                    'post_type' => 'page', // 投稿タイプ
                                    'pagename' => 'access', //固定ページのスラッグ指定 
                                );
                                $myposts = get_posts( $args );
                                foreach( $myposts as $post ):
                                setup_postdata( $post ); // グローバル変数$postを書き換え
                            ?>
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_content(); ?></p>
                            <?php
                                endforeach;
                                wp_reset_postdata();
                            ?>
                            </div>
                        </div>
                    </div>
                    <iframe class="c-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7477988418323!2d139.74285797413486!3d35.65858483122038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1724943929863!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>
        </main>
        <?php get_sidebar(); //siderbar.phpを読み込むテンプレートタグ（インクルードタグ）?>
        <?php get_footer(); //footer.phpを読み込むテンプレートタグ（インクルードタグ）?>