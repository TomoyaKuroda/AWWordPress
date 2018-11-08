<?php 
/*
Template Name: 学校情報 固定ページ
Description: 学校情報
*/
get_header(); ?>

    <div class="jumbotron jumbo-pic01">
        <div class="container" style="margin-top:20px;margin-bottom:20px;">
            <div> <!-- contents in jumbotron  -->
                <div class="text-center">
                    <h1 class="text-white" id="pagetoptitle">留学サポート</h1>
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
            'menu' => '留学サポート',
             'container' => false);
            wp_nav_menu( $args );
         ?>
        </div>
        <div class="col-md-9">

            <article>
              <section class="content">
                <h2 id="h2-top">学校情報</h2>

                  <h3 class="text-center" style="font-size: 25px; margin: 40px 0 10px 0;font-weight:bold;color:black;">語学学校</h3>

                <div class="row">
                    <div class="col-md-4">
                        <div class="gakko">
                            <a href="<?php echo esc_url( get_permalink( 553 ) ); ?>" class="gakko-a">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-01.png" alt="" width="100%">
                                <div class="gakkoback">
                                <h5 class="text-center gakko-inside">CES</h5>
                                <p class="text-center gakko-desc">日本人の少ない学校</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gakko">
                            <a href="<?php echo esc_url( get_permalink( 555 ) ); ?>" class="gakko-a">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-02.png" alt="" width="100%">
                                <div class="gakkoback">
                                <h5 class="text-center gakko-inside">EC</h5>
                                <p class="text-center gakko-desc">TOEICスコアアップ</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gakko">
                            <a href="<?php echo esc_url( get_permalink( 556 ) ); ?>" class="gakko-a">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-03.png" alt="" width="100%">
                                <div class="gakkoback">
                                <h5 class="text-center gakko-inside">ESC</h5>
                                <p class="text-center gakko-desc">カレッジ準備コースが人気</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="gakko">
                            <a href="<?php echo esc_url( get_permalink( 557 ) ); ?>" class="gakko-a">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-04.png" alt="" width="100%">
                                <div class="gakkoback">
                                <h5 class="text-center gakko-inside">ILAC</h5>
                                <p class="text-center gakko-desc">国際色豊かな大規模校</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gakko">
                            <a href="<?php echo esc_url( get_permalink( 558 ) ); ?>" class="gakko-a">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-05.png" alt="" width="100%">
                                <div class="gakkoback">
                                <h5 class="text-center gakko-inside">QUEST</h5>
                                <p class="text-center gakko-desc">初心レベルからのスピーキングクラス</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gakko">
                            <a href="<?php echo esc_url( get_permalink( 560 ) ); ?>" class="gakko-a">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-06.png" alt="" width="100%">
                                <div class="gakkoback">
                                <h5 class="text-center gakko-inside">RCIIS</h5>
                                <p class="text-center gakko-desc">徹底的に発音矯正</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="gakko">
                            <a href="<?php echo esc_url( get_permalink( 561 ) ); ?>" class="gakko-a">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-07.png" alt="" width="100%">
                                <div class="gakkoback">
                                <h5 class="text-center gakko-inside">SGIC</h5>
                                <p class="text-center gakko-desc">No1.ビジネスコース</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gakko">
                            <a href="<?php echo esc_url( get_permalink( 563 ) ); ?>" class="gakko-a">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-08.png" alt="" width="100%">
                                <div class="gakkoback">
                                <h5 class="text-center gakko-inside">WTC</h5>
                                <p class="text-center gakko-desc">スピーキングに定評</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gakko">
                            <a href="<?php echo esc_url( get_permalink( 564 ) ); ?>" class="gakko-a">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-09.png" alt="" width="100%">
                                <div class="gakkoback">
                                <h5 class="text-center gakko-inside">Kaplan</h5>
                                <p class="text-center gakko-desc">落ち着いた雰囲気が特徴</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
				  &nbsp;&nbsp;
                  <p style="color:#000080; text-align:center;"><strong>・・・ こちらはほんの一部となります。ご興味のある学校がございましたら是非お問合せ下さいませ！ ・・・</strong></p>
                  <h3 class="text-center" style="font-size: 25px; margin: 40px 0 10px 0;font-weight:bold;color:black;">公立カレッジ</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="gakko">
                            <a href="<?php echo esc_url( get_permalink( 565 ) ); ?>" class="gakko-a">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-10.png" alt="" width="100%">
                                <div class="gakkoback">
                                <h5 class="text-center gakko-inside">Seneca</h5>
                                <p class="text-center gakko-desc">豊富なプログラムと綺麗な施設が有名な人気カレッジ</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gakko">
                            <a href="<?php echo esc_url( get_permalink( 566 ) ); ?>" class="gakko-a">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-11.png" alt="" width="100%">
                                <div class="gakkoback">
                                <h5 class="text-center gakko-inside">George Brown College</h5>
                                <p class="text-center gakko-desc">好立地且つ地元企業とのコネクションに強い実力派カレッジ！</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gakko">
                            <a href="<?php echo esc_url( get_permalink( 567 ) ); ?>" class="gakko-a">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-12.png" alt="" width="100%">
                                <div class="gakkoback">
                                <h5 class="text-center gakko-inside">Centennial College</h5>
                                <p class="text-center gakko-desc">広大な敷地と最新の設備が揃うエンジニアリングに強いカレッジ！</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="gakko">
                            <a href="<?php echo esc_url( get_permalink( 568 ) ); ?>" class="gakko-a">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-13.png" alt="" width="100%">
                                <div class="gakkoback">
                                <h5 class="text-center gakko-inside">Humber College</h5>
                                <p class="text-center gakko-desc">地元カナディアンに最も支持を集める地元密着型カレッジ！</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gakko">
                            <a href="<?php echo esc_url( get_permalink( 569 ) ); ?>" class="gakko-a">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-14.png" alt="" width="100%">
                                <div class="gakkoback">
                                <h5 class="text-center gakko-inside">Niagara College</h5>
                                <p class="text-center gakko-desc">学生満足度がオンタリオ州トップクラスの優秀カレッジ</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gakko">
                            <a href="<?php echo esc_url( get_permalink( 570 ) ); ?>" class="gakko-a">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-15.png" alt="" width="100%">
                                <div class="gakkoback">
                                <h5 class="text-center gakko-inside">Algonquin College</h5>
                                <p class="text-center gakko-desc">生徒の成功第一！手厚いサポート</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="gakko">
                            <a href="<?php echo esc_url( get_permalink( 571 ) ); ?>" class="gakko-a">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-16.png" alt="" width="100%">
                                <div class="gakkoback">
                                <h5 class="text-center gakko-inside">Confederation College</h5>
                                <p class="text-center gakko-desc">少人数制クラスでスキルをきっちり習得！</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gakko">
                            <a href="<?php echo esc_url( get_permalink( 437 ) ); ?>" class="gakko-a">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-17.png" alt="" width="100%">
                                <div class="gakkoback">
                                <h5 class="text-center gakko-inside">Georgian College</h5>
                                <p class="text-center gakko-desc">これぞカナダ！というキャンパスライフが遅れる素晴らしい学校施設！</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- デリート -->
                    </div>
                </div>
               &nbsp;&nbsp;
                  <p style="color:#000080; text-align:center;"><strong>・・・ こちらはほんの一部となります。ご興味のある学校がございましたら是非お問合せ下さいませ！ ・・・</strong></p>
                  <h3 class="text-center" style="font-size: 25px; margin: 40px 0 10px 0;font-weight:bold;color:black;">私立カレッジ</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="gakko">
                            <a href="<?php echo esc_url( get_permalink( 572 ) ); ?>" class="gakko-a">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-18.png" alt="" width="100%">
                                <div class="gakkoback">
                                <h5 class="text-center gakko-inside">ILAC International College</h5>
                                <p class="text-center gakko-desc">ビジネス、ITならアイラックインターナショナル私立カレッジ！！</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gakko">
                            <a href="<?php echo esc_url( get_permalink( 573 ) ); ?>" class="gakko-a">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-19.png" alt="" width="100%">
                                <div class="gakkoback">
                                <h5 class="text-center gakko-inside">Greystone College</h5>
                                <p class="text-center gakko-desc">豊富なプログラム数で人気なグレイストーン私立カレッジ！！</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gakko">
                            <a href="<?php echo esc_url( get_permalink( 574 ) ); ?>" class="gakko-a">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-20.png" alt="" width="100%">
                                <div class="gakkoback">
                                <h5 class="text-center gakko-inside">Toronto School of Management</h5>
                                <p class="text-center gakko-desc">便利な立地に綺麗な校舎♪トロントの新星私立カレッジ！</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                &nbsp;
                  &nbsp;
                  <p style="color:#000080; text-align:center;"><strong>・・・ こちらはほんの一部となります。ご興味のある学校がございましたら是非お問合せ下さいませ！ ・・・</strong></p>


              </section>
            </article>
        </div>

        <div class="col-md-3 cate-navi sp-yappaireru">
        <?php 
        $args = array(
            'menu' => '留学サポート',
             'container' => false);
            wp_nav_menu( $args );
         ?>
        </div>

   </div>
</div>


</div> <!-- /container -->



<!-- ################## page contents end ################## -->

<?php get_footer(); ?>