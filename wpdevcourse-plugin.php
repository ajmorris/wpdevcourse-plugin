<?php
/**
 * Plugin Name: Call to Action Box
 * Plugin URI: https://ithemes.com
 * Description: This is a Call to Action Box plugin. It will only work with GeneratePress.
 * Version: 1.0
 * Author: AJ Morris
 * Author URI: https://ajmorris.me
 */
 function itms_cta_box() {
   ?>
   <div class="itms-cta-box">
     <!-- Begin Mailchimp Signup Form -->
     <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
     <style type="text/css">
     	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
     	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
     	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
     </style>
     <div id="mc_embed_signup">
     <form action="https://liquidweb.us20.list-manage.com/subscribe/post?u=ac764ac759906859206b92176&amp;id=052f002383" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
         <div id="mc_embed_signup_scroll">
           <h3>Become an iThemes WordPress Training Insider!</h3>
           <p>Join over 30,000 people that have made a personal committment to grow their career.</p>
     <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
     <div class="mc-field-group">
     	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
     </label>
     	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
     </div>
     	<div id="mce-responses" class="clear">
     		<div class="response" id="mce-error-response" style="display:none"></div>
     		<div class="response" id="mce-success-response" style="display:none"></div>
     	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
         <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ac764ac759906859206b92176_052f002383" tabindex="-1" value=""></div>
         <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
         </div>
     </form>
     </div>
     <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
     <!--End mc_embed_signup-->
   </div>
   <?php
 }
 add_action( 'generate_before_comments_container', 'itms_cta_box', 10 );
