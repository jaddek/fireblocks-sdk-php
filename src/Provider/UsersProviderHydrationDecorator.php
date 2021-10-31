<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Provider;

use Jaddek\Fireblocks\Http\Hydrator;
use Jaddek\Fireblocks\Http\Response\CollectionInterface;
use Jaddek\Fireblocks\Http\Response\Users\UserCollection;

final class UsersProviderHydrationDecorator
{
    public function __construct(private UsersProvider $provider)
    {

    }

    public function getUsers(): UserCollection|CollectionInterface
    {
        return Hydrator::instance($this->provider->getUsers(), UserCollection::class);
    }
}