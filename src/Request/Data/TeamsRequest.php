<?php

namespace JasonRoman\NbaApi\Request\Data;

use Symfony\Component\Validator\Constraints as Assert;
use JasonRoman\NbaApi\Constraints as ApiAssert;
use JasonRoman\NbaApi\Request\Data\Params\YearParam;

class TeamsRequest extends AbstractDataApiRequest
{
    const ENDPOINT = '/data/10s/prod/v1/{year}/teams.json';

    /**
     * @var int
     * @ApiAssert\ApiRegex(YearParam::FORMAT)
     * @Assert\Range(min = 2012)
     */
    public $year;
}