<?php
/**
 * V1VisionStepResultsInnerFindEdge
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
 * V1VisionStepResultsInnerFindEdge Class Doc Comment
 *
 * @category Class
 * @package  Samsara\Php\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1VisionStepResultsInnerFindEdge implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'V1VisionStepResults_inner_findEdge';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'angle_found' => 'int',
'angle_range' => '\Samsara\Php\Client\Model\V1VisionStepResultsInnerCaliperAngleRange',
'contrast_percent' => 'int',
'contrast_range' => '\Samsara\Php\Client\Model\V1VisionStepResultsInnerCaliperContrastRange',
'filter_polarity' => 'string',
'sharpness_percent' => 'int',
'sharpness_range' => '\Samsara\Php\Client\Model\V1VisionStepResultsInnerCaliperSharpnessRange',
'straightness_found' => 'int',
'straightness_range' => '\Samsara\Php\Client\Model\V1VisionStepResultsInnerCaliperStraightnessRange'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'angle_found' => 'float64',
'angle_range' => null,
'contrast_percent' => 'float64',
'contrast_range' => null,
'filter_polarity' => null,
'sharpness_percent' => 'float64',
'sharpness_range' => null,
'straightness_found' => 'float64',
'straightness_range' => null    ];

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
        'angle_found' => 'angleFound',
'angle_range' => 'angleRange',
'contrast_percent' => 'contrastPercent',
'contrast_range' => 'contrastRange',
'filter_polarity' => 'filterPolarity',
'sharpness_percent' => 'sharpnessPercent',
'sharpness_range' => 'sharpnessRange',
'straightness_found' => 'straightnessFound',
'straightness_range' => 'straightnessRange'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'angle_found' => 'setAngleFound',
'angle_range' => 'setAngleRange',
'contrast_percent' => 'setContrastPercent',
'contrast_range' => 'setContrastRange',
'filter_polarity' => 'setFilterPolarity',
'sharpness_percent' => 'setSharpnessPercent',
'sharpness_range' => 'setSharpnessRange',
'straightness_found' => 'setStraightnessFound',
'straightness_range' => 'setStraightnessRange'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'angle_found' => 'getAngleFound',
'angle_range' => 'getAngleRange',
'contrast_percent' => 'getContrastPercent',
'contrast_range' => 'getContrastRange',
'filter_polarity' => 'getFilterPolarity',
'sharpness_percent' => 'getSharpnessPercent',
'sharpness_range' => 'getSharpnessRange',
'straightness_found' => 'getStraightnessFound',
'straightness_range' => 'getStraightnessRange'    ];

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
        $this->container['angle_found'] = isset($data['angle_found']) ? $data['angle_found'] : null;
        $this->container['angle_range'] = isset($data['angle_range']) ? $data['angle_range'] : null;
        $this->container['contrast_percent'] = isset($data['contrast_percent']) ? $data['contrast_percent'] : null;
        $this->container['contrast_range'] = isset($data['contrast_range']) ? $data['contrast_range'] : null;
        $this->container['filter_polarity'] = isset($data['filter_polarity']) ? $data['filter_polarity'] : null;
        $this->container['sharpness_percent'] = isset($data['sharpness_percent']) ? $data['sharpness_percent'] : null;
        $this->container['sharpness_range'] = isset($data['sharpness_range']) ? $data['sharpness_range'] : null;
        $this->container['straightness_found'] = isset($data['straightness_found']) ? $data['straightness_found'] : null;
        $this->container['straightness_range'] = isset($data['straightness_range']) ? $data['straightness_range'] : null;
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
     * Gets angle_found
     *
     * @return int
     */
    public function getAngleFound()
    {
        return $this->container['angle_found'];
    }

    /**
     * Sets angle_found
     *
     * @param int $angle_found The detected angle in degrees
     *
     * @return $this
     */
    public function setAngleFound($angle_found)
    {
        $this->container['angle_found'] = $angle_found;

        return $this;
    }

    /**
     * Gets angle_range
     *
     * @return \Samsara\Php\Client\Model\V1VisionStepResultsInnerCaliperAngleRange
     */
    public function getAngleRange()
    {
        return $this->container['angle_range'];
    }

    /**
     * Sets angle_range
     *
     * @param \Samsara\Php\Client\Model\V1VisionStepResultsInnerCaliperAngleRange $angle_range angle_range
     *
     * @return $this
     */
    public function setAngleRange($angle_range)
    {
        $this->container['angle_range'] = $angle_range;

        return $this;
    }

    /**
     * Gets contrast_percent
     *
     * @return int
     */
    public function getContrastPercent()
    {
        return $this->container['contrast_percent'];
    }

    /**
     * Sets contrast_percent
     *
     * @param int $contrast_percent The detected contrast percentage
     *
     * @return $this
     */
    public function setContrastPercent($contrast_percent)
    {
        $this->container['contrast_percent'] = $contrast_percent;

        return $this;
    }

    /**
     * Gets contrast_range
     *
     * @return \Samsara\Php\Client\Model\V1VisionStepResultsInnerCaliperContrastRange
     */
    public function getContrastRange()
    {
        return $this->container['contrast_range'];
    }

    /**
     * Sets contrast_range
     *
     * @param \Samsara\Php\Client\Model\V1VisionStepResultsInnerCaliperContrastRange $contrast_range contrast_range
     *
     * @return $this
     */
    public function setContrastRange($contrast_range)
    {
        $this->container['contrast_range'] = $contrast_range;

        return $this;
    }

    /**
     * Gets filter_polarity
     *
     * @return string
     */
    public function getFilterPolarity()
    {
        return $this->container['filter_polarity'];
    }

    /**
     * Sets filter_polarity
     *
     * @param string $filter_polarity The configured polarity for finding edges
     *
     * @return $this
     */
    public function setFilterPolarity($filter_polarity)
    {
        $this->container['filter_polarity'] = $filter_polarity;

        return $this;
    }

    /**
     * Gets sharpness_percent
     *
     * @return int
     */
    public function getSharpnessPercent()
    {
        return $this->container['sharpness_percent'];
    }

    /**
     * Sets sharpness_percent
     *
     * @param int $sharpness_percent The detected sharpness percentage
     *
     * @return $this
     */
    public function setSharpnessPercent($sharpness_percent)
    {
        $this->container['sharpness_percent'] = $sharpness_percent;

        return $this;
    }

    /**
     * Gets sharpness_range
     *
     * @return \Samsara\Php\Client\Model\V1VisionStepResultsInnerCaliperSharpnessRange
     */
    public function getSharpnessRange()
    {
        return $this->container['sharpness_range'];
    }

    /**
     * Sets sharpness_range
     *
     * @param \Samsara\Php\Client\Model\V1VisionStepResultsInnerCaliperSharpnessRange $sharpness_range sharpness_range
     *
     * @return $this
     */
    public function setSharpnessRange($sharpness_range)
    {
        $this->container['sharpness_range'] = $sharpness_range;

        return $this;
    }

    /**
     * Gets straightness_found
     *
     * @return int
     */
    public function getStraightnessFound()
    {
        return $this->container['straightness_found'];
    }

    /**
     * Sets straightness_found
     *
     * @param int $straightness_found The detected straightness percentage
     *
     * @return $this
     */
    public function setStraightnessFound($straightness_found)
    {
        $this->container['straightness_found'] = $straightness_found;

        return $this;
    }

    /**
     * Gets straightness_range
     *
     * @return \Samsara\Php\Client\Model\V1VisionStepResultsInnerCaliperStraightnessRange
     */
    public function getStraightnessRange()
    {
        return $this->container['straightness_range'];
    }

    /**
     * Sets straightness_range
     *
     * @param \Samsara\Php\Client\Model\V1VisionStepResultsInnerCaliperStraightnessRange $straightness_range straightness_range
     *
     * @return $this
     */
    public function setStraightnessRange($straightness_range)
    {
        $this->container['straightness_range'] = $straightness_range;

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
