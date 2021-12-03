<?php 

?>

<div class="wrapper row2">
    <section class="hoc container clear"> 
        <div class="sectiontitle">
            <h6 class="heading">Video Katalog Kami</h6>
        </div>
        <div class="row tm-catalog-item-list">
            <?php foreach($video as $video) { ?>
                <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                    <div class="position-relative tm-thumbnail-container">
                        <img src="<?php echo base_url('assets/upload/image/' . $video->thumbnail  . $video->file_thumbnail); ?>" alt="Image" class="img-fluid tm-catalog-item-img">    
                        <a href="<?php echo base_url('video/read/' . $video->nama_param_link); ?>" class="position-absolute tm-img-overlay">
                            <i class="fa fa-play tm-overlay-icon"></i>
                        </a>
                    </div>    
                    <div class="p-4 tm-bg-gray tm-catalog-item-description">
                        <h3 class="tm-text-primary mb-3 tm-catalog-item-title"><?php echo $video->keterangan_video?></h3>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
</div>

<div class="w3-main w3-content" style="max-width:1600px;margin-top:30px">
    <div style="text-align: center;">
        <h6 style="color: #37ae6a;">CONTOH MODEL STICKER</h6>
    </div>
    <!-- Photo grid -->
    <div class="w3-row w3-grayscale-min">
        <?php foreach($user as $u) { ?>
                <div class="w3-quarter">
                    <img src="<?php echo base_url('assets/upload/image/' . $u->nama_gambar . $u->file_gambar);?>" style="width:100%" onclick="onClick(this)" alt="<?php echo $u->nama_gambar?>">
                </div>
        <?php } ?>
    </div>

    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
        <span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
            <img id="img01" class="w3-image">
            <p id="caption"></p>
        </div>
    </div>
</div>

<!-- Pagination -->
<div class="w3-center w3-padding-32">
    <div class="w3-bar">
        <?php 
            $str_links = $this->pagination->create_links();
            $data["links"] = explode('&nbsp;',$str_links );
        
        ?>
        <ul class="tsc_pagination">
            <?php foreach($data["links"] as $link) {?>
                <li><a class="current"><?php echo $link?></a></li>
            <?php } ?>
        </ul>
    </div>
</div>

<script>
    // Modal Image Gallery
    function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    var captionText = document.getElementById("caption");
    captionText.innerHTML = element.alt;
    }
</script>