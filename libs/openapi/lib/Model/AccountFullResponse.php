<?php
/**
 * AccountFullResponse
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
 * The version of the OpenAPI document: 1.0.10
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
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
 * AccountFullResponse Class Doc Comment
 *
 * @category Class
 * @package  Cakemail\Lib
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AccountFullResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountFullResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'lineage' => 'string',
        'status' => 'string',
        'name' => 'string',
        'address' => '\Cakemail\Lib\Model\AddressResponse',
        'account_owner' => '\Cakemail\Lib\Model\AccountOwnerResponse',
        'fax' => 'string',
        'phone' => 'string',
        'website' => 'string',
        'logo' => 'string',
        'usage_limits' => '\Cakemail\Lib\Model\UsageLimitsResponse',
        'last_activity_on' => 'int',
        'created_on' => 'int',
        'partner' => 'bool',
        'bypass_recaptcha' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'lineage' => null,
        'status' => null,
        'name' => null,
        'address' => null,
        'account_owner' => null,
        'fax' => null,
        'phone' => null,
        'website' => null,
        'logo' => null,
        'usage_limits' => null,
        'last_activity_on' => null,
        'created_on' => null,
        'partner' => null,
        'bypass_recaptcha' => null
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
        'name' => 'name',
        'address' => 'address',
        'account_owner' => 'account_owner',
        'fax' => 'fax',
        'phone' => 'phone',
        'website' => 'website',
        'logo' => 'logo',
        'usage_limits' => 'usage_limits',
        'last_activity_on' => 'last_activity_on',
        'created_on' => 'created_on',
        'partner' => 'partner',
        'bypass_recaptcha' => 'bypass_recaptcha'
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
        'name' => 'setName',
        'address' => 'setAddress',
        'account_owner' => 'setAccountOwner',
        'fax' => 'setFax',
        'phone' => 'setPhone',
        'website' => 'setWebsite',
        'logo' => 'setLogo',
        'usage_limits' => 'setUsageLimits',
        'last_activity_on' => 'setLastActivityOn',
        'created_on' => 'setCreatedOn',
        'partner' => 'setPartner',
        'bypass_recaptcha' => 'setBypassRecaptcha'
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
        'name' => 'getName',
        'address' => 'getAddress',
        'account_owner' => 'getAccountOwner',
        'fax' => 'getFax',
        'phone' => 'getPhone',
        'website' => 'getWebsite',
        'logo' => 'getLogo',
        'usage_limits' => 'getUsageLimits',
        'last_activity_on' => 'getLastActivityOn',
        'created_on' => 'getCreatedOn',
        'partner' => 'getPartner',
        'bypass_recaptcha' => 'getBypassRecaptcha'
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

    const STATUS_TRIAL = 'trial';
    const STATUS_ACTIVE = 'active';
    const STATUS_SUSPENDED = 'suspended';
    const STATUS_SUSPENDED_BY_PARTNER = 'suspended_by_partner';
    const STATUS_DELETED = 'deleted';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_TRIAL,
            self::STATUS_ACTIVE,
            self::STATUS_SUSPENDED,
            self::STATUS_SUSPENDED_BY_PARTNER,
            self::STATUS_DELETED,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['lineage'] = isset($data['lineage']) ? $data['lineage'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['account_owner'] = isset($data['account_owner']) ? $data['account_owner'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
        $this->container['logo'] = isset($data['logo']) ? $data['logo'] : null;
        $this->container['usage_limits'] = isset($data['usage_limits']) ? $data['usage_limits'] : null;
        $this->container['last_activity_on'] = isset($data['last_activity_on']) ? $data['last_activity_on'] : null;
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        $this->container['partner'] = isset($data['partner']) ? $data['partner'] : null;
        $this->container['bypass_recaptcha'] = isset($data['bypass_recaptcha']) ? $data['bypass_recaptcha'] : null;
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
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['account_owner'] === null) {
            $invalidProperties[] = "'account_owner' can't be null";
        }
        if ($this->container['logo'] === null) {
            $invalidProperties[] = "'logo' can't be null";
        }
        if ($this->container['usage_limits'] === null) {
            $invalidProperties[] = "'usage_limits' can't be null";
        }
        if ($this->container['last_activity_on'] === null) {
            $invalidProperties[] = "'last_activity_on' can't be null";
        }
        if ($this->container['created_on'] === null) {
            $invalidProperties[] = "'created_on' can't be null";
        }
        if ($this->container['partner'] === null) {
            $invalidProperties[] = "'partner' can't be null";
        }
        if ($this->container['bypass_recaptcha'] === null) {
            $invalidProperties[] = "'bypass_recaptcha' can't be null";
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
     * @return $this
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
     * @return $this
     */
    public function setLineage($lineage)
    {
        $this->container['lineage'] = $lineage;

        return $this;
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
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

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
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Cakemail\Lib\Model\AddressResponse
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Cakemail\Lib\Model\AddressResponse $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

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
     * @return $this
     */
    public function setAccountOwner($account_owner)
    {
        $this->container['account_owner'] = $account_owner;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return string|null
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param string|null $fax fax
     *
     * @return $this
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets website
     *
     * @return string|null
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string|null $website website
     *
     * @return $this
     */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param string $logo logo
     *
     * @return $this
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

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
     * @return $this
     */
    public function setUsageLimits($usage_limits)
    {
        $this->container['usage_limits'] = $usage_limits;

        return $this;
    }

    /**
     * Gets last_activity_on
     *
     * @return int
     */
    public function getLastActivityOn()
    {
        return $this->container['last_activity_on'];
    }

    /**
     * Sets last_activity_on
     *
     * @param int $last_activity_on last_activity_on
     *
     * @return $this
     */
    public function setLastActivityOn($last_activity_on)
    {
        $this->container['last_activity_on'] = $last_activity_on;

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
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

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
     * @return $this
     */
    public function setPartner($partner)
    {
        $this->container['partner'] = $partner;

        return $this;
    }

    /**
     * Gets bypass_recaptcha
     *
     * @return bool
     */
    public function getBypassRecaptcha()
    {
        return $this->container['bypass_recaptcha'];
    }

    /**
     * Sets bypass_recaptcha
     *
     * @param bool $bypass_recaptcha bypass_recaptcha
     *
     * @return $this
     */
    public function setBypassRecaptcha($bypass_recaptcha)
    {
        $this->container['bypass_recaptcha'] = $bypass_recaptcha;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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


