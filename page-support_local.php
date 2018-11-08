<?php 
/*
Template Name: 現地サポート 固定ページ
Description: 現地サポート 固定ページのテンプレート
*/
get_header(); ?>

    <div class="jumbotron jumbo-pic05">
        <div class="container" style="margin-top:20px;margin-bottom:20px;">
            <div> <!-- contents in jumbotron  -->
                <div class="text-center">
                    <h1 class="text-white" id="pagetoptitle">現地サポート</h1>
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
            'menu' => '現地サポート',
             'container' => false);
            wp_nav_menu( $args );
         ?>
        </div>
        <div class="col-md-9">
        <?php 
        if (have_posts()) :
            while (have_posts()) : the_post();
         ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( $class = 'page'); ?>>
              <section class="content">
                <h2 id="h2-top"><?php the_title( $before = '', $after = '', $echo = true ); ?></h2>
                

                <?php the_content( $more_link_text = null, $strip_teaser = false ); ?>


              </section>
            </article>
            <?php 
                endwhile;
            endif;
             ?>
        </div>

        <div class="col-md-3 cate-navi sp-yappaireru">
        <?php 
        $args = array(
            'menu' => '現地サポート',
             'container' => false);
            wp_nav_menu( $args );
         ?>
        </div>

   </div>
</div>


</div> <!-- /container -->



<!-- ################## page contents end ################## -->

<?php get_footer(); ?>