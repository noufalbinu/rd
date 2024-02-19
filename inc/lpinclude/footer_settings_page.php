<?php
    global $chk;
    if(isset($_POST['wphw_submit'])){
            wphw_opt();
    }

    function wphw_opt(){
        $facebook = $_POST['facebook'];
        $twitter = $_POST['twitter'];
        $youtube = $_POST['youtube'];
        $instagram = $_POST['instagram'];

        global $chk;

        if( get_option('facebook') != trim($facebook)) {
            $chk = update_option( 'facebook', trim($facebook));
        }
        if( get_option('twitter') != trim($twitter)) {
            $chk = update_option( 'twitter', trim($twitter));
        }
        if( get_option('youtube') != trim($youtube)) {
            $chk = update_option( 'youtube', trim($youtube));
        }
        if( get_option('instagram') != trim($instagram)) {
            $chk = update_option( 'instagram', trim($instagram));
        }
    }
?>

<style type="text/css">
  table.form-table th {
    padding-left: 30px;
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
        <table class="form-table">

          <tr>
            <th scope="row">Social Media Profile</th>
          <tr>

          <tr>
            <th scope="row">Facebook</th>
            <td><input type="text" name="facebook" value="<?php echo get_option('facebook');?>" style="width:350px;" /></td>
          </tr>
          
          <tr>
            <th scope="row">Twitter</th>
            <td><input type="text" name="twitter" value="<?php echo get_option('twitter');?>" style="width:350px;" /></td>
          </tr>

          <tr>
            <th scope="row">Youtube</th>
            <td><input type="text" name="youtube" value="<?php echo get_option('youtube');?>" style="width:350px;" /></td>
          </tr>


          <tr>
            <th scope="row">Instagram</th>
            <td><input type="text" name="instagram" value="<?php echo get_option('instagram');?>" style="width:350px;" /></td>
          </tr>

          

          <tr>
            <th scope="row">&nbsp;</th>
            <td><input type="submit" name="wphw_submit" value="Save changes" class="button-primary" /></td>
          </tr>





        </table>
      </form>
    </div>
  </div>
</div>
