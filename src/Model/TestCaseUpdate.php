<?php

namespace Qase\Client\Model;

use ArrayAccess;
use InvalidArgumentException;
use JsonSerializable;
use Qase\Client\ObjectSerializer;

/**
 * TestCaseUpdate Class Doc Comment
 *
 * @category Class
 * @package  Qase\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TestCaseUpdate implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'TestCaseUpdate';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'description' => 'string',
        'preconditions' => 'string',
        'postconditions' => 'string',
        'title' => 'string',
        'severity' => 'int',
        'priority' => 'int',
        'behavior' => 'int',
        'type' => 'int',
        'layer' => 'int',
        'isFlaky' => 'int',
        'suiteId' => 'int',
        'milestoneId' => 'int',
        'automation' => 'int',
        'status' => 'int',
        'steps' => '\Qase\Client\Model\TestCaseUpdateSteps[]',
        'customField' => 'array<string,string>'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'description' => null,
        'preconditions' => null,
        'postconditions' => null,
        'title' => null,
        'severity' => null,
        'priority' => null,
        'behavior' => null,
        'type' => null,
        'layer' => null,
        'isFlaky' => null,
        'suiteId' => 'int64',
        'milestoneId' => 'int64',
        'automation' => null,
        'status' => null,
        'steps' => null,
        'customField' => null
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
        'description' => 'description',
        'preconditions' => 'preconditions',
        'postconditions' => 'postconditions',
        'title' => 'title',
        'severity' => 'severity',
        'priority' => 'priority',
        'behavior' => 'behavior',
        'type' => 'type',
        'layer' => 'layer',
        'isFlaky' => 'is_flaky',
        'suiteId' => 'suite_id',
        'milestoneId' => 'milestone_id',
        'automation' => 'automation',
        'status' => 'status',
        'steps' => 'steps',
        'customField' => 'custom_field'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'preconditions' => 'setPreconditions',
        'postconditions' => 'setPostconditions',
        'title' => 'setTitle',
        'severity' => 'setSeverity',
        'priority' => 'setPriority',
        'behavior' => 'setBehavior',
        'type' => 'setType',
        'layer' => 'setLayer',
        'isFlaky' => 'setIsFlaky',
        'suiteId' => 'setSuiteId',
        'milestoneId' => 'setMilestoneId',
        'automation' => 'setAutomation',
        'status' => 'setStatus',
        'steps' => 'setSteps',
        'customField' => 'setCustomField'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'preconditions' => 'getPreconditions',
        'postconditions' => 'getPostconditions',
        'title' => 'getTitle',
        'severity' => 'getSeverity',
        'priority' => 'getPriority',
        'behavior' => 'getBehavior',
        'type' => 'getType',
        'layer' => 'getLayer',
        'isFlaky' => 'getIsFlaky',
        'suiteId' => 'getSuiteId',
        'milestoneId' => 'getMilestoneId',
        'automation' => 'getAutomation',
        'status' => 'getStatus',
        'steps' => 'getSteps',
        'customField' => 'getCustomField'
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
        $this->container['description'] = $data['description'] ?? null;
        $this->container['preconditions'] = $data['preconditions'] ?? null;
        $this->container['postconditions'] = $data['postconditions'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['severity'] = $data['severity'] ?? null;
        $this->container['priority'] = $data['priority'] ?? null;
        $this->container['behavior'] = $data['behavior'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['layer'] = $data['layer'] ?? null;
        $this->container['isFlaky'] = $data['isFlaky'] ?? null;
        $this->container['suiteId'] = $data['suiteId'] ?? null;
        $this->container['milestoneId'] = $data['milestoneId'] ?? null;
        $this->container['automation'] = $data['automation'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['steps'] = $data['steps'] ?? null;
        $this->container['customField'] = $data['customField'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 255)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 255.";
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
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets preconditions
     *
     * @return string|null
     */
    public function getPreconditions()
    {
        return $this->container['preconditions'];
    }

    /**
     * Sets preconditions
     *
     * @param string|null $preconditions preconditions
     *
     * @return self
     */
    public function setPreconditions($preconditions)
    {
        $this->container['preconditions'] = $preconditions;

        return $this;
    }

    /**
     * Gets postconditions
     *
     * @return string|null
     */
    public function getPostconditions()
    {
        return $this->container['postconditions'];
    }

    /**
     * Sets postconditions
     *
     * @param string|null $postconditions postconditions
     *
     * @return self
     */
    public function setPostconditions($postconditions)
    {
        $this->container['postconditions'] = $postconditions;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (!is_null($title) && (mb_strlen($title) > 255)) {
            throw new InvalidArgumentException('invalid length for $title when calling TestCaseUpdate., must be smaller than or equal to 255.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets severity
     *
     * @return int|null
     */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
     * Sets severity
     *
     * @param int|null $severity severity
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
     * @return int|null
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int|null $priority priority
     *
     * @return self
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets behavior
     *
     * @return int|null
     */
    public function getBehavior()
    {
        return $this->container['behavior'];
    }

    /**
     * Sets behavior
     *
     * @param int|null $behavior behavior
     *
     * @return self
     */
    public function setBehavior($behavior)
    {
        $this->container['behavior'] = $behavior;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets layer
     *
     * @return int|null
     */
    public function getLayer()
    {
        return $this->container['layer'];
    }

    /**
     * Sets layer
     *
     * @param int|null $layer layer
     *
     * @return self
     */
    public function setLayer($layer)
    {
        $this->container['layer'] = $layer;

        return $this;
    }

    /**
     * Gets isFlaky
     *
     * @return int|null
     */
    public function getIsFlaky()
    {
        return $this->container['isFlaky'];
    }

    /**
     * Sets isFlaky
     *
     * @param int|null $isFlaky isFlaky
     *
     * @return self
     */
    public function setIsFlaky($isFlaky)
    {
        $this->container['isFlaky'] = $isFlaky;

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
     * @param int|null $suiteId suiteId
     *
     * @return self
     */
    public function setSuiteId($suiteId)
    {
        $this->container['suiteId'] = $suiteId;

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
     * @param int|null $milestoneId milestoneId
     *
     * @return self
     */
    public function setMilestoneId($milestoneId)
    {
        $this->container['milestoneId'] = $milestoneId;

        return $this;
    }

    /**
     * Gets automation
     *
     * @return int|null
     */
    public function getAutomation()
    {
        return $this->container['automation'];
    }

    /**
     * Sets automation
     *
     * @param int|null $automation automation
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
     * @return int|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets steps
     *
     * @return TestCaseUpdateSteps[]|null
     */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
     * Sets steps
     *
     * @param TestCaseUpdateSteps[]|null $steps steps
     *
     * @return self
     */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;

        return $this;
    }

    /**
     * Gets customField
     *
     * @return array<string,string>|null
     */
    public function getCustomField()
    {
        return $this->container['customField'];
    }

    /**
     * Sets customField
     *
     * @param array<string,string>|null $customField A map of custom fields values (id => value)
     *
     * @return self
     */
    public function setCustomField($customField)
    {
        $this->container['customField'] = $customField;

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


