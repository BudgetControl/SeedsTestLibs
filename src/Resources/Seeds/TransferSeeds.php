<?php

use Budgetcontrol\Library\Entity\Entry as EntryType;
use Illuminate\Support\Carbon;
use Phinx\Seed\AbstractSeed;

class TransferSeeds
{

    public static function run() : void
    {
        $dateTime = new DateTime();
        
        $payee = [
            [
                "amount" => -300,
                "note" => "test",
                "category_id" => 12,
                "account_id" => 4,
                "currency_id" => 1,
                "payment_type" => 1,
                "end_date_time" => $dateTime->modify("+20 days")->format('Y-m-d H:i:s'),
                "date_time" => $dateTime->modify("+20 days")->format('Y-m-d H:i:s'),
                "label" => [],
                "waranty" => 1,
                "confirmed" => 1,
                'type' => EntryType::incoming->value,
                'workspace_id' => 1,
                'account_id' => 1,
                'transfer_id' => 1,
                'transfer_relation' => 'f7b3b3b0-0b7b-11ec-82a8-0242ac130004',
                'uuid' => 'f7b3b3b0-0b7b-11ec-82a8-0242ac139903',
            ],
            [
                "amount" => 300,
                "note" => "test",
                "category_id" => 12,
                "account_id" => 1,
                "currency_id" => 1,
                "payment_type" => 1,
                "end_date_time" => $dateTime->modify("+20 days")->format('Y-m-d H:i:s'),
                "date_time" => $dateTime->modify("+20 days")->format('Y-m-d H:i:s'),
                "label" => [],
                "waranty" => 1,
                "confirmed" => 1,
                'type' => EntryType::incoming->value,
                'workspace_id' => 1,
                'account_id' => 1,
                'transfer_id' => 4,
                'transfer_relation' => 'f7b3b3b0-0b7b-11ec-82a8-0242ac139903',
                'uuid' => 'f7b3b3b0-0b7b-11ec-82a8-0242ac130004',
            ],

            [
                "amount" => -300,
                "note" => "test",
                "category_id" => 12,
                "account_id" => 4,
                "currency_id" => 1,
                "payment_type" => 1,
                "end_date_time" => $dateTime->modify("+20 days")->format('Y-m-d H:i:s'),
                "date_time" => $dateTime->modify("+20 days")->format('Y-m-d H:i:s'),
                "label" => [],
                "waranty" => 1,
                "confirmed" => 1,
                'type' => EntryType::incoming->value,
                'workspace_id' => 1,
                'account_id' => 1,
                'transfer_id' => 1,
                'transfer_relation' => 'f7b3b3b0-0b7b-11ec-82a8-0242ac130012',
                'uuid' => 'f7b3b3b0-0b7b-11ec-82a8-0242ac130443',
            ],
            [
                "amount" => 300,
                "note" => "test",
                "category_id" => 12,
                "account_id" => 1,
                "currency_id" => 1,
                "payment_type" => 1,
                "end_date_time" => $dateTime->modify("+20 days")->format('Y-m-d H:i:s'),
                "date_time" => $dateTime->modify("+20 days")->format('Y-m-d H:i:s'),
                "label" => [],
                "waranty" => 1,
                "confirmed" => 1,
                'type' => EntryType::incoming->value,
                'workspace_id' => 1,
                'account_id' => 1,
                'transfer_id' => 4,
                'transfer_relation' => 'f7b3b3b0-0b7b-11ec-82a8-0242ac130443',
                'uuid' => 'f7b3b3b0-0b7b-11ec-82a8-0242ac130012',
            ],
        ];

        foreach ($payee as $payee) {
            $payee['amount'] = $payee['amount'] * -1;
            \Budgetcontrol\Seeds\Domain\Model\Transfer::create($payee);
        }
    }
}
