<?php
// "wp_enqueue_media" - required to load media upload window
wp_enqueue_media();

global $chk;
    if(isset($_POST['wphw_submit'])){
            wphw_opt();
    }
    if(isset($_POST['banner_submit'])){
        banner_opt();
    }
    if(isset($_POST['slide_submit'])){
        slide_opt();
    }
    if(isset($_POST['image_submit'])){
        image_opt();
    }
    function banner_opt(){
        $bannerchange = $_POST['bannerchange'];
        if( get_option('bannerchange') != $bannerchange) {
            $chk = update_option( 'bannerchange', $bannerchange);
        }
    }
    function slide_opt(){
        $slide1 = $_POST['slide1'];
        $slide2 = $_POST['slide2'];
        $slide3 = $_POST['slide3'];
        $slide4 = $_POST['slide4'];
        $slide5 = $_POST['slide5'];
        $t1 = $_POST['t1'];
        $t2 = $_POST['t2'];
        $t3 = $_POST['t3'];
        $t4 = $_POST['t4'];
        $t5 = $_POST['t5'];
        
        if( get_option('slide1') != trim($slide1)) {
            $chk = update_option( 'slide1', trim($slide1));
        }
        if( get_option('slide2') != trim($slide2)) {
            $chk = update_option( 'slide2', trim($slide2));
        }
        if( get_option('slide3') != trim($slide3)) {
            $chk = update_option( 'slide3', trim($slide3));
        }
        if( get_option('slide4') != trim($slide4)) {
            $chk = update_option( 'slide4', trim($slide4));
        }
        if( get_option('slide5') != trim($slide5)) {
            $chk = update_option( 'slide5', trim($slide5));
        }
        if( get_option('t1') != trim($t1)) {
            $chk = update_option( 't1', trim($t1));
        }
        if( get_option('t2') != trim($t2)) {
            $chk = update_option( 't2', trim($t2));
        }
        if( get_option('t3') != trim($t3)) {
            $chk = update_option( 't3', trim($t3));
        }
        if( get_option('t4') != trim($t4)) {
            $chk = update_option( 't4', trim($t4));
        }
        if( get_option('t5') != trim($t5)) {
            $chk = update_option( 't5', trim($t5));
        }
    }
    function image_opt(){  
        $bgimage = $_POST['bgimage'];
        global $chk;
        if( get_option('bgimage') != $bgimage) {
            $chk = update_option( 'bgimage', $bgimage);
        }
    }
    function wphw_opt(){  
        $bgvideo = $_POST['bgvideo'];
        global $chk;
        if( get_option('bgvideo') != $bgvideo) {
            $chk = update_option( 'bgvideo', $bgvideo);
        }   
    }

        
    ?>
    <style>
    .bgchanger {
    background: #fff;
    overflow: auto;
    padding: 20px;
    border: 1px solid #bbb;
    border-radius: 6px;
    }
    .content-container {
    background: #fff;
    padding: 20px;
    border: 1px solid #bbb;
    margin-top: 10px;
    border-radius: 5px;
    }
    </style>
      <h2>Edit Landing Page Main Background</h2>       
     <?php if(isset($_POST['wphw_submit']) && $chk):?>
  <div id="message" class="updated below-h2">
    <p>Content updated successfully</p>
  </div>


  <?php endif;?>
  <form method="post" class='bgchanger' name="bannerChange"  action=""> 
  <b>Select A background option</b>
  <select name="bannerchange" id="bannerchange">
        <option value="page1"<?php if (get_option('bannerchange') == "page1") { echo " selected"; } ?>>Image Background</option>
        <option value="page2"<?php if (get_option('bannerchange')  == "page2") { echo " selected"; } ?>>Slide Background</option>
        <option value="page3"<?php if (get_option('bannerchange')  == "page3") { echo " selected"; } ?>>Video Background</option>
  </select>  
  <input type="submit" name="banner_submit" id='submit-change' value="Save changes" class="button-primary" style="display: none;">   
  </form>
  <div class='content-container'>        
            
    <?php 
    switch (get_option('bannerchange')) { 
        case 'page1':
            ?>
        
        <form method="post"  name="PostName"  action="">  
          <div class="slide-strive"> 
          <h3> Add | Edit Main division Background image</h3><br><br>
            <input type="text" name="bgimage" class="profile-picture7" value="<?php echo get_option('bgimage');?>">
            <input type="button" class="slide-button" value="Upload background Picture" data-group="7">
            <input type="submit" name="image_submit" value="Save changes" class="button-primary" />   
        </div>
          
  </form>
        <?php

            break;
        case 'page2':?>
  <form method="post" name="slideChange"  action="">  
            <h3> Add | Edit Carousel Slider images</h3>

        <div class="slide-strive"> 
            <b>Slide Image (1)</b><br><br>
            <input type="text" name="slide1" class="profile-picture1" value="<?php echo get_option('slide1');?>">
            <input type="button" class="slide-button" value="Upload Slide Image" data-group="1">
            <input type="text" name="t1" class="t1" value="<?php echo get_option('t1');?>">
        </div>
        <div class="slide-strive"> 
            <b>Slide Image (2)</b><br><br>
            <input type="text" name="slide2" class="profile-picture2" value="<?php echo get_option('slide2');?>">
            <input type="button" class="slide-button" value="Upload Slide Image" data-group="2">
            <input type="text" name="t2" class="t2" value="<?php echo get_option('t2');?>">
        </div>
        <div class="slide-strive"> 
            <b>Slide Image (3)</b><br><br>
            <input type="text" name="slide3" class="profile-picture3" value="<?php echo get_option('slide3');?>">
            <input type="button" class="slide-button" value="Upload Slide Image" data-group="3">
            <input type="text" name="t3" class="t3" value="<?php echo get_option('t3');?>">
        </div>
        <div class="slide-strive"> 
            <b>Slide Image (4)</b><br><br>
            <input type="text" name="slide4" class="profile-picture4" value="<?php echo get_option('slide4');?>">
            <input type="button" class="slide-button" value="Upload Slide Image" data-group="4">
            <input type="text" name="t4" class="t4" value="<?php echo get_option('t4');?>">
        </div>
        <div class="slide-strive"> 
            <b>Slide Image (5)</b><br><br>
            <input type="text" name="slide5" class="profile-picture5" value="<?php echo get_option('slide5');?>">
            <input type="button" class="slide-button" value="Upload Slide Image" data-group="5">
            <input type="text" name="t5" class="t5" value="<?php echo get_option('t5');?>">
        </div>
        <input type="submit" name="slide_submit" id='submit-change' value="Save changes" class="button-primary" > </form>
        <?php
            break;
        case 'page3':
            ?>
       <form method="post" name="slideChange"  action="">  
        <div class="slide-strive"> 
        <h3> Add | Edit Main division Background Video</h3><br><br>
            <input type="text" name="bgvideo" class="profile-picture6" value="<?php echo get_option('bgvideo');?>">
            <input type="button" class="slide-button" value="Upload/Select a Video" data-group="6">
       
        </div>
        <input type="submit" name="wphw_submit" value="Save changes" class="button-primary" />  
        </form></div><!---content-container--->
        <?php
            break; 
    } 

?>
    
    
<script>


jQuery(document).ready(function() {
    jQuery('#bannerchange').on('change', function() {
        jQuery('#submit-change').click();
   });
});


jQuery(document).ready( function($){
var mediaUploader;
    jQuery('.slide-button').on('click',function(e) {
        
        e.preventDefault();
        var buttonID = jQuery(this).data('group');
    
        if( mediaUploader ){
            mediaUploader.open();
            return;
        }   
        mediaUploader = wp.media.frames.file_frame = wp.media({
          title: 'Choose a Slide Carousel Picture',
          button: {
              text: 'Choose Picture'
        },
        multiple:false
    });
    mediaUploader.on('select', function(){
        attachment = mediaUploader.state().get('selection').first().toJSON();
        jQuery('.profile-picture'+buttonID).val(attachment.url);
    });
      mediaUploader.open();
    });
 });

</script>