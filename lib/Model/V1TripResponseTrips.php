<?php
/**
 * V1TripResponseTrips
 *
 * PHP version 5
 *
 * @category Class
 * @package  Samsara\Php\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Samsara API
 *
 * <style type=\"text/css\"> n {     padding: 1em;     width: 100%;     display: block;     margin: 28px 0; } n.info {     background-color: rgba(0, 51, 160, 0.1); } n.warning {     background-color: #fdf6e3; } i:before {     margin-right: 6px; } nh {     font-size: 1.5rem;     font-weight: 700;     line-height: 1.1;     display: block; } nb {     margin-top: 10px;     padding-left: 22px;     display: block; } </style>  # Overview  <n class=\"info\"> <nh> <i class=\"fa fa-info-circle\"></i> Something new! </nh> <nb> Welcome Samsara's new and improved API. Check out our FAQ [here](https://developers.samsara.com/docs/introducing-our-next-generation-api) to see what's changed and learn how to get started.<br> <br> Want to access the legacy API docs? You can find them [here](https://www.samsara.com/api).<br> <br> *Note: Because this is a new set of APIs, we have not transitioned all endpoints over to this standard. Endpoints that still use the legacy standards are indicated in the reference documentation. If you can't find an API that you're looking for, we encourage you to look for it in our [legacy API docs](https://www.samsara.com/api) as we continue to transition all endpoints over. Check back here for updates!*<br> <br> Submit your feedback [here](https://forms.gle/r4bs6HQshQAvBuwv6)! </nb> </n>  Samsara provides API endpoints so that you can build powerful applications and custom solutions with sensor data. Samsara has endpoints available to track and analyze sensors, vehicles, and entire fleets.  The Samsara API is a [RESTful API](https://en.wikipedia.org/wiki/Representational_state_transfer). It uses standard [HTTP](https://en.wikipedia.org/wiki/Hypertext_Transfer_Protocol) authentication, verbs, and response codes, and it returns [JSON](http://www.json.org/) response bodies. If you're familiar with what you can build with a REST API, then this will be your go-to API reference.  Visit [developers.samsara.com](https://developers.samsara.com) to find getting started guides and an API overview.  If you have any questions, reach out to us at [support@samsara.com](mailto:support@samsara.com).  ## Endpoints  All our APIs can be accessed through HTTP requests to URLs like:  ``` https://api.samsara.com/<endpoint> ```  For EU customers, this URL will be:  ``` https://api.eu.samsara.com/<endpoint> ```  <n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> Note </nh> <nb> Legacy endpoints will have the URL: `https://api.samsara.com/v1/<endpoint>` or `https://api.eu.samsara.com/v1/<endpoint>` </nb> </n>  ## Authentication  To authenticate your API request you will need to include your secret token. You can manage your API tokens in the [Dashboard](https://cloud.samsara.com). They are visible under `Settings->Organization->API Tokens`.  Your API tokens carry many privileges, so be sure to keep them secure. Do not share your secret API tokens in publicly accessible areas such as GitHub, client-side code, and so on.  Authentication to the API is performed via Bearer Token in the HTTP Authorization header. Provide your API token as the `access_token` value in an `Authorization: Bearer` header. You do not need to provide a password:  ```curl Authorization: Bearer {access_token} ```  All API requests must be made over [HTTPS](https://en.wikipedia.org/wiki/HTTPS). Calls made over plain HTTP or without authentication will fail.  ## Common Patterns  You can find more info about request methods, response codes, error codes, versioning, pagination, timestamps, and mini-objects [here](https://developers.samsara.com/docs/common-structures).
 *
 * OpenAPI spec version: 2019-09-13-oas3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.13
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Samsara\Php\Client\Model;

use \ArrayAccess;
use \Samsara\Php\Client\ObjectSerializer;

/**
 * V1TripResponseTrips Class Doc Comment
 *
 * @category Class
 * @package  Samsara\Php\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1TripResponseTrips implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'V1TripResponse_trips';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'asset_ids' => 'int[]',
'codriver_ids' => 'int[]',
'distance_meters' => 'int',
'driver_id' => 'int',
'end_address' => '\Samsara\Php\Client\Model\V1TripResponseEndAddress',
'end_coordinates' => '\Samsara\Php\Client\Model\V1TripResponseEndCoordinates',
'end_location' => 'string',
'end_ms' => 'int',
'end_odometer' => 'int',
'fuel_consumed_ml' => 'int',
'start_address' => '\Samsara\Php\Client\Model\V1TripResponseStartAddress',
'start_coordinates' => '\Samsara\Php\Client\Model\V1TripResponseStartCoordinates',
'start_location' => 'string',
'start_ms' => 'int',
'start_odometer' => 'int',
'toll_meters' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'asset_ids' => 'int64',
'codriver_ids' => 'int64',
'distance_meters' => null,
'driver_id' => null,
'end_address' => null,
'end_coordinates' => null,
'end_location' => null,
'end_ms' => null,
'end_odometer' => null,
'fuel_consumed_ml' => null,
'start_address' => null,
'start_coordinates' => null,
'start_location' => null,
'start_ms' => null,
'start_odometer' => null,
'toll_meters' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'asset_ids' => 'assetIds',
'codriver_ids' => 'codriverIds',
'distance_meters' => 'distanceMeters',
'driver_id' => 'driverId',
'end_address' => 'endAddress',
'end_coordinates' => 'endCoordinates',
'end_location' => 'endLocation',
'end_ms' => 'endMs',
'end_odometer' => 'endOdometer',
'fuel_consumed_ml' => 'fuelConsumedMl',
'start_address' => 'startAddress',
'start_coordinates' => 'startCoordinates',
'start_location' => 'startLocation',
'start_ms' => 'startMs',
'start_odometer' => 'startOdometer',
'toll_meters' => 'tollMeters'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asset_ids' => 'setAssetIds',
'codriver_ids' => 'setCodriverIds',
'distance_meters' => 'setDistanceMeters',
'driver_id' => 'setDriverId',
'end_address' => 'setEndAddress',
'end_coordinates' => 'setEndCoordinates',
'end_location' => 'setEndLocation',
'end_ms' => 'setEndMs',
'end_odometer' => 'setEndOdometer',
'fuel_consumed_ml' => 'setFuelConsumedMl',
'start_address' => 'setStartAddress',
'start_coordinates' => 'setStartCoordinates',
'start_location' => 'setStartLocation',
'start_ms' => 'setStartMs',
'start_odometer' => 'setStartOdometer',
'toll_meters' => 'setTollMeters'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asset_ids' => 'getAssetIds',
'codriver_ids' => 'getCodriverIds',
'distance_meters' => 'getDistanceMeters',
'driver_id' => 'getDriverId',
'end_address' => 'getEndAddress',
'end_coordinates' => 'getEndCoordinates',
'end_location' => 'getEndLocation',
'end_ms' => 'getEndMs',
'end_odometer' => 'getEndOdometer',
'fuel_consumed_ml' => 'getFuelConsumedMl',
'start_address' => 'getStartAddress',
'start_coordinates' => 'getStartCoordinates',
'start_location' => 'getStartLocation',
'start_ms' => 'getStartMs',
'start_odometer' => 'getStartOdometer',
'toll_meters' => 'getTollMeters'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['asset_ids'] = isset($data['asset_ids']) ? $data['asset_ids'] : null;
        $this->container['codriver_ids'] = isset($data['codriver_ids']) ? $data['codriver_ids'] : null;
        $this->container['distance_meters'] = isset($data['distance_meters']) ? $data['distance_meters'] : null;
        $this->container['driver_id'] = isset($data['driver_id']) ? $data['driver_id'] : null;
        $this->container['end_address'] = isset($data['end_address']) ? $data['end_address'] : null;
        $this->container['end_coordinates'] = isset($data['end_coordinates']) ? $data['end_coordinates'] : null;
        $this->container['end_location'] = isset($data['end_location']) ? $data['end_location'] : null;
        $this->container['end_ms'] = isset($data['end_ms']) ? $data['end_ms'] : null;
        $this->container['end_odometer'] = isset($data['end_odometer']) ? $data['end_odometer'] : null;
        $this->container['fuel_consumed_ml'] = isset($data['fuel_consumed_ml']) ? $data['fuel_consumed_ml'] : null;
        $this->container['start_address'] = isset($data['start_address']) ? $data['start_address'] : null;
        $this->container['start_coordinates'] = isset($data['start_coordinates']) ? $data['start_coordinates'] : null;
        $this->container['start_location'] = isset($data['start_location']) ? $data['start_location'] : null;
        $this->container['start_ms'] = isset($data['start_ms']) ? $data['start_ms'] : null;
        $this->container['start_odometer'] = isset($data['start_odometer']) ? $data['start_odometer'] : null;
        $this->container['toll_meters'] = isset($data['toll_meters']) ? $data['toll_meters'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets asset_ids
     *
     * @return int[]
     */
    public function getAssetIds()
    {
        return $this->container['asset_ids'];
    }

    /**
     * Sets asset_ids
     *
     * @param int[] $asset_ids List of associated asset IDs
     *
     * @return $this
     */
    public function setAssetIds($asset_ids)
    {
        $this->container['asset_ids'] = $asset_ids;

        return $this;
    }

    /**
     * Gets codriver_ids
     *
     * @return int[]
     */
    public function getCodriverIds()
    {
        return $this->container['codriver_ids'];
    }

    /**
     * Sets codriver_ids
     *
     * @param int[] $codriver_ids List of codriver IDs
     *
     * @return $this
     */
    public function setCodriverIds($codriver_ids)
    {
        $this->container['codriver_ids'] = $codriver_ids;

        return $this;
    }

    /**
     * Gets distance_meters
     *
     * @return int
     */
    public function getDistanceMeters()
    {
        return $this->container['distance_meters'];
    }

    /**
     * Sets distance_meters
     *
     * @param int $distance_meters Length of the trip in meters.
     *
     * @return $this
     */
    public function setDistanceMeters($distance_meters)
    {
        $this->container['distance_meters'] = $distance_meters;

        return $this;
    }

    /**
     * Gets driver_id
     *
     * @return int
     */
    public function getDriverId()
    {
        return $this->container['driver_id'];
    }

    /**
     * Sets driver_id
     *
     * @param int $driver_id ID of the driver.
     *
     * @return $this
     */
    public function setDriverId($driver_id)
    {
        $this->container['driver_id'] = $driver_id;

        return $this;
    }

    /**
     * Gets end_address
     *
     * @return \Samsara\Php\Client\Model\V1TripResponseEndAddress
     */
    public function getEndAddress()
    {
        return $this->container['end_address'];
    }

    /**
     * Sets end_address
     *
     * @param \Samsara\Php\Client\Model\V1TripResponseEndAddress $end_address end_address
     *
     * @return $this
     */
    public function setEndAddress($end_address)
    {
        $this->container['end_address'] = $end_address;

        return $this;
    }

    /**
     * Gets end_coordinates
     *
     * @return \Samsara\Php\Client\Model\V1TripResponseEndCoordinates
     */
    public function getEndCoordinates()
    {
        return $this->container['end_coordinates'];
    }

    /**
     * Sets end_coordinates
     *
     * @param \Samsara\Php\Client\Model\V1TripResponseEndCoordinates $end_coordinates end_coordinates
     *
     * @return $this
     */
    public function setEndCoordinates($end_coordinates)
    {
        $this->container['end_coordinates'] = $end_coordinates;

        return $this;
    }

    /**
     * Gets end_location
     *
     * @return string
     */
    public function getEndLocation()
    {
        return $this->container['end_location'];
    }

    /**
     * Sets end_location
     *
     * @param string $end_location Geocoded street address of start (latitude, longitude) coordinates.
     *
     * @return $this
     */
    public function setEndLocation($end_location)
    {
        $this->container['end_location'] = $end_location;

        return $this;
    }

    /**
     * Gets end_ms
     *
     * @return int
     */
    public function getEndMs()
    {
        return $this->container['end_ms'];
    }

    /**
     * Sets end_ms
     *
     * @param int $end_ms End of the trip in UNIX milliseconds. Ongoing trips are indicated by an endMs value of 9223372036854775807.
     *
     * @return $this
     */
    public function setEndMs($end_ms)
    {
        $this->container['end_ms'] = $end_ms;

        return $this;
    }

    /**
     * Gets end_odometer
     *
     * @return int
     */
    public function getEndOdometer()
    {
        return $this->container['end_odometer'];
    }

    /**
     * Sets end_odometer
     *
     * @param int $end_odometer Odometer reading (in meters) at the end of the trip.
     *
     * @return $this
     */
    public function setEndOdometer($end_odometer)
    {
        $this->container['end_odometer'] = $end_odometer;

        return $this;
    }

    /**
     * Gets fuel_consumed_ml
     *
     * @return int
     */
    public function getFuelConsumedMl()
    {
        return $this->container['fuel_consumed_ml'];
    }

    /**
     * Sets fuel_consumed_ml
     *
     * @param int $fuel_consumed_ml Amount in milliliters of fuel consumed on this trip.
     *
     * @return $this
     */
    public function setFuelConsumedMl($fuel_consumed_ml)
    {
        $this->container['fuel_consumed_ml'] = $fuel_consumed_ml;

        return $this;
    }

    /**
     * Gets start_address
     *
     * @return \Samsara\Php\Client\Model\V1TripResponseStartAddress
     */
    public function getStartAddress()
    {
        return $this->container['start_address'];
    }

    /**
     * Sets start_address
     *
     * @param \Samsara\Php\Client\Model\V1TripResponseStartAddress $start_address start_address
     *
     * @return $this
     */
    public function setStartAddress($start_address)
    {
        $this->container['start_address'] = $start_address;

        return $this;
    }

    /**
     * Gets start_coordinates
     *
     * @return \Samsara\Php\Client\Model\V1TripResponseStartCoordinates
     */
    public function getStartCoordinates()
    {
        return $this->container['start_coordinates'];
    }

    /**
     * Sets start_coordinates
     *
     * @param \Samsara\Php\Client\Model\V1TripResponseStartCoordinates $start_coordinates start_coordinates
     *
     * @return $this
     */
    public function setStartCoordinates($start_coordinates)
    {
        $this->container['start_coordinates'] = $start_coordinates;

        return $this;
    }

    /**
     * Gets start_location
     *
     * @return string
     */
    public function getStartLocation()
    {
        return $this->container['start_location'];
    }

    /**
     * Sets start_location
     *
     * @param string $start_location Geocoded street address of start (latitude, longitude) coordinates.
     *
     * @return $this
     */
    public function setStartLocation($start_location)
    {
        $this->container['start_location'] = $start_location;

        return $this;
    }

    /**
     * Gets start_ms
     *
     * @return int
     */
    public function getStartMs()
    {
        return $this->container['start_ms'];
    }

    /**
     * Sets start_ms
     *
     * @param int $start_ms Beginning of the trip in UNIX milliseconds.
     *
     * @return $this
     */
    public function setStartMs($start_ms)
    {
        $this->container['start_ms'] = $start_ms;

        return $this;
    }

    /**
     * Gets start_odometer
     *
     * @return int
     */
    public function getStartOdometer()
    {
        return $this->container['start_odometer'];
    }

    /**
     * Sets start_odometer
     *
     * @param int $start_odometer Odometer reading (in meters) at the beginning of the trip.
     *
     * @return $this
     */
    public function setStartOdometer($start_odometer)
    {
        $this->container['start_odometer'] = $start_odometer;

        return $this;
    }

    /**
     * Gets toll_meters
     *
     * @return int
     */
    public function getTollMeters()
    {
        return $this->container['toll_meters'];
    }

    /**
     * Sets toll_meters
     *
     * @param int $toll_meters Length in meters trip spent on toll roads.
     *
     * @return $this
     */
    public function setTollMeters($toll_meters)
    {
        $this->container['toll_meters'] = $toll_meters;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
