<?php

namespace zamnuts\EANAPIClient\Common\SupportModels;

/**
 * @property-read EANLocationInfo[] $locations
 */
class EANLocationInfos extends EANAbstractGroup {
	
	/**
	 * @var string
	 */
	protected static $ROOT = 'LocationInfos';
	
	/**
	 * @var string
	 */
	public static $CHILD_CLASS = 'zamnuts\\EANAPIClient\\Common\\SupportModels\\EANLocationInfo';
	
	/**
	 * @param EANLocationInfos $supportModel
	 * @return EANLocationInfos
	 */
	public static function cast($supportModel) {
		return $supportModel;
	}
	
	/**
	 * @return EANLocationInfo[]
	 */
	protected function get__locations() {
		return $this->items;
	}
	
	/**
	 * @param EANLocationInfo $locationInfo
	 * @return boolean
	 */
	public function addLocation(EANLocationInfo $locationInfo) {
		return $this->addItem($locationInfo);
	}
	
	/**
	 * @param EANLocationInfo $locationInfo
	 * @return boolean
	 */
	public function removeLocation(EANLocationInfo $locationInfo) {
		return $this->removeItem($locationInfo);
	}
	
}
