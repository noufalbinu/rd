<?php
    global $chk;
    if(isset($_POST['wphw_submit'])){
            wphw_opt();
    }

    function wphw_opt(){
        $headermobile = $_POST['headermobile'];
        $headeremail = $_POST['headeremail'];


        global $chk;

        if( get_option('headermobile') != trim($headermobile)) {
            $chk = update_option( 'headermobile', trim($headermobile));
        }
        if( get_option('headeremail') != trim($headeremail)) {
            $chk = update_option( 'headeremail', trim($headeremail));
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
  <h2>Manage Your header Section</h2>

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
            <th scope="row">Mobile</th>
            <td><input type="text" name="headermobile" value="<?php echo get_option('headermobile');?>" style="width:350px;" /></td>
          </tr>
          
          <tr>
            <th scope="row">Email</th>
            <td><input type="text" name="headeremail" value="<?php echo get_option('headeremail');?>" style="width:350px;" /></td>
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
