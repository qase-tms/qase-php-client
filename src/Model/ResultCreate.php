<?php
/**
 * ResultCreate
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Qase\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Qase.io API
 *
 * Qase API Specification.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: support@qase.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Qase\Client\Model;

use \ArrayAccess;
use \Qase\Client\ObjectSerializer;

/**
 * ResultCreate Class Doc Comment
 *
 * @category Class
 * @package  Qase\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ResultCreate implements ModelInterface, ArrayAccess, \JsonSerializable
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
        'status' => 'string',
        'caseId' => 'int',
        'case' => '\Qase\Client\Model\ResultCreateCase',
        'time' => 'int',
        'timeMs' => 'int',
        'defect' => 'bool',
        'attachments' => 'string[]',
        'stacktrace' => 'string',
        'comment' => 'string',
        'param' => 'array<string,string>',
        'steps' => '\Qase\Client\Model\TestStepResultCreate[]'
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
        'caseId' => 'int64',
        'case' => null,
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
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'status' => false,
		'caseId' => false,
		'case' => false,
		'time' => true,
		'timeMs' => true,
		'defect' => true,
		'attachments' => true,
		'stacktrace' => true,
		'comment' => true,
		'param' => true,
		'steps' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'status' => 'status',
        'caseId' => 'case_id',
        'case' => 'case',
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
        'status' => 'setStatus',
        'caseId' => 'setCaseId',
        'case' => 'setCase',
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
        'status' => 'getStatus',
        'caseId' => 'getCaseId',
        'case' => 'getCase',
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

    public const STATUS_IN_PROGRESS = 'in_progress';
    public const STATUS_PASSED = 'passed';
    public const STATUS_FAILED = 'failed';
    public const STATUS_BLOCKED = 'blocked';
    public const STATUS_SKIPPED = 'skipped';
    public const STATUS_INVALID = 'invalid';

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
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('caseId', $data ?? [], null);
        $this->setIfExists('case', $data ?? [], null);
        $this->setIfExists('time', $data ?? [], null);
        $this->setIfExists('timeMs', $data ?? [], null);
        $this->setIfExists('defect', $data ?? [], null);
        $this->setIfExists('attachments', $data ?? [], null);
        $this->setIfExists('stacktrace', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('param', $data ?? [], null);
        $this->setIfExists('steps', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
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
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
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
        if (is_null($caseId)) {
            throw new \InvalidArgumentException('non-nullable caseId cannot be null');
        }
        $this->container['caseId'] = $caseId;

        return $this;
    }

    /**
     * Gets case
     *
     * @return \Qase\Client\Model\ResultCreateCase|null
     */
    public function getCase()
    {
        return $this->container['case'];
    }

    /**
     * Sets case
     *
     * @param \Qase\Client\Model\ResultCreateCase|null $case case
     *
     * @return self
     */
    public function setCase($case)
    {
        if (is_null($case)) {
            throw new \InvalidArgumentException('non-nullable case cannot be null');
        }
        $this->container['case'] = $case;

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
        if (is_null($time)) {
            array_push($this->openAPINullablesSetToNull, 'time');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('time', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($time) && ($time > 31536000)) {
            throw new \InvalidArgumentException('invalid value for $time when calling ResultCreate., must be smaller than or equal to 31536000.');
        }
        if (!is_null($time) && ($time < 0)) {
            throw new \InvalidArgumentException('invalid value for $time when calling ResultCreate., must be bigger than or equal to 0.');
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
        if (is_null($timeMs)) {
            array_push($this->openAPINullablesSetToNull, 'timeMs');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('timeMs', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($timeMs) && ($timeMs > 31536000000)) {
            throw new \InvalidArgumentException('invalid value for $timeMs when calling ResultCreate., must be smaller than or equal to 31536000000.');
        }
        if (!is_null($timeMs) && ($timeMs < 0)) {
            throw new \InvalidArgumentException('invalid value for $timeMs when calling ResultCreate., must be bigger than or equal to 0.');
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
        if (is_null($defect)) {
            array_push($this->openAPINullablesSetToNull, 'defect');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('defect', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
        if (is_null($attachments)) {
            array_push($this->openAPINullablesSetToNull, 'attachments');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('attachments', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
        if (is_null($stacktrace)) {
            array_push($this->openAPINullablesSetToNull, 'stacktrace');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('stacktrace', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
        if (is_null($comment)) {
            array_push($this->openAPINullablesSetToNull, 'comment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('comment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets param
     *
     * @return array<string,string>|null
     */
    public function getParam()
    {
        return $this->container['param'];
    }

    /**
     * Sets param
     *
     * @param array<string,string>|null $param A map of parameters (name => value)
     *
     * @return self
     */
    public function setParam($param)
    {
        if (is_null($param)) {
            array_push($this->openAPINullablesSetToNull, 'param');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('param', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['param'] = $param;

        return $this;
    }

    /**
     * Gets steps
     *
     * @return \Qase\Client\Model\TestStepResultCreate[]|null
     */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
     * Sets steps
     *
     * @param \Qase\Client\Model\TestStepResultCreate[]|null $steps steps
     *
     * @return self
     */
    public function setSteps($steps)
    {
        if (is_null($steps)) {
            array_push($this->openAPINullablesSetToNull, 'steps');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('steps', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


