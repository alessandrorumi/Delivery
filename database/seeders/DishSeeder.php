<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Dish;
use App\Models\User;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $giapponese = [
            [
                "name" => "Sushi assortito",
                "description" => "Assortimento di sushi tradizionale giapponese",
                "price" => 15.50,
                "visible" => true
            ],
            [
                "name" => "Tempura di verdure",
                "description" => "Verdure fritte in pastella leggera",
                "price" => 10.75,
                "visible" => true
            ],
            [
                "name" => "Ramen al tonno",
                "description" => "Zuppa giapponese con noodles e tonno",
                "price" => 12.90,
                "visible" => true
            ],
            [
                "name" => "Yakitori di pollo",
                "description" => "Spiedini di pollo alla griglia",
                "price" => 8.25,
                "visible" => true
            ],
            [
                "name" => "Gyoza",
                "description" => "Ravioli giapponesi ripieni di carne di maiale e verdure",
                "price" => 7.50,
                "visible" => true
            ],
            [
                "name" => "Tartare di salmone",
                "description" => "Salmone fresco tagliato a cubetti, condito con lime e erba cipollina",
                "price" => 14.00,
                "visible" => true
            ],
            [
                "name" => "Unagi nigiri",
                "description" => "Nigiri di anguilla glassata con salsa teriyaki",
                "price" => 11.50,
                "visible" => true
            ],
            [
                "name" => "Okonomiyaki",
                "description" => "Pancake giapponese con cavolo, pancetta e salsa okonomiyaki",
                "price" => 9.75,
                "visible" => true
            ],
            [
                "name" => "Sashimi misto",
                "description" => "Assortimento di pesce crudo fresco, tagliato a fette sottili",
                "price" => 18.50,
                "visible" => true
            ],
            [
                "name" => "Udon al curry",
                "description" => "Noodles spessi in una ricca zuppa di curry giapponese",
                "price" => 13.25,
                "visible" => true
            ],
        ];

        $italiana = [
            [
                "name" => "Pizza Margherita",
                "description" => "Pizza con pomodoro, mozzarella e basilico",
                "price" => 8.99,
                "visible" => true
            ],
            [
                "name" => "Pasta alla Carbonara",
                "description" => "Pasta con uova, pancetta, pecorino e pepe nero",
                "price" => 12.50,
                "visible" => true
            ],
            [
                "name" => "Risotto ai Funghi",
                "description" => "Risotto cremoso con funghi porcini e prezzemolo",
                "price" => 14.75,
                "visible" => true
            ],
            [
                "name" => "Bruschetta",
                "description" => "Pane tostato con pomodoro fresco, aglio e basilico",
                "price" => 6.25,
                "visible" => true
            ],
            [
                "name" => "Lasagne alla Bolognese",
                "description" => "Strati di pasta, ragù di carne e besciamella",
                "price" => 16.99,
                "visible" => true
            ],
            [
                "name" => "Tagliatelle al tartufo",
                "description" => "Tagliatelle fatte in casa condite con una delicata salsa al tartufo nero pregiato",
                "price" => 22.00,
                "visible" => true
            ],
            [
                "name" => "Ossobuco alla milanese",
                "description" => "Fettine di vitello stufate con osso contenente del midollo, servite con gremolata",
                "price" => 24.50,
                "visible" => true
            ],
            [
                "name" => "Fettuccine Alfredo",
                "description" => "Fettuccine fatte in casa condite con una salsa cremosa a base di burro e parmigiano",
                "price" => 18.90,
                "visible" => true
            ],
            [
                "name" => "Polenta e brasato",
                "description" => "Polenta fatta con farina di mais servita con carne brasata in un saporito sugo di pomodoro",
                "price" => 20.75,
                "visible" => true
            ],
            [
                "name" => "Cotoletta alla milanese",
                "description" => "Fettina di vitello impanata e fritta, servita con un tocco di limone",
                "price" => 19.50,
                "visible" => true
            ],
        ];

        $messicana = [
            [
                "name" => "Tacos al Pastor",
                "description" => "Tortillas di mais ripiene di carne di maiale marinata con ananas, cipolla e coriandolo",
                "price" => 11.99,
                "visible" => true
            ],
            [
                "name" => "Guacamole",
                "description" => "Salsa a base di avocado, pomodoro, cipolla, lime e coriandolo",
                "price" => 7.50,
                "visible" => true
            ],
            [
                "name" => "Enchiladas",
                "description" => "Tortillas di mais ripiene di pollo, formaggio e salsa di pomodoro piccante",
                "price" => 13.50,
                "visible" => true
            ],
            [
                "name" => "Quesadillas",
                "description" => "Tortillas di mais ripiene di formaggio fuso e pollo, servite con panna acida e salsa",
                "price" => 9.25,
                "visible" => true
            ],
            [
                "name" => "Chili con carne",
                "description" => "Spezzatino di carne macinata di manzo con fagioli, pomodoro e peperoncino",
                "price" => 14.99,
                "visible" => true
            ],
            [
                "name" => "Tamales",
                "description" => "Pasticcini di mais ripieni di carne di maiale o pollo e salsa, avvolti in foglie di mais",
                "price" => 10.99,
                "visible" => true
            ],
            [
                "name" => "Mole Poblano",
                "description" => "Pollo cotto in una salsa densa e complessa a base di cioccolato, peperoncini e spezie",
                "price" => 16.50,
                "visible" => true
            ],
            [
                "name" => "Ceviche",
                "description" => "Pesce crudo marinato con succo di lime, peperoncino, cipolla e coriandolo",
                "price" => 12.75,
                "visible" => true
            ],
            [
                "name" => "Pozole",
                "description" => "Zuppa tradizionale messicana a base di mais, carne di maiale e condimenti vari",
                "price" => 11.50,
                "visible" => true
            ],
            [
                "name" => "Elote",
                "description" => "Pannocchie di mais grigliate ricoperte di maionese, formaggio cotija, peperoncino e lime",
                "price" => 6.99,
                "visible" => true
            ],
        ];

        $francese = [
            [
                "name" => "Boeuf Bourguignon",
                "description" => "Stufato di manzo cotto in vino rosso con cipolle, carote e funghi",
                "price" => 18.50,
                "visible" => true
            ],
            [
                "name" => "Coq au Vin",
                "description" => "Pollo cotto in vino rosso con funghi, cipolle e pancetta",
                "price" => 16.75,
                "visible" => true
            ],
            [
                "name" => "Quiche Lorraine",
                "description" => "Torta salata a base di pancetta, formaggio e uova",
                "price" => 10.99,
                "visible" => true
            ],
            [
                "name" => "Soupe à l'oignon",
                "description" => "Zuppa di cipolle gratinata con crostini e formaggio",
                "price" => 9.25,
                "visible" => true
            ],
            [
                "name" => "Salade Niçoise",
                "description" => "Insalata composta da tonno, uova sode, pomodori, olive e fagiolini",
                "price" => 12.99,
                "visible" => true
            ],
            [
                "name" => "Bouillabaisse",
                "description" => "Zuppa di pesce provenzale con vari tipi di pesce, crostacei, pomodoro e aromi",
                "price" => 25.50,
                "visible" => true
            ],
            [
                "name" => "Confit de Canard",
                "description" => "Cosce d'anatra confit, lentamente cotte nella propria grassa",
                "price" => 21.75,
                "visible" => true
            ],
            [
                "name" => "Ratatouille",
                "description" => "Stufato di verdure provenzali come melanzane, zucchine, peperoni, pomodori e cipolle",
                "price" => 14.50,
                "visible" => true
            ],
            [
                "name" => "Tarte Tatin",
                "description" => "Torta rovesciata alle mele caramellate con pasta sfoglia",
                "price" => 16.99,
                "visible" => true
            ],
            [
                "name" => "Crème Brûlée",
                "description" => "Crema alla vaniglia caramellata servita con una croccante superficie zuccherata",
                "price" => 9.99,
                "visible" => true
            ],
        ];

        $indiana = [
            [
                "name" => "Chicken Tikka Masala",
                "description" => "Pollo marinato e arrostito in salsa di pomodoro e spezie",
                "price" => 14.99,
                "visible" => true
            ],
            [
                "name" => "Saag Paneer",
                "description" => "Spinaci cotti con formaggio paneer e spezie",
                "price" => 12.50,
                "visible" => true
            ],
            [
                "name" => "Biryani di agnello",
                "description" => "Riso speziato cotto con agnello e condimenti",
                "price" => 16.75,
                "visible" => true
            ],
            [
                "name" => "Butter Chicken",
                "description" => "Pollo cotto in una salsa cremosa di pomodoro, burro e spezie",
                "price" => 15.25,
                "visible" => true
            ],
            [
                "name" => "Dal Makhani",
                "description" => "Lenticchie nere cotte con burro, pomodoro e spezie",
                "price" => 11.99,
                "visible" => true
            ],
            [
                "name" => "Samosa",
                "description" => "Pasticcini fritti ripieni di patate, piselli e spezie",
                "price" => 8.99,
                "visible" => true
            ],
            [
                "name" => "Paneer Tikka",
                "description" => "Cubetti di paneer marinati e grigliati con peperoni e cipolle",
                "price" => 13.50,
                "visible" => true
            ],
            [
                "name" => "Vindaloo di maiale",
                "description" => "Spezzatino di maiale cotto con una salsa piccante di peperoni, aceto e spezie",
                "price" => 17.50,
                "visible" => true
            ],
            [
                "name" => "Aloo Gobi",
                "description" => "Patate e cavolfiore cotti con cipolle, pomodoro e spezie",
                "price" => 10.75,
                "visible" => true
            ],
            [
                "name" => "Rasgulla",
                "description" => "Palline dolci di paneer in sciroppo di zucchero e acqua di rosa",
                "price" => 9.25,
                "visible" => true
            ],
        ];

        $cinese = [
            [
                "name" => "Pollo all'arancia",
                "description" => "Pollo fritto in una salsa dolce e aspra all'arancia",
                "price" => 13.99,
                "visible" => true
            ],
            [
                "name" => "Maiale in agrodolce",
                "description" => "Maiale fritto con peperoni, ananas e salsa agrodolce",
                "price" => 12.50,
                "visible" => true
            ],
            [
                "name" => "Anatra alla pechinese",
                "description" => "Anatra arrosto servita con sottile crepe di farina, cipolla verde e salsa di prugne",
                "price" => 19.75,
                "visible" => true
            ],
            [
                "name" => "Ravioli al vapore",
                "description" => "Ravioli ripieni di carne di maiale e verdure, cotti al vapore",
                "price" => 9.25,
                "visible" => true
            ],
            [
                "name" => "Zuppa agrodolce",
                "description" => "Zuppa a base di pomodoro, ananas, pollo e verdure con un tocco agrodolce",
                "price" => 8.99,
                "visible" => true
            ],
            [
                "name" => "Manzo con broccoli",
                "description" => "Fettine di manzo saltate in padella con broccoli e salsa di soia",
                "price" => 15.50,
                "visible" => true
            ],
            [
                "name" => "Gamberi in salsa agrodolce",
                "description" => "Gamberi fritti con peperoni, ananas e salsa agrodolce",
                "price" => 16.99,
                "visible" => true
            ],
            [
                "name" => "Mapo Tofu",
                "description" => "Tofu e carne di maiale macinata cucinati in una salsa piccante a base di fagioli fermentati e peperoncino",
                "price" => 14.75,
                "visible" => true
            ],
            [
                "name" => "Anatra alla cantonese",
                "description" => "Anatra arrosto servita con salsa di prugne e verdure miste",
                "price" => 18.25,
                "visible" => true
            ],
            [
                "name" => "Frittella di gamberi",
                "description" => "Gamberi e verdure in pastella fritti, serviti con salsa agrodolce",
                "price" => 11.50,
                "visible" => true
            ],
        ];

        $types = [
        $giapponese,
        $italiana,
        $messicana,
        $francese,
        $indiana,
        $cinese,
    ];

    $users = User::all(); 
    $userIndex = 0;
    $dishesPerUser = 5;
    $dishCount = 0;

    foreach ($types as $type) {
        foreach ($type as $dish) {
            Dish::create([
                'name' => $dish['name'],
                'description' => $dish['description'],
                'price' => $dish['price'],
                'visible' => $dish['visible'],
                'user_id' => $users[$userIndex]->id,
            ]);

            $dishCount++;

            if ($dishCount >= $dishesPerUser) {
                $userIndex++;
                $dishCount = 0;
            }
        }
    }
}
}
