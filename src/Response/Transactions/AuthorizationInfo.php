<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\Transactions;

use Jaddek\Fireblocks\Http\Response\ItemInterface;

final class AuthorizationInfo implements ItemInterface
{
    public function __construct(
        private bool   $allowOperatorAsAuthorizer,
        private string $logic,
        private array  $groups,
    )
    {
    }

    /**
     * @return bool
     */
    public function isAllowOperatorAsAuthorizer(): bool
    {
        return $this->allowOperatorAsAuthorizer;
    }

    /**
     * @return string
     */
    public function getLogic(): string
    {
        return $this->logic;
    }

    /**
     * @return array
     */
    public function getGroups(): array
    {
        return $this->groups;
    }
}