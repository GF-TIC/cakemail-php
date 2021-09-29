<?php
/**
 * AccountSummaryResponse
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
 * AccountSummaryResponse Class Doc Comment
 *
 * @category Class
 * @package  Cakemail\Lib
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AccountSummaryResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountSummaryResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'lineage' => 'string',
        'status' => '\Cakemail\Lib\Model\AccountStatus',
        'partner' => 'bool',
        'name' => 'string',
        'account_owner' => '\Cakemail\Lib\Model\AccountOwnerResponse',
        'usage_limits' => '\Cakemail\Lib\Model\UsageLimitsResponse',
        'created_on' => 'int',
        'expires_on' => 'int'
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
        'lineage' => null,
        'status' => null,
        'partner' => null,
        'name' => null,
        'account_owner' => null,
        'usage_limits' => null,
        'created_on' => null,
        'expires_on' => null
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
        'lineage' => 'lineage',
        'status' => 'status',
        'partner' => 'partner',
        'name' => 'name',
        'account_owner' => 'account_owner',
        'usage_limits' => 'usage_limits',
        'created_on' => 'created_on',
        'expires_on' => 'expires_on'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'lineage' => 'setLineage',
        'status' => 'setStatus',
        'partner' => 'setPartner',
        'name' => 'setName',
        'account_owner' => 'setAccountOwner',
        'usage_limits' => 'setUsageLimits',
        'created_on' => 'setCreatedOn',
        'expires_on' => 'setExpiresOn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'lineage' => 'getLineage',
        'status' => 'getStatus',
        'partner' => 'getPartner',
        'name' => 'getName',
        'account_owner' => 'getAccountOwner',
        'usage_limits' => 'getUsageLimits',
        'created_on' => 'getCreatedOn',
        'expires_on' => 'getExpiresOn'
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
        $this->container['lineage'] = $data['lineage'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['partner'] = $data['partner'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['account_owner'] = $data['account_owner'] ?? null;
        $this->container['usage_limits'] = $data['usage_limits'] ?? null;
        $this->container['created_on'] = $data['created_on'] ?? null;
        $this->container['expires_on'] = $data['expires_on'] ?? null;
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
        if ($this->container['lineage'] === null) {
            $invalidProperties[] = "'lineage' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['partner'] === null) {
            $invalidProperties[] = "'partner' can't be null";
        }
        if ($this->container['account_owner'] === null) {
            $invalidProperties[] = "'account_owner' can't be null";
        }
        if ($this->container['usage_limits'] === null) {
            $invalidProperties[] = "'usage_limits' can't be null";
        }
        if ($this->container['created_on'] === null) {
            $invalidProperties[] = "'created_on' can't be null";
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets lineage
     *
     * @return string
     */
    public function getLineage()
    {
        return $this->container['lineage'];
    }

    /**
     * Sets lineage
     *
     * @param string $lineage lineage
     *
     * @return self
     */
    public function setLineage($lineage)
    {
        $this->container['lineage'] = $lineage;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Cakemail\Lib\Model\AccountStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Cakemail\Lib\Model\AccountStatus $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets partner
     *
     * @return bool
     */
    public function getPartner()
    {
        return $this->container['partner'];
    }

    /**
     * Sets partner
     *
     * @param bool $partner partner
     *
     * @return self
     */
    public function setPartner($partner)
    {
        $this->container['partner'] = $partner;

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
     * Gets account_owner
     *
     * @return \Cakemail\Lib\Model\AccountOwnerResponse
     */
    public function getAccountOwner()
    {
        return $this->container['account_owner'];
    }

    /**
     * Sets account_owner
     *
     * @param \Cakemail\Lib\Model\AccountOwnerResponse $account_owner account_owner
     *
     * @return self
     */
    public function setAccountOwner($account_owner)
    {
        $this->container['account_owner'] = $account_owner;

        return $this;
    }

    /**
     * Gets usage_limits
     *
     * @return \Cakemail\Lib\Model\UsageLimitsResponse
     */
    public function getUsageLimits()
    {
        return $this->container['usage_limits'];
    }

    /**
     * Sets usage_limits
     *
     * @param \Cakemail\Lib\Model\UsageLimitsResponse $usage_limits usage_limits
     *
     * @return self
     */
    public function setUsageLimits($usage_limits)
    {
        $this->container['usage_limits'] = $usage_limits;

        return $this;
    }

    /**
     * Gets created_on
     *
     * @return int
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     *
     * @param int $created_on created_on
     *
     * @return self
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }

    /**
     * Gets expires_on
     *
     * @return int|null
     */
    public function getExpiresOn()
    {
        return $this->container['expires_on'];
    }

    /**
     * Sets expires_on
     *
     * @param int|null $expires_on expires_on
     *
     * @return self
     */
    public function setExpiresOn($expires_on)
    {
        $this->container['expires_on'] = $expires_on;

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


