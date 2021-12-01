<?php

namespace Qase\Client\Model;

use ArrayAccess;
use DateTime;
use JsonSerializable;
use Qase\Client\ObjectSerializer;

/**
 * TestCase Class Doc Comment
 *
 * @category Class
 * @package  Qase\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TestCase implements ModelInterface, ArrayAccess, JsonSerializable
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
        'position' => 'position',
        'title' => 'title',
        'description' => 'description',
        'preconditions' => 'preconditions',
        'postconditions' => 'postconditions',
        'severity' => 'severity',
        'priority' => 'priority',
        'type' => 'type',
        'layer' => 'layer',
        'isFlaky' => 'is_flaky',
        'behavior' => 'behavior',
        'automation' => 'automation',
        'status' => 'status',
        'milestoneId' => 'milestone_id',
        'suiteId' => 'suite_id',
        'customFields' => 'custom_fields',
        'attachments' => 'attachments',
        'steps' => 'steps',
        'params' => 'params',
        'created' => 'created',
        'updated' => 'updated',
        'tags' => 'tags',
        'deleted' => 'deleted',
        'memberId' => 'member_id',
        'projectId' => 'project_id'
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'position' => 'getPosition',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'preconditions' => 'getPreconditions',
        'postconditions' => 'getPostconditions',
        'severity' => 'getSeverity',
        'priority' => 'getPriority',
        'type' => 'getType',
        'layer' => 'getLayer',
        'isFlaky' => 'getIsFlaky',
        'behavior' => 'getBehavior',
        'automation' => 'getAutomation',
        'status' => 'getStatus',
        'milestoneId' => 'getMilestoneId',
        'suiteId' => 'getSuiteId',
        'customFields' => 'getCustomFields',
        'attachments' => 'getAttachments',
        'steps' => 'getSteps',
        'params' => 'getParams',
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'tags' => 'getTags',
        'deleted' => 'getDeleted',
        'memberId' => 'getMemberId',
        'projectId' => 'getProjectId'
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
        'position' => null,
        'title' => null,
        'description' => null,
        'preconditions' => null,
        'postconditions' => null,
        'severity' => null,
        'priority' => null,
        'type' => null,
        'layer' => null,
        'isFlaky' => null,
        'behavior' => null,
        'automation' => null,
        'status' => null,
        'milestoneId' => 'int64',
        'suiteId' => 'int64',
        'customFields' => null,
        'attachments' => null,
        'steps' => null,
        'params' => null,
        'created' => 'date-time',
        'updated' => 'date-time',
        'tags' => null,
        'deleted' => 'date-time',
        'memberId' => 'int64',
        'projectId' => 'int64'
    ];
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'TestCase';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'id' => 'int',
        'position' => 'int',
        'title' => 'string',
        'description' => 'string',
        'preconditions' => 'string',
        'postconditions' => 'string',
        'severity' => 'int',
        'priority' => 'int',
        'type' => 'int',
        'layer' => 'int',
        'isFlaky' => 'int',
        'behavior' => 'int',
        'automation' => 'int',
        'status' => 'int',
        'milestoneId' => 'int',
        'suiteId' => 'int',
        'customFields' => '\Qase\Client\Model\CustomFieldValue[]',
        'attachments' => '\Qase\Client\Model\Attachment[]',
        'steps' => '\Qase\Client\Model\TestStep[]',
        'params' => 'AnyOfArrayObject',
        'created' => '\DateTime',
        'updated' => '\DateTime',
        'tags' => '\Qase\Client\Model\TagValue[]',
        'deleted' => '\DateTime',
        'memberId' => 'int',
        'projectId' => 'int'
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'position' => 'setPosition',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'preconditions' => 'setPreconditions',
        'postconditions' => 'setPostconditions',
        'severity' => 'setSeverity',
        'priority' => 'setPriority',
        'type' => 'setType',
        'layer' => 'setLayer',
        'isFlaky' => 'setIsFlaky',
        'behavior' => 'setBehavior',
        'automation' => 'setAutomation',
        'status' => 'setStatus',
        'milestoneId' => 'setMilestoneId',
        'suiteId' => 'setSuiteId',
        'customFields' => 'setCustomFields',
        'attachments' => 'setAttachments',
        'steps' => 'setSteps',
        'params' => 'setParams',
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'tags' => 'setTags',
        'deleted' => 'setDeleted',
        'memberId' => 'setMemberId',
        'projectId' => 'setProjectId'
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
        $this->container['position'] = $data['position'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['preconditions'] = $data['preconditions'] ?? null;
        $this->container['postconditions'] = $data['postconditions'] ?? null;
        $this->container['severity'] = $data['severity'] ?? null;
        $this->container['priority'] = $data['priority'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['layer'] = $data['layer'] ?? null;
        $this->container['isFlaky'] = $data['isFlaky'] ?? null;
        $this->container['behavior'] = $data['behavior'] ?? null;
        $this->container['automation'] = $data['automation'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['milestoneId'] = $data['milestoneId'] ?? null;
        $this->container['suiteId'] = $data['suiteId'] ?? null;
        $this->container['customFields'] = $data['customFields'] ?? null;
        $this->container['attachments'] = $data['attachments'] ?? null;
        $this->container['steps'] = $data['steps'] ?? null;
        $this->container['params'] = $data['params'] ?? null;
        $this->container['created'] = $data['created'] ?? null;
        $this->container['updated'] = $data['updated'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['deleted'] = $data['deleted'] ?? null;
        $this->container['memberId'] = $data['memberId'] ?? null;
        $this->container['projectId'] = $data['projectId'] ?? null;
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
     * @return Attachment[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Gets automation
     *
     * @return int|null
     */
    public function getAutomation()
    {
        return $this->container['automation'];
    }

    /**
     * Gets behavior
     *
     * @return int|null
     */
    public function getBehavior()
    {
        return $this->container['behavior'];
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
     * Gets customFields
     *
     * @return CustomFieldValue[]|null
     */
    public function getCustomFields()
    {
        return $this->container['customFields'];
    }

    /**
     * Gets deleted
     *
     * @return DateTime|null
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Gets isFlaky
     *
     * @return int|null
     */
    public function getIsFlaky()
    {
        return $this->container['isFlaky'];
    }

    /**
     * Gets layer
     *
     * @return int|null
     */
    public function getLayer()
    {
        return $this->container['layer'];
    }

    /**
     * Gets memberId
     *
     * @return int|null
     */
    public function getMemberId()
    {
        return $this->container['memberId'];
    }

    /**
     * Gets milestoneId
     *
     * @return int|null
     */
    public function getMilestoneId()
    {
        return $this->container['milestoneId'];
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
     * Gets params
     *
     * @return AnyOfArrayObject|null
     */
    public function getParams()
    {
        return $this->container['params'];
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
     * Gets postconditions
     *
     * @return string|null
     */
    public function getPostconditions()
    {
        return $this->container['postconditions'];
    }

    /**
     * Gets preconditions
     *
     * @return string|null
     */
    public function getPreconditions()
    {
        return $this->container['preconditions'];
    }

    /**
     * Gets priority
     *
     * @return int|null
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Gets projectId
     *
     * @return int|null
     */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
     * Gets severity
     *
     * @return int|null
     */
    public function getSeverity()
    {
        return $this->container['severity'];
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
     * Gets steps
     *
     * @return TestStep[]|null
     */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
     * Gets suiteId
     *
     * @return int|null
     */
    public function getSuiteId()
    {
        return $this->container['suiteId'];
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
     * @return int|null
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
     * Sets automation
     *
     * @param int|null $automation automation
     *
     * @return self
     */
    public function setAutomation($automation)
    {
        $this->container['automation'] = $automation;

        return $this;
    }

    /**
     * Sets behavior
     *
     * @param int|null $behavior behavior
     *
     * @return self
     */
    public function setBehavior($behavior)
    {
        $this->container['behavior'] = $behavior;

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
     * Sets deleted
     *
     * @param DateTime|null $deleted deleted
     *
     * @return self
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

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
     * Sets isFlaky
     *
     * @param int|null $isFlaky isFlaky
     *
     * @return self
     */
    public function setIsFlaky($isFlaky)
    {
        $this->container['isFlaky'] = $isFlaky;

        return $this;
    }

    /**
     * Sets layer
     *
     * @param int|null $layer layer
     *
     * @return self
     */
    public function setLayer($layer)
    {
        $this->container['layer'] = $layer;

        return $this;
    }

    /**
     * Sets memberId
     *
     * @param int|null $memberId memberId
     *
     * @return self
     */
    public function setMemberId($memberId)
    {
        $this->container['memberId'] = $memberId;

        return $this;
    }

    /**
     * Sets milestoneId
     *
     * @param int|null $milestoneId milestoneId
     *
     * @return self
     */
    public function setMilestoneId($milestoneId)
    {
        $this->container['milestoneId'] = $milestoneId;

        return $this;
    }

    /**
     * Sets params
     *
     * @param AnyOfArrayObject|null $params params
     *
     * @return self
     */
    public function setParams($params)
    {
        $this->container['params'] = $params;

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
     * Sets postconditions
     *
     * @param string|null $postconditions postconditions
     *
     * @return self
     */
    public function setPostconditions($postconditions)
    {
        $this->container['postconditions'] = $postconditions;

        return $this;
    }

    /**
     * Sets preconditions
     *
     * @param string|null $preconditions preconditions
     *
     * @return self
     */
    public function setPreconditions($preconditions)
    {
        $this->container['preconditions'] = $preconditions;

        return $this;
    }

    /**
     * Sets priority
     *
     * @param int|null $priority priority
     *
     * @return self
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Sets projectId
     *
     * @param int|null $projectId projectId
     *
     * @return self
     */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;

        return $this;
    }

    /**
     * Sets severity
     *
     * @param int|null $severity severity
     *
     * @return self
     */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;

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
     * Sets steps
     *
     * @param TestStep[]|null $steps steps
     *
     * @return self
     */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;

        return $this;
    }

    /**
     * Sets suiteId
     *
     * @param int|null $suiteId suiteId
     *
     * @return self
     */
    public function setSuiteId($suiteId)
    {
        $this->container['suiteId'] = $suiteId;

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
     * @param int|null $type type
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


