<?php

namespace Qase\Client\Model;

use ArrayAccess;
use JsonSerializable;
use Qase\Client\ObjectSerializer;

/**
 * Filters Class Doc Comment
 *
 * @category Class
 * @package  Qase\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Filters implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'filters';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'search' => 'string',
        'milestoneId' => 'int',
        'suiteId' => 'int',
        'severity' => 'string',
        'priority' => 'string',
        'type' => 'string',
        'behavior' => 'string',
        'automation' => 'string',
        'status' => 'string'
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
        'milestoneId' => null,
        'suiteId' => null,
        'severity' => null,
        'priority' => null,
        'type' => null,
        'behavior' => null,
        'automation' => null,
        'status' => null
    ];

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
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'search' => 'search',
        'milestoneId' => 'milestone_id',
        'suiteId' => 'suite_id',
        'severity' => 'severity',
        'priority' => 'priority',
        'type' => 'type',
        'behavior' => 'behavior',
        'automation' => 'automation',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'search' => 'setSearch',
        'milestoneId' => 'setMilestoneId',
        'suiteId' => 'setSuiteId',
        'severity' => 'setSeverity',
        'priority' => 'setPriority',
        'type' => 'setType',
        'behavior' => 'setBehavior',
        'automation' => 'setAutomation',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'search' => 'getSearch',
        'milestoneId' => 'getMilestoneId',
        'suiteId' => 'getSuiteId',
        'severity' => 'getSeverity',
        'priority' => 'getPriority',
        'type' => 'getType',
        'behavior' => 'getBehavior',
        'automation' => 'getAutomation',
        'status' => 'getStatus'
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
        return self::$openAPIModelName;
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
        $this->container['search'] = $data['search'] ?? null;
        $this->container['milestoneId'] = $data['milestoneId'] ?? null;
        $this->container['suiteId'] = $data['suiteId'] ?? null;
        $this->container['severity'] = $data['severity'] ?? null;
        $this->container['priority'] = $data['priority'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['behavior'] = $data['behavior'] ?? null;
        $this->container['automation'] = $data['automation'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
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
     * Gets search
     *
     * @return string|null
     */
    public function getSearch()
    {
        return $this->container['search'];
    }

    /**
     * Sets search
     *
     * @param string|null $search Provide a string that will be used to search by name.
     *
     * @return self
     */
    public function setSearch($search)
    {
        $this->container['search'] = $search;

        return $this;
    }

    /**
     * Gets milestoneId
     *
     * @return int|null
     */
    public function getMilestoneId()
    {
        return $this->container['milestoneId'];
    }

    /**
     * Sets milestoneId
     *
     * @param int|null $milestoneId ID of milestone.
     *
     * @return self
     */
    public function setMilestoneId($milestoneId)
    {
        $this->container['milestoneId'] = $milestoneId;

        return $this;
    }

    /**
     * Gets suiteId
     *
     * @return int|null
     */
    public function getSuiteId()
    {
        return $this->container['suiteId'];
    }

    /**
     * Sets suiteId
     *
     * @param int|null $suiteId ID of test suite.
     *
     * @return self
     */
    public function setSuiteId($suiteId)
    {
        $this->container['suiteId'] = $suiteId;

        return $this;
    }

    /**
     * Gets severity
     *
     * @return string|null
     */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
     * Sets severity
     *
     * @param string|null $severity A list of severity values separated by comma. Possible values: undefined, blocker, critical, major, normal, minor, trivial
     *
     * @return self
     */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return string|null
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param string|null $priority A list of priority values separated by comma. Possible values: undefined, high, medium, low
     *
     * @return self
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type A list of type values separated by comma. Possible values: other, functional smoke, regression, security, usability, performance, acceptance
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets behavior
     *
     * @return string|null
     */
    public function getBehavior()
    {
        return $this->container['behavior'];
    }

    /**
     * Sets behavior
     *
     * @param string|null $behavior A list of behavior values separated by comma. Possible values: undefined, positive negative, destructive
     *
     * @return self
     */
    public function setBehavior($behavior)
    {
        $this->container['behavior'] = $behavior;

        return $this;
    }

    /**
     * Gets automation
     *
     * @return string|null
     */
    public function getAutomation()
    {
        return $this->container['automation'];
    }

    /**
     * Sets automation
     *
     * @param string|null $automation A list of values separated by comma. Possible values: is-not-automated, automated to-be-automated
     *
     * @return self
     */
    public function setAutomation($automation)
    {
        $this->container['automation'] = $automation;

        return $this;
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
     * Sets status
     *
     * @param string|null $status A list of values separated by comma. Possible values: actual, draft deprecated
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


