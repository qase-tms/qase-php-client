<?php
/**
 * Defect
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
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
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
 * Defect Class Doc Comment
 *
 * @category Class
 * @package  Qase\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Defect implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

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
        'resolvedAt' => '\DateTime',
        'memberId' => 'int',
        'authorId' => 'int',
        'externalData' => 'string',
        'tags' => '\Qase\Client\Model\TagValue[]',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'created' => 'string',
        'updated' => 'string'
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
        'resolvedAt' => 'date-time',
        'memberId' => 'int64',
        'authorId' => 'int64',
        'externalData' => null,
        'tags' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'created' => null,
        'updated' => null
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
        'actualResult' => 'actual_result',
        'severity' => 'severity',
        'status' => 'status',
        'milestoneId' => 'milestone_id',
        'customFields' => 'custom_fields',
        'attachments' => 'attachments',
        'resolvedAt' => 'resolved_at',
        'memberId' => 'member_id',
        'authorId' => 'author_id',
        'externalData' => 'external_data',
        'tags' => 'tags',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
        'created' => 'created',
        'updated' => 'updated'
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
        'resolvedAt' => 'setResolvedAt',
        'memberId' => 'setMemberId',
        'authorId' => 'setAuthorId',
        'externalData' => 'setExternalData',
        'tags' => 'setTags',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'created' => 'setCreated',
        'updated' => 'setUpdated'
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
        'resolvedAt' => 'getResolvedAt',
        'memberId' => 'getMemberId',
        'authorId' => 'getAuthorId',
        'externalData' => 'getExternalData',
        'tags' => 'getTags',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'created' => 'getCreated',
        'updated' => 'getUpdated'
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
        $this->container['actualResult'] = $data['actualResult'] ?? null;
        $this->container['severity'] = $data['severity'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['milestoneId'] = $data['milestoneId'] ?? null;
        $this->container['customFields'] = $data['customFields'] ?? null;
        $this->container['attachments'] = $data['attachments'] ?? null;
        $this->container['resolvedAt'] = $data['resolvedAt'] ?? null;
        $this->container['memberId'] = $data['memberId'] ?? null;
        $this->container['authorId'] = $data['authorId'] ?? null;
        $this->container['externalData'] = $data['externalData'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['createdAt'] = $data['createdAt'] ?? null;
        $this->container['updatedAt'] = $data['updatedAt'] ?? null;
        $this->container['created'] = $data['created'] ?? null;
        $this->container['updated'] = $data['updated'] ?? null;
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
     * Gets actualResult
     *
     * @return string|null
     */
    public function getActualResult()
    {
        return $this->container['actualResult'];
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
     * Gets severity
     *
     * @return string|null
     */
    public function getSeverity()
    {
        return $this->container['severity'];
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
        $this->container['status'] = $status;

        return $this;
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
     * Gets customFields
     *
     * @return \Qase\Client\Model\CustomFieldValue[]|null
     */
    public function getCustomFields()
    {
        return $this->container['customFields'];
    }

    /**
     * Sets customFields
     *
     * @param \Qase\Client\Model\CustomFieldValue[]|null $customFields customFields
     *
     * @return self
     */
    public function setCustomFields($customFields)
    {
        $this->container['customFields'] = $customFields;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \Qase\Client\Model\Attachment[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \Qase\Client\Model\Attachment[]|null $attachments attachments
     *
     * @return self
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets resolvedAt
     *
     * @return \DateTime|null
     */
    public function getResolvedAt()
    {
        return $this->container['resolvedAt'];
    }

    /**
     * Sets resolvedAt
     *
     * @param \DateTime|null $resolvedAt resolvedAt
     *
     * @return self
     */
    public function setResolvedAt($resolvedAt)
    {
        $this->container['resolvedAt'] = $resolvedAt;

        return $this;
    }

    /**
     * Gets memberId
     *
     * @return int|null
     * @deprecated
     */
    public function getMemberId()
    {
        return $this->container['memberId'];
    }

    /**
     * Sets memberId
     *
     * @param int|null $memberId Deprecated, use `author_id` instead.
     *
     * @return self
     * @deprecated
     */
    public function setMemberId($memberId)
    {
        $this->container['memberId'] = $memberId;

        return $this;
    }

    /**
     * Gets authorId
     *
     * @return int|null
     */
    public function getAuthorId()
    {
        return $this->container['authorId'];
    }

    /**
     * Sets authorId
     *
     * @param int|null $authorId authorId
     *
     * @return self
     */
    public function setAuthorId($authorId)
    {
        $this->container['authorId'] = $authorId;

        return $this;
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
     * Gets tags
     *
     * @return \Qase\Client\Model\TagValue[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Qase\Client\Model\TagValue[]|null $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime|null $createdAt createdAt
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime|null $updatedAt updatedAt
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets created
     *
     * @return string|null
     * @deprecated
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param string|null $created Deprecated, use the `created_at` property instead.
     *
     * @return self
     * @deprecated
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets updated
     *
     * @return string|null
     * @deprecated
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param string|null $updated Deprecated, use the `updated_at` property instead.
     *
     * @return self
     * @deprecated
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

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


