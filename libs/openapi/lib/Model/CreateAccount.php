<?php
/**
 * CreateAccount
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
 * CreateAccount Class Doc Comment
 *
 * @category Class
 * @package  Cakemail\Lib
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CreateAccount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'address' => 'Address',
        'account_owner' => '\Cakemail\Lib\Model\User',
        'fax' => 'string',
        'phone' => 'string',
        'website' => 'string',
        'usage_limits' => 'UsageLimits',
        'domains' => 'Domains',
        'trial' => 'bool',
        'partner' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'address' => null,
        'account_owner' => null,
        'fax' => null,
        'phone' => null,
        'website' => 'uri',
        'usage_limits' => null,
        'domains' => null,
        'trial' => null,
        'partner' => null
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
        'name' => 'name',
        'address' => 'address',
        'account_owner' => 'account_owner',
        'fax' => 'fax',
        'phone' => 'phone',
        'website' => 'website',
        'usage_limits' => 'usage_limits',
        'domains' => 'domains',
        'trial' => 'trial',
        'partner' => 'partner'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'address' => 'setAddress',
        'account_owner' => 'setAccountOwner',
        'fax' => 'setFax',
        'phone' => 'setPhone',
        'website' => 'setWebsite',
        'usage_limits' => 'setUsageLimits',
        'domains' => 'setDomains',
        'trial' => 'setTrial',
        'partner' => 'setPartner'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'address' => 'getAddress',
        'account_owner' => 'getAccountOwner',
        'fax' => 'getFax',
        'phone' => 'getPhone',
        'website' => 'getWebsite',
        'usage_limits' => 'getUsageLimits',
        'domains' => 'getDomains',
        'trial' => 'getTrial',
        'partner' => 'getPartner'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['account_owner'] = isset($data['account_owner']) ? $data['account_owner'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
        $this->container['usage_limits'] = isset($data['usage_limits']) ? $data['usage_limits'] : null;
        $this->container['domains'] = isset($data['domains']) ? $data['domains'] : null;
        $this->container['trial'] = isset($data['trial']) ? $data['trial'] : false;
        $this->container['partner'] = isset($data['partner']) ? $data['partner'] : false;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['account_owner'] === null) {
            $invalidProperties[] = "'account_owner' can't be null";
        }
        if (!is_null($this->container['website']) && (mb_strlen($this->container['website']) > 2083)) {
            $invalidProperties[] = "invalid value for 'website', the character length must be smaller than or equal to 2083.";
        }

        if (!is_null($this->container['website']) && (mb_strlen($this->container['website']) < 1)) {
            $invalidProperties[] = "invalid value for 'website', the character length must be bigger than or equal to 1.";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
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
     * @return Address|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param Address|null $address address
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
     * @return \Cakemail\Lib\Model\User
     */
    public function getAccountOwner()
    {
        return $this->container['account_owner'];
    }

    /**
     * Sets account_owner
     *
     * @param \Cakemail\Lib\Model\User $account_owner account_owner
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
        if (!is_null($website) && (mb_strlen($website) > 2083)) {
            throw new \InvalidArgumentException('invalid length for $website when calling CreateAccount., must be smaller than or equal to 2083.');
        }
        if (!is_null($website) && (mb_strlen($website) < 1)) {
            throw new \InvalidArgumentException('invalid length for $website when calling CreateAccount., must be bigger than or equal to 1.');
        }

        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets usage_limits
     *
     * @return UsageLimits|null
     */
    public function getUsageLimits()
    {
        return $this->container['usage_limits'];
    }

    /**
     * Sets usage_limits
     *
     * @param UsageLimits|null $usage_limits usage_limits
     *
     * @return $this
     */
    public function setUsageLimits($usage_limits)
    {
        $this->container['usage_limits'] = $usage_limits;

        return $this;
    }

    /**
     * Gets domains
     *
     * @return Domains|null
     */
    public function getDomains()
    {
        return $this->container['domains'];
    }

    /**
     * Sets domains
     *
     * @param Domains|null $domains domains
     *
     * @return $this
     */
    public function setDomains($domains)
    {
        $this->container['domains'] = $domains;

        return $this;
    }

    /**
     * Gets trial
     *
     * @return bool|null
     */
    public function getTrial()
    {
        return $this->container['trial'];
    }

    /**
     * Sets trial
     *
     * @param bool|null $trial trial
     *
     * @return $this
     */
    public function setTrial($trial)
    {
        $this->container['trial'] = $trial;

        return $this;
    }

    /**
     * Gets partner
     *
     * @return bool|null
     */
    public function getPartner()
    {
        return $this->container['partner'];
    }

    /**
     * Sets partner
     *
     * @param bool|null $partner partner
     *
     * @return $this
     */
    public function setPartner($partner)
    {
        $this->container['partner'] = $partner;

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


