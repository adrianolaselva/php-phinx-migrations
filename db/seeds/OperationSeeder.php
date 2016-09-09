<?php

use Phinx\Seed\AbstractSeed;

class OperationSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Crédito',
            ],
            [
                'id' => 2,
                'name' => 'Débito',
            ],
            [
                'id' => 3,
                'name' => 'Crédito à vista',
            ]
        ];

        foreach ($data as $value)
        {
            if(!$this->fetchAll("select * from operations where id={$value['id']}"))
            {
                $this->table('operations')->insert($value)->save();
                continue;
            }

            $this->execute("update operations set name='{$value['name']}' where id={$value['id']}");
        }
    }

}
