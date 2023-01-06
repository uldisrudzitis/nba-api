<?php

namespace JasonRoman\NbaApi\Request\Stats;

use JasonRoman\NbaApi\Request\AbstractNbaApiRequest;

abstract class AbstractStatsRequest extends AbstractNbaApiRequest
{
    const BASE_URI = 'https://stats.nba.com';

    const CONFIG = [
        'base_uri' => self::BASE_URI,
        'timeout'  => 30,
    ];

    const HEADERS = [
        'x-nba-stats-origin' => 'stats',
        'x-nba-stats-token'  => 'true',
    ];

    /**
     * Note - it appears the following links are currently broken:
     *
     *  - /stats/leagueplayerondetails (always returns that error occurred)
     *  - /stats/playerdashboardbyshootingsplits (403 error)
     *  - /stats/playerdashptreboundlogs (404 error)
     *  - /stats/playerdashptshotlog (404 error)
     */
}
