<?php
/**
 * ProjectSecondarySourceType.
 *
 * PHP version 7
 *
 * @category Class
 * @author   Brian Logan
 * @link     https://github.com/colling-media/lasso-api
 */

/**
 * Lasso API.
 *
 * Manage Registrant and Inventory data within Lasso CRM.  Authorization header with a Bearer JWT api key token is required for all requests. API keys are project/location based, and can be obtained from your business contact with Lasso Data Systems. In the future, Project Admin's will be able to generate their own api keys from the Lasso CRM web application.  To try it out in swagger: - Select the `Authorize` button and place your api key in the textbox - Ensure that the api key is prefixed with `Bearer` including a space separating `Bearer` from the api key - Go to the route you want to try out in the swagger definition - Select `Try it out` - Input any required fields, query params, and request payload - Select `Execute`  Alternatively, you can try it on your command line with curl, for example: `curl -X GET \"https://api.lassocrm.com/v1/registrants/123456\" -H \"accept: application/json\" -H \"Authorization: Bearer ***apikey***\"`
 */

namespace CollingMedia\Lasso\Model;

use ArrayAccess;
use CollingMedia\Lasso\ObjectSerializer;

/**
 * ProjectSecondarySourceType Class Doc Comment.
 *
 * @category Class
 * @author   Brian Logan
 * @link     https://github.com/colling-media/lasso-api
 */
class ProjectSecondarySourceType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ProjectSecondarySourceType';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'secondary_source_type_id' => 'string',
        'secondary_source_type' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'secondary_source_type_id' => null,
        'secondary_source_type' => null,
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'secondary_source_type_id' => 'secondarySourceTypeId',
        'secondary_source_type' => 'secondarySourceType',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'secondary_source_type_id' => 'setSecondarySourceTypeId',
        'secondary_source_type' => 'setSecondarySourceType',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'secondary_source_type_id' => 'getSecondarySourceTypeId',
        'secondary_source_type' => 'getSecondarySourceType',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
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
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['secondary_source_type_id'] = isset($data['secondary_source_type_id']) ? $data['secondary_source_type_id'] : null;
        $this->container['secondary_source_type'] = isset($data['secondary_source_type']) ? $data['secondary_source_type'] : null;
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
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets secondary_source_type_id.
     *
     * @return string
     */
    public function getSecondarySourceTypeId()
    {
        return $this->container['secondary_source_type_id'];
    }

    /**
     * Sets secondary_source_type_id.
     *
     * @param string $secondary_source_type_id secondary_source_type_id
     *
     * @return $this
     */
    public function setSecondarySourceTypeId($secondary_source_type_id)
    {
        $this->container['secondary_source_type_id'] = $secondary_source_type_id;

        return $this;
    }

    /**
     * Gets secondary_source_type.
     *
     * @return string
     */
    public function getSecondarySourceType()
    {
        return $this->container['secondary_source_type'];
    }

    /**
     * Sets secondary_source_type.
     *
     * @param string $secondary_source_type secondary_source_type
     *
     * @return $this
     */
    public function setSecondarySourceType($secondary_source_type)
    {
        $this->container['secondary_source_type'] = $secondary_source_type;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
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
     * @param int $offset Offset
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
     * @param int $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object.
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
