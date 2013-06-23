<?php
/**
* @package    amigatlk
* @subpackage amigatlk
* @author     Bruno Ethvignot <bruno at tlk dot biz> 
* @copyright  2013 TLK Games
* @created    2013-04-01
* @date       2013-06-23
* @link       http://amiga.tlk.fr/
* @license    GNU GPL v3
*/
class defaultCtrl extends jController {
  
   /**
     *
     */
    function index() {
        $lang     = jLocale::getCurrentLang();
        if ( $lang != 'fr' ) {
            $rep = $this->getResponse('redirect');
            $rep->action = "amigatlk~default:index";
            $rep->params = array('lang' => 'fr');
            return $rep;
        }
        $rep      = $this->getResponse('html');
        $articles = jClasses::getService('amigatlk~articles');
        $article  = $articles->getArticle( 'homepage' );
        if ( empty ($article) ) {
            $rep->body->assignZone( 'MAIN', 'amigatlk~notFound404' );
            $rep->setHttpStatus( '404', 'Not Found' );
            return $rep;
        }
        $rep->body->assignZone( 'MAIN', 'amigatlk~viewArticle', 
            array( 'article' => $article ) );
        return $rep;
    }
}
