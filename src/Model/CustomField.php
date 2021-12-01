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
     * Gets created
     *
     * @return DateTime|null
     */
    public function getCreated()
    {
        return $this->container['created'];
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
     * Gets entity
     *
     * @return string|null
     */
    public function getEntity()
    {
        return $this->container['entity'];
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
     * Gets isFilterable
     *
     * @return bool|null
     */
    public function getIsFilterable()
    {
        return $this->container['isFilterable'];
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
     * Gets isVisible
     *
     * @return bool|null
     */
    public function getIsVisible()
    {
        return $this->container['isVisible'];
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
     * Gets placeholder
     *
     * @return string|null
     */
    public function getPlaceholder()
    {
        return $this->container['placeholder'];
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
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
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
     * Gets updated
     *
     * @return DateTime|null
     */
    public function getUpdated()
    {
        return $this->container['updated'];
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


