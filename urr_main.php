<?php
 
if($_POST['urr_webfont_hidden'] == 'Y') {

  // store data

  $name = $_POST['urr_webfont_name'];
  update_option('urr_webfont_name', $name);
  $style = $_POST['urr_webfont_style'];
  update_option('urr_webfont_style', $style);

  ?>
  <div class="updated"><p><strong><?php _e('Options saved.' ); ?></strong></p></div>
  <?php 

} else {

  //Normal page display
  $name = get_option('urr_webfont_name');
  $style = get_option('urr_webfont_style');
}

?>

<div class="wrap">

  <?php echo "<h2>" . __( 'UR Web Fonts Setting', 'urr_webfont_setting' ) . "</h2>"; ?>

  <form name="urr_webfont_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
  <input type="hidden" name="urr_webfont_hidden" value="Y">

  <h3><?php _e("Add Google Web Font Stylesheet Link: " ); ?></h3>

  <p>
  Example:<br/>
  <code><?php echo "&#60;link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'&#62;";?></code><br/><br/>
  <textarea name="urr_webfont_name" rows="5" cols="150"><?php echo stripslashes($name); ?></textarea>
  </p>

  <h3><?php _e("Add Your Own Custom Stylesheet: " ); ?></h3>

  <p>
  Example:<br/>
  <code>body, p, select, textarea {font-family: 'Ubuntu', sans-serif;}<br/>
  input, label, select, textarea {font-family: 'Ubuntu', sans-serif;}</code><br/><br/>
  <textarea name="urr_webfont_style" rows="10" cols="150"><?php echo stripslashes($style); ?></textarea>
  </p>

  <p>See <a href="http://www.google.com/webfonts/" target="_blank">Google Web Fonts</a> for instructions.</p>

  <hr />

  <p class="submit">
  <input type="submit" name="Submit" value="<?php _e('Update Options', 'urr_google_webfont' ) ?>" />
  </p>

  </form>

</div>