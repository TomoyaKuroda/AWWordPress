    <div class="container-fluid" id="toiawase-top">
        <div class="container">
            <div class="row footer-banner">
                <div class="col-sm-8 toiawase-left">
                    <h3 class="text-white">みなさんの疑問・質問、わたしたちにご相談ください！</h3>
                    <p class="text-white">カナダ留学や生活、その後のキャリアプランまで自信をもってご回答いたします。</p>
                </div>
                <div class="col-sm-4">
                    <a href="<?php echo esc_url( get_permalink( 119 ) ); ?>"><button type="button" class="btn btn-lg toiawase-right"><i class="fas fa-envelope"></i> お問い合わせ &raquo; </button></a>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <ul class="footer-sns">
                        <li class="footer-snss"><a href="https://ameblo.jp/assistontoronto16/"><img src="<?php echo get_template_directory_uri(); ?>/img/footer_ameba.jpg" alt="Assist On Ameba blog"></a></li>
                        <li class="footer-snss"><a href="https://www.facebook.com/AssistOn/"><img src="<?php echo get_template_directory_uri(); ?>/img/footer_facebook.png" alt="Assist On Facebook"></a></li>
                        <li class="footer-snss"><a href="https://twitter.com/intent/user?screen_name=assistontoronto"><img src="<?php echo get_template_directory_uri(); ?>/img/footer_twitter.png" alt="Assist Twitter"></a></li>
                        <li class="footer-snss"><a href="https://www.instagram.com/assist_on_ryugaku/"><img src="<?php echo get_template_directory_uri(); ?>/img/footer_insta.png" alt="Assist On Instagram"></a></li>
                    </ul> 
                    <a href="<?php echo esc_url( get_permalink( 418 ) ); ?>"><button type="button" class="btn btn-lg skype-b margin-bottom-20px"><i class="fab fa-skype"></i> スカイプカウンセリング、承ります &raquo; </button></a>
                    <p><a href="<?php echo esc_url( get_permalink( get_page_by_title( '会社概要' ) ) ); ?>" class="color-black">会社概要</a>　｜　<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'プライバシーポリシー' ) ) ); ?>" class="color-black">プライバシーポリシー</a>　｜　<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'サイトマップ' ) ) ); ?>" class="color-black">サイトマップ</a></p>
                </div>
                <div class="col-sm-6">
                    <a href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Assist On logo" width="280px"></a>
                    <p>586 Yonge Street West, Unit201, Toronto, Ontario, Canada M4Y 1Z3<br>
                    日本語専用 (416)969-8880 | FAX (416)539-0100<br>
                    info@assiston-toronto.com<br>
                    営業時間　月～金曜日 10:00-18:00</p>
                </div>
            </div>
        </div> <!-- /container -->
    </footer>
    <p class="text-center" id="last-footer"><small>Copyright&copy; <?php echo date('Y'); ?> アシストオン 留学情報センター All rights reserved.</small></p>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/holder.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/offcanvas.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/instafeed.min.js"></script>
    <script type="text/javascript">
    var feed = new Instafeed({
    clientId: '22a61e6cecba4a6a8ad30e275d47d010',
    get: 'user', 
    userId: '2238909321',
    accessToken:'2238909321.22a61e6.74f3ff1b68924e979788e443960c1e4d',
    links: true,
    limit: 8, // 取得件数 
    resolution:'standard_resolution', // thumbnail (default) - 150x150 | low_resolution - 306x306 | standard_resolution - 612x612
    template: '<a href="{{link}}" target="_blank"><div class="image"><div class="interaction"><div class="instacontainer"><div class="likes"><i class="fa-heart fa"></i>{{likes}}</div><div class="comments"><i class="fa-comment fa"></i>{{comments}}</div></div></div><img src="{{image}}" width="100%"></div></a>',
      // 画像URL：{{image}} リンク：{{link}} キャプションテキスト{{caption}} いいね数：{{likes}} コメント数：{{comments}}
});
feed.run();
</script>
<!-- 親カテゴリクリックで移動 -->
<script type="text/javascript">
	jQuery(function($){
	$('.nav-link').click(function() {
    window.location.href = $(this).attr('href');
});
});
</script>
<!-- 親カテゴリーのリンクを残しつつ、アコーディオンメニューを有効にする -->
<script type="text/javascript">
jQuery(function($){
$("ul.children").after("<span class='accordionBtn'></span>");
// $("ul.children").hide();
$("ul .accordionBtn").on("click", function() {
$(this).prev().slideToggle();
$(this).toggleClass("active");
});
});
</script>
    <?php wp_footer(); ?>

  </body>
</html>