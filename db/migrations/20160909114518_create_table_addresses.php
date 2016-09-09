<?php

use Phinx\Migration\AbstractMigration;

class CreateTableAddresses extends AbstractMigration
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
        $this->table('addresses', ['id' => false, 'primary_key' => 'id'])
            ->addColumn('id', 'biginteger')
            ->addColumn('street', 'string')
            ->addColumn('streetNumber', 'integer')
            ->addColumn('complement', 'string')
            ->addColumn('district', 'string')
            ->addColumn('city', 'string')
            ->addColumn('state', 'string')
            ->addColumn('country', 'string')
            ->addColumn('zipCode', 'string')
            ->save();
    }

    public function down()
    {
        $this->dropTable('addresses');
    }
}
