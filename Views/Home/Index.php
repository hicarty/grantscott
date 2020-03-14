<?php 
    define('WP_USE_THEMES', false);
    require('blog/wp-blog-header.php');
?>
<?php include("./includes/config.php");?>
<div class='header'>
    <div class="page_ratio">
    <!-- TITLE -->
    <div id="vb_title">
        <h1>CHARLES MOONEY PHOTOGRAPHY</h1>
    </div>

    <?php include("includes/navigation.php");?>
    </div>
</div>
<!-- body_text -->
<div class="main_content">
    <div class="vb_album_container"></div>
    <?php
        $number_of_posts = 5;
        $args = array( 'numberposts' => $number_of_posts );
        $recent_posts = wp_get_recent_posts( $args );
        foreach( $recent_posts as $recent_post ){
        echo "<span>".$recent_post['post_date']."</span> <br>";
        echo "<h3>".$recent_post['post_title']."</h3>";
        echo  "<p>".$recent_post['post_content']."</p><br><br>";

        }
    ?>
</div>

