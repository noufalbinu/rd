<?php
    global $chk;
    if(isset($_POST['wphw_submit'])){
            wphw_opt();
    }

    function wphw_opt(){
        $paralaxsnippet = $_POST['paralaxsnippet'];
        $paralaxsnippettitle = $_POST['paralaxsnippettitle'];

     


        global $chk;

        if( get_option('paralaxsnippet') != trim($paralaxsnippet)) {
            $chk = update_option( 'paralaxsnippet', trim($paralaxsnippet));
        }
        if( get_option('paralaxsnippettitle') != trim($paralaxsnippettitle)) {
            $chk = update_option( 'paralaxsnippettitle', trim($paralaxsnippettitle));
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
  <h2>Contact BOX</h2>
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
            <td><input type="text" name="paralaxsnippettitle" value="<?php echo get_option('paralaxsnippettitle');?>" style="width:350px;" /></td>
          </tr>
          <tr>
            <th scope="row">About Company Snippet</th>
            <td><textarea rows='80' cols='40' style="height: 200px; width: 60%;" type="text" name="paralaxsnippet" style="width:350px;" ><?php echo get_option('paralaxsnippet');?></textarea></td> 
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
