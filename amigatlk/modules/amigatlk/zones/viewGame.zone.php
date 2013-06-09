<?php
/**
 * @package    amigatlk
 * @subpackage amigatlk
 * @brief      
 * @author     Bruno Ethvignot
 * @copyright  2013 TLK Games
 * @created    2013-04-01 
 * @date       2013-04-21
 * @link       http://amiga.tlk.fr/
 * @license    All right reserved
 * $Author$
 * $Date$
 * $Id$
 */
class viewGameZone extends jZone {
    protected $_tplname = 'amigatlk~zone.viewGame';
    
    /**
     * Initialization of the jTpl object
     */
    protected function _prepareTpl() {
        $this->_tpl->assign('game', $this->param('game'));
    }
}
?>
