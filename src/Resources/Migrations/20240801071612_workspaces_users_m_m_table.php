<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class WorkspacesUsersMMTable extends AbstractMigration
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
        $this->table('workspaces_users_mm')
            ->addColumn('id', 'integer', ['identity' => true])
            ->addColumn('workspace_id', 'integer')
            ->addColumn('user_id', 'integer')
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')
            ->create();
    }
}
