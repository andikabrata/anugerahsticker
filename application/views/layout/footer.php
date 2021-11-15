<?php
    $sub_layanan = $this->Menu_Model->submenu_layanan();
    $gallery = $this->Gallery_Model->gallery();
?>

<div class="bgded overlay row4" style="background-image:url('images/demo/backgrounds/01.png');">
    <footer id="footer" class="hoc clear"> 
        <div class="center btmspace-50">
            <h6 class="heading">ANUGERAH STICKER</h6>
            <ul class="faico clear">
                <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            </ul>
        </div>
        <hr class="btmspace-50">
        <div class="one_quarter first">
            <h6 class="heading">Kolom Saran</h6>
        
            <form action="#" method="post">
                <fieldset>
                    <legend>Newsletter:</legend>
                    <input class="btmspace-15" type="text" value="" placeholder="Name">
                    <input class="btmspace-15" type="text" value="" placeholder="Email">
                    <textarea name="komentar3" cols="30" rows="3">Silahkan isi saran anda</textarea>
                    <button type="submit" value="submit">Submit</button>
                </fieldset>
            </form>
        </div>
        <div class="one_quarter">
            <h6 class="heading">Rangkuman Layanan</h6>
            <ul class="nospace linklist">
                <?php foreach (array_slice($sub_layanan, 0, 4) as $sub_layanan) {?>
                    <li><a href="#"><?php echo $sub_layanan->nama_submenu ?></a></li>
                <?php } ?>
            </ul>
        </div>
        <div class="one_quarter">
            <h6 class="heading">Rangkuman Gallery</h6>
            <ul class="nospace clear latestimg">
                <?php foreach(array_slice($gallery,0,9) as $gallery) { ?>
                    <li><a class="imgover" href="#"><img src="<?php echo base_url('assets/upload/image/' . $gallery->nama_gambar . $gallery->file_gambar);?>" alt=""></a></li>
                <?php } ?>
            </ul>
        </div>
    </footer>
</div>

<div class="telepon">
  <a href="tel:<?php echo '6283806623405' ?>"><i class="fa fa-phone"></i></a>
</div>
<div class="kontakwa">
  <a href="https://wa.me/<?php echo str_replace('+','','6283806623405') ?>?text=Saya%20tertarik%20untuk%20Menggunakan%20Layanan%20Anda.%20Apakah%20bisa%20dibantu?" class="topbar-social-item"><i class="fa fa-whatsapp"></i></a>
</div>

<div class="wrapper row5">
    <div id="copyright" class="hoc clear"> 
        <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - <a href="#">Anugerah Sticker</a></p>
    </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-angle-up"></i></a>

<!-- JAVASCRIPTS -->
<script src="<?php echo base_url() ?>assets/tema/assets/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/tema/assets/js/jquery.backtotop.js"></script>
<script src="<?php echo base_url() ?>assets/tema/assets/js/jquery.mobilemenu.js"></script>