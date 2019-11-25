<?php
/**
 * V1DvirBase
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
 * V1DvirBase Class Doc Comment
 *
 * @category Class
 * @package  Samsara\Php\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1DvirBase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'V1DvirBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'author_signature' => '\Samsara\Php\Client\Model\V1DvirBaseAuthorSignature',
        'defects_corrected' => 'bool',
        'defects_need_not_be_corrected' => 'bool',
        'id' => 'int',
        'inspection_type' => 'string',
        'mechanic_notes' => 'string',
        'mechanic_or_agent_signature' => '\Samsara\Php\Client\Model\V1DvirBaseMechanicOrAgentSignature',
        'next_driver_signature' => '\Samsara\Php\Client\Model\V1DvirBaseNextDriverSignature',
        'odometer_miles' => 'int',
        'started_at_ms' => 'int',
        'time_ms' => 'int',
        'trailer_defects' => '\Samsara\Php\Client\Model\V1DvirDefectBase[]',
        'trailer_id' => 'int',
        'trailer_name' => 'string',
        'vehicle' => '\Samsara\Php\Client\Model\V1DvirBaseVehicle',
        'vehicle_condition' => 'string',
        'vehicle_defects' => '\Samsara\Php\Client\Model\V1DvirDefectBase[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'author_signature' => null,
        'defects_corrected' => null,
        'defects_need_not_be_corrected' => null,
        'id' => 'int64',
        'inspection_type' => null,
        'mechanic_notes' => null,
        'mechanic_or_agent_signature' => null,
        'next_driver_signature' => null,
        'odometer_miles' => 'int64',
        'started_at_ms' => 'int64',
        'time_ms' => 'int64',
        'trailer_defects' => null,
        'trailer_id' => null,
        'trailer_name' => null,
        'vehicle' => null,
        'vehicle_condition' => null,
        'vehicle_defects' => null
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
        'author_signature' => 'authorSignature',
        'defects_corrected' => 'defectsCorrected',
        'defects_need_not_be_corrected' => 'defectsNeedNotBeCorrected',
        'id' => 'id',
        'inspection_type' => 'inspectionType',
        'mechanic_notes' => 'mechanicNotes',
        'mechanic_or_agent_signature' => 'mechanicOrAgentSignature',
        'next_driver_signature' => 'nextDriverSignature',
        'odometer_miles' => 'odometerMiles',
        'started_at_ms' => 'startedAtMs',
        'time_ms' => 'timeMs',
        'trailer_defects' => 'trailerDefects',
        'trailer_id' => 'trailerId',
        'trailer_name' => 'trailerName',
        'vehicle' => 'vehicle',
        'vehicle_condition' => 'vehicleCondition',
        'vehicle_defects' => 'vehicleDefects'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'author_signature' => 'setAuthorSignature',
        'defects_corrected' => 'setDefectsCorrected',
        'defects_need_not_be_corrected' => 'setDefectsNeedNotBeCorrected',
        'id' => 'setId',
        'inspection_type' => 'setInspectionType',
        'mechanic_notes' => 'setMechanicNotes',
        'mechanic_or_agent_signature' => 'setMechanicOrAgentSignature',
        'next_driver_signature' => 'setNextDriverSignature',
        'odometer_miles' => 'setOdometerMiles',
        'started_at_ms' => 'setStartedAtMs',
        'time_ms' => 'setTimeMs',
        'trailer_defects' => 'setTrailerDefects',
        'trailer_id' => 'setTrailerId',
        'trailer_name' => 'setTrailerName',
        'vehicle' => 'setVehicle',
        'vehicle_condition' => 'setVehicleCondition',
        'vehicle_defects' => 'setVehicleDefects'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'author_signature' => 'getAuthorSignature',
        'defects_corrected' => 'getDefectsCorrected',
        'defects_need_not_be_corrected' => 'getDefectsNeedNotBeCorrected',
        'id' => 'getId',
        'inspection_type' => 'getInspectionType',
        'mechanic_notes' => 'getMechanicNotes',
        'mechanic_or_agent_signature' => 'getMechanicOrAgentSignature',
        'next_driver_signature' => 'getNextDriverSignature',
        'odometer_miles' => 'getOdometerMiles',
        'started_at_ms' => 'getStartedAtMs',
        'time_ms' => 'getTimeMs',
        'trailer_defects' => 'getTrailerDefects',
        'trailer_id' => 'getTrailerId',
        'trailer_name' => 'getTrailerName',
        'vehicle' => 'getVehicle',
        'vehicle_condition' => 'getVehicleCondition',
        'vehicle_defects' => 'getVehicleDefects'
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
        $this->container['author_signature'] = isset($data['author_signature']) ? $data['author_signature'] : null;
        $this->container['defects_corrected'] = isset($data['defects_corrected']) ? $data['defects_corrected'] : null;
        $this->container['defects_need_not_be_corrected'] = isset($data['defects_need_not_be_corrected']) ? $data['defects_need_not_be_corrected'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['inspection_type'] = isset($data['inspection_type']) ? $data['inspection_type'] : null;
        $this->container['mechanic_notes'] = isset($data['mechanic_notes']) ? $data['mechanic_notes'] : null;
        $this->container['mechanic_or_agent_signature'] = isset($data['mechanic_or_agent_signature']) ? $data['mechanic_or_agent_signature'] : null;
        $this->container['next_driver_signature'] = isset($data['next_driver_signature']) ? $data['next_driver_signature'] : null;
        $this->container['odometer_miles'] = isset($data['odometer_miles']) ? $data['odometer_miles'] : null;
        $this->container['started_at_ms'] = isset($data['started_at_ms']) ? $data['started_at_ms'] : null;
        $this->container['time_ms'] = isset($data['time_ms']) ? $data['time_ms'] : null;
        $this->container['trailer_defects'] = isset($data['trailer_defects']) ? $data['trailer_defects'] : null;
        $this->container['trailer_id'] = isset($data['trailer_id']) ? $data['trailer_id'] : null;
        $this->container['trailer_name'] = isset($data['trailer_name']) ? $data['trailer_name'] : null;
        $this->container['vehicle'] = isset($data['vehicle']) ? $data['vehicle'] : null;
        $this->container['vehicle_condition'] = isset($data['vehicle_condition']) ? $data['vehicle_condition'] : null;
        $this->container['vehicle_defects'] = isset($data['vehicle_defects']) ? $data['vehicle_defects'] : null;
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
     * Gets author_signature
     *
     * @return \Samsara\Php\Client\Model\V1DvirBaseAuthorSignature
     */
    public function getAuthorSignature()
    {
        return $this->container['author_signature'];
    }

    /**
     * Sets author_signature
     *
     * @param \Samsara\Php\Client\Model\V1DvirBaseAuthorSignature $author_signature author_signature
     *
     * @return $this
     */
    public function setAuthorSignature($author_signature)
    {
        $this->container['author_signature'] = $author_signature;

        return $this;
    }

    /**
     * Gets defects_corrected
     *
     * @return bool
     */
    public function getDefectsCorrected()
    {
        return $this->container['defects_corrected'];
    }

    /**
     * Sets defects_corrected
     *
     * @param bool $defects_corrected Signifies if the defects on the vehicle corrected after the DVIR is done.
     *
     * @return $this
     */
    public function setDefectsCorrected($defects_corrected)
    {
        $this->container['defects_corrected'] = $defects_corrected;

        return $this;
    }

    /**
     * Gets defects_need_not_be_corrected
     *
     * @return bool
     */
    public function getDefectsNeedNotBeCorrected()
    {
        return $this->container['defects_need_not_be_corrected'];
    }

    /**
     * Sets defects_need_not_be_corrected
     *
     * @param bool $defects_need_not_be_corrected Signifies if the defects on this vehicle can be ignored.
     *
     * @return $this
     */
    public function setDefectsNeedNotBeCorrected($defects_need_not_be_corrected)
    {
        $this->container['defects_need_not_be_corrected'] = $defects_need_not_be_corrected;

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
     * @param int $id The id of this DVIR record.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets inspection_type
     *
     * @return string
     */
    public function getInspectionType()
    {
        return $this->container['inspection_type'];
    }

    /**
     * Sets inspection_type
     *
     * @param string $inspection_type Inspection type of the DVIR.
     *
     * @return $this
     */
    public function setInspectionType($inspection_type)
    {
        $this->container['inspection_type'] = $inspection_type;

        return $this;
    }

    /**
     * Gets mechanic_notes
     *
     * @return string
     */
    public function getMechanicNotes()
    {
        return $this->container['mechanic_notes'];
    }

    /**
     * Sets mechanic_notes
     *
     * @param string $mechanic_notes The mechanics notes on the DVIR.
     *
     * @return $this
     */
    public function setMechanicNotes($mechanic_notes)
    {
        $this->container['mechanic_notes'] = $mechanic_notes;

        return $this;
    }

    /**
     * Gets mechanic_or_agent_signature
     *
     * @return \Samsara\Php\Client\Model\V1DvirBaseMechanicOrAgentSignature
     */
    public function getMechanicOrAgentSignature()
    {
        return $this->container['mechanic_or_agent_signature'];
    }

    /**
     * Sets mechanic_or_agent_signature
     *
     * @param \Samsara\Php\Client\Model\V1DvirBaseMechanicOrAgentSignature $mechanic_or_agent_signature mechanic_or_agent_signature
     *
     * @return $this
     */
    public function setMechanicOrAgentSignature($mechanic_or_agent_signature)
    {
        $this->container['mechanic_or_agent_signature'] = $mechanic_or_agent_signature;

        return $this;
    }

    /**
     * Gets next_driver_signature
     *
     * @return \Samsara\Php\Client\Model\V1DvirBaseNextDriverSignature
     */
    public function getNextDriverSignature()
    {
        return $this->container['next_driver_signature'];
    }

    /**
     * Sets next_driver_signature
     *
     * @param \Samsara\Php\Client\Model\V1DvirBaseNextDriverSignature $next_driver_signature next_driver_signature
     *
     * @return $this
     */
    public function setNextDriverSignature($next_driver_signature)
    {
        $this->container['next_driver_signature'] = $next_driver_signature;

        return $this;
    }

    /**
     * Gets odometer_miles
     *
     * @return int
     */
    public function getOdometerMiles()
    {
        return $this->container['odometer_miles'];
    }

    /**
     * Sets odometer_miles
     *
     * @param int $odometer_miles The odometer reading in miles for the vehicle when the DVIR was done.
     *
     * @return $this
     */
    public function setOdometerMiles($odometer_miles)
    {
        $this->container['odometer_miles'] = $odometer_miles;

        return $this;
    }

    /**
     * Gets started_at_ms
     *
     * @return int
     */
    public function getStartedAtMs()
    {
        return $this->container['started_at_ms'];
    }

    /**
     * Sets started_at_ms
     *
     * @param int $started_at_ms Timestamp when driver began filling out this DVIR, in UNIX milliseconds.
     *
     * @return $this
     */
    public function setStartedAtMs($started_at_ms)
    {
        $this->container['started_at_ms'] = $started_at_ms;

        return $this;
    }

    /**
     * Gets time_ms
     *
     * @return int
     */
    public function getTimeMs()
    {
        return $this->container['time_ms'];
    }

    /**
     * Sets time_ms
     *
     * @param int $time_ms Timestamp of when this DVIR was signed & completed, in UNIX milliseconds.
     *
     * @return $this
     */
    public function setTimeMs($time_ms)
    {
        $this->container['time_ms'] = $time_ms;

        return $this;
    }

    /**
     * Gets trailer_defects
     *
     * @return \Samsara\Php\Client\Model\V1DvirDefectBase[]
     */
    public function getTrailerDefects()
    {
        return $this->container['trailer_defects'];
    }

    /**
     * Sets trailer_defects
     *
     * @param \Samsara\Php\Client\Model\V1DvirDefectBase[] $trailer_defects Defects registered for the trailer which was part of the DVIR.
     *
     * @return $this
     */
    public function setTrailerDefects($trailer_defects)
    {
        $this->container['trailer_defects'] = $trailer_defects;

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
     * @param int $trailer_id The id of the trailer which was part of the DVIR.
     *
     * @return $this
     */
    public function setTrailerId($trailer_id)
    {
        $this->container['trailer_id'] = $trailer_id;

        return $this;
    }

    /**
     * Gets trailer_name
     *
     * @return string
     */
    public function getTrailerName()
    {
        return $this->container['trailer_name'];
    }

    /**
     * Sets trailer_name
     *
     * @param string $trailer_name The name of the trailer which was part of the DVIR.
     *
     * @return $this
     */
    public function setTrailerName($trailer_name)
    {
        $this->container['trailer_name'] = $trailer_name;

        return $this;
    }

    /**
     * Gets vehicle
     *
     * @return \Samsara\Php\Client\Model\V1DvirBaseVehicle
     */
    public function getVehicle()
    {
        return $this->container['vehicle'];
    }

    /**
     * Sets vehicle
     *
     * @param \Samsara\Php\Client\Model\V1DvirBaseVehicle $vehicle vehicle
     *
     * @return $this
     */
    public function setVehicle($vehicle)
    {
        $this->container['vehicle'] = $vehicle;

        return $this;
    }

    /**
     * Gets vehicle_condition
     *
     * @return string
     */
    public function getVehicleCondition()
    {
        return $this->container['vehicle_condition'];
    }

    /**
     * Sets vehicle_condition
     *
     * @param string $vehicle_condition The condition of vechile on which DVIR was done.
     *
     * @return $this
     */
    public function setVehicleCondition($vehicle_condition)
    {
        $this->container['vehicle_condition'] = $vehicle_condition;

        return $this;
    }

    /**
     * Gets vehicle_defects
     *
     * @return \Samsara\Php\Client\Model\V1DvirDefectBase[]
     */
    public function getVehicleDefects()
    {
        return $this->container['vehicle_defects'];
    }

    /**
     * Sets vehicle_defects
     *
     * @param \Samsara\Php\Client\Model\V1DvirDefectBase[] $vehicle_defects Defects registered for the vehicle which was part of the DVIR.
     *
     * @return $this
     */
    public function setVehicleDefects($vehicle_defects)
    {
        $this->container['vehicle_defects'] = $vehicle_defects;

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

