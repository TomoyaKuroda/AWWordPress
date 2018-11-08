<?php get_header(); ?>

    <div class="jumbotron jumbo-pic01">
        <div class="container" style="margin-top:20px;margin-bottom:20px;">
            <div> <!-- contents in jumbotron  -->
                <div class="text-center">
                    <h1 class="text-white" id="pagetoptitle"><?php the_title( $before = '', $after = '', $echo = true ); ?></h1>
                </div>
            </div>
        </div>
    </div>


    
<!-- ################## page contents start ################## -->



<div class="container">
    <div class="row">
        <div class="col-md-12">
        <?php 
        if (have_posts()) :
            while (have_posts()) : the_post();
         ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( $class = 'page'); ?>>
              <section class="content">
                <h2 id="h2-top"><?php the_title( $before = '', $after = '', $echo = true ); ?></h2>
                
                <!-- layout: ここは基本ワードプレスでの編集 -->
<!--                 <h3 class="text-center" style="font-size: 25px; margin: 40px 0 30px 0;">日本人スタッフ</h3>

                <div class="row" style="margin-top:20px">
                    <div class="col-md-3">
                        <img src="img/staffpic01.png" alt="" width="100%">
                    </div>
                    <div class="col-md-9">
                        <h3>Nagisa（日本人カウンセラー）</h3>
                        <p>東京都出身のNagisaです。<br>
                            カナダでは現地高校と4年制大学を卒業しています。長年の留学経験を活かし
                            、皆様がより良い留学生活を送れるよう、全力でサポート致します！
                            英語に関するご質問や、トロントでの生活面に関するお悩みでも、何でもご相
                            談下さいね！</p>
                    </div>
                </div>
                <div class="row" style="margin-top:20px">
                    <div class="col-md-3">
                        <img src="img/staffpic01.png" alt="" width="100%">
                    </div>
                    <div class="col-md-9">
                        <h3>Nagisa（日本人カウンセラー）</h3>
                        <p>東京都出身のNagisaです。<br>
                            カナダでは現地高校と4年制大学を卒業しています。長年の留学経験を活かし
                            、皆様がより良い留学生活を送れるよう、全力でサポート致します！
                            英語に関するご質問や、トロントでの生活面に関するお悩みでも、何でもご相
                            談下さいね！</p>
                    </div>
                </div>
                <div class="row" style="margin-top:20px">
                    <div class="col-md-3">
                        <img src="img/staffpic01.png" alt="" width="100%">
                    </div>
                    <div class="col-md-9">
                        <h3>Nagisa（日本人カウンセラー）</h3>
                        <p>東京都出身のNagisaです。<br>
                            カナダでは現地高校と4年制大学を卒業しています。長年の留学経験を活かし
                            、皆様がより良い留学生活を送れるよう、全力でサポート致します！
                            英語に関するご質問や、トロントでの生活面に関するお悩みでも、何でもご相
                            談下さいね！</p>
                    </div>
                </div>
                <h3 class="text-center" style="font-size: 25px; margin: 40px 0 30px 0;">韓国人スタッフ</h3>

                <div class="row" style="margin-top:20px">
                    <div class="col-md-3">
                        <img src="img/staffpic01.png" alt="" width="100%">
                    </div>
                    <div class="col-md-9">
                        <h3>Nagisa（日本人カウンセラー）</h3>
                        <p>東京都出身のNagisaです。<br>
                            カナダでは現地高校と4年制大学を卒業しています。長年の留学経験を活かし
                            、皆様がより良い留学生活を送れるよう、全力でサポート致します！
                            英語に関するご質問や、トロントでの生活面に関するお悩みでも、何でもご相
                            談下さいね！</p>
                    </div>
                </div>
                <div class="row" style="margin-top:20px">
                    <div class="col-md-3">
                        <img src="img/staffpic01.png" alt="" width="100%">
                    </div>
                    <div class="col-md-9">
                        <h3>Nagisa（日本人カウンセラー）</h3>
                        <p>東京都出身のNagisaです。<br>
                            カナダでは現地高校と4年制大学を卒業しています。長年の留学経験を活かし
                            、皆様がより良い留学生活を送れるよう、全力でサポート致します！
                            英語に関するご質問や、トロントでの生活面に関するお悩みでも、何でもご相
                            談下さいね！</p>
                    </div>
                </div>
                <div class="row" style="margin-top:20px">
                    <div class="col-md-3">
                        <img src="img/staffpic01.png" alt="" width="100%">
                    </div>
                    <div class="col-md-9">
                        <h3>Nagisa（日本人カウンセラー）</h3>
                        <p>東京都出身のNagisaです。<br>
                            カナダでは現地高校と4年制大学を卒業しています。長年の留学経験を活かし
                            、皆様がより良い留学生活を送れるよう、全力でサポート致します！
                            英語に関するご質問や、トロントでの生活面に関するお悩みでも、何でもご相
                            談下さいね！</p>
                    </div>
                </div> -->
                <?php the_content( $more_link_text = null, $strip_teaser = false ); ?>


              </section>
            </article>
            <?php 
                endwhile;
            endif;
             ?>
        </div>

   </div>
</div>


</div> <!-- /container -->



<!-- ################## page contents end ################## -->

<?php get_footer(); ?>