<?php
/**
 * V1DriverSafetyScoreResponse
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
 * V1DriverSafetyScoreResponse Class Doc Comment
 *
 * @category Class
 * @description Safety score details for a driver
 * @package  Samsara\Php\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1DriverSafetyScoreResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'V1DriverSafetyScoreResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'crash_count' => 'int',
'driver_id' => 'int',
'harsh_accel_count' => 'int',
'harsh_braking_count' => 'int',
'harsh_events' => '\Samsara\Php\Client\Model\V1SafetyReportHarshEvent[]',
'harsh_turning_count' => 'int',
'safety_score' => 'int',
'safety_score_rank' => 'string',
'time_over_speed_limit_ms' => 'int',
'total_distance_driven_meters' => 'int',
'total_harsh_event_count' => 'int',
'total_time_driven_ms' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'crash_count' => null,
'driver_id' => null,
'harsh_accel_count' => null,
'harsh_braking_count' => null,
'harsh_events' => null,
'harsh_turning_count' => null,
'safety_score' => null,
'safety_score_rank' => null,
'time_over_speed_limit_ms' => null,
'total_distance_driven_meters' => null,
'total_harsh_event_count' => null,
'total_time_driven_ms' => null    ];

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
        'crash_count' => 'crashCount',
'driver_id' => 'driverId',
'harsh_accel_count' => 'harshAccelCount',
'harsh_braking_count' => 'harshBrakingCount',
'harsh_events' => 'harshEvents',
'harsh_turning_count' => 'harshTurningCount',
'safety_score' => 'safetyScore',
'safety_score_rank' => 'safetyScoreRank',
'time_over_speed_limit_ms' => 'timeOverSpeedLimitMs',
'total_distance_driven_meters' => 'totalDistanceDrivenMeters',
'total_harsh_event_count' => 'totalHarshEventCount',
'total_time_driven_ms' => 'totalTimeDrivenMs'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'crash_count' => 'setCrashCount',
'driver_id' => 'setDriverId',
'harsh_accel_count' => 'setHarshAccelCount',
'harsh_braking_count' => 'setHarshBrakingCount',
'harsh_events' => 'setHarshEvents',
'harsh_turning_count' => 'setHarshTurningCount',
'safety_score' => 'setSafetyScore',
'safety_score_rank' => 'setSafetyScoreRank',
'time_over_speed_limit_ms' => 'setTimeOverSpeedLimitMs',
'total_distance_driven_meters' => 'setTotalDistanceDrivenMeters',
'total_harsh_event_count' => 'setTotalHarshEventCount',
'total_time_driven_ms' => 'setTotalTimeDrivenMs'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'crash_count' => 'getCrashCount',
'driver_id' => 'getDriverId',
'harsh_accel_count' => 'getHarshAccelCount',
'harsh_braking_count' => 'getHarshBrakingCount',
'harsh_events' => 'getHarshEvents',
'harsh_turning_count' => 'getHarshTurningCount',
'safety_score' => 'getSafetyScore',
'safety_score_rank' => 'getSafetyScoreRank',
'time_over_speed_limit_ms' => 'getTimeOverSpeedLimitMs',
'total_distance_driven_meters' => 'getTotalDistanceDrivenMeters',
'total_harsh_event_count' => 'getTotalHarshEventCount',
'total_time_driven_ms' => 'getTotalTimeDrivenMs'    ];

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
        $this->container['crash_count'] = isset($data['crash_count']) ? $data['crash_count'] : null;
        $this->container['driver_id'] = isset($data['driver_id']) ? $data['driver_id'] : null;
        $this->container['harsh_accel_count'] = isset($data['harsh_accel_count']) ? $data['harsh_accel_count'] : null;
        $this->container['harsh_braking_count'] = isset($data['harsh_braking_count']) ? $data['harsh_braking_count'] : null;
        $this->container['harsh_events'] = isset($data['harsh_events']) ? $data['harsh_events'] : null;
        $this->container['harsh_turning_count'] = isset($data['harsh_turning_count']) ? $data['harsh_turning_count'] : null;
        $this->container['safety_score'] = isset($data['safety_score']) ? $data['safety_score'] : null;
        $this->container['safety_score_rank'] = isset($data['safety_score_rank']) ? $data['safety_score_rank'] : null;
        $this->container['time_over_speed_limit_ms'] = isset($data['time_over_speed_limit_ms']) ? $data['time_over_speed_limit_ms'] : null;
        $this->container['total_distance_driven_meters'] = isset($data['total_distance_driven_meters']) ? $data['total_distance_driven_meters'] : null;
        $this->container['total_harsh_event_count'] = isset($data['total_harsh_event_count']) ? $data['total_harsh_event_count'] : null;
        $this->container['total_time_driven_ms'] = isset($data['total_time_driven_ms']) ? $data['total_time_driven_ms'] : null;
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
     * Gets crash_count
     *
     * @return int
     */
    public function getCrashCount()
    {
        return $this->container['crash_count'];
    }

    /**
     * Sets crash_count
     *
     * @param int $crash_count Crash event count
     *
     * @return $this
     */
    public function setCrashCount($crash_count)
    {
        $this->container['crash_count'] = $crash_count;

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
     * @param int $driver_id Driver ID
     *
     * @return $this
     */
    public function setDriverId($driver_id)
    {
        $this->container['driver_id'] = $driver_id;

        return $this;
    }

    /**
     * Gets harsh_accel_count
     *
     * @return int
     */
    public function getHarshAccelCount()
    {
        return $this->container['harsh_accel_count'];
    }

    /**
     * Sets harsh_accel_count
     *
     * @param int $harsh_accel_count Harsh acceleration event count
     *
     * @return $this
     */
    public function setHarshAccelCount($harsh_accel_count)
    {
        $this->container['harsh_accel_count'] = $harsh_accel_count;

        return $this;
    }

    /**
     * Gets harsh_braking_count
     *
     * @return int
     */
    public function getHarshBrakingCount()
    {
        return $this->container['harsh_braking_count'];
    }

    /**
     * Sets harsh_braking_count
     *
     * @param int $harsh_braking_count Harsh braking event count
     *
     * @return $this
     */
    public function setHarshBrakingCount($harsh_braking_count)
    {
        $this->container['harsh_braking_count'] = $harsh_braking_count;

        return $this;
    }

    /**
     * Gets harsh_events
     *
     * @return \Samsara\Php\Client\Model\V1SafetyReportHarshEvent[]
     */
    public function getHarshEvents()
    {
        return $this->container['harsh_events'];
    }

    /**
     * Sets harsh_events
     *
     * @param \Samsara\Php\Client\Model\V1SafetyReportHarshEvent[] $harsh_events harsh_events
     *
     * @return $this
     */
    public function setHarshEvents($harsh_events)
    {
        $this->container['harsh_events'] = $harsh_events;

        return $this;
    }

    /**
     * Gets harsh_turning_count
     *
     * @return int
     */
    public function getHarshTurningCount()
    {
        return $this->container['harsh_turning_count'];
    }

    /**
     * Sets harsh_turning_count
     *
     * @param int $harsh_turning_count Harsh turning event count
     *
     * @return $this
     */
    public function setHarshTurningCount($harsh_turning_count)
    {
        $this->container['harsh_turning_count'] = $harsh_turning_count;

        return $this;
    }

    /**
     * Gets safety_score
     *
     * @return int
     */
    public function getSafetyScore()
    {
        return $this->container['safety_score'];
    }

    /**
     * Sets safety_score
     *
     * @param int $safety_score Safety Score
     *
     * @return $this
     */
    public function setSafetyScore($safety_score)
    {
        $this->container['safety_score'] = $safety_score;

        return $this;
    }

    /**
     * Gets safety_score_rank
     *
     * @return string
     */
    public function getSafetyScoreRank()
    {
        return $this->container['safety_score_rank'];
    }

    /**
     * Sets safety_score_rank
     *
     * @param string $safety_score_rank Safety Score Rank
     *
     * @return $this
     */
    public function setSafetyScoreRank($safety_score_rank)
    {
        $this->container['safety_score_rank'] = $safety_score_rank;

        return $this;
    }

    /**
     * Gets time_over_speed_limit_ms
     *
     * @return int
     */
    public function getTimeOverSpeedLimitMs()
    {
        return $this->container['time_over_speed_limit_ms'];
    }

    /**
     * Sets time_over_speed_limit_ms
     *
     * @param int $time_over_speed_limit_ms Amount of time driven over the speed limit in milliseconds
     *
     * @return $this
     */
    public function setTimeOverSpeedLimitMs($time_over_speed_limit_ms)
    {
        $this->container['time_over_speed_limit_ms'] = $time_over_speed_limit_ms;

        return $this;
    }

    /**
     * Gets total_distance_driven_meters
     *
     * @return int
     */
    public function getTotalDistanceDrivenMeters()
    {
        return $this->container['total_distance_driven_meters'];
    }

    /**
     * Sets total_distance_driven_meters
     *
     * @param int $total_distance_driven_meters Total distance driven in meters
     *
     * @return $this
     */
    public function setTotalDistanceDrivenMeters($total_distance_driven_meters)
    {
        $this->container['total_distance_driven_meters'] = $total_distance_driven_meters;

        return $this;
    }

    /**
     * Gets total_harsh_event_count
     *
     * @return int
     */
    public function getTotalHarshEventCount()
    {
        return $this->container['total_harsh_event_count'];
    }

    /**
     * Sets total_harsh_event_count
     *
     * @param int $total_harsh_event_count Total harsh event count
     *
     * @return $this
     */
    public function setTotalHarshEventCount($total_harsh_event_count)
    {
        $this->container['total_harsh_event_count'] = $total_harsh_event_count;

        return $this;
    }

    /**
     * Gets total_time_driven_ms
     *
     * @return int
     */
    public function getTotalTimeDrivenMs()
    {
        return $this->container['total_time_driven_ms'];
    }

    /**
     * Sets total_time_driven_ms
     *
     * @param int $total_time_driven_ms Amount of time driven in milliseconds
     *
     * @return $this
     */
    public function setTotalTimeDrivenMs($total_time_driven_ms)
    {
        $this->container['total_time_driven_ms'] = $total_time_driven_ms;

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
