<?php
    global $chk;
    if(isset($_POST['wphw_submit'])){
            wphw_opt();
    }

    function wphw_opt(){
        $cf1 = $_POST['cf1'];
        $cf2 = $_POST['cf2'];
        $cf3 = $_POST['cf3'];
        $cf4 = $_POST['cf4'];
        $ctx1 = $_POST['ctx1'];
        $ctx2 = $_POST['ctx2'];
        $ctx3 = $_POST['ctx3'];
        $ctx4 = $_POST['ctx4'];

        global $chk;

        if( get_option('cf1') != trim($cf1)) {
            $chk = update_option( 'cf1', trim($cf1));
        }
        if( get_option('cf2') != trim($cf2)) {
            $chk = update_option( 'cf2', trim($cf2));
        }
        if( get_option('cf3') != trim($cf3)) {
            $chk = update_option( 'cf3', trim($cf3));
        }
        if( get_option('cf4') != trim($cf4)) {
            $chk = update_option( 'cf4', trim($cf4));
        }
        if( get_option('ctx1') != trim($ctx1)) {
            $chk = update_option( 'ctx1', trim($ctx1));
        }
        if( get_option('ctx2') != trim($ctx2)) {
            $chk = update_option( 'ctx2', trim($ctx2));
        }
        if( get_option('ctx3') != trim($ctx3)) {
            $chk = update_option( 'ctx3', trim($ctx3));
        }
        if( get_option('ctx4') != trim($ctx4)) {
            $chk = update_option( 'ctx4', trim($ctx4));
        }
 
    }
    echo print_r($ctx1);
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
  <h2>Edit Count</h2>
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
            <th scope="row">Count 1</th>
            <td><input type="text" name="cf1" class="cf1" value="<?php echo get_option('cf1');?>" style="width:350px;"></td>
          </tr>
          <tr>
            <th scope="row">Count Text 1</th>
            <td><textarea rows='3' cols='5' type="text" name="ctx1" style="width:350px;"><?php echo get_option('ctx1');?></textarea></td>

          </tr>
          <tr>
            <th scope="row">Count 2</th>
            <td><input type="text" name="cf2" class="cf2" value="<?php echo get_option('cf2');?>" style="width:350px;"></td>
          </tr>
          <tr>
            <th scope="row">Count Text 2</th>
            <td><textarea rows='3' cols='5' type="text" name="ctx2" style="width:350px;"><?php echo get_option('ctx2');?></textarea></td>
          </tr>
          <tr>
            <th scope="row">Count 3</th>
            <td><input type="text" name="cf3" class="cf3" value="<?php echo get_option('cf3');?>" style="width:350px;"></td>
          </tr>
          <tr>
            <th scope="row">Count Text 3</th>
            <td><textarea rows='3' cols='5' type="text" name="ctx3" style="width:350px;"><?php echo get_option('ctx3');?></textarea></td>
          </tr>
          <tr>
            <th scope="row">Count 4</th>
            <td><input type="text" name="cf4" class="cf4" value="<?php echo get_option('cf4');?>" style="width:350px;"></td>
          </tr>
          <tr>
            <th scope="row">Count Text 4</th>
            <td><textarea rows='3' cols='5' type="text" name="ctx4" style="width:350px;"><?php echo get_option('ctx4');?></textarea></td>
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




            
            

            
           

            
           

            
           
            


