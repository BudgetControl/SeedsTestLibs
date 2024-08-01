<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class UsersTable extends AbstractMigration
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
        $this->table('users')
            ->addColumn('id', 'integer', ['identity' => true])
            ->addColumn('uuid', 'uuid')
            ->addColumn('name', 'string')
            ->addColumn('email', 'string')
            ->addColumn('email_verified_at', 'datetime', ['null' => true])
            ->addColumn('password', 'string')
            ->addColumn('remember_token', 'string', ['null' => true])
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')
            ->addColumn('deleted_at', 'datetime', ['null' => true])
            ->addColumn('sub', 'string')
            ->create();
    }
}
