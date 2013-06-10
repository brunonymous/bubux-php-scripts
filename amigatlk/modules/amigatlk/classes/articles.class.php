<?php
/**
* @package    amigatlk
* @subpackage amigatlk
* @author     Bruno Ethvignot <bruno at tlk dot biz> 
* @copyright  TLK Games
* @created    2013-04-21
* @date       2013-06-10
* @link       http://amiga.tlk.fr/
* @license    All rights reserved
*/

jClasses::inc('content');

class articles extends content {

    private function getArticlesPath() {
        return jApp::appPath( 'articles');
    }

    public function getArticle($name) {
        $article = $this->getContent($name);
        return $article;
    }
}
?>
