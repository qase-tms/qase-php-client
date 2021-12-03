<?php

namespace Qase\Client\Model;

use ArrayAccess;
use InvalidArgumentException;
use JsonSerializable;
use Qase\Client\ObjectSerializer;

/**
 * ResultCreate Class Doc Comment
 *
 * @category Class
 * @package  Qase\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ResultCreate implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ResultCreate';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'caseId' => 'int',
        'case' => '\Qase\Client\Model\ResultCreateCase',
        'status' => 'string',
        'time' => 'int',
        'timeMs' => 'int',
        'defect' => 'bool',
        'attachments' => 'string[]',
        'stacktrace' => 'string',
        'comment' => 'string',
        'param' => 'string[]',
        'steps' => '\Qase\Client\Model\ResultCreateSteps[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'caseId' => 'int64',
        'case' => null,
        'status' => null,
        'time' => 'int64',
        'timeMs' => 'int64',
        'defect' => null,
        'attachments' => null,
        'stacktrace' => null,
        'comment' => null,
        'param' => null,
        'steps' => null
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
        'caseId' => 'case_id',
        'case' => 'case',
        'status' => 'status',
        'time' => 'time',
        'timeMs' => 'time_ms',
        'defect' => 'defect',
        'attachments' => 'attachments',
        'stacktrace' => 'stacktrace',
        'comment' => 'comment',
        'param' => 'param',
        'steps' => 'steps'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'caseId' => 'setCaseId',
        'case' => 'setCase',
        'status' => 'setStatus',
        'time' => 'setTime',
        'timeMs' => 'setTimeMs',
        'defect' => 'setDefect',
        'attachments' => 'setAttachments',
        'stacktrace' => 'setStacktrace',
        'comment' => 'setComment',
        'param' => 'setParam',
        'steps' => 'setSteps'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'caseId' => 'getCaseId',
        'case' => 'getCase',
        'status' => 'getStatus',
        'time' => 'getTime',
        'timeMs' => 'getTimeMs',
        'defect' => 'getDefect',
        'attachments' => 'getAttachments',
        'stacktrace' => 'getStacktrace',
        'comment' => 'getComment',
        'param' => 'getParam',
        'steps' => 'getSteps'
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

    const STATUS_IN_PROGRESS = 'in_progress';
    const STATUS_PASSED = 'passed';
    const STATUS_FAILED = 'failed';
    const STATUS_BLOCKED = 'blocked';
    const STATUS_SKIPPED = 'skipped';
    const STATUS_INVALID = 'invalid';

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
            self::STATUS_INVALID,
        ];
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
        $this->container['caseId'] = $data['caseId'] ?? null;
        $this->container['case'] = $data['case'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['time'] = $data['time'] ?? null;
        $this->container['timeMs'] = $data['timeMs'] ?? null;
        $this->container['defect'] = $data['defect'] ?? null;
        $this->container['attachments'] = $data['attachments'] ?? null;
        $this->container['stacktrace'] = $data['stacktrace'] ?? null;
        $this->container['comment'] = $data['comment'] ?? null;
        $this->container['param'] = $data['param'] ?? null;
        $this->container['steps'] = $data['steps'] ?? null;
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

        if (!is_null($this->container['time']) && ($this->container['time'] > 31536000)) {
            $invalidProperties[] = "invalid value for 'time', must be smaller than or equal to 31536000.";
        }

        if (!is_null($this->container['time']) && ($this->container['time'] < 0)) {
            $invalidProperties[] = "invalid value for 'time', must be bigger than or equal to 0.";
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
     * Gets caseId
     *
     * @return int|null
     */
    public function getCaseId()
    {
        return $this->container['caseId'];
    }

    /**
     * Sets caseId
     *
     * @param int|null $caseId caseId
     *
     * @return self
     */
    public function setCaseId($caseId)
    {
        $this->container['caseId'] = $caseId;

        return $this;
    }

    /**
     * Gets case
     *
     * @return ResultCreateCase|null
     */
    public function getCase()
    {
        return $this->container['case'];
    }

    /**
     * Sets case
     *
     * @param ResultCreateCase|null $case case
     *
     * @return self
     */
    public function setCase($case)
    {
        $this->container['case'] = $case;

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
     * Gets time
     *
     * @return int|null
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param int|null $time time
     *
     * @return self
     */
    public function setTime($time)
    {

        if (!is_null($time) && ($time > 31536000)) {
            throw new InvalidArgumentException('invalid value for $time when calling ResultCreate., must be smaller than or equal to 31536000.');
        }
        if (!is_null($time) && ($time < 0)) {
            throw new InvalidArgumentException('invalid value for $time when calling ResultCreate., must be bigger than or equal to 0.');
        }

        $this->container['time'] = $time;

        return $this;
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
     * Sets timeMs
     *
     * @param int|null $timeMs timeMs
     *
     * @return self
     */
    public function setTimeMs($timeMs)
    {

        if (!is_null($timeMs) && ($timeMs > 31536000000)) {
            throw new InvalidArgumentException('invalid value for $timeMs when calling ResultCreate., must be smaller than or equal to 31536000000.');
        }
        if (!is_null($timeMs) && ($timeMs < 0)) {
            throw new InvalidArgumentException('invalid value for $timeMs when calling ResultCreate., must be bigger than or equal to 0.');
        }

        $this->container['timeMs'] = $timeMs;

        return $this;
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
     * Gets attachments
     *
     * @return string[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
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
     * Gets stacktrace
     *
     * @return string|null
     */
    public function getStacktrace()
    {
        return $this->container['stacktrace'];
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
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
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
     * Gets param
     *
     * @return string[]|null
     */
    public function getParam()
    {
        return $this->container['param'];
    }

    /**
     * Sets param
     *
     * @param string[]|null $param param
     *
     * @return self
     */
    public function setParam($param)
    {


        $this->container['param'] = $param;

        return $this;
    }

    /**
     * Gets steps
     *
     * @return ResultCreateSteps[]|null
     */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
     * Sets steps
     *
     * @param ResultCreateSteps[]|null $steps steps
     *
     * @return self
     */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;

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


