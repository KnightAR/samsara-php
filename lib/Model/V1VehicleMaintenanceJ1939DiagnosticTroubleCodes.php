<?php
/**
 * V1VehicleMaintenanceJ1939DiagnosticTroubleCodes
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
 * V1VehicleMaintenanceJ1939DiagnosticTroubleCodes Class Doc Comment
 *
 * @category Class
 * @package  Samsara\Php\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1VehicleMaintenanceJ1939DiagnosticTroubleCodes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'V1VehicleMaintenance_j1939_diagnosticTroubleCodes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fmi_id' => 'int',
        'fmi_text' => 'string',
        'occurrence_count' => 'int',
        'spn_description' => 'string',
        'spn_id' => 'int',
        'tx_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fmi_id' => null,
        'fmi_text' => null,
        'occurrence_count' => null,
        'spn_description' => null,
        'spn_id' => null,
        'tx_id' => null
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
        'fmi_id' => 'fmiId',
        'fmi_text' => 'fmiText',
        'occurrence_count' => 'occurrenceCount',
        'spn_description' => 'spnDescription',
        'spn_id' => 'spnId',
        'tx_id' => 'txId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fmi_id' => 'setFmiId',
        'fmi_text' => 'setFmiText',
        'occurrence_count' => 'setOccurrenceCount',
        'spn_description' => 'setSpnDescription',
        'spn_id' => 'setSpnId',
        'tx_id' => 'setTxId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fmi_id' => 'getFmiId',
        'fmi_text' => 'getFmiText',
        'occurrence_count' => 'getOccurrenceCount',
        'spn_description' => 'getSpnDescription',
        'spn_id' => 'getSpnId',
        'tx_id' => 'getTxId'
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
        $this->container['fmi_id'] = isset($data['fmi_id']) ? $data['fmi_id'] : null;
        $this->container['fmi_text'] = isset($data['fmi_text']) ? $data['fmi_text'] : null;
        $this->container['occurrence_count'] = isset($data['occurrence_count']) ? $data['occurrence_count'] : null;
        $this->container['spn_description'] = isset($data['spn_description']) ? $data['spn_description'] : null;
        $this->container['spn_id'] = isset($data['spn_id']) ? $data['spn_id'] : null;
        $this->container['tx_id'] = isset($data['tx_id']) ? $data['tx_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fmi_id'] === null) {
            $invalidProperties[] = "'fmi_id' can't be null";
        }
        if ($this->container['fmi_text'] === null) {
            $invalidProperties[] = "'fmi_text' can't be null";
        }
        if ($this->container['occurrence_count'] === null) {
            $invalidProperties[] = "'occurrence_count' can't be null";
        }
        if ($this->container['spn_description'] === null) {
            $invalidProperties[] = "'spn_description' can't be null";
        }
        if ($this->container['spn_id'] === null) {
            $invalidProperties[] = "'spn_id' can't be null";
        }
        if ($this->container['tx_id'] === null) {
            $invalidProperties[] = "'tx_id' can't be null";
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
     * Gets fmi_id
     *
     * @return int
     */
    public function getFmiId()
    {
        return $this->container['fmi_id'];
    }

    /**
     * Sets fmi_id
     *
     * @param int $fmi_id fmi_id
     *
     * @return $this
     */
    public function setFmiId($fmi_id)
    {
        $this->container['fmi_id'] = $fmi_id;

        return $this;
    }

    /**
     * Gets fmi_text
     *
     * @return string
     */
    public function getFmiText()
    {
        return $this->container['fmi_text'];
    }

    /**
     * Sets fmi_text
     *
     * @param string $fmi_text fmi_text
     *
     * @return $this
     */
    public function setFmiText($fmi_text)
    {
        $this->container['fmi_text'] = $fmi_text;

        return $this;
    }

    /**
     * Gets occurrence_count
     *
     * @return int
     */
    public function getOccurrenceCount()
    {
        return $this->container['occurrence_count'];
    }

    /**
     * Sets occurrence_count
     *
     * @param int $occurrence_count occurrence_count
     *
     * @return $this
     */
    public function setOccurrenceCount($occurrence_count)
    {
        $this->container['occurrence_count'] = $occurrence_count;

        return $this;
    }

    /**
     * Gets spn_description
     *
     * @return string
     */
    public function getSpnDescription()
    {
        return $this->container['spn_description'];
    }

    /**
     * Sets spn_description
     *
     * @param string $spn_description spn_description
     *
     * @return $this
     */
    public function setSpnDescription($spn_description)
    {
        $this->container['spn_description'] = $spn_description;

        return $this;
    }

    /**
     * Gets spn_id
     *
     * @return int
     */
    public function getSpnId()
    {
        return $this->container['spn_id'];
    }

    /**
     * Sets spn_id
     *
     * @param int $spn_id spn_id
     *
     * @return $this
     */
    public function setSpnId($spn_id)
    {
        $this->container['spn_id'] = $spn_id;

        return $this;
    }

    /**
     * Gets tx_id
     *
     * @return int
     */
    public function getTxId()
    {
        return $this->container['tx_id'];
    }

    /**
     * Sets tx_id
     *
     * @param int $tx_id tx_id
     *
     * @return $this
     */
    public function setTxId($tx_id)
    {
        $this->container['tx_id'] = $tx_id;

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

