<?php
    global $chk;
    if(isset($_POST['wphw_submit'])){
            wphw_opt();
    }

    function wphw_opt(){
        $gallerycpt = $_POST['gallerycpt'];

        global $chk;

        if( get_option('gallerycpt') != trim($gallerycpt)) {
            $chk = update_option( 'gallerycpt', trim($gallerycpt));
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
  <h2>CPT SETTINGS</h2>

  <?php if(isset($_POST['wphw_submit']) && $chk):?>
  <div id="message" class="updated below-h2">
    <p>Content updated successfully</p>
  </div>


  <?php endif;?>
  <div class="metabox-holder">
    <div class="postbox">
      <form method="post" action="">
        <h3>Update CPT Facilities Banner Image</h3>

        <div class="slide-strive"> 
          
            <input type="text" name="gallerycpt" class="gallery-cpt1" value="<?php echo get_option('gallerycpt');?>">
            <input type="button" class="gallery-button-cpt" value="Upload Profile Picture" data-group="1">

        </div>
            <input type="submit" name="wphw_submit" value="Save changes" class="button-primary" /></td>

      </form>
    </div>
  </div>
</div>

<script>
jQuery(document).ready( function($){

var mediaUploader;

jQuery('.gallery-button-cpt').on('click',function(e) {
    e.preventDefault();
    var buttonID = jQuery(this).data('group');

    if( mediaUploader ){
        mediaUploader.open();
        return;
    }

  mediaUploader = wp.media.frames.file_frame =wp.media({
    title: 'Choose gallery banner Picture',
    button: {
        text: 'Choose Picture'
    },
    multiple:true
  });

  mediaUploader.on('select', function(){
    attachment = mediaUploader.state().get('selection').first().toJSON();
    jQuery('.gallery-cpt'+buttonID).val(attachment.url);

  });
  mediaUploader.open();
}); });

</script>