<?php
/**
 * V1DvirDefectBase
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
 * V1DvirDefectBase Class Doc Comment
 *
 * @category Class
 * @package  Samsara\Php\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1DvirDefectBase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'V1DvirDefectBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'comment' => 'string',
'defect_type' => 'string',
'id' => 'int',
'resolved' => 'bool',
'resolved_at' => 'int',
'resolved_by_driver_id' => 'int',
'resolved_by_mechanic_id' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'comment' => null,
'defect_type' => null,
'id' => 'int64',
'resolved' => null,
'resolved_at' => 'int64',
'resolved_by_driver_id' => 'int64',
'resolved_by_mechanic_id' => 'int64'    ];

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
        'comment' => 'comment',
'defect_type' => 'defectType',
'id' => 'id',
'resolved' => 'resolved',
'resolved_at' => 'resolvedAt',
'resolved_by_driver_id' => 'resolvedByDriverId',
'resolved_by_mechanic_id' => 'resolvedByMechanicId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'comment' => 'setComment',
'defect_type' => 'setDefectType',
'id' => 'setId',
'resolved' => 'setResolved',
'resolved_at' => 'setResolvedAt',
'resolved_by_driver_id' => 'setResolvedByDriverId',
'resolved_by_mechanic_id' => 'setResolvedByMechanicId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'comment' => 'getComment',
'defect_type' => 'getDefectType',
'id' => 'getId',
'resolved' => 'getResolved',
'resolved_at' => 'getResolvedAt',
'resolved_by_driver_id' => 'getResolvedByDriverId',
'resolved_by_mechanic_id' => 'getResolvedByMechanicId'    ];

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
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['defect_type'] = isset($data['defect_type']) ? $data['defect_type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['resolved'] = isset($data['resolved']) ? $data['resolved'] : null;
        $this->container['resolved_at'] = isset($data['resolved_at']) ? $data['resolved_at'] : null;
        $this->container['resolved_by_driver_id'] = isset($data['resolved_by_driver_id']) ? $data['resolved_by_driver_id'] : null;
        $this->container['resolved_by_mechanic_id'] = isset($data['resolved_by_mechanic_id']) ? $data['resolved_by_mechanic_id'] : null;
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
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment The comment describing the type of DVIR defect.
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets defect_type
     *
     * @return string
     */
    public function getDefectType()
    {
        return $this->container['defect_type'];
    }

    /**
     * Sets defect_type
     *
     * @param string $defect_type The type of DVIR defect. Possible values: [`AIR_COMPRESSOR`, `AIR_CONDITIONER`, `AIR_LINES`, `BATTERY`, `BELTS_HOSES`, `BRAKE_ACCESSORIES`, `BRAKE_CHECK`, `BRAKE_CONNECTIONS`, `BRAKES`, `CLUTCH`, `COUPLING_DEVICES`, `DEFROSTER_HEATER`, `DOORS`, `DRIVE_LINE`, `EMERGENCY_DOOR_AND_BUZZER`, `ENGINE`, `ENTRANCE_STEPS`, `EXHAUST`, `FIFTH_WHEEL`, `FIRST_AID_KIT`, `FLUID_LEVELS`, `FRAME_ASSEMBLY`, `FRONT_AXLE`, `FUEL_TANKS`, `HORN`, `INTERIOR_AND_FLOOR`, `LANDING_GEAR`, `LIGHTS`, `MIRRORS`, `MUFFLER`, `OIL_PRESSURE`, `OTHER`, `RADIATOR`, `REAR_END`, `REFLECTORS`, `ROOF`, `SAFETY_EQUIPMENT`, `STARTER`, `STEERING`, `STOP_ARM_CONTROL`, `STOP_ARM`, `SUSPENSION`, `TIRE_CHAINS`, `TIRES`, `TRANSMISSION`, `TRIP_RECORDER`, `WHEELS_RIMS`, `WINDOWS`, `WINDSHIELD_WIPERS`, `UNSET`]
     *
     * @return $this
     */
    public function setDefectType($defect_type)
    {
        $this->container['defect_type'] = $defect_type;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id The id of this defect.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets resolved
     *
     * @return bool
     */
    public function getResolved()
    {
        return $this->container['resolved'];
    }

    /**
     * Sets resolved
     *
     * @param bool $resolved Signifies if this defect is resolved.
     *
     * @return $this
     */
    public function setResolved($resolved)
    {
        $this->container['resolved'] = $resolved;

        return $this;
    }

    /**
     * Gets resolved_at
     *
     * @return int
     */
    public function getResolvedAt()
    {
        return $this->container['resolved_at'];
    }

    /**
     * Sets resolved_at
     *
     * @param int $resolved_at Timestamp when this defect was resolved, in UNIX milliseconds.  Will not be returned if the defect is unresolved.
     *
     * @return $this
     */
    public function setResolvedAt($resolved_at)
    {
        $this->container['resolved_at'] = $resolved_at;

        return $this;
    }

    /**
     * Gets resolved_by_driver_id
     *
     * @return int
     */
    public function getResolvedByDriverId()
    {
        return $this->container['resolved_by_driver_id'];
    }

    /**
     * Sets resolved_by_driver_id
     *
     * @param int $resolved_by_driver_id ID of the driver who resolved this defect. Will not be returned if the defect is unresolved or resolvedByMechanicId is returned.
     *
     * @return $this
     */
    public function setResolvedByDriverId($resolved_by_driver_id)
    {
        $this->container['resolved_by_driver_id'] = $resolved_by_driver_id;

        return $this;
    }

    /**
     * Gets resolved_by_mechanic_id
     *
     * @return int
     */
    public function getResolvedByMechanicId()
    {
        return $this->container['resolved_by_mechanic_id'];
    }

    /**
     * Sets resolved_by_mechanic_id
     *
     * @param int $resolved_by_mechanic_id ID of the mechanic who resolved this defect. Will not be returned if the defect is unresolved or resolvedByDriverId is returned.
     *
     * @return $this
     */
    public function setResolvedByMechanicId($resolved_by_mechanic_id)
    {
        $this->container['resolved_by_mechanic_id'] = $resolved_by_mechanic_id;

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
