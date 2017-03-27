<!DOCTYPE html>
<html class="site-background">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Habitation is a nomadic site-specific project created by artist Hui-Ying Tsai. The project explores the concept of home and the modern utopia for human and animals by building a nesting structure in different locations with local materials. The design of each piece involves field study and reflects on the history, environment, and community of the site. Each piece functions as a social hub or habitat for people and animals. The work becomes a monument of the home building process. By collaborating with each community to make art, Project Habitation enhances awareness of the natural and cultural landscapes that responds to the presence of the place.">
  <meta name="keywords" content="site-specific art, site-responsive art, public art, community engagement, installation, land art, environmentally friendly art, eco art, nest, house, architecture, habitation, home, shelter, habitat, social practice, natural art, recycled material, nomadic ">
  <title>Project Habitation - A nomadic site-specific movement</title>
  <link rel="stylesheet" href="css/main.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="js/main.js"></script>
  </head>
  <body>
    <!-- header -->
    <div id="menu-bar" class="container-fluid green-fade shadow">
      <header>
        <div class="share-icon"><a href="#"><i class="fa fa-2x fa-share-alt-square" aria-hidden="true"></i></a></div>
        <div class="mobile-nav"><a id="menu-icon" href="#"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></a></div>
        <div class="container table">
          <nav class="logo-nav">
            <a href="index.html"><img src="images/Logo.png" alt="Logo" class="logo"></a>
          </nav>
          <nav class="main-nav">
            <div class="wrap">
              <a href="projects.html"><span>Works</span></a>
              <a href="about.html"><span>About</span></a>
              <a href="contact.php" class="active"><span>Contact</span></a>
           </div>
          </nav>
          <nav class="social-nav">
            <a href="https://www.instagram.com/huiytsai/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="https://twitter.com/ProjHabitation" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
            <a href="https://www.facebook.com/ProjectHabitationNow/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
            <!--<a href="vr.html"><img class="vr" src="images/VRicon.svg" alt="Virtual Reality"></a>-->
          </nav>
       </div>
     </header>
    </div><!-- .container-fluid -->
    <!-- main -->
  <main class="container">
    <!-- contact form -->
    <div class="row">
      <section class="col-6 white-fill shadow form-round-edges">
        <?php if (is_null($_GET['s'])) { ?>
          <form action="mailer.php" method="post">
            <input type="text" name="first_name" placeholder="First Name" required>
            <input type="text" name="last_name" placeholder="Last Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="tel" name="phone" placeholder="Phone (optional)">
            <textarea name="message" rows="8" cols="10" placeholder="Message" required></textarea>
            <div>
              <img class="verif_img" src="verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image"><input type="text" name="verify" class="verif_box" placeholder="verify you're human by typing the numbers shown" required>
            </div>
            <input type="submit" value="Submit">
          </form>
        <?php } else {
          $s = $_GET['s'];
          if ($s == 'success') {
            echo '<div class="status_message success">Thank you. Your message was sent successfully!</div>';
          } elseif ($s == 'error') {
            echo '<div class="status_message error">There was an error sending your message. Please make sure you fill in all the fields correctly! Or if issues persist you can manually send an email to: info@projecthabitation.org</div><form action="mailer.php" method="post">
              <input type="text" name="first_name" placeholder="First Name" required>
              <input type="text" name="last_name" placeholder="Last Name" required>
              <input type="email" name="email" placeholder="Email" required>
              <input type="tel" name="phone" placeholder="Phone (optional)">
              <textarea name="message" rows="8" cols="10" placeholder="Message" required></textarea>
              <div>
                <img class="verif_img" src="verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image"><input type="text" name="verify" class="verif_box" placeholder="verify you\'re human by typing the numbers shown" required>
              </div>
              <input type="submit" value="Submit">
            </form>';
          } else {
            echo '<div class="status_message error">Error: Status Unrecognized! If issues persist you can manually send an email to: info@projecthabitation.org</div>';
          }
        } ?>
     </section>
     <section class="col-6">
       Thank you for visiting Project Habitation!<br>If you like to share with us your thoughts, ideas, or comments, please don't hesitate to contact us. We will get back to you as soon as possible!<br>Let's create and connect!
     </section>
   </div>
 </main>
 <!-- footer -->
 <footer class="container-fluid">
  <div class="container row footer-fade highlight-edge">
   <section class="col-4 footer-content-fill">
     <h4>Correspondence</h4>
     <a><img id="Hui" src="images/Hui.jpg" alt="Hui"></a>

     <a href="http://www.huiytsai.com" target="_blank">Hui-Ying Tsai</a><br>
     <small>Artist/Director</small>
     <div class="clear">
       <a href="tel:+14157561222"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp;+1 415 756 1222</a><br>
       <a href="mailto:info@projecthabitation.org"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;info@projecthabitation.org</a>
     </div>
   </section>
   <section class="col-4 footer-content-fill">
     <h4>Get Involved</h4>
     <a href="#">Collabration</a><br>
     <a href="#">Media Requests</a><br><br><br>
     <h4>Follow Us</h4>
       <div class="set-table">
         <div class="followbotton">
           <a>
             <div class="fb-follow" data-href="https://www.facebook.com/ProjectHabitationNow" data-layout="button" data-size="large" data-show-faces="true"></div>
           </a>
         </div><br>
       <div class="set-table">
         <div class="followbotton">
           <a href="https://twitter.com/ProjHabitation" class="twitter-follow-button" data-show-count="false" data-size="large" data-show-screen-name="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script><br>
         </div>
       </div>
       <div class="set-table">
         <div class="followbotton">
           <a>
           <style>.ig-b- { display: inline-block; }
           .ig-b- img { visibility: hidden; }
           .ig-b-:hover { background-position: 0 -60px; } .ig-b-:active { background-position: 0 -120px; }
           .ig-b-32 { width: 32px; height: 32px; background: url(//badges.instagram.com/static/images/ig-badge-sprite-32.png) no-repeat 0 0; }
           @media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
           .ig-b-32 { background-image: url(//badges.instagram.com/static/images/ig-badge-sprite-32@2x.png); background-size: 60px 178px; } }</style>
           <a href="https://www.instagram.com/huiytsai/?ref=badge" class="ig-b- ig-b-32"><img src="//badges.instagram.com/static/images/ig-badge-32.png" alt="Instagram" /></a>
           </a><br>
       </div>
     </div> <!-- set-table -->
   </section>
   <section class="col-4 footer-content-fill">
     <!-- Begin MailChimp Signup Form -->
     <div id="mc_embed_signup">
       <form action="https://projecthabitation.us14.list-manage.com/subscribe/post?u=4ef489bd69bebf8953f98135a&amp;id=e452d06ab6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
         <div id="mc_embed_signup_scroll">
           <div class="mc-field-group">
             <label for="mce-EMAIL">Email Address <span class="asterisk">*</span>
           </label>
             <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
           </div>
           <div class="mc-field-group">
             <label for="mce-FNAME">First Name </label>
             <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
           </div>
           <div class="mc-field-group">
             <label for="mce-LNAME">Last Name </label>
             <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
           </div>
           <div id="mce-responses" class="clear">
             <div class="response" id="mce-error-response" style="display:none"></div>
             <div class="response" id="mce-success-response" style="display:none"></div>
           </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
           <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_4ef489bd69bebf8953f98135a_e452d06ab6" tabindex="-1" value=""></div>
           <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
         </div>
       </form>
     </div>
     <script type='text/javascript' src='https://s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
     <script type='text/javascript'>
       (function($) {
         window.fnames = new Array();
         window.ftypes = new Array();
         fnames[0]='EMAIL';
         ftypes[0]='email';
         fnames[1]='FNAME';
         ftypes[1]='text';
         fnames[2]='LNAME';
         ftypes[2]='text';
       }(jQuery));
       var $mcj = jQuery.noConflict(true);
     </script>
     <!--End mc_embed_signup-->
   </section>
  </div>
 </footer>

 <div id="fb-root"></div>
 <script>(function(d, s, id) {
   var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) return;
   js = d.createElement(s); js.id = id;
   js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1605677969459046";
   fjs.parentNode.insertBefore(js, fjs);
 }(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
