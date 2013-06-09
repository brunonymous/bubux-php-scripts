<?php
/**
 * @package    amigatlk
 * @subpackage amigatlk
 * @brief      
 * @author     Bruno Ethvignot
 * @copyright  2013 TLK Games
 * @created    2013-04-20
 * @date       2013-04-21
 * @link       http://amiga.tlk.fr/
 * @license    All right reserved
 * $Author$
 * $Date$
 * $Id$
 */
class mainMenuZone extends jZone {
    protected $_tplname = 'amigatlk~zone.mainMenu';
    
    /**
     * Initialization of the jTpl object
     */
    protected function _prepareTpl() {
        $lang = jLocale::getCurrentLang();
        $this->_tpl->assign('lang', $lang);
    }
}
?>
