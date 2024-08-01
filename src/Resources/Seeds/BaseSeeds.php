<?php

use Budgetcontrol\Library\Model\Payee;
use Budgetcontrol\Library\Model\Workspace;
use Budgetcontrol\Library\Model\Wallet;

class BaseSeeds {

    public static function run() : void
    {
        $dateTime = new DateTime();

        Wallet::create([
            'name' => 'Wallet 1',
            'color' => '#0090ffa8',
            'type' => 'Bank',
            'currency' => 2,
            'balance' => 0,
            'workspace_id' => 1,
            'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
        ]);
        
        Workspace::create([
            'name' => 'Wallet 1',
            'description' => '',
            'user_id' => 1,
            'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
        ]);

        Payee::create([
            'name' => 'Payee 1',
            'workspace_id' => 1,
            'date_time' => $dateTime->format('Y-m-d H:i:s'),
            'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
        ]);
    }
}