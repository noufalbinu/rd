<?php
    global $chk;
    if(isset($_POST['wphw_submit'])){
            wphw_opt();
    }

    function wphw_opt(){

      $mtitle = $_POST['mtitle'];
      $mtext = $_POST['mtext'];
      $rmore = $_POST['rmore'];
      $rmorelink = $_POST['rmorelink'];

      $srv1 = $_POST['srv1'];
      $srv2 = $_POST['srv2'];
      $srv3 = $_POST['srv3'];
      $srv4 = $_POST['srv4'];
      $srv5 = $_POST['srv5'];
      $srv6 = $_POST['srv6'];

      $srvp1 = $_POST['srvp1'];
      $srvp2 = $_POST['srvp2'];
      $srvp3 = $_POST['srvp3'];
      $srvp4 = $_POST['srvp4'];
      $srvp5 = $_POST['srvp5'];
      $srvp6 = $_POST['srvp6'];

        
      global $chk;


      if( get_option('mtitle') != trim($mtitle)) {
        $chk = update_option( 'mtitle', trim($mtitle));
      }
      if( get_option('mtext') != trim($mtext)) {
        $chk = update_option( 'mtext', trim($mtext));
      }
      if( get_option('rmore') != trim($rmore)) {
        $chk = update_option( 'rmore', trim($rmore));
      }
      if( get_option('rmorelink') != trim($rmorelink)) {
        $chk = update_option( 'rmorelink', trim($rmorelink));
      }


      if( get_option('srv1') != trim($srv1)) {
          $chk = update_option( 'srv1', trim($srv1));
      }
      if( get_option('srv2') != trim($srv2)) {
          $chk = update_option( 'srv2', trim($srv2));
      }
      if( get_option('srv3') != trim($srv3)) {
          $chk = update_option( 'srv3', trim($srv3));
      }
      if( get_option('srv4') != trim($srv4)) {
          $chk = update_option( 'srv4', trim($srv4));
      }
      if( get_option('srv5') != trim($srv5)) {
          $chk = update_option( 'srv5', trim($srv5));
      }
      if( get_option('srv6') != trim($srv6)) {
          $chk = update_option( 'srv6', trim($srv6));
      }


      if( get_option('srvp1') != trim($srvp1)) {
          $chk = update_option( 'srvp1', trim($srvp1));
      }
      if( get_option('srvp2') != trim($srvp2)) {
          $chk = update_option( 'srvp2', trim($srvp2));
      }
      if( get_option('srvp3') != trim($srvp3)) {
          $chk = update_option( 'srvp3', trim($srvp3));
      }
      if( get_option('srvp4') != trim($srvp4)) {
          $chk = update_option( 'srvp4', trim($srvp4));
      }
      if( get_option('srvp5') != trim($srvp5)) {
          $chk = update_option( 'srvp5', trim($srvp5));
      }
      if( get_option('srvp6') != trim($srvp6)) {
          $chk = update_option( 'srvp6', trim($srvp6));
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
          <colgroup>
            <col span="1" style="background-color:white">
            <col style="background-color:#bbb">
          </colgroup>
          <tr style='background:#bbb'><tr>
            <th scope="row">Main Title</th>
            <td><input type="text" name="mtitle" class="mtitle" value="<?php echo get_option('mtitle');?>" style="width:350px;"></td>
          </tr>
          <tr>
            <th scope="row">Main Text</th>
            <td><textarea rows='3' cols='5' type="text" name="mtext" style="width:350px;"><?php echo get_option('mtext');?></textarea></td>
          </tr>
          <tr>
            <th scope="row">Readmore Link</th>
            <td><input type="text" placeholder='LINK NAME' name="rmore" class="rmore" value="<?php echo get_option('rmore');?>" style="width:350px;"></td>
          </tr>
          <tr>
            <th scope="row"></th>
            <td><input type="text" placeholder='LINK URL' name="rmorelink" class="rmorelink" value="<?php echo get_option('rmorelink');?>" style="width:350px;"></td>
          </tr></tr>



          <tr>
            <th scope="row">Title 1</th>
            <td><input type="text" name="srv1" class="srv1" value="<?php echo get_option('srv1');?>" style="width:350px;"></td>
          </tr>
          <tr>
            <th scope="row">Text 1</th>
            <td><textarea rows='3' cols='5' type="text" name="srvp1" style="width:350px;"><?php echo get_option('srvp1');?></textarea></td>
          </tr>

          <tr>
            <th scope="row">Title 2</th>
            <td><input type="text" name="srv2" class="srv2" value="<?php echo get_option('srv2');?>" style="width:350px;"></td>
          </tr>
          <tr>
            <th scope="row">Text 2</th>
            <td><textarea rows='3' cols='5' type="text" name="srvp2" style="width:350px;"><?php echo get_option('srvp2');?></textarea></td>
          </tr>

          <tr>
            <th scope="row">Title 3</th>
            <td><input type="text" name="srv3" class="srv3" value="<?php echo get_option('srv3');?>" style="width:350px;"></td>
          </tr>
          <tr>
            <th scope="row">Text 3</th>
            <td><textarea rows='3' cols='5' type="text" name="srvp3" style="width:350px;"><?php echo get_option('srvp3');?></textarea></td>
          </tr>

          <tr>
            <th scope="row">Title 4</th>
            <td><input type="text" name="srv4" class="srv4" value="<?php echo get_option('srv4');?>" style="width:350px;"></td>
          </tr>
          <tr>
            <th scope="row">Text 4</th>
            <td><textarea rows='3' cols='5' type="text" name="srvp4" style="width:350px;"><?php echo get_option('srvp4');?></textarea></td>
          </tr>

          <tr>
            <th scope="row">Title 5</th>
            <td><input type="text" name="srv5" class="srv5" value="<?php echo get_option('srv5');?>" style="width:350px;"></td>
          </tr>
          <tr>
            <th scope="row">Text 5</th>
            <td><textarea rows='3' cols='5' type="text" name="srvp5" style="width:350px;"><?php echo get_option('srvp5');?></textarea></td>
          </tr>

          <tr>
            <th scope="row">Title 6</th>
            <td><input type="text" name="srv6" class="srv6" value="<?php echo get_option('srv6');?>" style="width:350px;"></td>
          </tr>
          <tr>
            <th scope="row">Text 6</th>
            <td><textarea rows='3' cols='5' type="text" name="srvp6" style="width:350px;"><?php echo get_option('srvp6');?></textarea></td>
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