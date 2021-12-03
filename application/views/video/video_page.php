<?php
    $this->load->view('home/slider');
?>
<div class="container-fluid">
	<div class="mx-auto tm-content-container">
		<main>
			<div class="row mb-5 pb-4">
				<div class="col-xl-8">
                    <div class="col-xl-8">
                        <!-- Video description -->
                        <div class="tm-video-description-box">
                            <h2 class="mb-5 tm-video-title"><?php echo $video->keterangan_video ?></h2>
                        </div>							
                    </div>
					<!-- Video player 1422x800 -->
					<video width="1422" height="800" controls autoplay>
                        <?php if($video->nama_video != "") {?>
                            <source src="<?php echo base_url('assets/upload/video/'.$video->nama_video . $video->file_video)?>" type="video/mp4">
                        <?php } ?>							  
                    </video>
				</div>
                
                <div class="col-xl-4 col-lg-5">
                    <!-- Share box -->
                    <div class="tm-bg-gray tm-share-box">
                        <h6 class="tm-share-box-title mb-4">Share this video</h6>
                        <div class="mb-5 d-flex">
                            <a href="" class="tm-bg-white tm-share-button"><i class="fa fa-facebook"></i></a>
                            <a href="" class="tm-bg-white tm-share-button"><i class="fa fa-twitter"></i></a>
                            <a href="" class="tm-bg-white tm-share-button"><i class="fa fa-pinterest"></i></a>
                            <a href="" class="tm-bg-white tm-share-button"><i class="fa fa-envelope"></i></a>
                        </div>
                        <p class="mb-4">Author: <a href="<?php echo base_url() ?>" class="tm-text-link">Anugerah Sticker</a></p>
                        <a href="#" class="tm-bg-white px-5 mb-4 d-inline-block tm-text-primary tm-likes-box tm-liked">
                            <i class="fa fa-heart mr-3 tm-liked-icon"></i>
                            <i class="fa fa-heart mr-3 tm-not-liked-icon"></i>
                            <span id="tm-likes-count">0 likes</span>
                        </a>
                        <div>
                            <button class="btn btn-primary p-0 tm-btn-animate tm-btn-download tm-icon-download"><span>Download Video</span></button>	
                        </div>								
                    </div>
                </div>
            </div>

            <div class="row pt-4 pb-5">
                <div class="col-12">
                    <h2 class="mb-5 tm-text-primary">Related Videos for You</h2>
                    <div class="row tm-catalog-item-list">
                        <?php foreach ($list_video as $list_video) { ?>
                            <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                                <div class="position-relative tm-thumbnail-container">
                                    <img src="<?php echo base_url('assets/upload/image/' . $list_video->thumbnail  . $list_video->file_thumbnail); ?>" alt="Image" class="img-fluid tm-catalog-item-img"> 
                                    <a href="<?php echo base_url('video/read/' . $list_video->nama_param_link); ?>" class="position-absolute tm-img-overlay">
                                        <i class="fa fa-play tm-overlay-icon"></i>
                                    </a>
                                </div>    
                                <div class="p-3 tm-catalog-item-description">
                                    <h3 class="tm-text-primary mb-3 tm-catalog-item-title"><?php echo $list_video->keterangan_video?></h3>		                                
                                </div>
                            </div>
                        <?php } ?>
                        
                    </div>
                </div>
            </div>
		</main>
    </div> <!-- .tm-content-container -->
</div>