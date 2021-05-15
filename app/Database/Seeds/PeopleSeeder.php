<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class PeopleSeeder extends Seeder
{
    public function run()
    {
        // $data = [
        //     [
        //         'name'       => 'Rudy Yohanes',
        //         'address'    => 'Jl. Flamboyan No. 2',
        //         'created_at' => Time::now(), 
        //         'updated_at' => Time::now() 
        //     ],
        //     [
        //         'name'       => 'Yanto Adi',
        //         'address'    => 'Jl. Harapan No. 10',
        //         'created_at' => Time::now(), 
        //         'updated_at' => Time::now() 
        //     ],
        //     [
        //         'name'       => 'Dodi Prabowo',
        //         'address'    => 'Jl. Apel No. 25',
        //         'created_at' => Time::now(), 
        //         'updated_at' => Time::now() 
        //     ]
        // ];

        $faker = \Faker\Factory::create('id_ID');
        for ($i=0; $i<100; $i++) {
            $data = [
                'name'       => $faker->name,
                'address'    => $faker->address,
                'created_at' => Time::createFromTimestamp($faker->unixTime()), 
                'updated_at' => Time::now()
            ];
            // Using Query Builder
            $this->db->table('people')->insert($data);
        }
        // Simple Queries
        // $this->db->query("INSERT INTO people (name, address, created_at, updated_at) VALUES(:name:, :address:, :created_at:, :updated_at:)", $data);

        // $this->db->table('people')->insertBatch($data);
    }
}