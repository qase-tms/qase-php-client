<?php

namespace Qase\Client\Model;

use ArrayAccess;
use InvalidArgumentException;
use JsonSerializable;
use Qase\Client\ObjectSerializer;

/**
 * CustomFieldCreate Class Doc Comment
 *
 * @category Class
 * @package  Qase\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CustomFieldCreate implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'title' => 'title',
        'entity' => 'entity',
        'type' => 'type',
        'projectsCodes' => 'projects_codes',
        'value' => 'value',
        'placeholder' => 'placeholder',
        'defaultValue' => 'default_value',
        'isFilterable' => 'is_filterable',
        'isVisible' => 'is_visible',
        'isRequired' => 'is_required'
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'entity' => 'getEntity',
        'type' => 'getType',
        'projectsCodes' => 'getProjectsCodes',
        'value' => 'getValue',
        'placeholder' => 'getPlaceholder',
        'defaultValue' => 'getDefaultValue',
        'isFilterable' => 'getIsFilterable',
        'isVisible' => 'getIsVisible',
        'isRequired' => 'getIsRequired'
    ];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'title' => null,
        'entity' => null,
        'type' => null,
        'projectsCodes' => null,
        'value' => null,
        'placeholder' => null,
        'defaultValue' => null,
        'isFilterable' => null,
        'isVisible' => null,
        'isRequired' => null
    ];
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'CustomFieldCreate';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'title' => 'string',
        'entity' => 'int',
        'type' => 'int',
        'projectsCodes' => 'string[]',
        'value' => '\Qase\Client\Model\CustomFieldCreateValue[]',
        'placeholder' => 'string',
        'defaultValue' => 'string',
        'isFilterable' => 'bool',
        'isVisible' => 'bool',
        'isRequired' => 'bool'
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'entity' => 'setEntity',
        'type' => 'setType',
        'projectsCodes' => 'setProjectsCodes',
        'value' => 'setValue',
        'placeholder' => 'setPlaceholder',
        'defaultValue' => 'setDefaultValue',
        'isFilterable' => 'setIsFilterable',
        'isVisible' => 'setIsVisible',
        'isRequired' => 'setIsRequired'
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
        $this->container['title'] = $data['title'] ?? null;
        $this->container['entity'] = $data['entity'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['projectsCodes'] = $data['projectsCodes'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
        $this->container['placeholder'] = $data['placeholder'] ?? null;
        $this->container['defaultValue'] = $data['defaultValue'] ?? null;
        $this->container['isFilterable'] = $data['isFilterable'] ?? null;
        $this->container['isVisible'] = $data['isVisible'] ?? null;
        $this->container['isRequired'] = $data['isRequired'] ?? null;
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
     * @return int
     */
    public function getEntity()
    {
        return $this->container['entity'];
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
     * @return string[]
     */
    public function getProjectsCodes()
    {
        return $this->container['projectsCodes'];
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Gets type
     *
     * @return int
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Gets value
     *
     * @return CustomFieldCreateValue[]|null
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
     * Sets defaultValue
     *
     * @param string|null $defaultValue defaultValue
     *
     * @return self
     */
    public function setDefaultValue($defaultValue)
    {
        if (!is_null($defaultValue) && (mb_strlen($defaultValue) > 255)) {
            throw new InvalidArgumentException('invalid length for $defaultValue when calling CustomFieldCreate., must be smaller than or equal to 255.');
        }

        $this->container['defaultValue'] = $defaultValue;

        return $this;
    }

    /**
     * Sets entity
     *
     * @param int $entity Possible values: 0 - case; 1 - run; 2 - defect;
     *
     * @return self
     */
    public function setEntity($entity)
    {

        if (($entity > 2)) {
            throw new InvalidArgumentException('invalid value for $entity when calling CustomFieldCreate., must be smaller than or equal to 2.');
        }
        if (($entity < 0)) {
            throw new InvalidArgumentException('invalid value for $entity when calling CustomFieldCreate., must be bigger than or equal to 0.');
        }

        $this->container['entity'] = $entity;

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
        if (!is_null($placeholder) && (mb_strlen($placeholder) > 255)) {
            throw new InvalidArgumentException('invalid length for $placeholder when calling CustomFieldCreate., must be smaller than or equal to 255.');
        }

        $this->container['placeholder'] = $placeholder;

        return $this;
    }

    /**
     * Sets projectsCodes
     *
     * @param string[] $projectsCodes projectsCodes
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
     * @param string $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if ((mb_strlen($title) > 255)) {
            throw new InvalidArgumentException('invalid length for $title when calling CustomFieldCreate., must be smaller than or equal to 255.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Sets type
     *
     * @param int $type Possible values: 0 - number; 1 - string; 2 - text; 3 - selectbox; 4 - checkbox; 5 - radio; 6 - multiselect; 7 - url; 8 - user; 9 - datetime;
     *
     * @return self
     */
    public function setType($type)
    {

        if (($type > 9)) {
            throw new InvalidArgumentException('invalid value for $type when calling CustomFieldCreate., must be smaller than or equal to 9.');
        }
        if (($type < 0)) {
            throw new InvalidArgumentException('invalid value for $type when calling CustomFieldCreate., must be bigger than or equal to 0.');
        }

        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Sets value
     *
     * @param CustomFieldCreateValue[]|null $value value
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

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ((mb_strlen($this->container['title']) > 255)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['entity'] === null) {
            $invalidProperties[] = "'entity' can't be null";
        }
        if (($this->container['entity'] > 2)) {
            $invalidProperties[] = "invalid value for 'entity', must be smaller than or equal to 2.";
        }

        if (($this->container['entity'] < 0)) {
            $invalidProperties[] = "invalid value for 'entity', must be bigger than or equal to 0.";
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if (($this->container['type'] > 9)) {
            $invalidProperties[] = "invalid value for 'type', must be smaller than or equal to 9.";
        }

        if (($this->container['type'] < 0)) {
            $invalidProperties[] = "invalid value for 'type', must be bigger than or equal to 0.";
        }

        if ($this->container['projectsCodes'] === null) {
            $invalidProperties[] = "'projectsCodes' can't be null";
        }
        if (!is_null($this->container['placeholder']) && (mb_strlen($this->container['placeholder']) > 255)) {
            $invalidProperties[] = "invalid value for 'placeholder', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['defaultValue']) && (mb_strlen($this->container['defaultValue']) > 255)) {
            $invalidProperties[] = "invalid value for 'defaultValue', the character length must be smaller than or equal to 255.";
        }

        return $invalidProperties;
    }
}


