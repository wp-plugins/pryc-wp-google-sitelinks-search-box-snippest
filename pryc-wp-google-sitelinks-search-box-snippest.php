<?php
/*
 * Plugin Name: PRyC WP: Google Sitelinks Search Box snippest
 * Plugin URI: http://PRyC.pl
 * Description: Plugin add to homepage code required to activate new Sitelinks Search Box @ Google search
 * Author: PRyC
 * Author URI: http://PRyC.pl
 * Version: 1.0.3
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

 
/* Copyright PRyC (email: kontakt@PRyC.pl)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
*/
 
 
/* CODE: */

function pryc_wp_google_sitelinks_search_box_snippest() {
	if(is_home()) {
		$site_url = network_site_url('/');
		#echo $site_url;
		
		?>
		<!-- PRyC WordPress: Google Sitelinks Search Box snippest: -->
		<script type="application/ld+json">
		{
		   "@context":"http://schema.org",
		   "@type":"WebSite",
		   "url": "<?php echo $site_url ?>",
		   "potentialAction": {
			 "@type":"SearchAction",
			 "target": "<?php echo $site_url ?>?s={search_term}",
			 "query-input": "required name=search_term"
		   }            
		}
		</script>   	
		<!-- /PRyC WordPress: Google Sitelinks Search Box snippest -->  	
		<?php
	}
}
add_action('wp_head', 'pryc_wp_google_sitelinks_search_box_snippest');


/* END */
?>
