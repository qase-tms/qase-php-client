<?php

namespace Qase\Client\Model;

use ArrayAccess;
use DateTime;
use JsonSerializable;
use Qase\Client\ObjectSerializer;

/**
 * SharedStep Class Doc Comment
 *
 * @category Class
 * @package  Qase\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SharedStep implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'hash' => 'hash',
        'title' => 'title',
        'action' => 'action',
        'expectedResult' => 'expected_result',
        'steps' => 'steps',
        'data' => 'data',
        'cases' => 'cases',
        'casesCount' => 'cases_count',
        'created' => 'created',
        'updated' => 'updated'
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hash' => 'getHash',
        'title' => 'getTitle',
        'action' => 'getAction',
        'expectedResult' => 'getExpectedResult',
        'steps' => 'getSteps',
        'data' => 'getData',
        'cases' => 'getCases',
        'casesCount' => 'getCasesCount',
        'created' => 'getCreated',
        'updated' => 'getUpdated'
    ];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'hash' => null,
        'title' => null,
        'action' => null,
        'expectedResult' => null,
        'steps' => null,
        'data' => null,
        'cases' => 'int64',
        'casesCount' => null,
        'created' => 'date-time',
        'updated' => 'date-time'
    ];
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'SharedStep';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'hash' => 'string',
        'title' => 'string',
        'action' => 'string',
        'expectedResult' => 'string',
        'steps' => '\Qase\Client\Model\SharedStepSteps[]',
        'data' => 'string',
        'cases' => 'int[]',
        'casesCount' => 'int',
        'created' => '\DateTime',
        'updated' => '\DateTime'
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hash' => 'setHash',
        'title' => 'setTitle',
        'action' => 'setAction',
        'expectedResult' => 'setExpectedResult',
        'steps' => 'setSteps',
        'data' => 'setData',
        'cases' => 'setCases',
        'casesCount' => 'setCasesCount',
        'created' => 'setCreated',
        'updated' => 'setUpdated'
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
        $this->container['hash'] = $data['hash'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['action'] = $data['action'] ?? null;
        $this->container['expectedResult'] = $data['expectedResult'] ?? null;
        $this->container['steps'] = $data['steps'] ?? null;
        $this->container['data'] = $data['data'] ?? null;
        $this->container['cases'] = $data['cases'] ?? null;
        $this->container['casesCount'] = $data['casesCount'] ?? null;
        $this->container['created'] = $data['created'] ?? null;
        $this->container['updated'] = $data['updated'] ?? null;
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
     * Gets action
     *
     * @return string|null
     */
    public function getAction()
    {
        return $this->container['action'];
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
     * Gets casesCount
     *
     * @return int|null
     */
    public function getCasesCount()
    {
        return $this->container['casesCount'];
    }

    /**
     * Gets created
     *
     * @return DateTime|null
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Gets data
     *
     * @return string|null
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Gets expectedResult
     *
     * @return string|null
     */
    public function getExpectedResult()
    {
        return $this->container['expectedResult'];
    }

    /**
     * Gets hash
     *
     * @return string|null
     */
    public function getHash()
    {
        return $this->container['hash'];
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
     * Gets steps
     *
     * @return SharedStepSteps[]|null
     */
    public function getSteps()
    {
        return $this->container['steps'];
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
     * Gets updated
     *
     * @return DateTime|null
     */
    public function getUpdated()
    {
        return $this->container['updated'];
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
     * Sets action
     *
     * @param string|null $action action
     *
     * @return self
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
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
     * Sets casesCount
     *
     * @param int|null $casesCount casesCount
     *
     * @return self
     */
    public function setCasesCount($casesCount)
    {
        $this->container['casesCount'] = $casesCount;

        return $this;
    }

    /**
     * Sets created
     *
     * @param DateTime|null $created created
     *
     * @return self
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Sets data
     *
     * @param string|null $data data
     *
     * @return self
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Sets expectedResult
     *
     * @param string|null $expectedResult expectedResult
     *
     * @return self
     */
    public function setExpectedResult($expectedResult)
    {
        $this->container['expectedResult'] = $expectedResult;

        return $this;
    }

    /**
     * Sets hash
     *
     * @param string|null $hash hash
     *
     * @return self
     */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Sets steps
     *
     * @param SharedStepSteps[]|null $steps steps
     *
     * @return self
     */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;

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
     * Sets updated
     *
     * @param DateTime|null $updated updated
     *
     * @return self
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

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


