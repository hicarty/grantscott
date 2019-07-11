<?php include("./includes/config.php");?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
    <head>
    <?php include("./includes/head-tag-contents.php");?>
    </head>
    <body id="body" class="page-body">
        
        <div id="vb_page" class="/*background_cover:*/ background_cover_no /*font_size:*/ font_size_1 /*left_margin:*/ left_margin_no /*logo_retina:*/ logo_retina_yes /*logo_visibility:*/ logo_visibility_yes /*menu_font_size:*/ menu_font_size_3 /*menu_position:*/ menu_position_left /*page_align:*/ page_align_yes /*page_fixed_header:*/ page_fixed_header_yes /*page_full_width:*/ page_full_width_no /*page_scaling:*/ page_scaling_yes /*page_scaling_top:*/ page_scaling_top_yes /*text_full_width:*/ text_full_width_no /*theme:*/ theme_viewbook_pro /*thumbnails_hide_name:*/ thumbnails_hide_name_no /*thumbnails_size:*/ thumbnails_size_small /*title_font_size:*/ title_font_size_7 /*title_visibility:*/ title_visibility_no /*top_margin:*/ top_margin_yes logo content_type_scrolling_gallery"  data-env="production">
            
            <?php if ($CURRENT_PAGE == "Index") { ?>
                <?php include("./Views/Home/Index.php");?>
            <?php } ?>
            <?php if ($CURRENT_PAGE == "People") { ?>
                <?php include("./Views/Home/People.php");?>
            <?php } ?>
            <div class="footer">
                <!-- FOOTER -->
                <div class="push">&nbsp;</div>

                <div id="vb_footer" class="">
                    <span class='vb_footer_text'></span>
                </div>

            </div>
        </div>

        </div>

        <?php include("./includes/footer.php");?>
    </body>
</html>
