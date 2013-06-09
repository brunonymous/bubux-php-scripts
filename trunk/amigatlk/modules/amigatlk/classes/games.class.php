<?php
/**
* @package    amigatlk
* @subpackage amigatlk
* @author     Bruno Ethvignot <bruno at tlk dot biz> 
* @copyright  TLK Games
* @created    2013-04-01
* @date       2013-05-19
* @link       http://amiga.tlk.fr/
* @license    All rights reserved
*/
jClasses::inc('content');
class games extends content {


    private function getGamesPath() {
        return jApp::appPath( 'games');
    }

    public function getProduct($name) {
        $game = $this->getContent($name);
        $game->code        = $name; 
        $screenshots = trim ( array_shift($game->content) );
        if ( empty ($screenshots) ) {
            $game->screenshots = array();
        } else {
            $game->screenshots = explode( ",", $screenshots );
        }
        // JLog::dump($game);
        return $game;

        /*

        //$filename = jApp::appPath( 'games/' . $langTag . '/' . $name . '.txt' );
        $filename = $this->getGamesPath() . '/' . $langTag . '/' . $name . '.txt';
        jLog::log("filename = $filename");
        if ( !file_exists($filename) ) {
            Jlog::log( $filename . ' was not found', 'error' );
            return;
        }


        $lines = file($filename);
        if ( $lines == false ) {
            jLog:log( $filename . ' was not found' );
            return;
        }
        $game              = new stdClass();
        $game->title       = trim  (array_shift($lines));
        #$game->code        = str_replace( ' ', '-', $game->title ); 
        $game->code        = $name; 
        $game->screenshots = explode( ",", array_shift($lines) );
        $game->content     = $lines;
        jLog::dump($game);
        return $game;
        */
    }

    /*
    public function &getGameNames($lang) {
        $names = array();
        $path = $this->getGamesPath() . '/' . $lang;
        $handle = opendir($path);
        if ( $handle == false ) {
            jLog:log( $path . ' was not found' );
            return $names;
        }
       
        while (false !== ($entry = readdir($handle))) {
            $matches = array();
            if (!preg_match('{^(.*)\.txt$}', $entry, $matches)) {
                jLog::log("(!) $entry");
                continue;
            }
            array_push($names, $matches[1]);
        }
        jLog::log("*********** ---------------------------");
        jLog::dump($names);
        return $names;



    }
    */
}
?>
