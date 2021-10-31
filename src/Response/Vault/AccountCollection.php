<?php


declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\Vault;

use Jaddek\Fireblocks\Http\Response\Collection;
use JetBrains\PhpStorm\Pure;

final class AccountCollection extends Collection
{
    /**
     * @return array<Account>
     */
    #[Pure]
    public function getAccounts(): array
    {
        return $this->getCollection();
    }

    public static function getSupportedItem(): string
    {
        return Account::class;
    }

    public static function getItemsKey(): string
    {
        return 'accounts';
    }


}