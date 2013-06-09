<?php
/**
* @package    amigatlk
* @subpackage amigatlk
* @author     Bruno Ethvignot <bruno at tlk dot biz> 
* @copyright  TLK Games
* @link       http://amiga.tlk.fr/
* @license    All rights reserved
*/

class gamesCtrl extends jController {
    /**
    *
    */
    function view() {
        //$lang = jApp::config()->locale;
        //$lang = jLocale::getCurrentLang();
        $name = $this->param('name');
        jLog::log("lang: $lang / name: $name");
        $rep = $this->getResponse('html');


        jLog::log( "Name of fame: " . $this->param('name') );
        $games = jClasses::getService('amigatlk~games');
        $game = $games->getProduct( $this->param('name') );

        if (empty ($game)) {
            $rep->body->assignZone( 'MAIN', 'amigatlk~notFound404' );
            $rep->setHttpStatus( '404', 'Not Found' );
            return $rep;
        }

        $rep->title = $game->title;

        $rep->body->assignZone('MAIN', 'amigatlk~viewGame', array('game' => $game));


        // this is a call for the 'welcome' zone after creating a new application
        // remove this line !
        //$rep->body->assignZone('MAIN', 'jelix~check_install');

        return $rep;
    }
}
