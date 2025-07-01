<?php

declare(strict_types=1);

namespace Budgetcontrol\Seeds\Resources\Seeds;

use Budgetcontrol\Library\Model\Goal;
use \DateTime;

class GoalSeeds extends Seed
{

    public static function run(): void
    {
        $dateTime = new DateTime();
        $goals = [
            [
                "category_icon" => "fa-solid fa-graduation-cap",
                "name" => "istruzione",
                "amount" => "1000",
                "due_date" => "2028-06-30T14:41:00.000Z",
                "description" => "test",
                "status" => "active",
                "uuid" =>  \Ramsey\Uuid\Uuid::uuid4()->toString(),
            ],
            [
                "category_icon" => "fa-solid fa-graduation-cap",
                "name" => "istruzione",
                "amount" => "10000",
                "due_date" => $dateTime->modify("+20 days")->format('Y-m-d H:i:s'),
                "description" => "test",
                "balance" => "10000",
                "status" => "complete",
                "uuid" =>  \Ramsey\Uuid\Uuid::uuid4()->toString(),
            ]
        ];

        foreach ($goals as $goal) {
            Goal::create([
                "category_icon" => $goal['category_icon'],
                "name" => $goal['name'],
                "amount" => $goal['amount'],
                "due_date" => $goal['due_date'],
                "description" => $goal['description'],
                "balance" => $goal['balance'] ?? 0,
                "status" => $goal['status'],
                'uuid' => $goal['uuid'],
                'workspace_id' => 1,
            ]);
        }
    }
}
