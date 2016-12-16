<?php

namespace zamnuts\EANAPIClient\Query\HotelListSearch;

use zamnuts\EANAPIClient\Util\ObjectBase;

/**
 * @property int $destinationId The unique hex key value for a specific city, metropolitan area, or landmark.
 */
class EANHLSearchDestinationId extends ObjectBase implements IEANHLSearch {
	
	/**
	 * The unique hex key value for a specific city, metropolitan area, or landmark. 
	 * Obtain this value via a geo function request, or from a multiple locations error 
	 * returned by a EANHLSearchDestination availability request. 
	 * @see EANHLSearchDestination
	 * @var string
	 */
	protected $destinationId;

    /**
     * Optional. Requires city and countryCode parameters to be defined.
     * @var string
     */
    public $propertyName;

    protected static $propertyMap = array(
        'destinationId' => 'string',
        'propertyName' => 'string',
    );

	/**
	 * @param int $destinationId
	 */
	public function __construct($destinationId=null) {
		$this->set__destinationId($destinationId);
	}
	
	/**
	 * @return int
	 */
	protected function get__destinationId() {
		return $this->destinationId;
	}
	
	/**
	 * 
	 * @param int $value
	 */
	protected function set__destinationId($value) {
		/* $value = (int) $value;
		if ( $value > 0 ) { */
			$this->destinationId = $value;
		/* } */
	}
	
	/**
	 * (non-PHPdoc)
	 * @see \zamnuts\EANAPIClient\Query\HotelListSearch\IEANHLSearch::isValid()
	 */
	public function isValid() {
		return isset($this->destinationId)
			&& $this->destinationId;
	}
	
	/**
	 * (non-PHPdoc)
	 * @see \zamnuts\EANAPIClient\Query\HotelListSearch\IEANHLSearch::renderPreparedArray()
	 */
	public function renderPreparedArray() {
        $array = array();
        foreach ( self::$propertyMap as $key => $type ) {
            if ( isset($this->$key) ) {
                $array[$key] = $this->$key;
            }
        }
        return $array;
	}
	
}
