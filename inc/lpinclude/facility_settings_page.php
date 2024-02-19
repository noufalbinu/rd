<?php
    global $chk;
    if(isset($_POST['wphw_submit'])){
            wphw_opt();
    }

    function wphw_opt(){
        $facilityimg1 = $_POST['facilityimg1'];
        $facilityimg2 = $_POST['facilityimg2'];
        $facilityimg3 = $_POST['facilityimg3'];


        $f1 = $_POST['f1'];
        $f2 = $_POST['f2'];
        $f3 = $_POST['f3'];


        $tx1 = $_POST['tx1'];
        $tx2 = $_POST['tx2'];
        $tx3 = $_POST['tx3'];
        $tx4 = $_POST['tx4'];
        $tx5 = $_POST['tx5'];
        $tx6 = $_POST['tx6'];
        $tx7 = $_POST['tx7'];




        global $chk;

        if( get_option('facilityimg1') != trim($facilityimg1)) {
            $chk = update_option( 'facilityimg1', trim($facilityimg1));
        }
        if( get_option('facilityimg2') != trim($facilityimg2)) {
            $chk = update_option( 'facilityimg2', trim($facilityimg2));
        }
        if( get_option('facilityimg3') != trim($facilityimg3)) {
            $chk = update_option( 'facilityimg3', trim($facilityimg3));
        }




        if( get_option('f1') != trim($f1)) {
            $chk = update_option( 'f1', trim($f1));
        }
        if( get_option('f2') != trim($f2)) {
            $chk = update_option( 'f2', trim($f2));
        }
        if( get_option('f3') != trim($f3)) {
            $chk = update_option( 'f3', trim($f3));
        }



        
        if( get_option('tx1') != trim($tx1)) {
            $chk = update_option( 'tx1', trim($tx1));
        }
        if( get_option('tx2') != trim($tx2)) {
            $chk = update_option( 'tx2', trim($tx2));
        }
        if( get_option('tx3') != trim($tx3)) {
            $chk = update_option( 'tx3', trim($tx3));
        }
        if( get_option('tx4') != trim($tx4)) {
            $chk = update_option( 'tx4', trim($tx4));
        }
        if( get_option('tx5') != trim($tx5)) {
            $chk = update_option( 'tx5', trim($tx5));
        }
        if( get_option('tx6') != trim($tx6)) {
            $chk = update_option( 'tx6', trim($tx6));
        }
        if( get_option('tx7') != trim($tx7)) {
            $chk = update_option( 'tx7', trim($tx7));
        }

 
    }
?>

<style type="text/css">
  table.form-table th {
    padding-left: 30px;
}  
.form-table input[type="text"] {
    width: 100%;
} 
.slide-strive {
    background: #e4e4e4;
    width: 60%;
    padding: 30px;
    margin: 10px 30px;
    border: 1px solid #bbb;
}
.slide-strive input[type="text"] {
    width: 55%;
}
input.slide-button {
    background: #843ab3;
    color: #fff;
    padding: 4px 10px;
    border: none;
}
</style>


<div class="wrap">
  <div id="icon-options-general" class="icon32"><br>
  </div>
  <h2>Company Snippet</h2>

  <?php if(isset($_POST['wphw_submit']) && $chk):?>
  <div id="message" class="updated below-h2">
    <p>Content updated successfully</p>
  </div>


  <?php endif;?>
  <div class="metabox-holder">
    <div class="postbox">
      <form method="post" action="">
        <h3> Add | Edit Facility Text & images</h3>

        <div class="slide-strive"> 
            <b>Slide Image (1)</b><br><br>
            <input type="text" name="facilityimg1" class="facility-picture1" value="<?php echo get_option('facilityimg1');?>">
            <input type="button" class="facility-button" value="Upload Profile Picture" data-group="1">
            <input type="text" name="f1" class="f1" value="<?php echo get_option('f1');?>">
            <input type="text" name="tx1" class="tx1" value="<?php echo get_option('tx1');?>">
        </div>
        <div class="slide-strive"> 
            <b>Slide Image (2)</b><br><br>
            <input type="text" name="facilityimg2" class="facility-picture2" value="<?php echo get_option('facilityimg2');?>">
            <input type="button" class="facility-button" value="Upload Profile Picture" data-group="2">
            <input type="text" name="f2" class="f2" value="<?php echo get_option('f2');?>">
            <input type="text" name="tx2" class="tx2" value="<?php echo get_option('tx2');?>">
        </div>
        <div class="slide-strive"> 
            <b>Slide Image (3)</b><br><br>
            <input type="text" name="facilityimg3" class="facility-picture3" value="<?php echo get_option('facilityimg3');?>">
            <input type="button" class="facility-button" value="Upload Profile Picture" data-group="3">
            <input type="text" name="f3" class="f3" value="<?php echo get_option('f3');?>">
            <input type="text" name="tx3" class="tx3" value="<?php echo get_option('tx3');?>">
        </div>
            <input type="submit" name="wphw_submit" value="Save changes" class="button-primary" /></td>

      </form>
    </div>
  </div>
</div>

<script>
jQuery(document).ready( function($){

var mediaUploader;

jQuery('.facility-button').on('click',function(e) {
    e.preventDefault();
    var buttonID = jQuery(this).data('group');

    if( mediaUploader ){
        mediaUploader.open();
        return;
    }

  mediaUploader = wp.media.frames.file_frame =wp.media({
    title: 'Choose Facilities Picture',
    button: {
        text: 'Choose Picture'
    },
    multiple:true
  });

  mediaUploader.on('select', function(){
    attachment = mediaUploader.state().get('selection').first().toJSON();
    jQuery('.facility-picture'+buttonID).val(attachment.url);

  });
  mediaUploader.open();
}); });

</script>