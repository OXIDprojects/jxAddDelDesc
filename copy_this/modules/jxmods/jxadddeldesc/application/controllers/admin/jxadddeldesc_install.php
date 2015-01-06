<?php
/*
 *    This file is part of the module jxExtDelInfo for OXID eShop Community Edition.
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
 * @link      https://github.com/job963/jxExtDelInfo
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 * @copyright (C) Joachim Barthel 2015
 * 
 */

class jxAddDelDesc_Install
{ 
    public static function onActivate() 
    { 

        //$myConfig = oxRegistry::get('oxConfig');
        //$bConfig_DropOnDeactivate = $myConfig->getConfigParam( 'bJxInventoryDropOnDeactivate' );
        $oDb = oxDb::getDb(); 

        $isUtf = oxRegistry::getConfig()->isUtf(); 
        $sCollate = ($isUtf ? "COLLATE 'utf8_general_ci'" : "");
        
        $sSql = "ALTER TABLE `oxdeliveryset` "
                . "ADD COLUMN `JXDESC` VARCHAR(255) NOT NULL AFTER `OXTITLE_3`";
                
        $oRs = $oDb->execute($sSql);
        
        return true; 
    } 

    public static function onDeactivate() 
    { 
        //$myConfig = oxRegistry::get("oxConfig");
        //$bConfig_DropOnDeactivate = $myConfig->getConfigParam("bJxInventoryDropOnDeactivate");

        /*if ($bConfig_DropOnDeactivate) {
            $oDb = oxDb::getDb(); 

            $sSql = "DROP TABLE IF EXISTS `jxinvarticles`"; 
            $oRs = $oDb->execute($sSql); 
             
            $sSql = "DROP TABLE IF EXISTS `jxinvshipping`"; 
            $oRs = $oDb->execute($sSql); 
        }*/
        
        return true; 
    }  
}

?>