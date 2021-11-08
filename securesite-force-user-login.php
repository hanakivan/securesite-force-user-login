<?php
/**
 *
"SecureSite: Force User Login" is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

"SecureSite: Force User Login" is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with "SecureSite: Force User Login". If not, see https://www.gnu.org/licenses/gpl-3.0.html.
 *
 * Plugin Name: SecureSite: Force User Login
 * Description: A simple lightweight plugin that enforced the user login before accessing the site.
 * Version: 1.0.0
 * Author: Ivan Hanák <kontakt@hanakivan.sk>
 * Author URI: https://hanakivan.sk
 * Requires at least: 3.0
 * Requires PHP: 5.6
 */

/**
 * Special thanks to: https://wordpress.stackexchange.com/a/78245/40545
 */
add_action('wp', 'securesite_force_user_login');
function securesite_force_user_login() {
	if(!is_user_logged_in()) {
		auth_redirect();
	}
}