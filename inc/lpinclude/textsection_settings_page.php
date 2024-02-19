<?php
    global $chk;
    if(isset($_POST['wphw_submit'])){
            wphw_opt();
    }

    function wphw_opt(){
        $textsectionsnippet = $_POST['textsectionsnippet'];
        $textsectionsnippettitle = $_POST['textsectionsnippettitle'];

        $cimg1 = $_POST['cimg1'];




        global $chk;

        if( get_option('textsectionsnippet') != trim($textsectionsnippet)) {
            $chk = update_option( 'textsectionsnippet', trim($textsectionsnippet));
        }
        if( get_option('textsectionsnippettitle') != trim($textsectionsnippettitle)) {
            $chk = update_option( 'textsectionsnippettitle', trim($textsectionsnippettitle));
        }

        if( get_option('cimg1') != trim($cimg1)) {
            $chk = update_option( 'cimg1', trim($cimg1));
        }



    }
?>

<style type="text/css">
  table.form-table th {
    padding-left: 30px;
}

.count {
    width: 66%;
    padding: 30px;
    background: #bbb;
    margin: 2%;
    box-sizing: border-box;
}
.count span {
    width: 100%;
    background: #bbb;
    margin: 1%;
    box-sizing: border-box;
}

</style>


<div class="wrap">
  <div id="icon-options-general" class="icon32"><br>
  </div>
  <h2>About Kakkadapoyil</h2>

  <?php if(isset($_POST['wphw_submit']) && $chk):?>
  <div id="message" class="updated below-h2">
    <p>Content updated successfully</p>
  </div>


  <?php endif;?>
  <div class="metabox-holder">
    <div class="postbox">
      <form method="post" action="">     
        <table class="form-table">
          <tr>
            <th scope="row">Company Snippet Title</th>
            <td><input type="text" name="textsectionsnippettitle" value="<?php echo get_option('textsectionsnippettitle');?>" style="width:350px;" /></td>
          </tr>

          <tr>
            <th scope="row">About Company Snippet</th>
            <td><textarea rows='80' cols='40' style="height: 200px; width: 60%;" type="text" name="textsectionsnippet" style="width:350px;" ><?php echo get_option('textsectionsnippet');?></textarea></td> 
          </tr>

          <div class="slide-strive"> 
            <br><br>
            <input type="text" name="cimg1" class="cimg1-picture1" value="<?php echo get_option('cimg1');?>">
            <input type="button" class="cimg1-button" value="Upload Profile Picture" data-group="1">

          </div>
          


          

          <tr>
            <th scope="row">&nbsp;</th>
            <td><input type="submit" name="wphw_submit" value="Save changes" class="button-primary" /></td>
          </tr>





        </table>
      </form>
    </div>
  </div>
</div>

<script>
jQuery(document).ready( function($){

var mediaUploader;

jQuery('.cimg1-button').on('click',function(e) {
    e.preventDefault();
    var buttonID = jQuery(this).data('group');

    if( mediaUploader ){
        mediaUploader.open();
        return;
    }

  mediaUploader = wp.media.frames.file_frame =wp.media({
    title: 'Choose a Slide Carousel Picture',
    button: {
        text: 'Choose Picture'
    },
    multiple:false
  });

  mediaUploader.on('select', function(){
    attachment = mediaUploader.state().get('selection').first().toJSON();
    jQuery('.cimg1-picture'+buttonID).val(attachment.url);

  });
  mediaUploader.open();
}); });

</script>