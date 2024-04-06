<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Type;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = User::factory()->create([
            'email' => 'garden.sushi@mail.com',
            'name' => 'Sushi Garden',
            'address' => 'Via Roma 10',
            'vat_id' => 'IT12345678901',
        ]);

        $user2 = User::factory()->create([
            'email' => 'house.ramen@mail.com',
            'name' => 'Ramen House',
            'address' => 'Corso Vittorio Emanuele 20',
            'vat_id' => 'IT23456789012',
        ]);

        $user3 = User::factory()->create([
            'email' => 'ristorante.primavera@mail.com',
            'name' => 'Ristorante Primavera',
            'address' => 'Via della Libertà 15',
            'vat_id' => 'IT34567890123',
        ]);
        
        $user4 = User::factory()->create([
            'email' => 'trattoria.roma@mail.com',
            'name' => 'Trattoria Roma',
            'address' => 'Via Garibaldi 20',
            'vat_id' => 'IT45678901234',
        ]);

        $user5 = User::factory()->create([
            'email' => 'los.amigos@mail.com',
            'name' => 'Los Amigos Taqueria',
            'address' => 'Via Rosa 25',
            'vat_id' => 'IT56789012345',
        ]);
        
        $user6 = User::factory()->create([
            'email' => 'taco.lindo@mail.com',
            'name' => 'Taco Lindo',
            'address' => 'Viale del Sole 30',
            'vat_id' => 'IT67890123456',
        ]);

        $user7 = User::factory()->create([
            'email' => 'le.bistro@mail.com',
            'name' => 'Le Bistro Français',
            'address' => 'Via Garibaldi 35',
            'vat_id' => 'IT78901234567',
        ]);
        
        $user8 = User::factory()->create([
            'email' => 'chez.pierre@mail.com',
            'name' => 'Chez Pierre',
            'address' => 'Via Roma 45',
            'vat_id' => 'IT89012345678',
        ]);

        $user9 = User::factory()->create([
            'email' => 'tajmahal@mail.com',
            'name' => 'Taj Mahal Indian Cuisine',
            'address' => 'Via della Sapienza 12',
            'vat_id' => 'IT90123456789',
        ]);
        
        $user10 = User::factory()->create([
            'email' => 'spiceofindia@mail.com',
            'name' => 'Spice of India',
            'address' => 'Via Garibaldi 28',
            'vat_id' => 'IT01234567890',
        ]);

        $user11 = User::factory()->create([
            'email' => 'dragonhouse@mail.com',
            'name' => 'Dragon House',
            'address' => 'Via Siena 88',
            'vat_id' => 'IT11223344556',
        ]);
        
        $user12 = User::factory()->create([
            'email' => 'greatwall@mail.com',
            'name' => 'Great Wall Chinese Restaurant',
            'address' => 'Via Baldi 55',
            'vat_id' => 'IT22334455667',
        ]);

        $user13 = User::factory()->create([
            'email' => 'tapasbar@mail.com',
            'name' => 'Tapas Bar El Sol',
            'address' => 'Via della Luna 20',
            'vat_id' => 'IT33445566778',
        ]);
        
        $user14 = User::factory()->create([
            'email' => 'paellaparadise@mail.com',
            'name' => 'Paella Paradise',
            'address' => 'Piazza del Mare 15',
            'vat_id' => 'IT44556677889',
        ]);
        
        $user15 = User::factory()->create([
            'email' => 'thaifusion@mail.com',
            'name' => 'Thai Fusion',
            'address' => 'Via Funzi 72',
            'vat_id' => 'IT55667788990',
        ]);
        
        $user16 = User::factory()->create([
            'email' => 'siamdelight@mail.com',
            'name' => 'Siam Delight',
            'address' => 'Via Empoli 33',
            'vat_id' => 'IT66778899001',
        ]);
        
        $giapponese = Type::where('name', 'Giapponese')->firstOrFail();
        $italiana = Type::where('name', 'Italiana')->firstOrFail();
        $messicana = Type::where('name', 'Messicana')->firstOrFail();
        $francese = Type::where('name', 'Francese')->firstOrFail();
        $indiana = Type::where('name', 'Indiana')->firstOrFail();
        $cinese = Type::where('name', 'Cinese')->firstOrFail();
        $spagnola = Type::where('name', 'Spagnola')->firstOrFail();
        $tailandese = Type::where('name', 'Tailandese')->firstOrFail();

        $user1->types()->attach($giapponese);
        $user2->types()->attach($giapponese);
        $user3->types()->attach($italiana);
        $user4->types()->attach($italiana);
        $user5->types()->attach($messicana);
        $user6->types()->attach($messicana);
        $user7->types()->attach($francese);
        $user8->types()->attach($francese);
        $user9->types()->attach($indiana);
        $user10->types()->attach($indiana);
        $user11->types()->attach($cinese);
        $user12->types()->attach($cinese);
        $user13->types()->attach($spagnola);
        $user14->types()->attach($spagnola);
        $user15->types()->attach($tailandese);
        $user16->types()->attach($tailandese);
    }
}
