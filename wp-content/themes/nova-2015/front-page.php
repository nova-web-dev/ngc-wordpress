

<?php get_header(); ?>
<!-- Logo Starts -->
<div class="container sides-unpadded text-center unselectable" id="logo-container">
    <h1 id="logo-text">nova</h1>
    <h1 id="logo-subtext">gaming community</h1>
</div>
<!-- Logo Ends -->
<!-- Carousel Starts -->
<div class="container" id="carousel-container">
    <div id="myCarousel" class="carousel slide unselectable" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- Slide 1 -->
            <div class="item active">
                <img style="width:100%" src="images/slider/001-minecraft.jpg" alt="image-missing!">
                <div class="carousel-overlay">
                    <!-- 100% div filling entire picture -->
                    <div class="textbox-1-1 text-center">
                        <span id="text-span-1">We have a minecraft server!</span>
                        <span id="text-span-2"><br />Join us there! eis.novagaming.co.za</span>
                    </div>
                </div>
            </div>
            <!-- End of slide 1 -->
            <div class="item">
                <img style="width:100%" src="images/slider/001-minecraft.jpg" alt="image-missing!">
            </div>
            <div class="item">
                <img style="width:100%" src="images/slider/001-minecraft.jpg" alt="image-missing!">
            </div>
            <div class="item">
                <img style="width:100%" src="images/slider/001-minecraft.jpg" alt="image-missing!">
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- Carousel Ends -->
<!-- Main Content Starts -->
<div class="container text-center" id="main-content">
<!--     <div id="cs-news-banner" class="text-center">
        <h1>News</h1>
    </div>
    <hr class="dark"> -->
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="post-header">
            <div class="date"><?php the_time( 'M j y' ); ?></div>
            <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <div class="author"><?php the_author(); ?></div>
        </div>
        <!--end post header-->
        <div class="entry clear">
            <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
            <?php the_content(); ?>
            <?php edit_post_link(); ?>
            <?php wp_link_pages(); ?> 
        </div>
        <!--end entry-->
        <div class="post-footer">
            <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
        </div>
        <!--end post footer-->
    </div>
    <!--end post-->
    <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    <div class="navigation index">
        <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
        <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
    </div>
    <!--end navigation-->
    <?php else : ?>
    <?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
