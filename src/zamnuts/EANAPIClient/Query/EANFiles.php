<?php

namespace zamnuts\EANAPIClient\Query;

/**
 * @property int $hotelId The EAN ID of the hotel.
 * @property string $options A comma-delimited list of registered options.
 * @property string[] $optionsArray An array of registered options.
 * @property EANResponseHotelInformation $response Yea, the response. OK?
 */
class EANFiles extends EANAbstractQuery {
	
	/**
	 * @var string
	 */
	protected static $API_METHOD = 'files';
	
	/**
	 * @var string
	 */
	protected static $ROOT = 'FileRequest';
	
	/**
	 * @var string
	 */
	//protected static $RESPONSE_CLASS = 'zamnuts\\EANAPIClient\\Common\\SupportModels\\EANResponseHotelInformation';
	
	/**
	 * @var string
	 */
	protected $filename;
	
	/**
	 * @var EANResponseHotelInformation
	 */
	protected $response;
	
	protected static $propertyMap = array(
		'filename' => 'string',
	);
	
	public function __construct($filename) {
		parent::__construct();
		$this->set__filename($filename);
	}
	
	protected function prepareRequest() {
		foreach ( self::$propertyMap as $property => $type ) {
			if ( !isset($this->$property) ) {
				continue;
			}
			switch ( $type ) {
				case 'int':
				case 'float':
				case 'string':
					if ( method_exists($this,'get__'.$property) ) {
						$this->xmlRequest->$property = $this->{'get__'.$property}();
					} else {
						$this->xmlRequest->$property = (string) $this->$property;
					}
					break;
			}
		}
	}
	
	
	/**
	 * @return EANResponseHotelInformation
	 */
	protected function get__response() {
		if ( isset($this->response) ) {
			return clone $this->response;
		}
		return null;
	}
	
	// Filename
	protected function get__filename() {
		return $this->filename;
	}
	
	protected function set__filename($value) {
		$this->filename = $value;
	}
}
