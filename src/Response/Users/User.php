<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\Users;

use Jaddek\Fireblocks\Http\Response\ItemInterface;

final class User implements ItemInterface
{
    public function __construct(
        private string $id,
        private string $firstName,
        private string $lastName,
        private string $role,
        private string $email,
        private bool   $enabled,
    )
    {
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return int
     */
    public function getEnabled(): int
    {
        return $this->enabled;
    }
}