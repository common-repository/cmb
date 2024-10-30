<?php

/*

Plugin Name: Colour me Bad
Version: 2.2
Plugin URI: http://www.lazyapes.com
Description: Connects your last fm information into the kuler social colous sharing pallettes.  <a href="http://www.nitzan.co.uk">Nitzan Hermon</a> and  <a href="http://www.contextive.com">Amit Ashckenazi</a>


*/


include_once( 'cmb_config.php' );

function cmb(){
$position = get_option('cmb_position');
$username = get_option( 'cmb_lastfm_username' );
?>
		<div id="cmb">
			<object width="100%" height="100%">
				<param name="movie" value="/wp-content/plugins/cmb/colours.swf?lfu=<?=$username?>&lay=standing"></param>
				<param name="allowFullScreen" value="false"></param>
				<embed src="/wp-content/plugins/cmb/colours.swf?lfu=<?=$username?>&lay=<?=$position?>" type="appcmbcation/x-shockwave-flash" allowfullscreen="true" width="100%" height="100%">
				</embed>
			</object>
		</div>

<?
  }
?>