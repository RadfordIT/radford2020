<?php
get_header();
global $wp_query;
$total_results = $wp_query->found_posts;
?>
<title>Search results for <?php echo get_search_query();?> | Radford College</title>
<div class="search-wrap" style="margin: 0px 15px">

<h1>Search results for <?php echo get_search_query();?></h1>

<?php if ( have_posts() ) : ?>
    <h3><?php echo $total_results?> results found.</h3>
    <div class="embeddedcontent">
    <ul class="search">
                <?php /* Start the Loop */ ?>

                <?php while ( have_posts() ) : the_post(); ?>
                    <li>
                        <a href="<?php echo get_the_permalink();?>"><h1><?php echo get_the_title();?></h1></a>
                    </li>
                <?php endwhile; ?>
    </ul>
            <?php else : ?>
                <h3>No results found.</h3>
            <?php endif; ?>
</div>
</div>
<?php
get_footer();
?>
