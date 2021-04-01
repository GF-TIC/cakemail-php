<?php
/**
 * Encoding
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
 * The version of the OpenAPI document: 1.4.13
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Cakemail\Lib\Model;
use \Cakemail\Lib\ObjectSerializer;

/**
 * Encoding Class Doc Comment
 *
 * @category Class
 * @description An enumeration.
 * @package  Cakemail\Lib
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Encoding
{
    /**
     * Possible values of this enum
     */
    const UTF_8 = 'utf-8';
    const ARMSCII_8 = 'armscii-8';
    const ASCII = 'ascii';
    const BIG_5 = 'big-5';
    const CP51932 = 'cp51932';
    const CP866 = 'cp866';
    const CP936 = 'cp936';
    const EUC_CN = 'euc-cn';
    const EUC_JP = 'euc-jp';
    const EUCJP_WIN = 'eucjp-win';
    const EUC_KR = 'euc-kr';
    const EUC_TW = 'euc-tw';
    const HZ = 'hz';
    const ISO_2022_JP = 'iso-2022-jp';
    const ISO_2022_JP_MS = 'iso-2022-jp-ms';
    const ISO_2022_KR = 'iso-2022-kr';
    const ISO_8859_1 = 'iso-8859-1';
    const ISO_8859_10 = 'iso-8859-10';
    const ISO_8859_13 = 'iso-8859-13';
    const ISO_8859_14 = 'iso-8859-14';
    const ISO_8859_15 = 'iso-8859-15';
    const ISO_8859_16 = 'iso-8859-16';
    const ISO_8859_2 = 'iso-8859-2';
    const ISO_8859_3 = 'iso-8859-3';
    const ISO_8859_4 = 'iso-8859-4';
    const ISO_8859_5 = 'iso-8859-5';
    const ISO_8859_6 = 'iso-8859-6';
    const ISO_8859_7 = 'iso-8859-7';
    const ISO_8859_8 = 'iso-8859-8';
    const ISO_8859_9 = 'iso-8859-9';
    const JIS = 'jis';
    const KOI8_R = 'koi8-r';
    const SJIS = 'sjis';
    const SJIS_WIN = 'sjis-win';
    const UHC = 'uhc';
    const WINDOWS_1251 = 'windows-1251';
    const WINDOWS_1252 = 'windows-1252';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UTF_8,
            self::ARMSCII_8,
            self::ASCII,
            self::BIG_5,
            self::CP51932,
            self::CP866,
            self::CP936,
            self::EUC_CN,
            self::EUC_JP,
            self::EUCJP_WIN,
            self::EUC_KR,
            self::EUC_TW,
            self::HZ,
            self::ISO_2022_JP,
            self::ISO_2022_JP_MS,
            self::ISO_2022_KR,
            self::ISO_8859_1,
            self::ISO_8859_10,
            self::ISO_8859_13,
            self::ISO_8859_14,
            self::ISO_8859_15,
            self::ISO_8859_16,
            self::ISO_8859_2,
            self::ISO_8859_3,
            self::ISO_8859_4,
            self::ISO_8859_5,
            self::ISO_8859_6,
            self::ISO_8859_7,
            self::ISO_8859_8,
            self::ISO_8859_9,
            self::JIS,
            self::KOI8_R,
            self::SJIS,
            self::SJIS_WIN,
            self::UHC,
            self::WINDOWS_1251,
            self::WINDOWS_1252,
        ];
    }
}


