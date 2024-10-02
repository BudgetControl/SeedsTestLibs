<?php
declare(strict_types=1);

namespace Budgetcontrol\Seeds\Resources\Seeds;

use Budgetcontrol\Library\Model\Budget;
USE Budgetcontrol\Library\ValueObject\BudgetConfiguration;

class BudgetSeed extends Seed
{
    /**
     * Run the database seeds.
     */
    public static function run(): void
    {
        $configuration = BudgetConfiguration::create(
            [],
            ['incoming', 'expenses', 'debit'],
            'recursively',
            [196],
            [],
            '3333-11-19T02:08:00.000000Z',
            '2024-08-19T00:00:00.000000Z'
        );
        
        Budget::create([
            'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            'name' => 'Budget 1',
            'description' => 'Budget 1 description',
            'amount' => 1000,
            'workspace_id' => 1,
            'configuration' => $configuration,
            'notification' => 1,
            'emails' => ['foo@email.it', 'bar@email.it']
        ]);
    }
}
