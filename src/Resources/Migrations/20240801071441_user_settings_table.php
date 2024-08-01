<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class UserSettingsTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $this->table('user_settings')
            ->addColumn('id', 'integer', ['identity' => true])
            ->addColumn('created_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('updated_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('setting', 'string', ['limit' => 255])
            ->addColumn('data', 'text')
            ->addColumn('workspace_id', 'integer')
            ->addIndex(['workspace_id'])
            ->create();
    }
}
