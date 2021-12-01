<?php

namespace Qase\Client\Model;

use ArrayAccess;
use JsonSerializable;
use Qase\Client\ObjectSerializer;

/**
 * Filters5 Class Doc Comment
 *
 * @category Class
 * @package  Qase\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Filters5 implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'search' => 'search',
        'status' => 'status',
        'milestone' => 'milestone',
        'environment' => 'environment',
        'fromStartTime' => 'from_start_time',
        'toStartTime' => 'to_start_time'
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'search' => 'getSearch',
        'status' => 'getStatus',
        'milestone' => 'getMilestone',
        'environment' => 'getEnvironment',
        'fromStartTime' => 'getFromStartTime',
        'toStartTime' => 'getToStartTime'
    ];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'search' => null,
        'status' => null,
        'milestone' => null,
        'environment' => null,
        'fromStartTime' => 'int64',
        'toStartTime' => 'int64'
    ];
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'filters_5';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'search' => 'string',
        'status' => 'string',
        'milestone' => 'int',
        'environment' => 'int',
        'fromStartTime' => 'int',
        'toStartTime' => 'int'
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'search' => 'setSearch',
        'status' => 'setStatus',
        'milestone' => 'setMilestone',
        'environment' => 'setEnvironment',
        'fromStartTime' => 'setFromStartTime',
        'toStartTime' => 'setToStartTime'
    ];
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
        $this->container['search'] = $data['search'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['milestone'] = $data['milestone'] ?? null;
        $this->container['environment'] = $data['environment'] ?? null;
        $this->container['fromStartTime'] = $data['fromStartTime'] ?? null;
        $this->container['toStartTime'] = $data['toStartTime'] ?? null;
    }

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
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets environment
     *
     * @return int|null
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Gets fromStartTime
     *
     * @return int|null
     */
    public function getFromStartTime()
    {
        return $this->container['fromStartTime'];
    }

    /**
     * Gets milestone
     *
     * @return int|null
     */
    public function getMilestone()
    {
        return $this->container['milestone'];
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    /**
     * Gets search
     *
     * @return string|null
     */
    public function getSearch()
    {
        return $this->container['search'];
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Gets toStartTime
     *
     * @return int|null
     */
    public function getToStartTime()
    {
        return $this->container['toStartTime'];
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed $value Value to be set
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
     * Sets environment
     *
     * @param int|null $environment environment
     *
     * @return self
     */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;

        return $this;
    }

    /**
     * Sets fromStartTime
     *
     * @param int|null $fromStartTime fromStartTime
     *
     * @return self
     */
    public function setFromStartTime($fromStartTime)
    {
        $this->container['fromStartTime'] = $fromStartTime;

        return $this;
    }

    /**
     * Sets milestone
     *
     * @param int|null $milestone milestone
     *
     * @return self
     */
    public function setMilestone($milestone)
    {
        $this->container['milestone'] = $milestone;

        return $this;
    }

    /**
     * Sets search
     *
     * @param string|null $search search
     *
     * @return self
     */
    public function setSearch($search)
    {
        $this->container['search'] = $search;

        return $this;
    }

    /**
     * Sets status
     *
     * @param string|null $status A list of status values separated by comma. Possible values: active, complete, abort.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Sets toStartTime
     *
     * @param int|null $toStartTime toStartTime
     *
     * @return self
     */
    public function setToStartTime($toStartTime)
    {
        $this->container['toStartTime'] = $toStartTime;

        return $this;
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
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
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }
}


