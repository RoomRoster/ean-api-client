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
    protected $destinationId;

    /**
     * @var boolean
     */
    protected $active;

    /**
     * @var int
     */
    protected $type;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $stateProvinceCode;

    /**
     * @var string
     */
    protected $countryCode;

    /**
     * @var string
     */
    protected $countryName;

    /**
     * @var string
     */
    protected $code;

    /**
     * @var int
     */
    protected $geoAccuracy;

    /**
     * @var boolean
     */
    protected $locationInDestination;

    /**
     * @var float
     */
    protected $latitude;

    /**
     * @var float
     */
    protected $longitude;

    /**
     * @var float
     */
    protected $refLocationMileage;

    /**
     * @var int
     */
    protected $activePropertyCount;

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
