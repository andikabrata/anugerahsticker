<?php
    $this->load->view('home/slider');
?>

<div class="gallery">
    <div class="col-md-12 col-md-offset-2">
        <div class="heading">
            <h2><b>CONTOH - CONTOH <span>STICKER</b></span></h2>
            <div class="line"></div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="card-columns">
            <?php foreach ($gallery as $gallery) { ?>
                <div class="card card-pin">
                    <img class="card-img" src="<?php echo base_url('assets/upload/image/' . $gallery->nama_gambar . $gallery->file_gambar);?>" alt="Card image">
                    <div class="overlay">
                        <h2 class="card-title title"><?php echo $gallery->nama_gambar ?></h2>
                        <div class="more">
                            <a href="post.html">
                                <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More 
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>