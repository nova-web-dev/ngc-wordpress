

<?php get_header(); ?>
<!-- Logo Starts -->
<div class="container sides-unpadded text-center unselectable" id="logo-container">
    <h1 id="logo-text">nova</h1>
    <h1 id="logo-subtext">gaming community</h1>
</div>
<!-- Logo Ends -->


<!-- Main Content Starts -->
<div class="container text-center" id="main-content">

    <!-- Main widget area -->
    <?php dynamic_sidebar( 'cs-widget-front-center' ); ?>
    <!-- Widget area ends -->
    
    <?php $recentPosts = new WP_Query();
    $recentPosts->query('showposts=5');
    while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="post-header">
            
            <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <div class="date">Posted on <?php the_time( 'j-M-Y' ); ?> by <?php the_author(); ?></div>
            <!-- <div class="author"><?php the_author(); ?></div> -->
        </div>
        <!--end post header-->
        <div class="entry clear">
            <div class="post-text">
                <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
                <?php the_content(); ?>
            </div>
            <!-- <?php edit_post_link(); ?> -->
            <?php wp_link_pages(); ?> 
        </div>
        <!--end entry-->
        <div class="post-footer">
            
            <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
        </div>
        <!-- <hr class="dark-thick"> -->
        <!--end post footer-->
    </div>
    <!--end post-->
    
    <div class="navigation index">
        <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
        <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
    </div>
    <!--end navigation-->
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
<script>
$(document).ready(function(){
    $('#menu-item-14').addClass('active');
});
</script>


