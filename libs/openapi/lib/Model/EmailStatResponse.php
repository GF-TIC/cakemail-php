<?php
/**
 * EmailStatResponse
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
 * EmailStatResponse Class Doc Comment
 *
 * @category Class
 * @package  Cakemail\Lib
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EmailStatResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmailStatResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'date' => 'int',
        'sent_emails' => 'int',
        'open_rate' => 'float',
        'bounce_rate' => 'float',
        'click_rate' => 'float',
        'spam_rate' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'date' => null,
        'sent_emails' => null,
        'open_rate' => null,
        'bounce_rate' => null,
        'click_rate' => null,
        'spam_rate' => null
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
        'date' => 'date',
        'sent_emails' => 'sent_emails',
        'open_rate' => 'open_rate',
        'bounce_rate' => 'bounce_rate',
        'click_rate' => 'click_rate',
        'spam_rate' => 'spam_rate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
        'sent_emails' => 'setSentEmails',
        'open_rate' => 'setOpenRate',
        'bounce_rate' => 'setBounceRate',
        'click_rate' => 'setClickRate',
        'spam_rate' => 'setSpamRate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
        'sent_emails' => 'getSentEmails',
        'open_rate' => 'getOpenRate',
        'bounce_rate' => 'getBounceRate',
        'click_rate' => 'getClickRate',
        'spam_rate' => 'getSpamRate'
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
        $this->container['date'] = $data['date'] ?? null;
        $this->container['sent_emails'] = $data['sent_emails'] ?? null;
        $this->container['open_rate'] = $data['open_rate'] ?? null;
        $this->container['bounce_rate'] = $data['bounce_rate'] ?? null;
        $this->container['click_rate'] = $data['click_rate'] ?? null;
        $this->container['spam_rate'] = $data['spam_rate'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['sent_emails'] === null) {
            $invalidProperties[] = "'sent_emails' can't be null";
        }
        if ($this->container['open_rate'] === null) {
            $invalidProperties[] = "'open_rate' can't be null";
        }
        if ($this->container['bounce_rate'] === null) {
            $invalidProperties[] = "'bounce_rate' can't be null";
        }
        if ($this->container['click_rate'] === null) {
            $invalidProperties[] = "'click_rate' can't be null";
        }
        if ($this->container['spam_rate'] === null) {
            $invalidProperties[] = "'spam_rate' can't be null";
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
     * Gets date
     *
     * @return int
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param int $date date
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets sent_emails
     *
     * @return int
     */
    public function getSentEmails()
    {
        return $this->container['sent_emails'];
    }

    /**
     * Sets sent_emails
     *
     * @param int $sent_emails sent_emails
     *
     * @return self
     */
    public function setSentEmails($sent_emails)
    {
        $this->container['sent_emails'] = $sent_emails;

        return $this;
    }

    /**
     * Gets open_rate
     *
     * @return float
     */
    public function getOpenRate()
    {
        return $this->container['open_rate'];
    }

    /**
     * Sets open_rate
     *
     * @param float $open_rate open_rate
     *
     * @return self
     */
    public function setOpenRate($open_rate)
    {
        $this->container['open_rate'] = $open_rate;

        return $this;
    }

    /**
     * Gets bounce_rate
     *
     * @return float
     */
    public function getBounceRate()
    {
        return $this->container['bounce_rate'];
    }

    /**
     * Sets bounce_rate
     *
     * @param float $bounce_rate bounce_rate
     *
     * @return self
     */
    public function setBounceRate($bounce_rate)
    {
        $this->container['bounce_rate'] = $bounce_rate;

        return $this;
    }

    /**
     * Gets click_rate
     *
     * @return float
     */
    public function getClickRate()
    {
        return $this->container['click_rate'];
    }

    /**
     * Sets click_rate
     *
     * @param float $click_rate click_rate
     *
     * @return self
     */
    public function setClickRate($click_rate)
    {
        $this->container['click_rate'] = $click_rate;

        return $this;
    }

    /**
     * Gets spam_rate
     *
     * @return float
     */
    public function getSpamRate()
    {
        return $this->container['spam_rate'];
    }

    /**
     * Sets spam_rate
     *
     * @param float $spam_rate spam_rate
     *
     * @return self
     */
    public function setSpamRate($spam_rate)
    {
        $this->container['spam_rate'] = $spam_rate;

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


