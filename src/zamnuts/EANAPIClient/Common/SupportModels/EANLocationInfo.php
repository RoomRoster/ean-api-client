<?php

namespace zamnuts\EANAPIClient\Common\SupportModels;

use zamnuts\EANAPIClient\Util\Utils;

/**
 * @property string $destinationId
 * @property boolean $active
 * @property int $type
 * @property string $city
 * @property string $stateProvinceCode
 * @property string $countryCode
 * @property string $countryName
 * @property string $code
 * @property int $geoAccuracy
 * @property boolean $locationInDestination
 * @property float $latitude
 * @property float $longitude
 * @property float $refLocationMileage
 * @property int $activePropertyCount
 */
class EANLocationInfo extends EANAbstractSupportModel implements IEANSupportModel {

    /**
     * @var string
     */
    protected static $ROOT = 'LocationInfo';

    /**
     * @var string
     */
    public $destinationId;

    /**
     * @var boolean
     */
    public $active;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $stateProvinceCode;

    /**
     * @var string
     */
    public $countryCode;

    /**
     * @var string
     */
    public $countryName;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $geoAccuracy;

    /**
     * @var boolean
     */
    public $locationInDestination;

    /**
     * @var float
     */
    public $latitude;

    /**
     * @var float
     */
    public $longitude;

    /**
     * @var float
     */
    public $refLocationMileage;

    /**
     * @var int
     */
    public $activePropertyCount;

	public static $propertyMap = array(
        'destinationId' => 'string',
        'active' => 'boolean',
        'type' => 'int',
        'city' => 'string',
        'stateProvinceCode' => 'string',
        'countryCode' => 'string',
        'countryName' => 'string',
        'code' => 'string',
        'geoAccuracy' => 'int',
        'locationInDestination' => 'boolean',
        'latitude' => 'float',
        'longitude' => 'float',
        'refLocationMileage' => 'float',
        'activePropertyCount' => 'int',
	);
	
	/**
	 * @param EANLocationInfo $supportModel
	 * @return EANLocationInfo
	 */
	public static function cast($supportModel)
    {
        return $supportModel;
    }
}
