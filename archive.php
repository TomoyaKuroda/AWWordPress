<?php
get_header(); ?>

    <div class="jumbotron jumbo-pic01">
        <div class="container" style="margin-top:20px;margin-bottom:20px;">
            <div> <!-- contents in jumbotron  -->
                <div class="text-center">
                    <h1 class="text-white" id="pagetoptitle">アシストオンについて</h1>
                </div>
            </div>
        </div>
    </div>


    <!-- ################## page contents start ################## -->


    <div class="container">
        <div class="row">
            <div class="col-md-3 cate-navi sp-none">
                <?php
                $args = array(
                    'menu' => 'アシストオンについて',
                    'container' => false);
                wp_nav_menu($args);
                ?>
            </div>
            <div class="col-md-6">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class($class = 'single'); ?>>
                            <section class="content">
                                <p class="thumb index-thumb"
                                   style="margin-top:7px;float:right;margin-left: 1em;margin-bottom:0.5em;"><?php the_post_thumbnail('thumbnail'); ?></p>
                                <!-- アイキャッチ画像 -->
                                <h2 id="h2-top"><?php the_title($before = '', $after = '', $echo = true); ?></h2>
                                <p style="margin-bottom: 5px;">
                                    <small><?php echo get_the_date(); ?> <!-- 投稿日時を表示 -->
                                        <?php the_category(', '); ?> <!-- カテゴリーを表示 --></small>
                                </p>
                                <p><?php
                                    $p = get_post(get_the_ID());
                                    $content = strip_shortcodes( $p->post_content );
                                    echo '<p>' .wp_html_excerpt($content, 30, '...'). '</p>';
                                    /*
                                    //110文字を抜粋
                                    $the_Content = mb_substr(strip_tags($post-> post_content), 0, 112);
                                    //［caption］を無効
                                    $the_Content = preg_replace('/\［caption(.+?)\/caption\］/','',$the_Content);
                                    //［gallery］を無効
                                    $the_Content = preg_replace('/\［gallery(.+?)\］/','',$the_Content);
                                    //HTML・PHPタグを除外
                                    $the_Content = strip_tags($the_Content);
                                    echo $the_Content.'...　';
 */
                                    ?> <!-- 記事本文を表示 -->
                                    <a href="<?php echo get_permalink();?>"><span class="text-right" style="margin:0;color:#1e90ff;"><small>詳細はこちら &raquo;</small></span></a>
                                </p>


                            </section>
                        </article>
                    <?php
                    endwhile;
                endif;
                ?>
                <!-- ページネーション -->
                <div class="pagination">
                    <?php echo paginate_links(array(
                        'type' => 'list',
                        'mid_size' => '1',
                        'prev_text' => '&laquo;',
                        'next_text' => '&raquo;'
                    )); ?>
                </div>

            </div>
            <div class="col-md-3 sp-none">
                <h3 class="title-line-left-pink" style="margin-top: 20px;margin-bottom: 20px;">月別アーカイブ</h3>
                <ul style="margin-top: 0px;padding: 0;">
                    <select style="width: 100%" name="archive-dropdown"
                            onChange='document.location.href=this.options[this.selectedIndex].value;'>
                        <option value=""><?php echo attribute_escape(__('Select Month')); ?></option>
                        <?php wp_get_archives('type=monthly&format=option&show_post_count=1'); ?>
                    </select>
                </ul>
                <h3 class="title-line-left-pink" style="margin-top: 20px;margin-bottom: 20px;">カテゴリ</h3>
                <ul style="list-style-type: none;margin: 0;padding: 0;">
                    <li class="category-decoration"><a style="text-decoration: none;" href="<?php echo get_category_link(18); ?>" title="ピックアップニュース">ピックアップニュース</a></li>
                    <li class="category-decoration"><a style="text-decoration: none;" href="<?php echo get_category_link(19); ?>" title="アクティビティ・イベント">アクティビティ・イベント</a></li>
                    <li class="category-decoration"><a style="text-decoration: none;" href="<?php echo get_category_link(20); ?>" title="体験談">体験談</a></li>
                    <li class="category-decoration"><a style="text-decoration: none;" href="<?php echo get_category_link(21); ?>" title="ニュース">ニュース</a></li>
                </ul>


            </div>

            <div class="col-md-3  sp-yappaireru">
                <div>
                    <h3 class="title-line-left-pink" style="margin-top: 20px;margin-bottom: 20px;">月別アーカイブ</h3>
                    <ul style="margin-top: 0px;padding: 0;">
                        <select style="width: 100%" name="archive-dropdown"
                                onChange='document.location.href=this.options[this.selectedIndex].value;'>
                            <option value=""><?php echo attribute_escape(__('Select Month')); ?></option>
                            <?php wp_get_archives('type=monthly&format=option&show_post_count=1'); ?>
                        </select>
                    </ul>
                    <h3 class="title-line-left-pink" style="margin-top: 20px;margin-bottom: 20px;">カテゴリ</h3>
                    <ul style="list-style-type: none;margin: 0;padding: 0;">
                        <li class="category-decoration"><a style="text-decoration: none;" href="<?php echo get_category_link(18); ?>" title="ピックアップニュース">ピックアップニュース</a></li>
                        <li class="category-decoration"><a style="text-decoration: none;" href="<?php echo get_category_link(19); ?>" title="アクティビティ・イベント">アクティビティ・イベント</a></li>
                        <li class="category-decoration"><a style="text-decoration: none;" href="<?php echo get_category_link(20); ?>" title="体験談">体験談</a></li>
                        <li class="category-decoration"><a style="text-decoration: none;" href="<?php echo get_category_link(21); ?>" title="ニュース">ニュース</a></li>
                    </ul>
                </div>
                <div class="cate-navi">
                    <?php
                    $args = array(
                        'menu' => 'アシストオンについて',
                        'container' => false);
                    wp_nav_menu($args);
                    ?>
                </div>
            </div>

        </div>
    </div>


    </div> <!-- /container -->


    <!-- ################## page contents end ################## -->

<?php get_footer(); ?>