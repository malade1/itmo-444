<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Welcome - </title>
    <link href="css/base.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
  <?php
    <!--navigation -->
    <div class="container_16">
      <div class="grid_16 navbg">
        <ul class="navlink">
          <li class="active"><a href="index.php" title="About">Home</a></li>
          <li><a href="gallery.php" title="About">Gallery</a></li>
          <li><a href="form.php" title="Service">Form</a></li>
        </ul>
      </div>
    </div>
    <!--navigation -->
    <!--header -->
    <div class="container_16">
      <div class="grid_16 hdrBg">
        <a href="index.php"><img src="images/logo.gif" alt="Business.com" border="0" class="logo" title="Business.com"/></a>
        <h1>Welcome
          <span>Welcome to my website.</span>
        </h1>
        <a href="#" title="read more" class="readmore">read more</a>
      </div>
    </div>
    <!--header -->
    <!--body -->
    <div class="container_16">
      <div class="grid_16" id="body">
        <div class="grid_6  alpha">
          <!--left panel -->
          <!--left panel -->
        </div>
        <div class="grid_10 omega">
          <form enctype="multipart/form-data" action="result.php" method="POST">
            <div class="col-md-9">
              Email :  <input type="email" class="form-control" name="email" placeholder="email">
            </div>
            <br>
            <div class="col-md-9">
              Enter Phone of user (1-XXX-XXX-XXXX): <input type="phone" name="phone">
            </div>
            <div class="form-group">
              <label for="image" class="col-md-3 control-label">Image</label>
              <div class="col-md-9">
                <input type="file" class="form-control" name="image" accept="image/*" >
              </div>
            </div>
            <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
              <div class="col-md-offset-3 col-md-9">
                <input type="submit" value="Send File" />
              </div>
            </div>
          </form>
          <form enctype="multipart/form-data" action="gallery.php" method="POST">
            Enter Email of user for gallery to browse: 
            <input type="email" name="email">
            <input type="submit" value="Load Gallery" />
          </form>
          <div class="grid_5 omega">
          </div>
          <div class="clear"></div>
        </div>
      </div>
    </div>
    <!--body -->
    <!--footer -->
    <div class="container_16">
      <div class="grid_16" id="footer">
        <ul class="footerlink">
          <li><a href="index.php" title="Home">Home</a></li>
          <li>|</li>
          <li><a href="gallery.php" title="About">Gallery</a></li>
          <li><a href="form.php" title="Service">Form</a></li>
        </ul>
        <p class="clear">&nbsp;</p>
        <p class="copyright">© Copyright. All Rights Reserved.
          <span>Designed By : <a href="#" target="_blank" title="#">Moses</a></span>
        </p>
      </div>
    </div>
    <!--footer -->
   ?>
  </body>
</html>