<?php /* Template Name: postlist */ ?>

<h1> Pierwszy post</h1>
<p>tresc pierwszego posta</p>
<h1> Pierwszy post</h1>
<p>tresc pierwszego posta</p>
<h1> Pierwszy post</h1>
<p>tresc pierwszego posta</p>
<h1> Pierwszy post</h1>
<p>tresc pierwszego posta</p>
<h1> Pierwszy post</h1>
<p>tresc pierwszego posta</p>
<h1> Pierwszy post</h1>
<p>tresc pierwszego posta</p>

<?php 
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
<?php if ( $wpb_all_query->have_posts() ) : ?>
 
<ul>
 
    <!-- the loop -->
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <li><p><?php the_content(); ?></p>
    <?php endwhile; ?>
    <!-- end of the loop -->
 
</ul>
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>