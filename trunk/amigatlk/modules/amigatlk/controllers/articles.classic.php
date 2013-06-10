<?php
/**
* @package    amigatlk
* @subpackage amigatlk
* @author     Bruno Ethvignot <bruno at tlk dot biz> 
* @copyright  TLK Games
* @created    2013-06-09
* @date       2013-06-09
* @link       http://amiga.tlk.fr/
* @license    All rights reserved
*/

class articlesCtrl extends jController {
    
    /**
     *
     */
    function view() {
        $lang = jLocale::getCurrentLang();
        $name = $this->param('name');
        jLog::log("lang: $lang / name: $name");
        $rep = $this->getResponse('html');
        jLog::log( "Name of fame: " . $this->param('name') );
        $articles = jClasses::getService('amigatlk~articles');
        jLog::log(" " . get_class($articles) );
        $article = $articles->getArticle( $this->param('name') );
        if (empty ($article)) {
            $rep->body->assignZone( 'MAIN', 'amigatlk~notFound404' );
            $rep->setHttpStatus( '404', 'Not Found' );
            return $rep;
        }
        $rep->title = $article->title;
        $rep->body->assignZone('MAIN', 'amigatlk~viewArticle', array('article' => $article));
        return $rep;
    }
}
