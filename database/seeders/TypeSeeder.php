<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name'  => 'Italiana'
            ],
            [
                'name'  => 'Giapponese'
            ],
            [
                'name'  => 'Messicana'
            ],
            [
                'name'  => 'Francese'
            ],
            [
                'name'  => 'Indiana'
            ],
            [
                'name'  => 'Cinese'
            ],
            [
                'name'  => 'Spagnola'
            ],
            [
                'name'  => 'Tailandese'
            ],
            [
                'name'  => 'Vietnamita'
            ],
            [
                'name'  => 'Greca'
            ],
            [
                'name'  => 'Irlandese'
            ],
            [
                'name'  => 'Turca'
            ],
        ];

        foreach($types as $type){
            
            Type::create($type);
      
        }
    }
}
