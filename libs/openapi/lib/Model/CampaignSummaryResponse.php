<?php
/**
 * CampaignSummaryResponse
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Cakemail\Lib
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Cakemail API
 *
 * The Cakemail API exposes multiple APIs including Authentication, Marketing, Contact, Transactional, Analytic, Content, Account and Partner.
 *
 * The version of the OpenAPI document: 1.6.10
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Cakemail\Lib\Model;

use \ArrayAccess;
use \Cakemail\Lib\ObjectSerializer;

/**
 * CampaignSummaryResponse Class Doc Comment
 *
 * @category Class
 * @package  Cakemail\Lib
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CampaignSummaryResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CampaignSummaryResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'audience' => '\Cakemail\Lib\Model\AudienceSummaryResponse',
        'type' => '\Cakemail\Lib\Model\CampaignType',
        'created_on' => 'int',
        'scheduled_for' => 'int',
        'scheduled_on' => 'int',
        'sender' => '\Cakemail\Lib\Model\ListSenderResponse',
        'next_building_step' => 'string',
        'status' => '\Cakemail\Lib\Model\CampaignStatus',
        'suspended' => 'bool',
        'web_email_link' => 'string',
        'thumbnail_url' => 'string',
        'updated_on' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'audience' => null,
        'type' => null,
        'created_on' => null,
        'scheduled_for' => null,
        'scheduled_on' => null,
        'sender' => null,
        'next_building_step' => null,
        'status' => null,
        'suspended' => null,
        'web_email_link' => null,
        'thumbnail_url' => null,
        'updated_on' => null
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
        'name' => 'name',
        'audience' => 'audience',
        'type' => 'type',
        'created_on' => 'created_on',
        'scheduled_for' => 'scheduled_for',
        'scheduled_on' => 'scheduled_on',
        'sender' => 'sender',
        'next_building_step' => 'next_building_step',
        'status' => 'status',
        'suspended' => 'suspended',
        'web_email_link' => 'web_email_link',
        'thumbnail_url' => 'thumbnail_url',
        'updated_on' => 'updated_on'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'audience' => 'setAudience',
        'type' => 'setType',
        'created_on' => 'setCreatedOn',
        'scheduled_for' => 'setScheduledFor',
        'scheduled_on' => 'setScheduledOn',
        'sender' => 'setSender',
        'next_building_step' => 'setNextBuildingStep',
        'status' => 'setStatus',
        'suspended' => 'setSuspended',
        'web_email_link' => 'setWebEmailLink',
        'thumbnail_url' => 'setThumbnailUrl',
        'updated_on' => 'setUpdatedOn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'audience' => 'getAudience',
        'type' => 'getType',
        'created_on' => 'getCreatedOn',
        'scheduled_for' => 'getScheduledFor',
        'scheduled_on' => 'getScheduledOn',
        'sender' => 'getSender',
        'next_building_step' => 'getNextBuildingStep',
        'status' => 'getStatus',
        'suspended' => 'getSuspended',
        'web_email_link' => 'getWebEmailLink',
        'thumbnail_url' => 'getThumbnailUrl',
        'updated_on' => 'getUpdatedOn'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['audience'] = $data['audience'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['created_on'] = $data['created_on'] ?? null;
        $this->container['scheduled_for'] = $data['scheduled_for'] ?? null;
        $this->container['scheduled_on'] = $data['scheduled_on'] ?? null;
        $this->container['sender'] = $data['sender'] ?? null;
        $this->container['next_building_step'] = $data['next_building_step'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['suspended'] = $data['suspended'] ?? null;
        $this->container['web_email_link'] = $data['web_email_link'] ?? null;
        $this->container['thumbnail_url'] = $data['thumbnail_url'] ?? null;
        $this->container['updated_on'] = $data['updated_on'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets audience
     *
     * @return \Cakemail\Lib\Model\AudienceSummaryResponse|null
     */
    public function getAudience()
    {
        return $this->container['audience'];
    }

    /**
     * Sets audience
     *
     * @param \Cakemail\Lib\Model\AudienceSummaryResponse|null $audience audience
     *
     * @return self
     */
    public function setAudience($audience)
    {
        $this->container['audience'] = $audience;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Cakemail\Lib\Model\CampaignType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Cakemail\Lib\Model\CampaignType|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets created_on
     *
     * @return int|null
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     *
     * @param int|null $created_on created_on
     *
     * @return self
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }

    /**
     * Gets scheduled_for
     *
     * @return int|null
     */
    public function getScheduledFor()
    {
        return $this->container['scheduled_for'];
    }

    /**
     * Sets scheduled_for
     *
     * @param int|null $scheduled_for scheduled_for
     *
     * @return self
     */
    public function setScheduledFor($scheduled_for)
    {
        $this->container['scheduled_for'] = $scheduled_for;

        return $this;
    }

    /**
     * Gets scheduled_on
     *
     * @return int|null
     */
    public function getScheduledOn()
    {
        return $this->container['scheduled_on'];
    }

    /**
     * Sets scheduled_on
     *
     * @param int|null $scheduled_on scheduled_on
     *
     * @return self
     */
    public function setScheduledOn($scheduled_on)
    {
        $this->container['scheduled_on'] = $scheduled_on;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return \Cakemail\Lib\Model\ListSenderResponse|null
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param \Cakemail\Lib\Model\ListSenderResponse|null $sender sender
     *
     * @return self
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets next_building_step
     *
     * @return string|null
     */
    public function getNextBuildingStep()
    {
        return $this->container['next_building_step'];
    }

    /**
     * Sets next_building_step
     *
     * @param string|null $next_building_step next_building_step
     *
     * @return self
     */
    public function setNextBuildingStep($next_building_step)
    {
        $this->container['next_building_step'] = $next_building_step;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Cakemail\Lib\Model\CampaignStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Cakemail\Lib\Model\CampaignStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets suspended
     *
     * @return bool|null
     */
    public function getSuspended()
    {
        return $this->container['suspended'];
    }

    /**
     * Sets suspended
     *
     * @param bool|null $suspended suspended
     *
     * @return self
     */
    public function setSuspended($suspended)
    {
        $this->container['suspended'] = $suspended;

        return $this;
    }

    /**
     * Gets web_email_link
     *
     * @return string|null
     */
    public function getWebEmailLink()
    {
        return $this->container['web_email_link'];
    }

    /**
     * Sets web_email_link
     *
     * @param string|null $web_email_link web_email_link
     *
     * @return self
     */
    public function setWebEmailLink($web_email_link)
    {
        $this->container['web_email_link'] = $web_email_link;

        return $this;
    }

    /**
     * Gets thumbnail_url
     *
     * @return string|null
     */
    public function getThumbnailUrl()
    {
        return $this->container['thumbnail_url'];
    }

    /**
     * Sets thumbnail_url
     *
     * @param string|null $thumbnail_url thumbnail_url
     *
     * @return self
     */
    public function setThumbnailUrl($thumbnail_url)
    {
        $this->container['thumbnail_url'] = $thumbnail_url;

        return $this;
    }

    /**
     * Gets updated_on
     *
     * @return int|null
     */
    public function getUpdatedOn()
    {
        return $this->container['updated_on'];
    }

    /**
     * Sets updated_on
     *
     * @param int|null $updated_on updated_on
     *
     * @return self
     */
    public function setUpdatedOn($updated_on)
    {
        $this->container['updated_on'] = $updated_on;

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
     * @param mixed    $value  Value to be set
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


