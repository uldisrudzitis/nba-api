<?php

namespace JasonRoman\NbaApi\Request\Stats\Stats\Playoffs;

use Symfony\Component\Validator\Constraints as Assert;
use JasonRoman\NbaApi\Constraints as ApiAssert;
use JasonRoman\NbaApi\Params\LeagueIdParam;
use JasonRoman\NbaApi\Params\SeasonIdParam;
use JasonRoman\NbaApi\Request\AbstractStatsRequest;

class PlayoffPictureRequest extends AbstractStatsRequest
{
    const ENDPOINT = '/stats/playoffpicture';

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiRegex(pattern = LeagueIdParam::FORMAT)
     *
     * @var string
     */
    public $leagueId;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiRegex(pattern = SeasonIdParam::FORMAT)
     *
     * @var string
     */
    public $seasonId;
}