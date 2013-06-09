<?php
/**
* @package    amigatlk
* @subpackage amigatlk
* @author     Bruno Ethvignot <bruno at tlk dot biz> 
* @copyright  TLK Games
* @created    2013-04-21
* @date       2013-04-21
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


        $tpl     = new jTpl();
        $content = $tpl->fetch('amigatlk~' . $name, 'text', true, false);
        #$content = $tpl->fetch('amigatlk~validation', 'text', true, false);

        $lines   = explode("\n", $content);
        $article          = new stdClass();
        $article->title   = trim  (array_shift($lines));
        $article->content = $lines;
        jLog::dump($article);
        return $article;



        /*



        $filename = $this->getArticlesPath() . '/' . $langTag . '/' . $name . '.txt';
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
        $article          = new stdClass();
        $article->title   = trim  (array_shift($lines));
        $article->content = $lines;
        jLog::dump($article);
        return $article;
        */
    }

}
?>
