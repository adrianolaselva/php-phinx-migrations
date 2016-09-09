<?php

use Phinx\Seed\AbstractSeed;

class BrandSeeder extends AbstractSeed
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
                'name' => 'Visa',
            ],
            [
                'id' => 2,
                'name' => 'Mastercard',
            ],
            [
                'id' => 3,
                'name' => 'American Express',
            ],
            [
                'id' => 4,
                'name' => 'Elo',
            ],
            [
                'id' => 5,
                'name' => 'Discover Network',
            ],
            [
                'id' => 6,
                'name' => 'Banescard',
            ],
            [
                'id' => 7,
                'name' => 'Sorocard',
            ],
            [
                'id' => 8,
                'name' => 'Policard',
            ],
            [
                'id' => 9,
                'name' => 'Valecard',
            ],
            [
                'id' => 10,
                'name' => 'Agicard',
            ],
            [
                'id' => 11,
                'name' => 'JCB',
            ],
            [
                'id' => 12,
                'name' => 'CredSystem',
            ],
            [
                'id' => 13,
                'name' => 'Cabal',
            ],
            [
                'id' => 14,
                'name' => 'Green Card',
            ],
            [
                'id' => 15,
                'name' => 'Verocheque',
            ],
            [
                'id' => 16,
                'name' => 'Aura',
            ],
            [
                'id' => 17,
                'name' => 'Teste',
            ]
        ];

        foreach ($data as $value)
        {
            if(!$this->fetchAll("select * from brands where id={$value['id']}"))
            {
                $this->table('brands')->insert($value)->save();
                continue;
            }

            $this->execute("update brands set name='{$value['name']}' where id={$value['id']}");
        }
    }


}
