<?php get_header(); ?>
<div class="jumbotron">
    <div class="container margin-top-bottom-30px">
        <div id="eyecatch"> <!-- contents in jumbotron  -->
            <div class="text-center">
                <h1 class="text-white margin-top-bottom-30px">夢をカタチにしよう!</h1>
                <p class="text-white">豊かな大自然、美しい街並み、<br>
                    人種も多様で大らかに受け入れてくれる人々…<br>
                    「海外で生活したい、学びたい」…そんなあなたの夢を<br>
                    このカナダを舞台に叶えてみませんか？<br>
                    私たちアシストオンが、あなたの夢を強力にサポートします。</p>
                <a href="<?php echo esc_url(get_permalink(6)); ?>">
                    <button type="button" class="btn btn-round btn-lg"> アシストオンとは &raquo;</button>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <?php $args = array(
        'numberposts' => 1, //表示する記事の数
        'post_type' => 'post', //投稿タイプ名
        // 条件を追加する場合はここに追記
        'category' => 18,
    );
    $customPosts = get_posts($args);
    if ($customPosts) : foreach ($customPosts

    as $post) :
    setup_postdata($post);
    ?>
    <h3 class="text-center" style="color: #DE3163">Pick Up News</h3>
    <div id="news">
        <a href="<?php the_permalink(); ?>" style="text-decoration:none;outline: none; color: #DE3163;">
            <div class="row line-pu">
                <div class="col-md-10">
                    <h3 style="margin-top:10px;margin-bottom:8px; background-size: 10px 10px; background-position: 0 0, 5px 5px; padding: 5px 5px 3px 5px; font-weight: bold;width:100%;border-bottom: solid 1px #a9a9a9; font-weight: bold;">
                        <?php the_title(); ?>
                    </h3>
                    <p style="margin:0;color:black;"><?php echo my_excerpt(90);
                        echo "..."; ?> <!-- 記事本文を表示 -->
                        <span class="text-right" style="margin:0;color:#1e90ff;"><small>&nbsp;&nbsp;&nbsp;詳細はこちら &raquo;</small></span>
                    </p>
                </div>
                <div class="col-md-2 thumb"><?php echo get_thumb_img('post_500x500_thumbnail'); ?></div>
                <?php endforeach; ?>
                <?php else : //記事が無い場合 ?>
                    <p>記事がありません</p>
                <?php endif;
                wp_reset_postdata(); //クエリのリセット ?>

            </div>
        </a>
    </div>

    <div id="ryugaku-type">
        <h3 class="text-center">みなさんはどんなカナダ生活を思い描いていますか？<br>
            私たちが理想の留学をプランニングいたします！</h3>
        <div class="row">
            <div class="col-sm-6">
                <a href="<?php echo esc_url(get_permalink(19)); ?>"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/ryugalu01.jpg" alt="" width="100%"></a>
            </div>
            <div class="col-sm-6">
                <a href="<?php echo esc_url(get_permalink(348)); ?>"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/ryugalu02.jpg" alt="" width="100%"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a href="<?php echo esc_url(get_permalink(29)); ?>"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/ryugalu05.jpg" alt="" width="100%"></a>
            </div>
            <div class="col-sm-6">
                <a href="<?php echo esc_url(get_permalink(37)); ?>"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/ryugalu04.jpg" alt="" width="100%"></a>
            </div>
        </div>
        <div class="text-center">
            <a href="<?php echo esc_url(get_permalink(119)); ?>">
                <button type="button" class="btn btn-round btn-lg pink-b"><i class="fas fa-envelope"></i> お問い合わせ &raquo;
                </button>
            </a>
        </div>
    </div>

    <div id="servicelineup">
        <div class="row">
            <div class="col-sm-4">
                <h3>アシストオンについて</h3>
                <img src="http://ninja-izm.com/wordpress/wp-content/uploads/2018/10/1111111.jpg" alt="" width="100%">
                <p>現地に住む留学経験豊富なスタッフがご渡航前からご帰国まで責任を持ってしっかりとサポー
                    トいたします!</p>
                <p class="text-right"><a href="<?php echo esc_url(get_permalink(6)); ?>">
                        <small>詳細はこちら &raquo;</small>
                    </a></p>
            </div>
            <div class="col-sm-4">
                <h3>留学サポート</h3>
                <img src="http://ninja-izm.com/wordpress/wp-content/uploads/2018/10/1111112.jpg" alt="" width="100%">
                <p>お1人お1人のプランをカスタマイズし100%全力でサポート！ 留学の夢を一緒に実現させてい
                    きましょう。</p>
                <p class="text-right"><a href="<?php echo esc_url(get_permalink(15)); ?>">
                        <small>詳細はこちら &raquo;</small>
                    </a></p>
            </div>
            <div class="col-sm-4">
                <h3>ホームステイ</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/img/column03.jpg" alt="" width="100%">
                <p>現地の生活を家族の一員として、学校では学べない英語を学び、トロントで第二の家族を持つ
                    素晴らしさを体験しよう。</p>
                <p class="text-right"><a href="<?php echo esc_url(get_permalink(71)); ?>">
                        <small>詳細はこちら &raquo;</small>
                    </a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <h3>ビザサポート</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/img/column04.jpg" alt="" width="100%">
                <p>カナダに滞在する為のビザの種類にはどんなものがあるのでしょうか？ご希望の留学プランに
                    合わせて最適なビザをご案内いたします。</p>
                <p class="text-right"><a href="<?php echo esc_url(get_permalink(47)); ?>">
                        <small>詳細はこちら &raquo;</small>
                    </a></p>
            </div>
            <div class="col-sm-4">
                <h3>現地サポート</h3>
                <img src="http://ninja-izm.com/wordpress/wp-content/uploads/2018/10/1111113.jpg" alt="" width="100%">
                <p>ここトロントで19年以上皆様をサポートしてきた実績と経験のもと、一人ひとりに寄り添った
                    安心のサポートをご提供いたします！</p>
                <p class="text-right"><a href="<?php echo esc_url(get_permalink(73)); ?>">
                        <small>詳細はこちら &raquo;</small>
                    </a></p>
            </div>
            <div class="col-sm-4">
                <h3>お知らせ</h3>
                <ul class="news"><!-- 特定のカスタム投稿タイプの記事一覧を取得して表示する -->
                    <?php $args = array(
                        'numberposts' => 10, //表示する記事の数
                        'post_type' => 'post' //投稿タイプ名
                        // 条件を追加する場合はここに追記
                    );
                    $customPosts = get_posts($args);
                    if ($customPosts) : foreach ($customPosts as $post) : setup_postdata($post);
                        ?>
                        <li>
                            <p><?php the_time('Y/m/d'); ?></p>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>
                    <?php endforeach; ?>
                    <?php else : //記事が無い場合 ?>
                        <p>Sorry, no posts matched your criteria.</p>
                    <?php endif;
                    wp_reset_postdata(); //クエリのリセット ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="instagram">

    <div id="instafeed"></div>

    <div class="clear-space"></div>

</div>

<?php get_footer(); ?> 