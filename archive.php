<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamburger-site</title>
    <link rel="icon" type="./images/png" href="./images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./css/ress.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;300;400;500;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="./js/jquery-3.7.1.min.js"></script>
</head>
<body class="l-body c-grid__body">
    <!--header.phpを読み込むテンプレートタグ（インクルードタグ）-->
    <?php get_header(); ?>
    <main class="l-main">
        <article class="l-main__title p-title">
            <div class="c-background__cheeseburger">
                <div class="c-background__cheeseburger-cover">
                    <ul class="c-flexbox__title">
                        <li class="c-title__archive"><h1>Menu:</h1></li>
                        <li class="c-title__archive-sub"><p>チーズバーガー</p></li>
                    </ul>
                </div>
            </div>
        </article>
        <section class="l-main__discription p-discription">
            <div class="c-inner__archive">
                <div class="c-background__discription">
                    <div class="c-inner__discription">
                        <div class="c-flexbox__discription">
                            <h2 class="c-title__discription">小見出しが入ります</h2>
                            <p class="c-text__discription">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>   
                        </div>
                    </div>
                </div>
                <div class="p-card c-flexbox__container">
                    <figure class="p-card__cheeseburger c-grid__card">
                        <img src="./images/main__archive.jpg" alt="チーズバーガーの写真">
                        <figcaption class="c-card">
                            <div class="c-inner__figcaption">
                                <div class="c-inner__card">
                                    <h2 class="c-card__title">チーズバーガー</h2>
                                    <h3 class="c-card__title-sub">小見出しが入ります</h3>
                                    <p class="c-card__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                </div>
                                <div class="c-card__button-area">
                                    <div class="c-inner__button-area">
                                        <button class="c-card__button"><a>詳しく見る</a></button>
                                    </div>
                                </div>
                            </div>                    
                        </figcaption>
                    </figure>
                    <figure class="p-card__double-cheeseburger c-grid__card">
                        <img src="./images/main__archive.jpg" alt="チーズバーガーの写真">
                        <figcaption class="c-card">
                            <div class="c-inner__figcaption">
                                <div class="c-inner__card">
                                    <h2 class="c-card__title">ダブルチーズバーガー</h2>
                                    <h3 class="c-card__title-sub">小見出しが入ります</h3>
                                    <p class="c-card__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                </div>
                                <div class="c-card__button-area">
                                    <div class="c-inner__button-area">
                                        <button class="c-card__button"><a>詳しく見る</a></button>
                                    </div>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <figure class="p-card__special-cheeseburger c-grid__card">
                        <img src="./images/main__archive.jpg" alt="チーズバーガーの写真">
                        <figcaption class="c-card">
                            <div class="c-inner__figcaption">
                                <div class="c-inner__card">
                                    <h2 class="c-card__title">スペシャルチーズバーガー</h2>
                                    <h3 class="c-card__title-sub">小見出しが入ります</h3>
                                    <p class="c-card__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                </div>
                                <div class="c-card__button-area">
                                    <div class="c-inner__button-area">
                                        <button class="c-card__button"><a>詳しく見る</a></button>
                                    </div>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </section>
        <section class="p-page c-flexbox__page">
            <p class="c-page__count">page 1/10</p>
            <div class="c-flexbox__page-arrow">
                <img src="./images/page__arrow-left.png" alt="左向きの矢印">
                <img src="./images/page__arrow-left.png" alt="左向きの矢印">
                <p class="c-page__move-back">前へ</p>
            </div>
            <ul class="c-flexbox__page-count">
                <li class="c-page__box u-page__box"><a class="c-page__number">1</a></li>
                <li class="c-page__box"><a class="c-page__number">2</a></li>
                <li class="c-page__box"><a class="c-page__number">3</a></li>
                <li class="c-page__box"><a class="c-page__number">4</a></li>
                <li class="c-page__box"><a class="c-page__number">5</a></li>
                <li class="c-page__box"><a class="c-page__number">6</a></li>
                <li class="c-page__box"><a class="c-page__number">7</a></li>
                <li class="c-page__box"><a class="c-page__number">8</a></li>
                <li class="c-page__box"><a class="c-page__number">9</a></li>
            </ul>
            <div class="c-flexbox__page-arrow">
                <p class="c-page__move-next">次へ</p>
                <img src="./images/page__arrow-right.png" alt="右向きの矢印">
                <img src="./images/page__arrow-right.png" alt="右向きの矢印">
            </div>
        </section>
    </main>
    <!--siderbar.phpを読み込むテンプレートタグ（インクルードタグ）-->
    <?php get_sidebar(); ?>
    <!--footer.phpを読み込むテンプレートタグ（インクルードタグ）-->
    <?php get_footer(); ?>
    <script src="./js/main.js"></script>
</body>
</html>