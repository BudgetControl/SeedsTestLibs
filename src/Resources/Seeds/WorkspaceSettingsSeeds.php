<?php
declare(strict_types=1);

namespace Budgetcontrol\Seeds\Resources\Seeds;

use Budgetcontrol\Library\Model\Workspace;
use \DateTime;
use Budgetcontrol\Library\ValueObject\WorkspaceSetting;

class WorkspaceSettingsSeeds extends Seed
{

    public static function run() : void
    {
        $setting = WorkspaceSetting::create([
            'currency_id' => 1,
            'payment_type_id' => 1,
        ]);

        \Budgetcontrol\Library\Model\WorkspaceSettings::create([
            'workspace_id' => '1',
            'setting' => 'app_configurations',
            'data' => $setting->toJson(),
        ]);
    }
}
