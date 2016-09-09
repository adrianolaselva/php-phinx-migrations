<?php

use Phinx\Migration\AbstractMigration;

class CreateTableShippingAddress extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $this->table('shippingAddress', ['id' => false, 'primary_key' => 'id'])
            ->addColumn('id', 'biginteger')
            ->addColumn('zipCode', 'string')
            ->addColumn('street', 'string')
            ->addColumn('streetNumber', 'string')
            ->addColumn('complement', 'string')
            ->addColumn('city', 'string')
            ->addColumn('district', 'string')
            ->addColumn('state', 'string')
            ->addColumn('country', 'string')
            ->save();
    }

    public function down()
    {
        $this->dropTable('shippingAddress');
    }
}
