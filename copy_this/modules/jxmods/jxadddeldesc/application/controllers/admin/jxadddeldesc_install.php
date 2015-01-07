<?php
/*
 *    This file is part of the module jxAddDelDesc for OXID eShop Community Edition.
 *
 *    OXID eShop Community Edition is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    OXID eShop Community Edition is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with OXID eShop Community Edition.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      https://github.com/job963/jxAddDelDesc
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 * @copyright (C) Joachim Barthel 2015
 * 
 */

class jxAddDelDesc_Install
{ 
    public static function onActivate() 
    { 
        $oDb = oxDb::getDb(); 

        $isUtf = oxRegistry::getConfig()->isUtf(); 
        $sCollate = ($isUtf ? "COLLATE 'utf8_general_ci'" : "");
        
        $aSql[] = "ALTER TABLE `oxdeliveryset` ADD COLUMN `JXDESC` VARCHAR(255) NOT NULL AFTER `OXTITLE_3`";
        $aSql[] = "ALTER TABLE `oxdeliveryset` ADD COLUMN `JXDESC_1` VARCHAR(255) NOT NULL AFTER `JXDESC`";
        $aSql[] = "ALTER TABLE `oxdeliveryset` ADD COLUMN `JXDESC_2` VARCHAR(255) NOT NULL AFTER `JXDESC_1`";
        $aSql[] = "ALTER TABLE `oxdeliveryset` ADD COLUMN `JXDESC_3` VARCHAR(255) NOT NULL AFTER `JXDESC_2`";
                
        foreach ($aSql as $sSql) {
            try {
                $oRs = $oDb->Execute($sSql);
            }
            catch (Exception $e) {
                echo '<div style="border:2px solid #dd0000;margin:10px;padding:5px;background-color:#ffdddd;font-family:sans-serif;font-size:14px;">';
                echo '<b>SQL-Error '.$e->getCode().' in SQL statement</b><br />'.$e->getMessage().'';
                echo '</div>';
                die();
            }
        }
        //$this->_logAction( 'Module jxAddDelDesc successfully activated' );
        
        return true; 
    } 
    

    public static function onDeactivate() 
    { 
        //$this->_logAction( 'Module jxAddDelDesc deactivated' );
        
        return true; 
    }  
    
    
    private function _logAction($sText)
    {
        $myConfig = oxRegistry::get("oxConfig");
        $sShopPath = $myConfig->getConfigParam("sShopDir");
        $sLogPath = $sShopPath.'/log/';
        
        $fh = fopen($sLogPath.'jxmods.log',"a+");
        fputs($fh,$sText."\n");
        fclose($fh);
    }

    
    }

?>