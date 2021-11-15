<?php 
?>

<div class="wrapper row2">
    <section class="hoc container clear"> 
        <div class="sectiontitle">
            <p class="nospace font-xs">Mollis eu commodo eu dui quisque</p>
            <h6 class="heading">Ut ipsum vivamus tincidunt</h6>
        </div>
        <ul class="nospace group center">
            <li class="one_third first">
                <article><a href="#"><i class="fa fa-camera-retro fa-5x btmspace-50"></i></a>
                <h6 class="heading">Tincidunt enim etiam</h6>
                <p class="btmspace-30">Tellus lacus tempor in pharetra id imperdiet sit amet enim suspendisse potenti fusce ornare [&hellip;]</p>
                <footer><a class="btn" href="#">Read More</a></footer>
                </article>
            </li>
            <li class="one_third">
                <article><a href="#"><i class="fa fa-camera-retro fa-5x btmspace-50"></i></a>
                <h6 class="heading">Congue nulla facilisi</h6>
                <p class="btmspace-30">Laoreet ligula phasellus pede phasellus faucibus enim quis lacus praesent ipsum vulputate [&hellip;]</p>
                <footer><a class="btn" href="#">Read More</a></footer>
                </article>
            </li>
            <li class="one_third">
                <article><a href="#"><i class="fa fa-camera-retro fa-5x btmspace-50"></i></a>
                <h6 class="heading">Nunc congue curabitur</h6>
                <p class="btmspace-30">Vitae lacinia eu interdum tempus massa in sodales purus non nisi cras porta lacinia ut [&hellip;]</p>
                <footer><a class="btn" href="#">Read More</a></footer>
                </article>
            </li>
        </ul>
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