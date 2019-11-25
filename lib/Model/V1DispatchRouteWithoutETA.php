<?php
/**
 * V1DispatchRouteWithoutETA
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
 * OpenAPI spec version: 2019-09-13
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.9
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
 * V1DispatchRouteWithoutETA Class Doc Comment
 *
 * @category Class
 * @package  Samsara\Php\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1DispatchRouteWithoutETA implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'V1DispatchRouteWithoutETA';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'actual_end_ms' => 'int',
        'actual_start_ms' => 'int',
        'driver_id' => 'int',
        'group_id' => 'int',
        'name' => 'string',
        'notes' => 'string',
        'odometer_end_meters' => 'int',
        'odometer_start_meters' => 'int',
        'scheduled_end_ms' => 'int',
        'scheduled_meters' => 'int',
        'scheduled_start_ms' => 'int',
        'start_location_address' => 'string',
        'start_location_address_id' => 'int',
        'start_location_lat' => 'double',
        'start_location_lng' => 'double',
        'start_location_name' => 'string',
        'trailer_id' => 'int',
        'vehicle_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'actual_end_ms' => 'int64',
        'actual_start_ms' => 'int64',
        'driver_id' => 'int64',
        'group_id' => 'int64',
        'name' => null,
        'notes' => null,
        'odometer_end_meters' => 'int64',
        'odometer_start_meters' => 'int64',
        'scheduled_end_ms' => 'int64',
        'scheduled_meters' => 'int64',
        'scheduled_start_ms' => 'int64',
        'start_location_address' => null,
        'start_location_address_id' => 'int64',
        'start_location_lat' => 'double',
        'start_location_lng' => 'double',
        'start_location_name' => null,
        'trailer_id' => 'int64',
        'vehicle_id' => 'int64'
    ];

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
        'actual_end_ms' => 'actual_end_ms',
        'actual_start_ms' => 'actual_start_ms',
        'driver_id' => 'driver_id',
        'group_id' => 'group_id',
        'name' => 'name',
        'notes' => 'notes',
        'odometer_end_meters' => 'odometer_end_meters',
        'odometer_start_meters' => 'odometer_start_meters',
        'scheduled_end_ms' => 'scheduled_end_ms',
        'scheduled_meters' => 'scheduled_meters',
        'scheduled_start_ms' => 'scheduled_start_ms',
        'start_location_address' => 'start_location_address',
        'start_location_address_id' => 'start_location_address_id',
        'start_location_lat' => 'start_location_lat',
        'start_location_lng' => 'start_location_lng',
        'start_location_name' => 'start_location_name',
        'trailer_id' => 'trailer_id',
        'vehicle_id' => 'vehicle_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'actual_end_ms' => 'setActualEndMs',
        'actual_start_ms' => 'setActualStartMs',
        'driver_id' => 'setDriverId',
        'group_id' => 'setGroupId',
        'name' => 'setName',
        'notes' => 'setNotes',
        'odometer_end_meters' => 'setOdometerEndMeters',
        'odometer_start_meters' => 'setOdometerStartMeters',
        'scheduled_end_ms' => 'setScheduledEndMs',
        'scheduled_meters' => 'setScheduledMeters',
        'scheduled_start_ms' => 'setScheduledStartMs',
        'start_location_address' => 'setStartLocationAddress',
        'start_location_address_id' => 'setStartLocationAddressId',
        'start_location_lat' => 'setStartLocationLat',
        'start_location_lng' => 'setStartLocationLng',
        'start_location_name' => 'setStartLocationName',
        'trailer_id' => 'setTrailerId',
        'vehicle_id' => 'setVehicleId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'actual_end_ms' => 'getActualEndMs',
        'actual_start_ms' => 'getActualStartMs',
        'driver_id' => 'getDriverId',
        'group_id' => 'getGroupId',
        'name' => 'getName',
        'notes' => 'getNotes',
        'odometer_end_meters' => 'getOdometerEndMeters',
        'odometer_start_meters' => 'getOdometerStartMeters',
        'scheduled_end_ms' => 'getScheduledEndMs',
        'scheduled_meters' => 'getScheduledMeters',
        'scheduled_start_ms' => 'getScheduledStartMs',
        'start_location_address' => 'getStartLocationAddress',
        'start_location_address_id' => 'getStartLocationAddressId',
        'start_location_lat' => 'getStartLocationLat',
        'start_location_lng' => 'getStartLocationLng',
        'start_location_name' => 'getStartLocationName',
        'trailer_id' => 'getTrailerId',
        'vehicle_id' => 'getVehicleId'
    ];

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
        $this->container['actual_end_ms'] = isset($data['actual_end_ms']) ? $data['actual_end_ms'] : null;
        $this->container['actual_start_ms'] = isset($data['actual_start_ms']) ? $data['actual_start_ms'] : null;
        $this->container['driver_id'] = isset($data['driver_id']) ? $data['driver_id'] : null;
        $this->container['group_id'] = isset($data['group_id']) ? $data['group_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['odometer_end_meters'] = isset($data['odometer_end_meters']) ? $data['odometer_end_meters'] : null;
        $this->container['odometer_start_meters'] = isset($data['odometer_start_meters']) ? $data['odometer_start_meters'] : null;
        $this->container['scheduled_end_ms'] = isset($data['scheduled_end_ms']) ? $data['scheduled_end_ms'] : null;
        $this->container['scheduled_meters'] = isset($data['scheduled_meters']) ? $data['scheduled_meters'] : null;
        $this->container['scheduled_start_ms'] = isset($data['scheduled_start_ms']) ? $data['scheduled_start_ms'] : null;
        $this->container['start_location_address'] = isset($data['start_location_address']) ? $data['start_location_address'] : null;
        $this->container['start_location_address_id'] = isset($data['start_location_address_id']) ? $data['start_location_address_id'] : null;
        $this->container['start_location_lat'] = isset($data['start_location_lat']) ? $data['start_location_lat'] : null;
        $this->container['start_location_lng'] = isset($data['start_location_lng']) ? $data['start_location_lng'] : null;
        $this->container['start_location_name'] = isset($data['start_location_name']) ? $data['start_location_name'] : null;
        $this->container['trailer_id'] = isset($data['trailer_id']) ? $data['trailer_id'] : null;
        $this->container['vehicle_id'] = isset($data['vehicle_id']) ? $data['vehicle_id'] : null;
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
     * Gets actual_end_ms
     *
     * @return int
     */
    public function getActualEndMs()
    {
        return $this->container['actual_end_ms'];
    }

    /**
     * Sets actual_end_ms
     *
     * @param int $actual_end_ms The time in Unix epoch milliseconds that the route actually ended.
     *
     * @return $this
     */
    public function setActualEndMs($actual_end_ms)
    {
        $this->container['actual_end_ms'] = $actual_end_ms;

        return $this;
    }

    /**
     * Gets actual_start_ms
     *
     * @return int
     */
    public function getActualStartMs()
    {
        return $this->container['actual_start_ms'];
    }

    /**
     * Sets actual_start_ms
     *
     * @param int $actual_start_ms The time in Unix epoch milliseconds that the route actually started.
     *
     * @return $this
     */
    public function setActualStartMs($actual_start_ms)
    {
        $this->container['actual_start_ms'] = $actual_start_ms;

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
     * @param int $driver_id ID of the driver assigned to the dispatch route. Note that driver_id and vehicle_id are mutually exclusive. If neither is specified, then the route is unassigned.
     *
     * @return $this
     */
    public function setDriverId($driver_id)
    {
        $this->container['driver_id'] = $driver_id;

        return $this;
    }

    /**
     * Gets group_id
     *
     * @return int
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param int $group_id Deprecated.
     *
     * @return $this
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Descriptive name of this route.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string $notes Notes regarding the details of this route; maximum of 2000 characters; newline characters ('\\n')can be used for formatting.
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets odometer_end_meters
     *
     * @return int
     */
    public function getOdometerEndMeters()
    {
        return $this->container['odometer_end_meters'];
    }

    /**
     * Sets odometer_end_meters
     *
     * @param int $odometer_end_meters Odometer reading at the end of the route. Will not be returned if Route is not completed or if Odometer information is not available for the relevant vehicle.
     *
     * @return $this
     */
    public function setOdometerEndMeters($odometer_end_meters)
    {
        $this->container['odometer_end_meters'] = $odometer_end_meters;

        return $this;
    }

    /**
     * Gets odometer_start_meters
     *
     * @return int
     */
    public function getOdometerStartMeters()
    {
        return $this->container['odometer_start_meters'];
    }

    /**
     * Sets odometer_start_meters
     *
     * @param int $odometer_start_meters Odometer reading at the start of the route. Will not be returned if Route has not started or if Odometer information is not available for the relevant vehicle.
     *
     * @return $this
     */
    public function setOdometerStartMeters($odometer_start_meters)
    {
        $this->container['odometer_start_meters'] = $odometer_start_meters;

        return $this;
    }

    /**
     * Gets scheduled_end_ms
     *
     * @return int
     */
    public function getScheduledEndMs()
    {
        return $this->container['scheduled_end_ms'];
    }

    /**
     * Sets scheduled_end_ms
     *
     * @param int $scheduled_end_ms The time in Unix epoch milliseconds that the last job in the route is scheduled to end.
     *
     * @return $this
     */
    public function setScheduledEndMs($scheduled_end_ms)
    {
        $this->container['scheduled_end_ms'] = $scheduled_end_ms;

        return $this;
    }

    /**
     * Gets scheduled_meters
     *
     * @return int
     */
    public function getScheduledMeters()
    {
        return $this->container['scheduled_meters'];
    }

    /**
     * Sets scheduled_meters
     *
     * @param int $scheduled_meters The distance expected to be traveled for this route in meters.
     *
     * @return $this
     */
    public function setScheduledMeters($scheduled_meters)
    {
        $this->container['scheduled_meters'] = $scheduled_meters;

        return $this;
    }

    /**
     * Gets scheduled_start_ms
     *
     * @return int
     */
    public function getScheduledStartMs()
    {
        return $this->container['scheduled_start_ms'];
    }

    /**
     * Sets scheduled_start_ms
     *
     * @param int $scheduled_start_ms The time in Unix epoch milliseconds that the route is scheduled to start.
     *
     * @return $this
     */
    public function setScheduledStartMs($scheduled_start_ms)
    {
        $this->container['scheduled_start_ms'] = $scheduled_start_ms;

        return $this;
    }

    /**
     * Gets start_location_address
     *
     * @return string
     */
    public function getStartLocationAddress()
    {
        return $this->container['start_location_address'];
    }

    /**
     * Sets start_location_address
     *
     * @param string $start_location_address The address of the route's starting location, as it would be recognized if provided to maps.google.com. Optional if a valid start location address ID is provided.
     *
     * @return $this
     */
    public function setStartLocationAddress($start_location_address)
    {
        $this->container['start_location_address'] = $start_location_address;

        return $this;
    }

    /**
     * Gets start_location_address_id
     *
     * @return int
     */
    public function getStartLocationAddressId()
    {
        return $this->container['start_location_address_id'];
    }

    /**
     * Sets start_location_address_id
     *
     * @param int $start_location_address_id ID of the start location associated with an address book entry. Optional if valid values are provided for start location address and latitude/longitude. If a valid start location address ID is provided, address/latitude/longitude will be used from the address book entry. Name of the address book entry will only be used if the start location name is not provided.
     *
     * @return $this
     */
    public function setStartLocationAddressId($start_location_address_id)
    {
        $this->container['start_location_address_id'] = $start_location_address_id;

        return $this;
    }

    /**
     * Gets start_location_lat
     *
     * @return double
     */
    public function getStartLocationLat()
    {
        return $this->container['start_location_lat'];
    }

    /**
     * Sets start_location_lat
     *
     * @param double $start_location_lat Latitude of the start location in decimal degrees. Optional if a valid start location address ID is provided.
     *
     * @return $this
     */
    public function setStartLocationLat($start_location_lat)
    {
        $this->container['start_location_lat'] = $start_location_lat;

        return $this;
    }

    /**
     * Gets start_location_lng
     *
     * @return double
     */
    public function getStartLocationLng()
    {
        return $this->container['start_location_lng'];
    }

    /**
     * Sets start_location_lng
     *
     * @param double $start_location_lng Longitude of the start location in decimal degrees. Optional if a valid start location address ID is provided.
     *
     * @return $this
     */
    public function setStartLocationLng($start_location_lng)
    {
        $this->container['start_location_lng'] = $start_location_lng;

        return $this;
    }

    /**
     * Gets start_location_name
     *
     * @return string
     */
    public function getStartLocationName()
    {
        return $this->container['start_location_name'];
    }

    /**
     * Sets start_location_name
     *
     * @param string $start_location_name The name of the route's starting location. If provided, it will take precedence over the name of the address book entry.
     *
     * @return $this
     */
    public function setStartLocationName($start_location_name)
    {
        $this->container['start_location_name'] = $start_location_name;

        return $this;
    }

    /**
     * Gets trailer_id
     *
     * @return int
     */
    public function getTrailerId()
    {
        return $this->container['trailer_id'];
    }

    /**
     * Sets trailer_id
     *
     * @param int $trailer_id ID of the trailer assigned to the dispatch route. Note that trailers can only be assigned to routes that have a Vehicle or Driver assigned to them.
     *
     * @return $this
     */
    public function setTrailerId($trailer_id)
    {
        $this->container['trailer_id'] = $trailer_id;

        return $this;
    }

    /**
     * Gets vehicle_id
     *
     * @return int
     */
    public function getVehicleId()
    {
        return $this->container['vehicle_id'];
    }

    /**
     * Sets vehicle_id
     *
     * @param int $vehicle_id ID of the vehicle assigned to the dispatch route. Note that vehicle_id and driver_id are mutually exclusive. If neither is specified, then the route is unassigned.
     *
     * @return $this
     */
    public function setVehicleId($vehicle_id)
    {
        $this->container['vehicle_id'] = $vehicle_id;

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


