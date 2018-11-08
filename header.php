<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="description" content="カナダ・トロント留学エージェント。カナダ移民局認定ビザコンサルタント在籍だからこその安心のサポートをご提供。カナダ語学学校選び、ビザ、ワーホリ、ジュニアキャンプ、ホームステイからカナダ生活のサポートまで、皆様のカナダ生活を完全アシストします。">
<meta name="keywords" content="カナダ,トロント,留学,現地,エージェント,安い,ビザ,ワーホリ,ホームステイ,サポート,ビザ延長,語学留学,インターンシップ,カレッジ,カナダ生活">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"><!--スタイルシートの呼び出し-->
      <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favi.png"><!--ファビコンの呼び出し-->
      <script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
    
    <title>
<?php if(is_home()): ?>
<?php bloginfo('name'); ?>
<?php elseif(is_archive()): ?>
<?php the_title(); ?>｜<?php bloginfo('name'); ?>
<?php else: ?>
<?php the_title(); ?>｜<?php bloginfo('name'); ?>
<?php endif; ?>
    </title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="sticky-top">
        <!-- Navigation Start -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light padding-top-bottom-0">
            <a class="navbar-brand mr-auto mr-lg-0" href="<?php echo esc_url( home_url( ) ); ?>"><img class="margin-0" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" height="50px"></a>
            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item nav-lf">
                    <a class="nav-link" href="<?php echo esc_url( home_url( ) ); ?>"><i class="fas fa-home"></i></a>
                </li>
                <li class="nav-item dropdown nav-lf">
                    <a class="nav-link dropdown-toggle link01" href="<?php echo esc_url( get_permalink( 6 ) ); ?>" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">アシストオンについて</a>
                    <ul class="dropdown-menu children" aria-labelledby="dropdown01">
                        
                        <li><a class="dropdown-item" href="<?php echo esc_url( get_permalink( 9 ) ); ?>">スタッフ紹介</a></li>
						<li><a class="dropdown-item" href="<?php echo esc_url( get_permalink( 236 ) ); ?>">カナダについて</a></li>
                        <li><a class="dropdown-item" href="<?php echo esc_url( get_permalink( 11 ) ); ?>">トロントについて</a></li>
                        <li><a class="dropdown-item" href="<?php echo esc_url( home_url( ) ); ?>/information">お知らせ</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown nav-lf">
                    <a class="nav-link dropdown-toggle" href="<?php echo esc_url( get_permalink( 15 ) ); ?>" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">留学サポート</a>
                    <ul class="dropdown-menu children" aria-labelledby="dropdown01">
                    <li><a class="dropdown-item" href="<?php echo esc_url( get_permalink( 17 ) ); ?>">語学留学</a></li>
                    <li><a class="dropdown-item" href="<?php echo esc_url( get_permalink( 19 ) ); ?>">ワーキングホリデー留学</a></li>
                    <li><a class="dropdown-item" href="<?php echo esc_url( get_permalink( 29 ) ); ?>">カレッジ・大学進学</a></li>
                    <li><a class="dropdown-item" href="<?php echo esc_url( get_permalink( 31 ) ); ?>">2カ国、3カ国留学</a></li>
                    <li><a class="dropdown-item" href="<?php echo esc_url( get_permalink( 33 ) ); ?>">高校留学</a></li>
                    <li><a class="dropdown-item" href="<?php echo esc_url( get_permalink( 35 ) ); ?>">親子留学</a></li>
                    <li><a class="dropdown-item" href="<?php echo esc_url( get_permalink( 1340 ) ); ?>">サマーキャンプ</a></li>
                        <!-- ここ、削除
                    <li><a class="dropdown-item" href="<?php echo esc_url( get_permalink( 348 ) ); ?>">短期・長期留学の定義</a></li>
                    <li><a class="dropdown-item" href="<?php echo esc_url( get_permalink( 351 ) ); ?>">短期留学プラン</a></li>
                    <li><a class="dropdown-item" href="<?php echo esc_url( get_permalink( 371 ) ); ?>">長期留学プラン</a></li>
						-->
                    <li><a class="dropdown-item" href="<?php echo esc_url( get_permalink( 37 ) ); ?>">インターンシップ</a></li>
                    <li><a class="dropdown-item" href="<?php echo esc_url( get_permalink( 398 ) ); ?>">ファームステイ</a></li>
                    <li><a class="dropdown-item" href="<?php echo esc_url( get_permalink( 1123 ) ); ?>">留学Q＆A</a></li>
                    <li><a class="dropdown-item" href="<?php echo esc_url( get_permalink( 41 ) ); ?>">学校情報</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown nav-lf">
                    <a class="nav-link dropdown-toggle" href="<?php echo esc_url( get_permalink( 47 ) ); ?>" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ビザサポート</a>
                    <ul class="dropdown-menu children" aria-labelledby="dropdown01">
                        <li><a class="dropdown-item" href="<?php echo esc_url( get_permalink( 50 ) ); ?>">学生ビザ</a></li>
                        <li><a class="dropdown-item" href="<?php echo esc_url( get_permalink( 61 ) ); ?>">観光ビザ</a></li>
                        <li><a class="dropdown-item" href="<?php echo esc_url( get_permalink( 63 ) ); ?>">ワーキングホリデービザ</a></li>
						<li><a class="dropdown-item" href="<?php echo esc_url( get_permalink( 286 ) ); ?>">就労ビザ・永住権</a></li>
                        <li><a class="dropdown-item" href="<?php echo esc_url( get_permalink( 65 ) ); ?>">ビザ延長</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-lf">
                    <a class="nav-link" href="<?php echo esc_url( get_permalink( 71 ) ); ?>">ホームステイ</a>
                </li>
                <li class="nav-item nav-lf">
                    <a class="nav-link" href="<?php echo esc_url( get_permalink( 73 ) ); ?>">現地サポート</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo esc_url( get_permalink( 119 ) ); ?>"><button type="button" class="btn btn-round btn-sm pink-b nav-lf" style="margin-top:3px;"><i class="fas fa-envelope"></i> お問い合わせ &raquo;</button></a>
                </li>
                </ul>
            </div>
    </nav>
    </header>