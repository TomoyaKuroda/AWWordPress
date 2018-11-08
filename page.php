<?php get_header(); ?>
<!--時刻取得 -->
<script src="<?php echo get_template_directory_uri(); ?>/js/moment.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/moment-timezone-with-data.min.js"></script>

<script type="text/javascript">

/***********************************************
* Local Time script- By Dynamic Drive (http://www.dynamicdrive.com)
* Please keep this notice intact
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
***********************************************/


function showLocalTime(container, zoneString, formatString){
	var thisobj=this
	this.container=document.getElementById(container)
	this.localtime = moment.tz(new Date(), zoneString)
	this.formatString = formatString
	this.container.innerHTML = this.localtime.format( this.formatString )
	setInterval(function(){thisobj.updateContainer()}, 1000) //update container every second
}

showLocalTime.prototype.updateContainer=function(){
	this.localtime.second(this.localtime.seconds() + 1 )
	this.container.innerHTML = this.localtime.format( this.formatString )
}


</script>



    <div class="jumbotron jumbo-pic01">
        <div class="container" style="margin-top:20px;margin-bottom:20px;">
            <div> <!-- contents in jumbotron  -->
                <div class="text-center">
                    <h1 class="text-white" id="pagetoptitle">
                    <?php if( is_category() ) : 
                      get_the_category();
                  else :
                      the_title( $before = '', $after = '', $echo = true ); 
                      endif; ?></h1>
                </div>
            </div>
        </div>
    </div>


    
<!-- ################## page contents start ################## -->



<div class="container">
    <div class="row">
        <div class="col-md-3 cate-navi sp-none">
        <?php 
        if (is_category()) :
        global $post;
        $categories = get_the_category( $post->ID );
        $categories_name = $categories[0]->name;
    else :
        $categories_name = '会社概要等';
    endif;
        $args = array(
            'menu' => $categories_name,
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
        if (is_category()) :
        global $post;
        $categories = get_the_category( $post->ID );
        $categories_name = $categories[0]->name;
    else :
        $categories_name = '会社概要等';
    endif;
        $args = array(
            'menu' => $categories_name,
             'container' => false);
            wp_nav_menu( $args );
        ?>
        </div>
   </div>
</div>


</div> <!-- /container -->



<!-- ################## page contents end ################## -->

<?php get_footer(); ?>