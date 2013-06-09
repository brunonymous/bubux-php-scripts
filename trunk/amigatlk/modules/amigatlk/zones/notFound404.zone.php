<?php
/**
 * @package    amigatlk
 * @subpackage amigatlk
 * @brief      
 * @author     Bruno Ethvignot <bruno at tlk dot biz>
 * @copyright  2013 TLK Games
 * @created    2013-04-01 
 * @date       2013-04-01
 * @link       http://amiga.tlk.fr
 * @license    All right reserved
 * $Author$
 * $Date$
 * $Id$
 */
class notFound404Zone extends jZone {
    protected $_tplname = 'zone.notFound404';

    /**
     * Retrurn server and execution environment information
     * @param string $name A element name
     * @param string $defaultStr String returned if requested
     *                           element does not exist
     * @return string The value of the element requested 
     */
    private function _getServerKey($name, $defaultStr = '') {
        return array_key_exists($name, $_SERVER) ?
               $name . ': ' . $_SERVER[$name] : $defaultStr;
    }

    /** 
     * Initialization of the jTpl object
     */
    protected function _prepareTpl() {
        /*
        $referer  = $this->_getServerKey('HTTP_REFERER');
        $uri      = $this->_getServerKey('SCRIPT_URI');
        $agent    = $this->_getServerKey('HTTP_USER_AGENT');
        $doNotLog = $this->param('doNotLog', false);
        if (!$doNotLog) {
            tlkLog::error("$uri $referer $agent", 'error_page_not_found');
        }
        */
    }   
}
?>
