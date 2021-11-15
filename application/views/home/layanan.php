<?php
    $layanan = $this->Layanan_Model->layanan();
?>

<div class="wrapper row3">
    <main class="hoc container clear"> 
        <!-- main body -->
        <section id="introblocks">
            <ul class="nospace group">
                <?php foreach($layanan as $layanan) { ?>
                    <li class="one_third">
                        <figure><a class="imgover" href="#"><img src="<?php echo base_url('assets/upload/image/' . $layanan->nama_gambar . $layanan->file_gambar); ?>"  alt=""></a>
                            <figcaption>
                                <h6 class="heading"><?php echo $layanan->nama_layanan ?></h6>
                                <p><?php echo $layanan->deskripsi_layanan ?></p>
                            </figcaption>
                        </figure>
                    </li>
                <?php } ?>
            </ul>
        </section>
        <!-- / main body -->
        <div class="clear"></div>
    </main>
</div>