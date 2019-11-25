<?php
/**
 * V1VehicleMaintenanceJ1939CheckEngineLight
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
 * V1VehicleMaintenanceJ1939CheckEngineLight Class Doc Comment
 *
 * @category Class
 * @description J1939 check engine lights.
 * @package  Samsara\Php\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1VehicleMaintenanceJ1939CheckEngineLight implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'V1VehicleMaintenance_j1939_checkEngineLight';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'emissions_is_on' => 'bool',
        'protect_is_on' => 'bool',
        'stop_is_on' => 'bool',
        'warning_is_on' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'emissions_is_on' => null,
        'protect_is_on' => null,
        'stop_is_on' => null,
        'warning_is_on' => null
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
        'emissions_is_on' => 'emissionsIsOn',
        'protect_is_on' => 'protectIsOn',
        'stop_is_on' => 'stopIsOn',
        'warning_is_on' => 'warningIsOn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'emissions_is_on' => 'setEmissionsIsOn',
        'protect_is_on' => 'setProtectIsOn',
        'stop_is_on' => 'setStopIsOn',
        'warning_is_on' => 'setWarningIsOn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'emissions_is_on' => 'getEmissionsIsOn',
        'protect_is_on' => 'getProtectIsOn',
        'stop_is_on' => 'getStopIsOn',
        'warning_is_on' => 'getWarningIsOn'
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
        $this->container['emissions_is_on'] = isset($data['emissions_is_on']) ? $data['emissions_is_on'] : null;
        $this->container['protect_is_on'] = isset($data['protect_is_on']) ? $data['protect_is_on'] : null;
        $this->container['stop_is_on'] = isset($data['stop_is_on']) ? $data['stop_is_on'] : null;
        $this->container['warning_is_on'] = isset($data['warning_is_on']) ? $data['warning_is_on'] : null;
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
     * Gets emissions_is_on
     *
     * @return bool
     */
    public function getEmissionsIsOn()
    {
        return $this->container['emissions_is_on'];
    }

    /**
     * Sets emissions_is_on
     *
     * @param bool $emissions_is_on emissions_is_on
     *
     * @return $this
     */
    public function setEmissionsIsOn($emissions_is_on)
    {
        $this->container['emissions_is_on'] = $emissions_is_on;

        return $this;
    }

    /**
     * Gets protect_is_on
     *
     * @return bool
     */
    public function getProtectIsOn()
    {
        return $this->container['protect_is_on'];
    }

    /**
     * Sets protect_is_on
     *
     * @param bool $protect_is_on protect_is_on
     *
     * @return $this
     */
    public function setProtectIsOn($protect_is_on)
    {
        $this->container['protect_is_on'] = $protect_is_on;

        return $this;
    }

    /**
     * Gets stop_is_on
     *
     * @return bool
     */
    public function getStopIsOn()
    {
        return $this->container['stop_is_on'];
    }

    /**
     * Sets stop_is_on
     *
     * @param bool $stop_is_on stop_is_on
     *
     * @return $this
     */
    public function setStopIsOn($stop_is_on)
    {
        $this->container['stop_is_on'] = $stop_is_on;

        return $this;
    }

    /**
     * Gets warning_is_on
     *
     * @return bool
     */
    public function getWarningIsOn()
    {
        return $this->container['warning_is_on'];
    }

    /**
     * Sets warning_is_on
     *
     * @param bool $warning_is_on warning_is_on
     *
     * @return $this
     */
    public function setWarningIsOn($warning_is_on)
    {
        $this->container['warning_is_on'] = $warning_is_on;

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


