<?php 

 /**
 * Plugin Name:       HealthCare Lite
 * Plugin URI:        https://silicv.com/plugins/healthcare/
 * Description:       HealthCare is an Doctor Appointment Booking, Chamber and Clinic Management Software made by Silic. 
 * Version:           0.1.0-beta
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Silic
 * Author URI:        https://silicv.com/plugins/healthcare/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://silicv.com/plugins/healthcare/
 * Text Domain:       healthcare-lite
 * Domain Path:       /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/** 
 * Main plugin class, declear as final so that no one can extends this class
*/
final class healthcare {

    /**
     * Plugin version
     */
    const version = '0.1.0-beta';

    /**
     * Class constructors
     */
    private function __construct()
    {
        
    }

    /**
     * Initializes a singleton instance
     * 
     * @return \healthcare
     */
    public static function init(){
        static $instance = false;

        if( ! $instance ){
            $instance = new self();
        }
        return $instance;
    }

    public function define_constants(){
        define( 'SHC_VERSION', self::version );
    }
}

/**
 * Initializes the main plugin
 * 
 * @return \healthcare
 */
function healthcare(){
    return healthcare::init();
}

// kick-off the plugin
healthcare();

?>