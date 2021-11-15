<?php
    $sub_layanan = $this->Menu_Model->submenu_layanan();
    $sub_gallery = $this->Menu_Model->submenu_gallery();
?>
<div class="main-menu">
    <span id="navwrapper" class="hoc clear"> 
        <nav id="mainav">
            <ul class="clear">
                <li class="active"><a href="index.html">Home</a></li>
                <li>
                    <a class="drop" href="#">Layanan</a>
                    <ul>
                        <?php foreach($sub_layanan as $sub_layanan) { ?>
                            <li><a href="pages/gallery.html"><?php echo $sub_layanan->nama_submenu ?></a></li>
                        <?php } ?>
                    </ul>
                </li>
                <li>
                    <a class="drop" href="#">Gallery</a>
                    <ul>
                        <?php foreach($sub_gallery as $sub_gallery) { ?>
                            <li><a href="pages/gallery.html"><?php echo $sub_gallery->nama_submenu ?></a></li>
                        <?php } ?>
                    </ul>
                </li>
            </ul>
        </nav>
        
        <div id="searchform">
            <div>
                <form action="#" method="post">
                <fieldset>
                    <legend>Quick Search:</legend>
                    <input type="text" placeholder="Enter search term&hellip;">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </fieldset>
                </form>
            </div>
        </div>
    </span>
</div>
