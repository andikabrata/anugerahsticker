<?php
    $site = $this->Kontak_Model->listing();
?>

<div id="loading">
  <div id="loading-center">
    <div id="loading-center-absolute">
      <div class="object" id="object_one"></div>
      <div class="object" id="object_two"></div>
      <div class="object" id="object_three"></div>
      <div class="object" id="object_four"></div>
    </div>
  </div>
</div>

<div class="bgded overlay" style="background-image:url('<?php echo base_url('assets/images/02.png');?>'); background-attachment: fixed;"> 
  <header id="header" class="hoc clear"> 
    <div id="logo" class="one_quarter first">
      <h1><a href="<?php echo base_url() ?>">Anugerah</a></h1>
      <p>CUTTING STICKER</p>
    </div>
    <div class="three_quarter">
      <ul class="nospace clear">
        <li class="one_third first">
          <div class="block clear"><a href="#"><i class="fa fa-phone"></i></a> <span><strong>Kontak Kami:</strong> <?php echo $site->nomer_telepon ?><br><br><?php echo $site->nomer_telepon2 ?></span></div>
        </li>
        <li class="one_third">
          <div class="block clear"><a href="#"><i class="fa fa-envelope"></i></a> <span><strong>Email Kami:</strong> <?php echo $site->email ?></span></div>
        </li>
        <li class="one_third">
          <div class="block clear"><a href="#"><i class="fa fa-address-card"></i></a> <span><strong>Alamat:</strong> <?php echo $site->alamat ?></span></div>
        </li>
      </ul>
    </div>
  </header>
  
  <!-- Start Pre-Loader-->
 