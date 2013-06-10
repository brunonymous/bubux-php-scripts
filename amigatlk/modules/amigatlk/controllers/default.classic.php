<?php
/**
* @package    amigatlk
* @subpackage amigatlk
* @author     Bruno Ethvignot <bruno at tlk dot biz> 
* @copyright  2013 TLK Games
* @date       2013-06-10
* @link       http://amiga.tlk.fr/
* @license    GNU GPL v3
*/
class defaultCtrl extends jController {
  
   /**
     *
     */
    function index() {
        $rep = $this->getResponse('html');
        $lang = jLocale::getCurrentLang();
        $articles = jClasses::getService('amigatlk~articles');
        $article = $articles->getArticle( 'homepage' );
        if (empty ($article)) {
            $rep->body->assignZone( 'MAIN', 'amigatlk~notFound404' );
            $rep->setHttpStatus( '404', 'Not Found' );
            return $rep;
        }
        $rep->body->assignZone('MAIN', 'amigatlk~viewArticle', array('article' => $article));
        return $rep;
    }
}
