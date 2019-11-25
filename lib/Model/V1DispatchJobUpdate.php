<?php
/**
 * V1DispatchJobUpdate
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
 * V1DispatchJobUpdate Class Doc Comment
 *
 * @category Class
 * @package  Samsara\Php\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1DispatchJobUpdate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'V1DispatchJobUpdate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'destination_address' => 'string',
        'destination_address_id' => 'int',
        'destination_lat' => 'double',
        'destination_lng' => 'double',
        'destination_name' => 'string',
        'notes' => 'string',
        'scheduled_arrival_time_ms' => 'int',
        'scheduled_departure_time_ms' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'destination_address' => null,
        'destination_address_id' => 'int64',
        'destination_lat' => 'double',
        'destination_lng' => 'double',
        'destination_name' => null,
        'notes' => null,
        'scheduled_arrival_time_ms' => 'int64',
        'scheduled_departure_time_ms' => 'int64'
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
        'destination_address' => 'destination_address',
        'destination_address_id' => 'destination_address_id',
        'destination_lat' => 'destination_lat',
        'destination_lng' => 'destination_lng',
        'destination_name' => 'destination_name',
        'notes' => 'notes',
        'scheduled_arrival_time_ms' => 'scheduled_arrival_time_ms',
        'scheduled_departure_time_ms' => 'scheduled_departure_time_ms'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'destination_address' => 'setDestinationAddress',
        'destination_address_id' => 'setDestinationAddressId',
        'destination_lat' => 'setDestinationLat',
        'destination_lng' => 'setDestinationLng',
        'destination_name' => 'setDestinationName',
        'notes' => 'setNotes',
        'scheduled_arrival_time_ms' => 'setScheduledArrivalTimeMs',
        'scheduled_departure_time_ms' => 'setScheduledDepartureTimeMs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'destination_address' => 'getDestinationAddress',
        'destination_address_id' => 'getDestinationAddressId',
        'destination_lat' => 'getDestinationLat',
        'destination_lng' => 'getDestinationLng',
        'destination_name' => 'getDestinationName',
        'notes' => 'getNotes',
        'scheduled_arrival_time_ms' => 'getScheduledArrivalTimeMs',
        'scheduled_departure_time_ms' => 'getScheduledDepartureTimeMs'
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
        $this->container['destination_address'] = isset($data['destination_address']) ? $data['destination_address'] : null;
        $this->container['destination_address_id'] = isset($data['destination_address_id']) ? $data['destination_address_id'] : null;
        $this->container['destination_lat'] = isset($data['destination_lat']) ? $data['destination_lat'] : null;
        $this->container['destination_lng'] = isset($data['destination_lng']) ? $data['destination_lng'] : null;
        $this->container['destination_name'] = isset($data['destination_name']) ? $data['destination_name'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['scheduled_arrival_time_ms'] = isset($data['scheduled_arrival_time_ms']) ? $data['scheduled_arrival_time_ms'] : null;
        $this->container['scheduled_departure_time_ms'] = isset($data['scheduled_departure_time_ms']) ? $data['scheduled_departure_time_ms'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['scheduled_arrival_time_ms'] === null) {
            $invalidProperties[] = "'scheduled_arrival_time_ms' can't be null";
        }
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
     * Gets destination_address
     *
     * @return string
     */
    public function getDestinationAddress()
    {
        return $this->container['destination_address'];
    }

    /**
     * Sets destination_address
     *
     * @param string $destination_address The address of the job destination, as it would be recognized if provided to maps.google.com. Optional if a valid destination address ID is provided.
     *
     * @return $this
     */
    public function setDestinationAddress($destination_address)
    {
        $this->container['destination_address'] = $destination_address;

        return $this;
    }

    /**
     * Gets destination_address_id
     *
     * @return int
     */
    public function getDestinationAddressId()
    {
        return $this->container['destination_address_id'];
    }

    /**
     * Sets destination_address_id
     *
     * @param int $destination_address_id ID of the job destination associated with an address book entry. Optional if valid values are provided for destination address and latitude/longitude. If a valid destination address ID is provided, address/latitude/longitude will be used from the address book entry. Name of the address book entry will only be used if the destination name is not provided.
     *
     * @return $this
     */
    public function setDestinationAddressId($destination_address_id)
    {
        $this->container['destination_address_id'] = $destination_address_id;

        return $this;
    }

    /**
     * Gets destination_lat
     *
     * @return double
     */
    public function getDestinationLat()
    {
        return $this->container['destination_lat'];
    }

    /**
     * Sets destination_lat
     *
     * @param double $destination_lat Latitude of the destination in decimal degrees. Optional if a valid destination address ID is provided.
     *
     * @return $this
     */
    public function setDestinationLat($destination_lat)
    {
        $this->container['destination_lat'] = $destination_lat;

        return $this;
    }

    /**
     * Gets destination_lng
     *
     * @return double
     */
    public function getDestinationLng()
    {
        return $this->container['destination_lng'];
    }

    /**
     * Sets destination_lng
     *
     * @param double $destination_lng Longitude of the destination in decimal degrees. Optional if a valid destination address ID is provided.
     *
     * @return $this
     */
    public function setDestinationLng($destination_lng)
    {
        $this->container['destination_lng'] = $destination_lng;

        return $this;
    }

    /**
     * Gets destination_name
     *
     * @return string
     */
    public function getDestinationName()
    {
        return $this->container['destination_name'];
    }

    /**
     * Sets destination_name
     *
     * @param string $destination_name The name of the job destination. If provided, it will take precedence over the name of the address book entry.
     *
     * @return $this
     */
    public function setDestinationName($destination_name)
    {
        $this->container['destination_name'] = $destination_name;

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
     * @param string $notes Notes regarding the details of this job, maximum of 2000 characters; newline characters ('\\n')can be used for formatting.
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets scheduled_arrival_time_ms
     *
     * @return int
     */
    public function getScheduledArrivalTimeMs()
    {
        return $this->container['scheduled_arrival_time_ms'];
    }

    /**
     * Sets scheduled_arrival_time_ms
     *
     * @param int $scheduled_arrival_time_ms The time at which the assigned driver is scheduled to arrive at the job destination.
     *
     * @return $this
     */
    public function setScheduledArrivalTimeMs($scheduled_arrival_time_ms)
    {
        $this->container['scheduled_arrival_time_ms'] = $scheduled_arrival_time_ms;

        return $this;
    }

    /**
     * Gets scheduled_departure_time_ms
     *
     * @return int
     */
    public function getScheduledDepartureTimeMs()
    {
        return $this->container['scheduled_departure_time_ms'];
    }

    /**
     * Sets scheduled_departure_time_ms
     *
     * @param int $scheduled_departure_time_ms The time at which the assigned driver is scheduled to depart from the job destination.
     *
     * @return $this
     */
    public function setScheduledDepartureTimeMs($scheduled_departure_time_ms)
    {
        $this->container['scheduled_departure_time_ms'] = $scheduled_departure_time_ms;

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


