<?php
/**
 * EventTypeResponse
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
use \Cakemail\Lib\ObjectSerializer;

/**
 * EventTypeResponse Class Doc Comment
 *
 * @category Class
 * @description exposed_string &#x3D; database_string
 * @package  Cakemail\Lib
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EventTypeResponse
{
    /**
     * Possible values of this enum
     */
    const CLICKTHRU = 'clickthru';
    const OPEN = 'open';
    const BOUNCE = 'bounce';
    const BOUNCE_AC = 'bounce_ac';
    const BOUNCE_CR = 'bounce_cr';
    const BOUNCE_DF = 'bounce_df';
    const BOUNCE_FM = 'bounce_fm';
    const BOUNCE_HB = 'bounce_hb';
    const BOUNCE_MB = 'bounce_mb';
    const BOUNCE_SB = 'bounce_sb';
    const BOUNCE_TR = 'bounce_tr';
    const BOUNCE_AR = 'bounce_ar';
    const FORWARD = 'forward';
    const SKIPPED = 'skipped';
    const SPAM = 'spam';
    const SUBSCRIBE = 'subscribe';
    const UNSUBSCRIBE = 'unsubscribe';
    const VIEW = 'view';
    const SHARE = 'share';
    const IN_QUEUE = 'in_queue';
    const GENERATING = 'generating';
    const RECEIVED = 'received';
    const SENT = 'sent';
    const SCHEDULE = 'schedule';
    const UPDATE = 'update';
    const GLOBAL_UNSUBSCRIBE = 'global_unsubscribe';
    const UNSUB_REASON = 'unsub_reason';
    const OTHER = 'other';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CLICKTHRU,
            self::OPEN,
            self::BOUNCE,
            self::BOUNCE_AC,
            self::BOUNCE_CR,
            self::BOUNCE_DF,
            self::BOUNCE_FM,
            self::BOUNCE_HB,
            self::BOUNCE_MB,
            self::BOUNCE_SB,
            self::BOUNCE_TR,
            self::BOUNCE_AR,
            self::FORWARD,
            self::SKIPPED,
            self::SPAM,
            self::SUBSCRIBE,
            self::UNSUBSCRIBE,
            self::VIEW,
            self::SHARE,
            self::IN_QUEUE,
            self::GENERATING,
            self::RECEIVED,
            self::SENT,
            self::SCHEDULE,
            self::UPDATE,
            self::GLOBAL_UNSUBSCRIBE,
            self::UNSUB_REASON,
            self::OTHER,
        ];
    }
}


