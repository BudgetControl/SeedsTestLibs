<?php
declare(strict_types=1);

namespace Budgetcontrol\Seeds\Resources\Seeds;

use \DateTime;

class WorkspaceSeeds extends Seed
{

    public static function run() : void
    {
        \Budgetcontrol\Library\Model\Workspace::create([
            'name' => 'test',
            'description' => 'test',
            'current' => 1,
            'user_id' => 1,
            'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
        ]);
    }

    // set relation with user and workspace
    $user = \Budgetcontrol\Library\Model\User::find(1);
    $workspace = \Budgetcontrol\Library\Model\Workspace::where('uuid', $wsid)->first();

    $workspace->users()->attach($user);
    $workspace->save();
}
