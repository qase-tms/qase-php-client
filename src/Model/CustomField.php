<?php

namespace Qase\Client\Model;

use ArrayAccess;
use DateTime;
use JsonSerializable;
use Qase\Client\ObjectSerializer;

/**
 * CustomField Class Doc Comment
 *
 * @category Class
 * @package  Qase\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CustomField implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'CustomField';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'id' => 'int',
        'title' => 'string',
        'entity' => 'string',
        'type' => 'string',
        'placeholder' => 'string',
        'defaultValue' => 'string',
        'value' => 'string',
        'isRequired' => 'bool',
        'isVisible' => 'bool',
        'isFilterable' => 'bool',
        'created' => '\DateTime',
        'updated' => '\DateTime',
        'projectsCodes' => 'string[]'
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
        'entity' => null,
        'type' => null,
        'placeholder' => null,
        'defaultValue' => null,
        'value' => null,
        'isRequired' => null,
        'isVisible' => null,
        'isFilterable' => null,
        'created' => 'date-time',
        'updated' => 'date-time',
        'projectsCodes' => null
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
        'id' => 'id',
        'title' => 'title',
        'entity' => 'entity',
        'type' => 'type',
        'placeholder' => 'placeholder',
        'defaultValue' => 'default_value',
        'value' => 'value',
        'isRequired' => 'is_required',
        'isVisible' => 'is_visible',
        'isFilterable' => 'is_filterable',
        'created' => 'created',
        'updated' => 'updated',
        'projectsCodes' => 'projects_codes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'entity' => 'setEntity',
        'type' => 'setType',
        'placeholder' => 'setPlaceholder',
        'defaultValue' => 'setDefaultValue',
        'value' => 'setValue',
        'isRequired' => 'setIsRequired',
        'isVisible' => 'setIsVisible',
        'isFilterable' => 'setIsFilterable',
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'projectsCodes' => 'setProjectsCodes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'entity' => 'getEntity',
        'type' => 'getType',
        'placeholder' => 'getPlaceholder',
        'defaultValue' => 'getDefaultValue',
        'value' => 'getValue',
        'isRequired' => 'getIsRequired',
        'isVisible' => 'getIsVisible',
        'isFilterable' => 'getIsFilterable',
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'projectsCodes' => 'getProjectsCodes'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['entity'] = $data['entity'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['placeholder'] = $data['placeholder'] ?? null;
        $this->container['defaultValue'] = $data['defaultValue'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
        $this->container['isRequired'] = $data['isRequired'] ?? null;
        $this->container['isVisible'] = $data['isVisible'] ?? null;
        $this->container['isFilterable'] = $data['isFilterable'] ?? null;
        $this->container['created'] = $data['created'] ?? null;
        $this->container['updated'] = $data['updated'] ?? null;
        $this->container['projectsCodes'] = $data['projectsCodes'] ?? null;
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
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
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets entity
     *
     * @return string|null
     */
    public function getEntity()
    {
        return $this->container['entity'];
    }

    /**
     * Sets entity
     *
     * @param string|null $entity entity
     *
     * @return self
     */
    public function setEntity($entity)
    {
        $this->container['entity'] = $entity;

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
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets placeholder
     *
     * @return string|null
     */
    public function getPlaceholder()
    {
        return $this->container['placeholder'];
    }

    /**
     * Sets placeholder
     *
     * @param string|null $placeholder placeholder
     *
     * @return self
     */
    public function setPlaceholder($placeholder)
    {
        $this->container['placeholder'] = $placeholder;

        return $this;
    }

    /**
     * Gets defaultValue
     *
     * @return string|null
     */
    public function getDefaultValue()
    {
        return $this->container['defaultValue'];
    }

    /**
     * Sets defaultValue
     *
     * @param string|null $defaultValue defaultValue
     *
     * @return self
     */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string|null $value value
     *
     * @return self
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets isRequired
     *
     * @return bool|null
     */
    public function getIsRequired()
    {
        return $this->container['isRequired'];
    }

    /**
     * Sets isRequired
     *
     * @param bool|null $isRequired isRequired
     *
     * @return self
     */
    public function setIsRequired($isRequired)
    {
        $this->container['isRequired'] = $isRequired;

        return $this;
    }

    /**
     * Gets isVisible
     *
     * @return bool|null
     */
    public function getIsVisible()
    {
        return $this->container['isVisible'];
    }

    /**
     * Sets isVisible
     *
     * @param bool|null $isVisible isVisible
     *
     * @return self
     */
    public function setIsVisible($isVisible)
    {
        $this->container['isVisible'] = $isVisible;

        return $this;
    }

    /**
     * Gets isFilterable
     *
     * @return bool|null
     */
    public function getIsFilterable()
    {
        return $this->container['isFilterable'];
    }

    /**
     * Sets isFilterable
     *
     * @param bool|null $isFilterable isFilterable
     *
     * @return self
     */
    public function setIsFilterable($isFilterable)
    {
        $this->container['isFilterable'] = $isFilterable;

        return $this;
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
     * Gets updated
     *
     * @return DateTime|null
     */
    public function getUpdated()
    {
        return $this->container['updated'];
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
     * Gets projectsCodes
     *
     * @return string[]|null
     */
    public function getProjectsCodes()
    {
        return $this->container['projectsCodes'];
    }

    /**
     * Sets projectsCodes
     *
     * @param string[]|null $projectsCodes projectsCodes
     *
     * @return self
     */
    public function setProjectsCodes($projectsCodes)
    {
        $this->container['projectsCodes'] = $projectsCodes;

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


