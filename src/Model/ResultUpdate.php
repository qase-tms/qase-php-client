<?php

namespace Qase\Client\Model;

use ArrayAccess;
use InvalidArgumentException;
use JsonSerializable;
use Qase\Client\ObjectSerializer;

/**
 * ResultUpdate Class Doc Comment
 *
 * @category Class
 * @package  Qase\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ResultUpdate implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;
    const STATUS_IN_PROGRESS = 'in_progress';
    const STATUS_PASSED = 'passed';
    const STATUS_FAILED = 'failed';
    const STATUS_BLOCKED = 'blocked';
    const STATUS_SKIPPED = 'skipped';
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'status' => 'status',
        'timeMs' => 'time_ms',
        'defect' => 'defect',
        'attachments' => 'attachments',
        'stacktrace' => 'stacktrace',
        'comment' => 'comment',
        'steps' => 'steps'
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'timeMs' => 'getTimeMs',
        'defect' => 'getDefect',
        'attachments' => 'getAttachments',
        'stacktrace' => 'getStacktrace',
        'comment' => 'getComment',
        'steps' => 'getSteps'
    ];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'status' => null,
        'timeMs' => 'int64',
        'defect' => null,
        'attachments' => null,
        'stacktrace' => null,
        'comment' => null,
        'steps' => null
    ];
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ResultUpdate';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'status' => 'string',
        'timeMs' => 'int',
        'defect' => 'bool',
        'attachments' => 'string[]',
        'stacktrace' => 'string',
        'comment' => 'string',
        'steps' => '\Qase\Client\Model\ResultUpdateSteps[]'
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'timeMs' => 'setTimeMs',
        'defect' => 'setDefect',
        'attachments' => 'setAttachments',
        'stacktrace' => 'setStacktrace',
        'comment' => 'setComment',
        'steps' => 'setSteps'
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
        $this->container['status'] = $data['status'] ?? null;
        $this->container['timeMs'] = $data['timeMs'] ?? null;
        $this->container['defect'] = $data['defect'] ?? null;
        $this->container['attachments'] = $data['attachments'] ?? null;
        $this->container['stacktrace'] = $data['stacktrace'] ?? null;
        $this->container['comment'] = $data['comment'] ?? null;
        $this->container['steps'] = $data['steps'] ?? null;
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
     * Gets attachments
     *
     * @return string[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Gets defect
     *
     * @return bool|null
     */
    public function getDefect()
    {
        return $this->container['defect'];
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
     * Gets stacktrace
     *
     * @return string|null
     */
    public function getStacktrace()
    {
        return $this->container['stacktrace'];
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
     * Gets steps
     *
     * @return ResultUpdateSteps[]|null
     */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
     * Gets timeMs
     *
     * @return int|null
     */
    public function getTimeMs()
    {
        return $this->container['timeMs'];
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
     * Sets attachments
     *
     * @param string[]|null $attachments attachments
     *
     * @return self
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Sets comment
     *
     * @param string|null $comment comment
     *
     * @return self
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Sets defect
     *
     * @param bool|null $defect defect
     *
     * @return self
     */
    public function setDefect($defect)
    {
        $this->container['defect'] = $defect;

        return $this;
    }

    /**
     * Sets stacktrace
     *
     * @param string|null $stacktrace stacktrace
     *
     * @return self
     */
    public function setStacktrace($stacktrace)
    {
        $this->container['stacktrace'] = $stacktrace;

        return $this;
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Sets steps
     *
     * @param ResultUpdateSteps[]|null $steps steps
     *
     * @return self
     */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;

        return $this;
    }

    /**
     * Sets timeMs
     *
     * @param int|null $timeMs timeMs
     *
     * @return self
     */
    public function setTimeMs($timeMs)
    {

        if (!is_null($timeMs) && ($timeMs > 31536000000)) {
            throw new InvalidArgumentException('invalid value for $timeMs when calling ResultUpdate., must be smaller than or equal to 31536000000.');
        }
        if (!is_null($timeMs) && ($timeMs < 0)) {
            throw new InvalidArgumentException('invalid value for $timeMs when calling ResultUpdate., must be bigger than or equal to 0.');
        }

        $this->container['timeMs'] = $timeMs;

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

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['timeMs']) && ($this->container['timeMs'] > 31536000000)) {
            $invalidProperties[] = "invalid value for 'timeMs', must be smaller than or equal to 31536000000.";
        }

        if (!is_null($this->container['timeMs']) && ($this->container['timeMs'] < 0)) {
            $invalidProperties[] = "invalid value for 'timeMs', must be bigger than or equal to 0.";
        }

        return $invalidProperties;
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_IN_PROGRESS,
            self::STATUS_PASSED,
            self::STATUS_FAILED,
            self::STATUS_BLOCKED,
            self::STATUS_SKIPPED,
        ];
    }
}


