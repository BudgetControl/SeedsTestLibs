<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class ModelsTable extends AbstractMigration
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
        $this->table('models')
            ->addColumn('id', 'integer', ['identity' => true])
            ->addColumn('created_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('updated_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('uuid', 'uuid')
            ->addColumn('name', 'string')
            ->addColumn('amount', 'decimal', ['precision' => 10, 'scale' => 2])
            ->addColumn('note', 'text', ['null' => true])
            ->addColumn('type', 'string')
            ->addColumn('category_id', 'integer')
            ->addColumn('account_id', 'integer')
            ->addColumn('currency_id', 'integer')
            ->addColumn('payment_type', 'string')
            ->addColumn('deleted_at', 'datetime', ['null' => true])
            ->addColumn('workspace_id', 'integer')
            ->create();
    }
}
