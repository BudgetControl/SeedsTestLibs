<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class EntriesTable extends AbstractMigration
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
        $this->table('entries')
            ->addColumn('id', 'integer', ['identity' => true])
            ->addColumn('date_time', 'datetime')
            ->addColumn('updated_at', 'datetime', ['null' => true])
            ->addColumn('created_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('uuid', 'uuid')
            ->addColumn('amount', 'decimal', ['precision' => 10, 'scale' => 2])
            ->addColumn('note', 'text', ['null' => true])
            ->addColumn('type', 'string', ['limit' => 255])
            ->addColumn('warranty', 'boolean', ['default' => false])
            ->addColumn('transfer', 'boolean', ['default' => false])
            ->addColumn('confirmed', 'boolean', ['default' => false])
            ->addColumn('planned', 'boolean', ['default' => false])
            ->addColumn('installment', 'boolean', ['default' => false])
            ->addColumn('category_id', 'integer')
            ->addColumn('model_id', 'integer', ['null' => true])
            ->addColumn('account_id', 'integer')
            ->addColumn('transfer_id', 'integer', ['null' => true])
            ->addColumn('transfer_relation', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('currency_id', 'integer')
            ->addColumn('payment_type', 'string', ['limit' => 255])
            ->addColumn('payee_id', 'integer')
            ->addColumn('deleted_at', 'datetime', ['null' => true])
            ->addColumn('geolocation', 'point', ['null' => true])
            ->addColumn('workspace_id', 'integer')
            ->addColumn('exclude_from_stats', 'boolean', ['default' => false])
            ->addIndex(['uuid'], ['unique' => true])
            ->addIndex(['category_id'])
            ->addIndex(['model_id'])
            ->addIndex(['account_id'])
            ->addIndex(['transfer_id'])
            ->addIndex(['currency_id'])
            ->addIndex(['payment_type'])
            ->addIndex(['payee_id'])
            ->addIndex(['workspace_id'])
            ->create();
    }
}
