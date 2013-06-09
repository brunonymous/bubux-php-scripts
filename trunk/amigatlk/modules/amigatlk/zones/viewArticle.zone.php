<?php
/**
 * @package    amigatlk
 * @subpackage amigatlk
 * @brief      
 * @author     Bruno Ethvignot
 * @copyright  2013 TLK Games
 * @created    2013-04-21 
 * @date       2013-04-21
 * @link       http://amiga.tlk.fr/
 * @license    All right reserved
 * $Author$
 * $Date$
 * $Id$
 */
class viewArticleZone extends jZone {
    protected $_tplname = 'amigatlk~zone.viewArticle';
    
    /**
     * Initialization of the jTpl object
     */
    protected function _prepareTpl() {
        $this->_tpl->assign('article', $this->param('article'));
    }
}
?>
