<?php

namespace Qase\Client\Model;

use ArrayAccess;
use JsonSerializable;
use Qase\Client\ObjectSerializer;

/**
 * TestStep Class Doc Comment
 *
 * @category Class
 * @package  Qase\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TestStep implements ModelInterface, ArrayAccess, JsonSerializable
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
        'sharedStepHash' => 'shared_step_hash',
        'sharedStepNestedHash' => 'shared_step_nested_hash',
        'position' => 'position',
        'action' => 'action',
        'expectedResult' => 'expected_result',
        'data' => 'data',
        'attachments' => 'attachments'
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hash' => 'getHash',
        'sharedStepHash' => 'getSharedStepHash',
        'sharedStepNestedHash' => 'getSharedStepNestedHash',
        'position' => 'getPosition',
        'action' => 'getAction',
        'expectedResult' => 'getExpectedResult',
        'data' => 'getData',
        'attachments' => 'getAttachments'
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
        'sharedStepHash' => null,
        'sharedStepNestedHash' => null,
        'position' => null,
        'action' => null,
        'expectedResult' => null,
        'data' => null,
        'attachments' => null
    ];
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'TestStep';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'hash' => 'string',
        'sharedStepHash' => 'string',
        'sharedStepNestedHash' => 'string',
        'position' => 'int',
        'action' => 'string',
        'expectedResult' => 'string',
        'data' => 'string',
        'attachments' => '\Qase\Client\Model\Attachment[]'
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hash' => 'setHash',
        'sharedStepHash' => 'setSharedStepHash',
        'sharedStepNestedHash' => 'setSharedStepNestedHash',
        'position' => 'setPosition',
        'action' => 'setAction',
        'expectedResult' => 'setExpectedResult',
        'data' => 'setData',
        'attachments' => 'setAttachments'
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
        $this->container['sharedStepHash'] = $data['sharedStepHash'] ?? null;
        $this->container['sharedStepNestedHash'] = $data['sharedStepNestedHash'] ?? null;
        $this->container['position'] = $data['position'] ?? null;
        $this->container['action'] = $data['action'] ?? null;
        $this->container['expectedResult'] = $data['expectedResult'] ?? null;
        $this->container['data'] = $data['data'] ?? null;
        $this->container['attachments'] = $data['attachments'] ?? null;
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
     * Gets attachments
     *
     * @return Attachment[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
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
     * Gets position
     *
     * @return int|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Gets sharedStepHash
     *
     * @return string|null
     */
    public function getSharedStepHash()
    {
        return $this->container['sharedStepHash'];
    }

    /**
     * Gets sharedStepNestedHash
     *
     * @return string|null
     */
    public function getSharedStepNestedHash()
    {
        return $this->container['sharedStepNestedHash'];
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
     * Sets attachments
     *
     * @param Attachment[]|null $attachments attachments
     *
     * @return self
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

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
     * Sets position
     *
     * @param int|null $position position
     *
     * @return self
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Sets sharedStepHash
     *
     * @param string|null $sharedStepHash sharedStepHash
     *
     * @return self
     */
    public function setSharedStepHash($sharedStepHash)
    {
        $this->container['sharedStepHash'] = $sharedStepHash;

        return $this;
    }

    /**
     * Sets sharedStepNestedHash
     *
     * @param string|null $sharedStepNestedHash sharedStepNestedHash
     *
     * @return self
     */
    public function setSharedStepNestedHash($sharedStepNestedHash)
    {
        $this->container['sharedStepNestedHash'] = $sharedStepNestedHash;

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


