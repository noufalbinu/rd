<?php
    global $chk;
    if(isset($_POST['wphw_submit'])){
            wphw_opt();
    }

    function wphw_opt(){
        $companysnippet = $_POST['companysnippet'];
        $companysnippettitle = $_POST['companysnippettitle'];

        $c1 = $_POST['c1'];
        $c2 = $_POST['c2'];
        $c3 = $_POST['c3'];
        $c4 = $_POST['c4'];



        $ct1 = $_POST['ct1'];
        $ct2 = $_POST['ct2'];
        $ct3 = $_POST['ct3'];
        $ct4 = $_POST['ct4'];



        global $chk;

        if( get_option('companysnippet') != trim($companysnippet)) {
            $chk = update_option( 'companysnippet', trim($companysnippet));
        }
        if( get_option('companysnippettitle') != trim($companysnippettitle)) {
            $chk = update_option( 'companysnippettitle', trim($companysnippettitle));
        }

        if( get_option('c1') != trim($c1)) {
            $chk = update_option( 'c1', trim($c1));
        }
        if( get_option('c2') != trim($c2)) {
            $chk = update_option( 'c2', trim($c2));
        }
        if( get_option('c3') != trim($c3)) {
            $chk = update_option( 'c3', trim($c3));
        }
        if( get_option('c4') != trim($c4)) {
            $chk = update_option( 'c4', trim($c4));
        }

        if( get_option('ct1') != trim($ct1)) {
            $chk = update_option( 'ct1', trim($ct1));
        }
        if( get_option('ct2') != trim($ct2)) {
            $chk = update_option( 'ct2', trim($ct2));
        }
        if( get_option('ct3') != trim($ct3)) {
            $chk = update_option( 'ct3', trim($ct3));
        }
        if( get_option('tc4') != trim($ct4)) {
            $chk = update_option( 'ct4', trim($ct4));
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
  <h2>Landing Page Settings</h2>

  <?php if(isset($_POST['wphw_submit']) && $chk):?>
  <div id="message" class="updated below-h2">
    <p>Content updated successfully</p>
  </div>


  <?php endif;?>
  <div class="metabox-holder">
    <div class="postbox">
      <form method="post" action="">     
        <table class="form-table">
            <th scope="row">Company Snippet Title</th>
            <td><input type="text" name="companysnippettitle" value="<?php echo get_option('companysnippettitle');?>" style="width:350px;" /></td>
          </tr>
          <tr>
            <th scope="row">About Company Snippet</th>
            <td><textarea rows='80' cols='40' style="height: 200px; width: 60%;" type="text" name="companysnippet" style="width:350px;" ><?php echo get_option('companysnippet');?></textarea></td> 
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
