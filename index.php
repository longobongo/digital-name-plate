<?php get_header(); ?>
<div id="navi">
  <ul class="navigation">
    <li><a href="#profile">Profile</a></li>
    <li><a href="#details">Details</a></li>
  </ul>
</div>

<div id="top"></div>
<div id="page_container">
<div id="page">
  <div class="page-in">
    <div id="datacontent">
      <div class="about clearfix">
        <h1>
          <?php bloginfo('name'); ?>
        </h1>
        <p>
          <?php bloginfo('description'); ?>
        </p>
      </div>
       
    </div>
    <div class="wrapper" >
      <div id="profile" >
	<div id="content">
        	<p>
		<?php echo stripslashes($pt_profileSummary); ?>
		</p>
	</div>
	<div class="clear"></div>
        <div id="content" style= "margin-top: 30px;">
          <ul>
            <? if ($pt_linkedin) { ?>
            <li><a href="<?php echo $pt_linkedin; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/profiles/linkedin.png" target="_blank"/><strong>LinkedIn</strong>linkedin.com</a></li>
            <? } else { ?>
            <? } ?>

            <? if ($pt_twitter) { ?>
            <li><a href="<?php echo $pt_twitter; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/profiles/twitter.png" target="_blank"/><strong>Twitter</strong>twitter.com</a></li>
            <? } else { ?>
            <? } ?>
            
            <? if ($pt_facebook) { ?>
            <li><a href="<?php echo $pt_facebook; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/profiles/facebook.png" /><strong>Facebook</strong>facebook.com</a></li>
            <? } else { ?>
            <? } ?>
            
            <? if ($pt_pinterest) { ?>
            <li><a href="<?php echo $pt_pinterest; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/profiles/pinterest.png" /><strong>Pinterest</strong>pinterest.com</a></li>
            <? } else { ?>
            <? } ?>

            <? if ($pt_friendfeed) { ?>
            <li><a href="<?php echo $pt_friendfeed; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/profiles/friendfeed.png" /><strong>FriendFeed</strong>friendfeed.com</a></li>
            <? } else { ?>
            <? } ?>
            
            <? if ($pt_posterous) { ?>
            <li><a href="<?php echo $pt_posterous; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/profiles/posterous.png" /><strong>Posterous</strong>posterous.com</a></li>
            <? } else { ?>
            <? } ?>
                        
            <? if ($pt_stumbleupon) { ?>
            <li><a href="<?php echo $pt_stumbleupon; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/profiles/stumbleupon.png" /><strong>Stumbleupon</strong>stumbleupon.com</a></li>
            <? } else { ?>
            <? } ?>
            
            <? if ($pt_delicious) { ?>
            <li><a href="<?php echo $pt_delicious; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/profiles/delicious.png" /><strong>Delicious</strong>delicious.com</a></li>
            <? } else { ?>
            <? } ?>
            
            <? if ($pt_reddit) { ?>
            <li><a href="<?php echo $pt_reddit; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/profiles/reddit.png" /><strong>Reddit</strong>reddit.com</a></li>
            <? } else { ?>
            <? } ?>
            
            <? if ($pt_digg) { ?>
            <li><a href="<?php echo $pt_digg; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/profiles/digg.png" /><strong>Digg</strong>digg.com</a></li>
            <? } else { ?>
            <? } ?>
            
            <? if ($pt_technorati) { ?>
            <li><a href="<?php echo $pt_technorati; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/profiles/technorati.png" /><strong>Technorati</strong>technorati.com</a></li>
            <? } else { ?>
            <? } ?>

            <? if ($pt_vimeo) { ?>
            <li><a href="<?php echo $pt_vimeo; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/profiles/vimeo.png" /><strong>Vimeo</strong></strong>vimeo.com</a></li>
            <? } else { ?>
            <? } ?>

            <? if ($pt_youtube) { ?>
            <li><a href="<?php echo $pt_youtube; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/profiles/youtube.png" /><strong>YouTube</strong>youtube.com</a></li>
            <? } else { ?>
            <? } ?>

            <? if ($pt_flickr) { ?>
            <li><a href="<?php echo $pt_flickr; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/profiles/flickr.png" /><strong>Flickr</strong>flickr.com</a></li>
            <? } else { ?>
            <? } ?>

            <? if ($pt_github) { ?>
            <li><a href="<?php echo $pt_github; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/profiles/github.png" /><strong>Github</strong>github.com</a></li>
            <? } else { ?>
            <? } ?>

            <? if ($pt_lastfm) { ?>
            <li><a href="<?php echo $pt_lastfm; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/profiles/lastfm.png" /><strong>Last.fm</strong>last.fm</a></li>
            <? } else { ?>
            <? } ?>
            
            <? if ($pt_myspace) { ?>
            <li><a href="<?php echo $pt_myspace; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/profiles/myspace.png" /><strong>Myspace</strong>myspace.com</a></li>
            <? } else { ?>
            <? } ?>

            <? if ($pt_wordpress) { ?>
            <li><a href="<?php echo $pt_wordpress; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/profiles/wordpress.png" /><strong>Wordpress</strong>wordpress.com</a></li>
            <? } else { ?>
            <? } ?>
          </ul>
                      
          <div class="clear"></div>
          <div id="content">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?><?php endif; ?>
          </div>
        </div>
      </div>

      <div id="details" >
        <div class="main_content">
        
          <? if ($pt_profileimage == "") { ?> <img src="<?php bloginfo('template_directory'); ?>/images/qr_code.png" alt="<?php bloginfo('name'); ?>"/>
          <? } else { ?>
          <img src="<?php echo $pt_profileimage; ?>" alt="<?php bloginfo('name'); ?>"/>
          <? } ?>
          <div class="about clearfix"></div>
        
          <? if ($pt_company) { ?>
          <div class="row"><span class="field_l i_company">Company:</span><span class="field_r"><a href="<?php echo $pt_website; ?>" target="_blank"><?php echo $pt_company; ?></a></span></div>
          <? } else { ?>
          <? } ?>
          <? if ($pt_location) { ?>
          <div class="row"><span class="field_l i_location">Blog:</span><span class="field_r"><a href="http://<?php echo $pt_location; ?>" target="_blank"><?php echo $pt_location; ?></a></span></div>
          <? } else { ?>
          <? } ?>
          <? if ($pt_email) { ?>
          <div class="row"><span class="field_l i_mail">E-Mail:</span><span class="field_r"><a href="mailto:<?php echo $pt_email; ?>"><?php echo $pt_email; ?></a></span></div>
          <? } else { ?>
          <? } ?>
          <? if ($pt_im) { ?>
          <div class="row"><span class="field_l i_mail">Skype :</span><span class="field_r"><?php echo $pt_im; ?></span></div>
          <? } else { ?>
          <? } ?>
          
        </div>
      </div>
	  
    </div>
  </div>
</div>
</div>
</div>
<?php get_footer(); ?>