<?php
/**
 * CampaignContentResponse
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
 * CampaignContentResponse Class Doc Comment
 *
 * @category Class
 * @package  Cakemail\Lib
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CampaignContentResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CampaignContentResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'subject' => 'string',
        'html' => 'string',
        'text' => 'string',
        'json' => 'object',
        'type' => 'string',
        'hash' => 'string',
        'last_updated_on' => 'int',
        'encoding' => 'string',
        'default_unsubscribe_link' => 'bool',
        'social_bar' => 'bool',
        'footer' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'subject' => null,
        'html' => null,
        'text' => null,
        'json' => null,
        'type' => null,
        'hash' => null,
        'last_updated_on' => null,
        'encoding' => null,
        'default_unsubscribe_link' => null,
        'social_bar' => null,
        'footer' => null
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
        'subject' => 'subject',
        'html' => 'html',
        'text' => 'text',
        'json' => 'json',
        'type' => 'type',
        'hash' => 'hash',
        'last_updated_on' => 'last_updated_on',
        'encoding' => 'encoding',
        'default_unsubscribe_link' => 'default_unsubscribe_link',
        'social_bar' => 'social_bar',
        'footer' => 'footer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'subject' => 'setSubject',
        'html' => 'setHtml',
        'text' => 'setText',
        'json' => 'setJson',
        'type' => 'setType',
        'hash' => 'setHash',
        'last_updated_on' => 'setLastUpdatedOn',
        'encoding' => 'setEncoding',
        'default_unsubscribe_link' => 'setDefaultUnsubscribeLink',
        'social_bar' => 'setSocialBar',
        'footer' => 'setFooter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'subject' => 'getSubject',
        'html' => 'getHtml',
        'text' => 'getText',
        'json' => 'getJson',
        'type' => 'getType',
        'hash' => 'getHash',
        'last_updated_on' => 'getLastUpdatedOn',
        'encoding' => 'getEncoding',
        'default_unsubscribe_link' => 'getDefaultUnsubscribeLink',
        'social_bar' => 'getSocialBar',
        'footer' => 'getFooter'
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

    const TYPE_HTML = 'html';
    const TYPE_BEE = 'bee';
    const TYPE_CUSTOM = 'custom';
    const ENCODING_UTF_8 = 'utf-8';
    const ENCODING_ARMSCII_8 = 'armscii-8';
    const ENCODING_ASCII = 'ascii';
    const ENCODING_BIG_5 = 'big-5';
    const ENCODING_CP51932 = 'cp51932';
    const ENCODING_CP866 = 'cp866';
    const ENCODING_CP936 = 'cp936';
    const ENCODING_EUC_CN = 'euc-cn';
    const ENCODING_EUC_JP = 'euc-jp';
    const ENCODING_EUCJP_WIN = 'eucjp-win';
    const ENCODING_EUC_KR = 'euc-kr';
    const ENCODING_EUC_TW = 'euc-tw';
    const ENCODING_HZ = 'hz';
    const ENCODING_ISO_2022_JP = 'iso-2022-jp';
    const ENCODING_ISO_2022_JP_MS = 'iso-2022-jp-ms';
    const ENCODING_ISO_2022_KR = 'iso-2022-kr';
    const ENCODING_ISO_8859_1 = 'iso-8859-1';
    const ENCODING_ISO_8859_10 = 'iso-8859-10';
    const ENCODING_ISO_8859_13 = 'iso-8859-13';
    const ENCODING_ISO_8859_14 = 'iso-8859-14';
    const ENCODING_ISO_8859_15 = 'iso-8859-15';
    const ENCODING_ISO_8859_16 = 'iso-8859-16';
    const ENCODING_ISO_8859_2 = 'iso-8859-2';
    const ENCODING_ISO_8859_3 = 'iso-8859-3';
    const ENCODING_ISO_8859_4 = 'iso-8859-4';
    const ENCODING_ISO_8859_5 = 'iso-8859-5';
    const ENCODING_ISO_8859_6 = 'iso-8859-6';
    const ENCODING_ISO_8859_7 = 'iso-8859-7';
    const ENCODING_ISO_8859_8 = 'iso-8859-8';
    const ENCODING_ISO_8859_9 = 'iso-8859-9';
    const ENCODING_JIS = 'jis';
    const ENCODING_KOI8_R = 'koi8-r';
    const ENCODING_SJIS = 'sjis';
    const ENCODING_SJIS_WIN = 'sjis-win';
    const ENCODING_UHC = 'uhc';
    const ENCODING_WINDOWS_1251 = 'windows-1251';
    const ENCODING_WINDOWS_1252 = 'windows-1252';
    const ENCODING_OTHER = 'other';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_HTML,
            self::TYPE_BEE,
            self::TYPE_CUSTOM,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEncodingAllowableValues()
    {
        return [
            self::ENCODING_UTF_8,
            self::ENCODING_ARMSCII_8,
            self::ENCODING_ASCII,
            self::ENCODING_BIG_5,
            self::ENCODING_CP51932,
            self::ENCODING_CP866,
            self::ENCODING_CP936,
            self::ENCODING_EUC_CN,
            self::ENCODING_EUC_JP,
            self::ENCODING_EUCJP_WIN,
            self::ENCODING_EUC_KR,
            self::ENCODING_EUC_TW,
            self::ENCODING_HZ,
            self::ENCODING_ISO_2022_JP,
            self::ENCODING_ISO_2022_JP_MS,
            self::ENCODING_ISO_2022_KR,
            self::ENCODING_ISO_8859_1,
            self::ENCODING_ISO_8859_10,
            self::ENCODING_ISO_8859_13,
            self::ENCODING_ISO_8859_14,
            self::ENCODING_ISO_8859_15,
            self::ENCODING_ISO_8859_16,
            self::ENCODING_ISO_8859_2,
            self::ENCODING_ISO_8859_3,
            self::ENCODING_ISO_8859_4,
            self::ENCODING_ISO_8859_5,
            self::ENCODING_ISO_8859_6,
            self::ENCODING_ISO_8859_7,
            self::ENCODING_ISO_8859_8,
            self::ENCODING_ISO_8859_9,
            self::ENCODING_JIS,
            self::ENCODING_KOI8_R,
            self::ENCODING_SJIS,
            self::ENCODING_SJIS_WIN,
            self::ENCODING_UHC,
            self::ENCODING_WINDOWS_1251,
            self::ENCODING_WINDOWS_1252,
            self::ENCODING_OTHER,
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
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['html'] = isset($data['html']) ? $data['html'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['json'] = isset($data['json']) ? $data['json'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['last_updated_on'] = isset($data['last_updated_on']) ? $data['last_updated_on'] : null;
        $this->container['encoding'] = isset($data['encoding']) ? $data['encoding'] : null;
        $this->container['default_unsubscribe_link'] = isset($data['default_unsubscribe_link']) ? $data['default_unsubscribe_link'] : null;
        $this->container['social_bar'] = isset($data['social_bar']) ? $data['social_bar'] : null;
        $this->container['footer'] = isset($data['footer']) ? $data['footer'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getEncodingAllowableValues();
        if (!is_null($this->container['encoding']) && !in_array($this->container['encoding'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'encoding', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets html
     *
     * @return string|null
     */
    public function getHtml()
    {
        return $this->container['html'];
    }

    /**
     * Sets html
     *
     * @param string|null $html html
     *
     * @return $this
     */
    public function setHtml($html)
    {
        $this->container['html'] = $html;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text text
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets json
     *
     * @return object|null
     */
    public function getJson()
    {
        return $this->container['json'];
    }

    /**
     * Sets json
     *
     * @param object|null $json json
     *
     * @return $this
     */
    public function setJson($json)
    {
        $this->container['json'] = $json;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets hash
     *
     * @return string|null
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     *
     * @param string|null $hash hash
     *
     * @return $this
     */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets last_updated_on
     *
     * @return int|null
     */
    public function getLastUpdatedOn()
    {
        return $this->container['last_updated_on'];
    }

    /**
     * Sets last_updated_on
     *
     * @param int|null $last_updated_on last_updated_on
     *
     * @return $this
     */
    public function setLastUpdatedOn($last_updated_on)
    {
        $this->container['last_updated_on'] = $last_updated_on;

        return $this;
    }

    /**
     * Gets encoding
     *
     * @return string|null
     */
    public function getEncoding()
    {
        return $this->container['encoding'];
    }

    /**
     * Sets encoding
     *
     * @param string|null $encoding encoding
     *
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $allowedValues = $this->getEncodingAllowableValues();
        if (!is_null($encoding) && !in_array($encoding, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'encoding', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['encoding'] = $encoding;

        return $this;
    }

    /**
     * Gets default_unsubscribe_link
     *
     * @return bool|null
     */
    public function getDefaultUnsubscribeLink()
    {
        return $this->container['default_unsubscribe_link'];
    }

    /**
     * Sets default_unsubscribe_link
     *
     * @param bool|null $default_unsubscribe_link default_unsubscribe_link
     *
     * @return $this
     */
    public function setDefaultUnsubscribeLink($default_unsubscribe_link)
    {
        $this->container['default_unsubscribe_link'] = $default_unsubscribe_link;

        return $this;
    }

    /**
     * Gets social_bar
     *
     * @return bool|null
     */
    public function getSocialBar()
    {
        return $this->container['social_bar'];
    }

    /**
     * Sets social_bar
     *
     * @param bool|null $social_bar social_bar
     *
     * @return $this
     */
    public function setSocialBar($social_bar)
    {
        $this->container['social_bar'] = $social_bar;

        return $this;
    }

    /**
     * Gets footer
     *
     * @return string|null
     */
    public function getFooter()
    {
        return $this->container['footer'];
    }

    /**
     * Sets footer
     *
     * @param string|null $footer footer
     *
     * @return $this
     */
    public function setFooter($footer)
    {
        $this->container['footer'] = $footer;

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


