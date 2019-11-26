<?php
/**
 * V1VisionStepResultsInnerCaliper
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
 * V1VisionStepResultsInnerCaliper Class Doc Comment
 *
 * @category Class
 * @package  Samsara\Php\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1VisionStepResultsInnerCaliper implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'V1VisionStepResults_inner_caliper';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'angle_range' => '\Samsara\Php\Client\Model\V1VisionStepResultsInnerCaliperAngleRange',
'contrast_range' => '\Samsara\Php\Client\Model\V1VisionStepResultsInnerCaliperContrastRange',
'distance_found' => 'float',
'filter_polarity' => 'string',
'max_distance' => 'float',
'min_distance' => 'float',
'sharpness_range' => '\Samsara\Php\Client\Model\V1VisionStepResultsInnerCaliperSharpnessRange',
'straightness_range' => '\Samsara\Php\Client\Model\V1VisionStepResultsInnerCaliperStraightnessRange',
'unit' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'angle_range' => null,
'contrast_range' => null,
'distance_found' => 'float',
'filter_polarity' => null,
'max_distance' => 'float',
'min_distance' => 'float',
'sharpness_range' => null,
'straightness_range' => null,
'unit' => null    ];

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
        'angle_range' => 'angleRange',
'contrast_range' => 'contrastRange',
'distance_found' => 'distanceFound',
'filter_polarity' => 'filterPolarity',
'max_distance' => 'maxDistance',
'min_distance' => 'minDistance',
'sharpness_range' => 'sharpnessRange',
'straightness_range' => 'straightnessRange',
'unit' => 'unit'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'angle_range' => 'setAngleRange',
'contrast_range' => 'setContrastRange',
'distance_found' => 'setDistanceFound',
'filter_polarity' => 'setFilterPolarity',
'max_distance' => 'setMaxDistance',
'min_distance' => 'setMinDistance',
'sharpness_range' => 'setSharpnessRange',
'straightness_range' => 'setStraightnessRange',
'unit' => 'setUnit'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'angle_range' => 'getAngleRange',
'contrast_range' => 'getContrastRange',
'distance_found' => 'getDistanceFound',
'filter_polarity' => 'getFilterPolarity',
'max_distance' => 'getMaxDistance',
'min_distance' => 'getMinDistance',
'sharpness_range' => 'getSharpnessRange',
'straightness_range' => 'getStraightnessRange',
'unit' => 'getUnit'    ];

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

    const FILTER_POLARITY_LIGHT_TO_DARK = 'LIGHT TO DARK';
const FILTER_POLARITY_DARK_TO_LIGHT = 'DARK TO LIGHT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFilterPolarityAllowableValues()
    {
        return [
            self::FILTER_POLARITY_LIGHT_TO_DARK,
self::FILTER_POLARITY_DARK_TO_LIGHT,        ];
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
        $this->container['angle_range'] = isset($data['angle_range']) ? $data['angle_range'] : null;
        $this->container['contrast_range'] = isset($data['contrast_range']) ? $data['contrast_range'] : null;
        $this->container['distance_found'] = isset($data['distance_found']) ? $data['distance_found'] : null;
        $this->container['filter_polarity'] = isset($data['filter_polarity']) ? $data['filter_polarity'] : 'LIGHT TO DARK';
        $this->container['max_distance'] = isset($data['max_distance']) ? $data['max_distance'] : null;
        $this->container['min_distance'] = isset($data['min_distance']) ? $data['min_distance'] : null;
        $this->container['sharpness_range'] = isset($data['sharpness_range']) ? $data['sharpness_range'] : null;
        $this->container['straightness_range'] = isset($data['straightness_range']) ? $data['straightness_range'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFilterPolarityAllowableValues();
        if (!is_null($this->container['filter_polarity']) && !in_array($this->container['filter_polarity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'filter_polarity', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets distance_found
     *
     * @return float
     */
    public function getDistanceFound()
    {
        return $this->container['distance_found'];
    }

    /**
     * Sets distance_found
     *
     * @param float $distance_found The distance found between the found edges
     *
     * @return $this
     */
    public function setDistanceFound($distance_found)
    {
        $this->container['distance_found'] = $distance_found;

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
        $allowedValues = $this->getFilterPolarityAllowableValues();
        if (!is_null($filter_polarity) && !in_array($filter_polarity, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'filter_polarity', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['filter_polarity'] = $filter_polarity;

        return $this;
    }

    /**
     * Gets max_distance
     *
     * @return float
     */
    public function getMaxDistance()
    {
        return $this->container['max_distance'];
    }

    /**
     * Sets max_distance
     *
     * @param float $max_distance The maximum allowed distance threshold
     *
     * @return $this
     */
    public function setMaxDistance($max_distance)
    {
        $this->container['max_distance'] = $max_distance;

        return $this;
    }

    /**
     * Gets min_distance
     *
     * @return float
     */
    public function getMinDistance()
    {
        return $this->container['min_distance'];
    }

    /**
     * Sets min_distance
     *
     * @param float $min_distance The minumum allowed distance threshold
     *
     * @return $this
     */
    public function setMinDistance($min_distance)
    {
        $this->container['min_distance'] = $min_distance;

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
     * Gets unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string $unit The measurement unit of the distance found and the min and max distance threshold
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

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
