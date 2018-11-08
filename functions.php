<?php  
// 管理ナビを表示するとログイン時にデザインが崩れます
//add_filter( 'show_admin_bar', '__return_false' );


// カスタムメニューの有効化
add_theme_support( 'menus' );

//カスタム投稿タイプの追加
add_action( 'init', 'create_post_type' );
function create_post_type() {

////カスタム投稿タイプ１（ここから）
//register_post_type(
//'news',// 投稿タイプ名の定義
//array(
//'labels' => array(
//'name' => __( 'お知らせ' ),// 管理画面上で表示する投稿タイプ名
//'singular_name' => __( 'news' )// カスタム投稿の識別名
//),
//'public' => true,// 投稿タイプをpublicにするか
//'has_archive'   => false, // アーカイブ機能ON/OFF
//'menu_position' =>5, // 管理画面上での配置場所
//)
//);
////カスタム投稿タイプ１（ここまで）

//カスタム投稿タイプ２（ここから）
register_post_type(
'school',
array(
'labels' => array(
'name' => __( '学校情報' ),
'singular_name' => __( 'school' )
),
'public' => true,
'has_archive'   => false, // アーカイブ機能ON/OFF
'menu_position' =>5,
)
);
//カスタム投稿タイプ２（ここまで）



}




//WordPressエディターのテキスト→ビジュアル変更時の自動タグ削除回避
function my_tiny_mce_before_init( $init_array ) {
	$init_array['valid_elements']          = '*[*]';
	$init_array['extended_valid_elements'] = '*[*]';
	return $init_array;
}
add_filter( 'tiny_mce_before_init' , 'my_tiny_mce_before_init' );

//Custom CSS Widget 投稿編集ページの「Custom CSS」にスタイルを入力できるようにする
add_action('admin_menu', 'custom_css_hooks');
add_action('save_post', 'save_custom_css');
add_action('wp_head','insert_custom_css');
function custom_css_hooks() {
	add_meta_box('custom_css', 'Custom CSS', 'custom_css_input', 'post', 'normal', 'high');
	add_meta_box('custom_css', 'Custom CSS', 'custom_css_input', 'page', 'normal', 'high');
}
function custom_css_input() {
	global $post;
	echo '<input type="hidden" name="custom_css_noncename" id="custom_css_noncename" value="'.wp_create_nonce('custom-css').'" />';
	echo '<textarea name="custom_css" id="custom_css" rows="5" cols="30" style="width:100%;">'.get_post_meta($post->ID,'_custom_css',true).'</textarea>';
}
function save_custom_css($post_id) {
	if (!wp_verify_nonce($_POST['custom_css_noncename'], 'custom-css')) return $post_id;
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return $post_id;
	$custom_css = $_POST['custom_css'];
	update_post_meta($post_id, '_custom_css', $custom_css);
}
function insert_custom_css() {
	if (is_page() || is_single()) {
		if (have_posts()) : while (have_posts()) : the_post();
			echo '<style type="text/css">'.get_post_meta(get_the_ID(), '_custom_css', true).'</style>';
		endwhile; endif;
		rewind_posts();
	}
}

	
/*
 * 投稿にアーカイブ(投稿一覧)を持たせるようにします。
 * ※ 記載後にパーマリンク設定で「変更を保存」してください。
 */
function post_has_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'information'; // ページ名
	}
	return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

//概要（抜粋）の文字数調整
function my_excerpt_length($length) {
return 170;
}
add_filter('excerpt_length', 'my_excerpt_length');

//概要（抜粋）の省略文字
function my_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'my_excerpt_more');


// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');
//サムネイルサイズ追加
add_image_size('post_500x500_thumbnail', 500, 500, true);

//現在の投稿」のアイキャッチ画像をimgタグにして取得する新しい関数
function get_thumb_img($size = 'full') {
  $thumb_id = get_post_thumbnail_id();                         // アイキャッチ画像のIDを取得
  $thumb_img = wp_get_attachment_image_src($thumb_id, $size);  // $sizeサイズの画像内容を取得
  $thumb_src = $thumb_img[0];    // 画像のurlだけ取得
  $thumb_alt = get_the_title();  //alt属性に入れるもの（記事のタイトルにしています alt="'.$thumb_alt.'"
  return '<img src="'.$thumb_src.'" alt="" width="100%" style="margin-top:10px;margin-bottom:10px;">';
}

//抜粋文字数を引数によってその場その場で変更
function my_excerpt($length) {
	global $post;
	$content = mb_substr(strip_tags($post->post_excerpt),0,$length);
	if(!$content){
		$content =  $post->post_content;
		$content =  do_shortcode($content);
		$content =  strip_tags($content);
		$content =  str_replace("&nbsp;","",$content);
		$content =  html_entity_decode($content,ENT_QUOTES,"UTF-8");
		$content =  mb_substr($content,0,$length);
	}
	return $content;
}

/** ビジュアルエディタのbボタンのstrongタグを太字タグに置き換え */
function modify_formats($settings){
    $formats = array(
        'bold' => array('inline' => 'b'),
    );
    $settings['formats'] = json_encode( $formats );
    return $settings;
}
add_filter('tiny_mce_before_init', 'modify_formats');