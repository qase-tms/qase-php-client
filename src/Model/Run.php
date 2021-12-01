<?php

namespace Qase\Client\Model;

use ArrayAccess;
use DateTime;
use JsonSerializable;
use Qase\Client\ObjectSerializer;

/**
 * Run Class Doc Comment
 *
 * @category Class
 * @package  Qase\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Run implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'title' => 'title',
        'description' => 'description',
        'status' => 'status',
        'statusText' => 'status_text',
        'startTime' => 'start_time',
        'endTime' => 'end_time',
        'public' => 'public',
        'stats' => 'stats',
        'timeSpent' => 'time_spent',
        'environment' => 'environment',
        'milestone' => 'milestone',
        'customFields' => 'custom_fields',
        'tags' => 'tags',
        'cases' => 'cases'
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'status' => 'getStatus',
        'statusText' => 'getStatusText',
        'startTime' => 'getStartTime',
        'endTime' => 'getEndTime',
        'public' => 'getPublic',
        'stats' => 'getStats',
        'timeSpent' => 'getTimeSpent',
        'environment' => 'getEnvironment',
        'milestone' => 'getMilestone',
        'customFields' => 'getCustomFields',
        'tags' => 'getTags',
        'cases' => 'getCases'
    ];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'title' => null,
        'description' => null,
        'status' => null,
        'statusText' => null,
        'startTime' => 'date-time',
        'endTime' => 'date-time',
        'public' => null,
        'stats' => null,
        'timeSpent' => 'int64',
        'environment' => null,
        'milestone' => null,
        'customFields' => null,
        'tags' => null,
        'cases' => 'int64'
    ];
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Run';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'id' => 'int',
        'title' => 'string',
        'description' => 'string',
        'status' => 'int',
        'statusText' => 'string',
        'startTime' => '\DateTime',
        'endTime' => '\DateTime',
        'public' => 'bool',
        'stats' => '\Qase\Client\Model\RunStats',
        'timeSpent' => 'int',
        'environment' => '\Qase\Client\Model\RunEnvironment',
        'milestone' => '\Qase\Client\Model\RunMilestone',
        'customFields' => '\Qase\Client\Model\CustomFieldValue[]',
        'tags' => '\Qase\Client\Model\TagValue[]',
        'cases' => 'int[]'
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'status' => 'setStatus',
        'statusText' => 'setStatusText',
        'startTime' => 'setStartTime',
        'endTime' => 'setEndTime',
        'public' => 'setPublic',
        'stats' => 'setStats',
        'timeSpent' => 'setTimeSpent',
        'environment' => 'setEnvironment',
        'milestone' => 'setMilestone',
        'customFields' => 'setCustomFields',
        'tags' => 'setTags',
        'cases' => 'setCases'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['statusText'] = $data['statusText'] ?? null;
        $this->container['startTime'] = $data['startTime'] ?? null;
        $this->container['endTime'] = $data['endTime'] ?? null;
        $this->container['public'] = $data['public'] ?? null;
        $this->container['stats'] = $data['stats'] ?? null;
        $this->container['timeSpent'] = $data['timeSpent'] ?? null;
        $this->container['environment'] = $data['environment'] ?? null;
        $this->container['milestone'] = $data['milestone'] ?? null;
        $this->container['customFields'] = $data['customFields'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['cases'] = $data['cases'] ?? null;
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
     * Gets cases
     *
     * @return int[]|null
     */
    public function getCases()
    {
        return $this->container['cases'];
    }

    /**
     * Gets customFields
     *
     * @return CustomFieldValue[]|null
     */
    public function getCustomFields()
    {
        return $this->container['customFields'];
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
     * Gets endTime
     *
     * @return DateTime|null
     */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
     * Gets environment
     *
     * @return RunEnvironment|null
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Gets milestone
     *
     * @return RunMilestone|null
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
     * Gets public
     *
     * @return bool|null
     */
    public function getPublic()
    {
        return $this->container['public'];
    }

    /**
     * Gets startTime
     *
     * @return DateTime|null
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Gets stats
     *
     * @return RunStats|null
     */
    public function getStats()
    {
        return $this->container['stats'];
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
     * Gets statusText
     *
     * @return string|null
     */
    public function getStatusText()
    {
        return $this->container['statusText'];
    }

    /**
     * Gets tags
     *
     * @return TagValue[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Gets timeSpent
     *
     * @return int|null
     */
    public function getTimeSpent()
    {
        return $this->container['timeSpent'];
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
     * Sets cases
     *
     * @param int[]|null $cases cases
     *
     * @return self
     */
    public function setCases($cases)
    {
        $this->container['cases'] = $cases;

        return $this;
    }

    /**
     * Sets customFields
     *
     * @param CustomFieldValue[]|null $customFields customFields
     *
     * @return self
     */
    public function setCustomFields($customFields)
    {
        $this->container['customFields'] = $customFields;

        return $this;
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
     * Sets endTime
     *
     * @param DateTime|null $endTime endTime
     *
     * @return self
     */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;

        return $this;
    }

    /**
     * Sets environment
     *
     * @param RunEnvironment|null $environment environment
     *
     * @return self
     */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;

        return $this;
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Sets milestone
     *
     * @param RunMilestone|null $milestone milestone
     *
     * @return self
     */
    public function setMilestone($milestone)
    {
        $this->container['milestone'] = $milestone;

        return $this;
    }

    /**
     * Sets public
     *
     * @param bool|null $public public
     *
     * @return self
     */
    public function setPublic($public)
    {
        $this->container['public'] = $public;

        return $this;
    }

    /**
     * Sets startTime
     *
     * @param DateTime|null $startTime startTime
     *
     * @return self
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

        return $this;
    }

    /**
     * Sets stats
     *
     * @param RunStats|null $stats stats
     *
     * @return self
     */
    public function setStats($stats)
    {
        $this->container['stats'] = $stats;

        return $this;
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
     * Sets statusText
     *
     * @param string|null $statusText statusText
     *
     * @return self
     */
    public function setStatusText($statusText)
    {
        $this->container['statusText'] = $statusText;

        return $this;
    }

    /**
     * Sets tags
     *
     * @param TagValue[]|null $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Sets timeSpent
     *
     * @param int|null $timeSpent Time in ms.
     *
     * @return self
     */
    public function setTimeSpent($timeSpent)
    {
        $this->container['timeSpent'] = $timeSpent;

        return $this;
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
        $this->container['title'] = $title;

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


