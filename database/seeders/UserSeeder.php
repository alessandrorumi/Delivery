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
            'email' => 'sushi.chan@mail.com',
            'name' => 'Sushi Chan',
            'address' => 'Via Roma 10',
            'vat_id' => 'IT12345678901',
            'logo' => 'logo1.png'
        ]);

        $user2 = User::factory()->create([
            'email' => 'suhi.bar@mail.com',
            'name' => 'Sushi Bar',
            'address' => 'Corso Vittorio Emanuele 20',
            'vat_id' => 'IT23456789012',
            'logo' => 'logo2.png'
        ]);

        $user3 = User::factory()->create([
            'email' => 'don.antonio@mail.com',
            'name' => 'Don Antonio',
            'address' => 'Via della Libertà 15',
            'vat_id' => 'IT34567890123',
            'logo' => 'logo3.png'
        ]);
        
        $user4 = User::factory()->create([
            'email' => 'italia.farina@mail.com',
            'name' => 'Italia Farina',
            'address' => 'Via Garibaldi 20',
            'vat_id' => 'IT45678901234',
            'logo' => 'logo4.png'
        ]);

        $user5 = User::factory()->create([
            'email' => 'don.pacho@mail.com',
            'name' => 'Don Pacho Taqueria',
            'address' => 'Via Rosa 25',
            'vat_id' => 'IT56789012345',
            'logo' => 'logo5.png'
        ]);
        
        $user6 = User::factory()->create([
            'email' => 'borcelle.tacos@mail.com',
            'name' => 'Borcelle Tacos',
            'address' => 'Viale del Sole 30',
            'vat_id' => 'IT67890123456',
            'logo' => 'logo6.png'
        ]);

        $user7 = User::factory()->create([
            'email' => 'le.coquillage@mail.com',
            'name' => 'Le Coquillage',
            'address' => 'Via Garibaldi 35',
            'vat_id' => 'IT78901234567',
            'logo' => 'logo7.png'
        ]);
        
        $user8 = User::factory()->create([
            'email' => 'verre.devin@mail.com',
            'name' => 'Un Verre de Vin',
            'address' => 'Via Roma 45',
            'vat_id' => 'IT89012345678',
            'logo' => 'logo8.png'
        ]);

        $user9 = User::factory()->create([
            'email' => 'swaad@mail.com',
            'name' => 'Swaad',
            'address' => 'Via della Sapienza 12',
            'vat_id' => 'IT90123456789',
            'logo' => 'logo9.png'
        ]);
        
        $user10 = User::factory()->create([
            'email' => 'kadhai.corner@mail.com',
            'name' => 'Kadhai Corner',
            'address' => 'Via Garibaldi 28',
            'vat_id' => 'IT01234567890',
            'logo' => 'logo10.png'
        ]);

        $user11 = User::factory()->create([
            'email' => 'dragonhouse@mail.com',
            'name' => 'Dragon House',
            'address' => 'Via Siena 88',
            'vat_id' => 'IT11223344556',
            'logo' => 'logo11.png'
        ]);
        
        $user12 = User::factory()->create([
            'email' => 'greatwall@mail.com',
            'name' => 'Great Wall Chinese Restaurant',
            'address' => 'Via Baldi 55',
            'vat_id' => 'IT22334455667',
            'logo' => 'logo12.png'
        ]);

        $user13 = User::factory()->create([
            'email' => 'tapasbar@mail.com',
            'name' => 'Tapas Bar El Sol',
            'address' => 'Via della Luna 20',
            'vat_id' => 'IT33445566778',
            'logo' => 'logo13.png'
        ]);
        
        $user14 = User::factory()->create([
            'email' => 'paellaparadise@mail.com',
            'name' => 'Paella Paradise',
            'address' => 'Piazza del Mare 15',
            'vat_id' => 'IT44556677889',
            'logo' => 'logo14.png'
        ]);
        
        $user15 = User::factory()->create([
            'email' => 'thaifusion@mail.com',
            'name' => 'Thai Fusion',
            'address' => 'Via Funzi 72',
            'vat_id' => 'IT55667788990',
            'logo' => 'logo15.png'
        ]);
        
        $user16 = User::factory()->create([
            'email' => 'siamdelight@mail.com',
            'name' => 'Siam Delight',
            'address' => 'Via Empoli 33',
            'vat_id' => 'IT66778899001',
            'logo' => 'logo16.png'
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
