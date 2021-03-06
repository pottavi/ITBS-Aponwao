<?php
/* Copyright (C) 2003-2005 Rodolphe Quiedeville <rodolphe@quiedeville.org>
 * Copyright (C) 2004-2010 Laurent Destailleur  <eldy@users.sourceforge.net>
 * Copyright (C) 2004      Eric Seigne          <eric.seigne@ryxeo.com>
 * Copyright (C) 2005-2012 Regis Houssin        <regis.houssin@capnetworks.com>
 * Copyright (C) 2016		Charlie Benke		<charlie@patas-monkey.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 * or see http://www.gnu.org/
 */

require_once DOL_DOCUMENT_ROOT.'/core/class/commondocgenerator.class.php';

/**
 *	\class      ModeleProduct
 *	\brief      Parent class for product models of doc generators
 */
abstract class ModeleProduct extends CommonDocGenerator
{
    var $error='';

    /**
     *  Return list of active generation modules
     *
	 * 	@param	DoliDB		$db					Database handler
     *  @param	integer		$maxfilenamelength  Max length of value to show
     * 	@return	array							List of templates
     */
    static function liste_modeles($db,$maxfilenamelength=0)
    {
        global $conf;

        $type='product';
        $liste=array();

        include_once DOL_DOCUMENT_ROOT.'/core/lib/functions2.lib.php';
        $liste=getListOfModels($db,$type,$maxfilenamelength);

        return $liste;
    }
}
