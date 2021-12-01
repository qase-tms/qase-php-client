<?php

namespace Qase\Client\Model;

use ArrayAccess;
use JsonSerializable;
use Qase\Client\ObjectSerializer;

/**
 * ProjectCounts Class Doc Comment
 *
 * @category Class
 * @package  Qase\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProjectCounts implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'cases' => 'cases',
        'suites' => 'suites',
        'milestones' => 'milestones',
        'runs' => 'runs',
        'defects' => 'defects'
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cases' => 'getCases',
        'suites' => 'getSuites',
        'milestones' => 'getMilestones',
        'runs' => 'getRuns',
        'defects' => 'getDefects'
    ];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'cases' => null,
        'suites' => null,
        'milestones' => null,
        'runs' => null,
        'defects' => null
    ];
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Project_counts';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'cases' => 'int',
        'suites' => 'int',
        'milestones' => 'int',
        'runs' => '\Qase\Client\Model\ProjectCountsRuns',
        'defects' => '\Qase\Client\Model\ProjectCountsDefects'
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cases' => 'setCases',
        'suites' => 'setSuites',
        'milestones' => 'setMilestones',
        'runs' => 'setRuns',
        'defects' => 'setDefects'
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
        $this->container['cases'] = $data['cases'] ?? null;
        $this->container['suites'] = $data['suites'] ?? null;
        $this->container['milestones'] = $data['milestones'] ?? null;
        $this->container['runs'] = $data['runs'] ?? null;
        $this->container['defects'] = $data['defects'] ?? null;
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
     * @return int|null
     */
    public function getCases()
    {
        return $this->container['cases'];
    }

    /**
     * Gets defects
     *
     * @return ProjectCountsDefects|null
     */
    public function getDefects()
    {
        return $this->container['defects'];
    }

    /**
     * Gets milestones
     *
     * @return int|null
     */
    public function getMilestones()
    {
        return $this->container['milestones'];
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
     * Gets runs
     *
     * @return ProjectCountsRuns|null
     */
    public function getRuns()
    {
        return $this->container['runs'];
    }

    /**
     * Gets suites
     *
     * @return int|null
     */
    public function getSuites()
    {
        return $this->container['suites'];
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
     * @param int|null $cases cases
     *
     * @return self
     */
    public function setCases($cases)
    {
        $this->container['cases'] = $cases;

        return $this;
    }

    /**
     * Sets defects
     *
     * @param ProjectCountsDefects|null $defects defects
     *
     * @return self
     */
    public function setDefects($defects)
    {
        $this->container['defects'] = $defects;

        return $this;
    }

    /**
     * Sets milestones
     *
     * @param int|null $milestones milestones
     *
     * @return self
     */
    public function setMilestones($milestones)
    {
        $this->container['milestones'] = $milestones;

        return $this;
    }

    /**
     * Sets runs
     *
     * @param ProjectCountsRuns|null $runs runs
     *
     * @return self
     */
    public function setRuns($runs)
    {
        $this->container['runs'] = $runs;

        return $this;
    }

    /**
     * Sets suites
     *
     * @param int|null $suites suites
     *
     * @return self
     */
    public function setSuites($suites)
    {
        $this->container['suites'] = $suites;

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


