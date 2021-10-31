<?php

require '../vendor/autoload.php';

use Jaddek\Fireblocks\Http\Factory;
use Jaddek\Fireblocks\Http\Provider\TransactionsProviderHydrationDecorator;
use Jaddek\Fireblocks\Http\Provider\TransactionsProvider;

$key = '';
$secretKey = 'yours_secret.key';

$endpoint = Factory::buildCollection($key, $secretKey)->getTransactions();

$provider = new TransactionsProvider($endpoint);
$decorator = new TransactionsProviderHydrationDecorator($provider);

print_r($provider->getTransactions());
print_r($decorator->getTransactions());
