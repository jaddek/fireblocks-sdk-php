<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http;

abstract class Request implements \JsonSerializable
{
    use JsonTrait;
}