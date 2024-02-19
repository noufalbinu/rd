<?php
    global $chk;
    if(isset($_POST['wphw_submit'])){
            wphw_opt();
    }

    function wphw_opt(){
        $newssnippet = $_POST['newssnippet'];
        $newssnippettitle = $_POST['newssnippettitle'];

 


        global $chk;

        if( get_option('newssnippet') != trim($newssnippet)) {
            $chk = update_option( 'newssnippet', trim($newssnippet));
        }
        if( get_option('newssnippettitle') != trim($newssnippettitle)) {
            $chk = update_option( 'newssnippettitle', trim($newssnippettitle));
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
  <h2>News Board</h2>

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
            <th scope="row">News Board Title</th>
            <td><input type="text" name="newssnippettitle" value="<?php echo get_option('newssnippettitle');?>" style="width:350px;" /></td>
          </tr>
          <!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>
</head>
<body>
  <textarea>Next, use our Get Started docs to setup Tiny!</textarea>
</body>
</html>

          <tr>
            <th scope="row">Latest News</th>
            <td><textarea rows='80' cols='40' style="height: 200px; width: 60%;" type="text" name="newssnippet" style="width:350px;" ><?php echo get_option('newssnippet');?></textarea></td> 
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
