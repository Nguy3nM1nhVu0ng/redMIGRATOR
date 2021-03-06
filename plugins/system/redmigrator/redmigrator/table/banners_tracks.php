<?php
/**
 * @package     redMIGRATOR.Backend
 * @subpackage  Controller
 *
 * @copyright   Copyright (C) 2012 - 2015 redCOMPONENT.com. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 * 
 *  redMIGRATOR is based on JUpgradePRO made by Matias Aguirre
 */

// Check to ensure this file is within the rest of the framework
defined('JPATH_BASE') or die();

/**
 * Upgrade class for Banners tracks
 *
 * This class takes the banners tracks from the existing site and send them into the new site.
 *
 * @since	0.4.5
 */
class redMigratorTableBanners_tracks extends redMigratorTable {
	/** @var date */
	var $track_date = null;
	/** @var int(10) unsigned */
	var $track_type = null;
	/** @var int(10) unsigned */
	var $banner_id = null;

	/**
	 * Table type
	 *
	 * @var string
	 */	
	var $_type = 'banners_tracks';	

	function __construct(&$db) {
		parent::__construct('#__bannertrack', 'banner_id', $db);
	}

	/**
	 * Setting the conditions hook
	 *
	 * @return	array
	 * @since	3.1.0
	 * @throws	Exception
	 */
	public function getConditionsHook()
	{
		$conditions = array();
		
		$conditions['where'] = array();

		$conditions['group_by'] = "banner_id";
		
		return $conditions;
	}
}
