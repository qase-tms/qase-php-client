<?php

namespace Qase\Client\Model;

use ArrayAccess;
use DateTime;
use JsonSerializable;
use Qase\Client\ObjectSerializer;

/**
 * Defect Class Doc Comment
 *
 * @category Class
 * @package  Qase\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Defect implements ModelInterface, ArrayAccess, JsonSerializable
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
        'actualResult' => 'actual_result',
        'severity' => 'severity',
        'status' => 'status',
        'milestoneId' => 'milestone_id',
        'customFields' => 'custom_fields',
        'attachments' => 'attachments',
        'created' => 'created',
        'updated' => 'updated',
        'deleted' => 'deleted',
        'resolved' => 'resolved',
        'projectId' => 'project_id',
        'memberId' => 'member_id',
        'externalData' => 'external_data',
        'tags' => 'tags'
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'actualResult' => 'getActualResult',
        'severity' => 'getSeverity',
        'status' => 'getStatus',
        'milestoneId' => 'getMilestoneId',
        'customFields' => 'getCustomFields',
        'attachments' => 'getAttachments',
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'deleted' => 'getDeleted',
        'resolved' => 'getResolved',
        'projectId' => 'getProjectId',
        'memberId' => 'getMemberId',
        'externalData' => 'getExternalData',
        'tags' => 'getTags'
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
        'actualResult' => null,
        'severity' => null,
        'status' => null,
        'milestoneId' => 'int64',
        'customFields' => null,
        'attachments' => null,
        'created' => 'date-time',
        'updated' => 'date-time',
        'deleted' => 'date-time',
        'resolved' => 'date-time',
        'projectId' => 'int64',
        'memberId' => 'int64',
        'externalData' => null,
        'tags' => null
    ];
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Defect';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'id' => 'int',
        'title' => 'string',
        'actualResult' => 'string',
        'severity' => 'string',
        'status' => 'string',
        'milestoneId' => 'int',
        'customFields' => '\Qase\Client\Model\CustomFieldValue[]',
        'attachments' => '\Qase\Client\Model\Attachment[]',
        'created' => '\DateTime',
        'updated' => '\DateTime',
        'deleted' => '\DateTime',
        'resolved' => '\DateTime',
        'projectId' => 'int',
        'memberId' => 'int',
        'externalData' => 'string',
        'tags' => '\Qase\Client\Model\TagValue[]'
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'actualResult' => 'setActualResult',
        'severity' => 'setSeverity',
        'status' => 'setStatus',
        'milestoneId' => 'setMilestoneId',
        'customFields' => 'setCustomFields',
        'attachments' => 'setAttachments',
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'deleted' => 'setDeleted',
        'resolved' => 'setResolved',
        'projectId' => 'setProjectId',
        'memberId' => 'setMemberId',
        'externalData' => 'setExternalData',
        'tags' => 'setTags'
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
        $this->container['actualResult'] = $data['actualResult'] ?? null;
        $this->container['severity'] = $data['severity'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['milestoneId'] = $data['milestoneId'] ?? null;
        $this->container['customFields'] = $data['customFields'] ?? null;
        $this->container['attachments'] = $data['attachments'] ?? null;
        $this->container['created'] = $data['created'] ?? null;
        $this->container['updated'] = $data['updated'] ?? null;
        $this->container['deleted'] = $data['deleted'] ?? null;
        $this->container['resolved'] = $data['resolved'] ?? null;
        $this->container['projectId'] = $data['projectId'] ?? null;
        $this->container['memberId'] = $data['memberId'] ?? null;
        $this->container['externalData'] = $data['externalData'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
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
     * Gets actualResult
     *
     * @return string|null
     */
    public function getActualResult()
    {
        return $this->container['actualResult'];
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
     * Gets externalData
     *
     * @return string|null
     */
    public function getExternalData()
    {
        return $this->container['externalData'];
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
     * Gets projectId
     *
     * @return int|null
     */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
     * Gets resolved
     *
     * @return DateTime|null
     */
    public function getResolved()
    {
        return $this->container['resolved'];
    }

    /**
     * Gets severity
     *
     * @return string|null
     */
    public function getSeverity()
    {
        return $this->container['severity'];
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
     * Sets actualResult
     *
     * @param string|null $actualResult actualResult
     *
     * @return self
     */
    public function setActualResult($actualResult)
    {
        $this->container['actualResult'] = $actualResult;

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
     * Sets externalData
     *
     * @param string|null $externalData externalData
     *
     * @return self
     */
    public function setExternalData($externalData)
    {
        $this->container['externalData'] = $externalData;

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
     * Sets resolved
     *
     * @param DateTime|null $resolved resolved
     *
     * @return self
     */
    public function setResolved($resolved)
    {
        $this->container['resolved'] = $resolved;

        return $this;
    }

    /**
     * Sets severity
     *
     * @param string|null $severity severity
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
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


