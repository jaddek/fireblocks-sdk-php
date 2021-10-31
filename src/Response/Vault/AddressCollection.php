<?php


declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\Vault;

use Jaddek\Fireblocks\Http\Response\Collection;
use JetBrains\PhpStorm\Pure;

final class AddressCollection extends Collection
{
    /**
     * @return array<Address>
     */
    #[Pure]
    public function getAddresses(): array
    {
        return $this->getCollection();
    }

    public static function getSupportedItem(): string
    {
        return Address::class;
    }

    public static function getItemsKey(): string
    {
        return 'addresses';
    }


}