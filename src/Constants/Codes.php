<?php
namespace TikScraper\Constants;

class Codes {
    const list = [
        0 => "OK",
        // 10 to 100 are SCRAPER ONLY errors
        10 => 'EMPTY_RESPONSE',
        11 => 'JSON_DECODE_ERROR',
        12 => 'STATE_DECODE_ERROR',
        13 => 'COULD_NOT_SOLVE_CHALLENGE',
        20 => 'SIGNATURE_CONNECTION_ERROR',
        21 => 'NETWORK_ERROR',
        450 => "CLIENT_PAGE_ERROR",
        // TikTok errors begin here
        10000 => "VERIFY_CODE",
        10101 => "SERVER_ERROR_NOT_500",
        10102 => "USER_NOT_LOGIN",
        10111 => "NET_ERROR",
        10113 => "SHARK_SLIDE",
        10114 => "SHARK_BLOCK",
        10119 => "LIVE_NEED_LOGIN",
        10201 => 'INVALID_MUSIC_ID',
        10202 => "USER_NOT_EXIST",
        10203 => "MUSIC_NOT_EXIST",
        10204 => "VIDEO_NOT_EXIST",
        10205 => "HASHTAG_NOT_EXIST",
        10208 => "EFFECT_NOT_EXIST",
        10209 => "HASHTAG_BLACK_LIST",
        10210 => "LIVE_NOT_EXIST",
        10211 => "HASHTAG_SENSITIVITY_WORD",
        10212 => "HASHTAG_UNSHELVE",
        10213 => "VIDEO_LOW_AGE_M",
        10214 => "VIDEO_LOW_AGE_T",
        10215 => "VIDEO_ABNORMAL",
        10216 => "VIDEO_PRIVATE_BY_USER",
        10217 => "VIDEO_FIRST_REVIEW_UNSHELVE",
        10218 => "MUSIC_UNSHELVE",
        10219 => "MUSIC_NO_COPYRIGHT",
        10220 => "VIDEO_UNSHELVE_BY_MUSIC",
        10221 => "USER_BAN",
        10222 => "USER_PRIVATE",
        10223 => "USER_FTC",
        10224 => "GAME_NOT_EXIST",
        10225 => "USER_UNIQUE_SENSITIVITY",
        10227 => "VIDEO_NEED_RECHECK",
        10228 => "VIDEO_RISK",
        10229 => "VIDEO_R_MASK",
        1023 => "VIDEO_RISK_MASK",
        10231 => "VIDEO_GEOFENCE_BLOCK",
        10404 => "FYP_VIDEO_LIST_LIMIT"
    ];

    /**
     * Get status message from ID
     */
    public static function fromId(int $id): string {
        return isset(self::list[$id]) ? self::list[$id] : "UNKNOWN_ERROR";
    }
}
