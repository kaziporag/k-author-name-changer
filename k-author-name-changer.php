<?php
/** 
 * Plugin Name:       Author Name Changer
 * Plugin URI:        https://wordpress.org/plugins/kazi-visite-count/
 * Description:       It will display the number of page visits.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      8.1
 * Author:            Kazi Rabiul Islam
 * Author URI:        https://profiles.wordpress.org/distinctcoder/
*/

class kAuthorNameChanger {
    public function __construct() {
        add_action('init', array($this, 'initialize'));
    }

    function initialize() {
        add_filter( 'the_author', array($this, 'author_change'));
    }

    function author_change($author) {
        return str_replace($author, 'Kazi Rabiul Islam', $author);
    }
}


new kAuthorNameChanger();