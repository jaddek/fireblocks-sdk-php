<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\Vault;

use Jaddek\Fireblocks\Http\Response\Collection;
use JetBrains\PhpStorm\Pure;

final class UnspentInputsCollection extends Collection
{
    /**
     * @return array<Address>
     */
    #[Pure]
    public function getUnspentInputs(): array
    {
        return $this->getCollection();
    }

    public static function getSupportedItem(): string
    {
        return UnspentInput::class;
    }

    public static function getItemsKey(): string
    {
        return 'unspentInputs';
    }


}