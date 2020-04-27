<!-- LOGO -->
<div id="vb_logo">
</div>

<!-- MENU -->
<ul id="vb_menu"><li><a class='<?php if ($CURRENT_PAGE ?? '' == "Index") {?>active<?php }?>' href="./" >Home</a></li><li><a class='<?php if ($CURRENT_PAGE ?? '' == "People") {?>active<?php }?>' href="./people/" >People</a></li><li><a class='<?php if ($CURRENT_PAGE ?? '' == "Places and Spaces") {?>active<?php }?>' href="./places-and-spaces" >Places and Spaces</a></li><li><a class='<?php if ($CURRENT_PAGE ?? '' == "Projects") {?>active<?php }?>' href="./projects" >Projects</a></li><li><a href="./films" target="_blank">Films</a></li><li><a href="./blog/index.pho" target="_blank">Blog</a></li><li><a class='<?php if ($CURRENT_PAGE ?? '' == "About") {?>active<?php }?>' href="./about" >About</a></li><li><a class='<?php if ($CURRENT_PAGE ?? '' == "Contact") {?>active<?php }?>' href="./contact" >Contact</a></li></ul>

<!-- SIDE -->
<div id="vb_info_container">
    <!-- SIDE_TEXT_TITLE -->
    <h2>&nbsp;</h2>
    <!-- SIDE_TEXT -->
    <div id="vb_info_content">
    @if ($CURRENT_PAGE ?? '' == "Index")
        <br><br><br><br>&copy; All images copyright Charles Mooney <?php print(gmdate("Y"));?>
    @endif
    </div>
</div>