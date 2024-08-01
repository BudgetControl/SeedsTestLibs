<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class PlannedEntriesTable extends AbstractMigration
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
        $this->table('planned_entries')
            ->addColumn('id', 'integer', ['identity' => true])
            ->addColumn('date_time', 'datetime')
            ->addColumn('end_date_time', 'datetime')
            ->addColumn('updated_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('created_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('uuid', 'uuid')
            ->addColumn('amount', 'decimal', ['precision' => 10, 'scale' => 2])
            ->addColumn('note', 'text', ['null' => true])
            ->addColumn('planning', 'string', ['limit' => 255])
            ->addColumn('type', 'string', ['limit' => 255])
            ->addColumn('warranty', 'boolean', ['default' => false])
            ->addColumn('transfer', 'boolean', ['default' => false])
            ->addColumn('confirmed', 'boolean', ['default' => false])
            ->addColumn('planned', 'boolean', ['default' => true])
            ->addColumn('category_id', 'integer')
            ->addColumn('model_id', 'integer')
            ->addColumn('account_id', 'integer')
            ->addColumn('transfer_id', 'integer', ['null' => true])
            ->addColumn('currency_id', 'integer')
            ->addColumn('payment_type', 'string', ['limit' => 255])
            ->addColumn('payee_id', 'integer')
            ->addColumn('geolocation_id', 'integer', ['null' => true])
            ->addColumn('deleted_at', 'datetime', ['null' => true])
            ->addColumn('workspace_id', 'integer')
            ->addIndex(['uuid'], ['unique' => true])
            ->addForeignKey('category_id', 'categories', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->addForeignKey('model_id', 'models', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->addForeignKey('account_id', 'accounts', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->addForeignKey('transfer_id', 'transfers', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->addForeignKey('currency_id', 'currencies', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->addForeignKey('payee_id', 'payees', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->addForeignKey('geolocation_id', 'geolocations', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->addForeignKey('workspace_id', 'workspaces', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->create();
    }
}
