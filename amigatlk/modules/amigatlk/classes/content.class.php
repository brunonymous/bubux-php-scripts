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



class content {

    protected function getPath() {
        return jApp::appPath( 'articles');
    }

    public function getContent($name) {

        $tpl = new jTpl();
        $tpl->assign( 'lang', jLocale::getCurrentLang() );
        $name          = str_replace('-', '_', $name);
        $content       = $tpl->fetch('amigatlk~' . $name, 'text', true, false);
        $lines         = explode("\n", $content);
        $item          = new stdClass();
        $item->title   = trim  (array_shift($lines));
        $item->content = $lines;
        //jLog::dump($item);
        return $item;
    }



}
?>
