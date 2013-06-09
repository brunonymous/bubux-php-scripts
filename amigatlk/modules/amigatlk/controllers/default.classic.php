<?php
/**
* @package   amigatlk
* @subpackage amigatlk
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

class defaultCtrl extends jController {
    /**
    *
    */
    function index() {
        $rep = $this->getResponse('html');

        // this is a call for the 'welcome' zone after creating a new application
        // remove this line !
        //$rep->body->assignZone('MAIN', 'jelix~check_install');


        $lang = jLocale::getCurrentLang();
        $articles = jClasses::getService('amigatlk~articles');
        $article = $articles->getArticle( 'homepage' );

        $rep->body->assignZone('MAIN', 'amigatlk~viewArticle', array('article' => $article));

        return $rep;
    }
}
