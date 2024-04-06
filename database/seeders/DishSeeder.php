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
                "visible" => true,
                "user_id" => 1
            ],
            [
                "name" => "Tempura di verdure",
                "description" => "Verdure fritte in pastella leggera",
                "price" => 10.75,
                "visible" => true,
                "user_id" => 1
            ],
            [
                "name" => "Ramen al tonno",
                "description" => "Zuppa giapponese con noodles e tonno",
                "price" => 12.90,
                "visible" => true,
                "user_id" => 1
            ],
            [
                "name" => "Yakitori di pollo",
                "description" => "Spiedini di pollo alla griglia",
                "price" => 8.25,
                "visible" => true,
                "user_id" => 1
            ],
            [
                "name" => "Gyoza",
                "description" => "Ravioli giapponesi ripieni di carne di maiale e verdure",
                "price" => 7.50,
                "visible" => true,
                "user_id" => 1
            ],
            [
                "name" => "Tartare di salmone",
                "description" => "Salmone fresco tagliato a cubetti, condito con lime e erba cipollina",
                "price" => 14.00,
                "visible" => true,
                "user_id" => 2
            ],
            [
                "name" => "Unagi nigiri",
                "description" => "Nigiri di anguilla glassata con salsa teriyaki",
                "price" => 11.50,
                "visible" => true,
                "user_id" => 2
            ],
            [
                "name" => "Okonomiyaki",
                "description" => "Pancake giapponese con cavolo, pancetta e salsa okonomiyaki",
                "price" => 9.75,
                "visible" => true,
                "user_id" => 2
            ],
            [
                "name" => "Sashimi misto",
                "description" => "Assortimento di pesce crudo fresco, tagliato a fette sottili",
                "price" => 18.50,
                "visible" => true,
                "user_id" => 2
            ],
            [
                "name" => "Udon al curry",
                "description" => "Noodles spessi in una ricca zuppa di curry giapponese",
                "price" => 13.25,
                "visible" => true,
                "user_id" => 2
            ],
        ];

        $italiana = [
            [
                "name" => "Pizza Margherita",
                "description" => "Pizza con pomodoro, mozzarella e basilico",
                "price" => 8.99,
                "visible" => true,
                "user_id" => 3
            ],
            [
                "name" => "Pasta alla Carbonara",
                "description" => "Pasta con uova, pancetta, pecorino e pepe nero",
                "price" => 12.50,
                "visible" => true,
                "user_id" => 3
            ],
            [
                "name" => "Risotto ai Funghi",
                "description" => "Risotto cremoso con funghi porcini e prezzemolo",
                "price" => 14.75,
                "visible" => true,
                "user_id" => 3
            ],
            [
                "name" => "Bruschetta",
                "description" => "Pane tostato con pomodoro fresco, aglio e basilico",
                "price" => 6.25,
                "visible" => true,
                "user_id" => 3
            ],
            [
                "name" => "Lasagne alla Bolognese",
                "description" => "Strati di pasta, ragù di carne e besciamella",
                "price" => 16.99,
                "visible" => true,
                "user_id" => 3
            ],
            [
                "name" => "Tagliatelle al tartufo",
                "description" => "Tagliatelle fatte in casa condite con una delicata salsa al tartufo nero pregiato",
                "price" => 22.00,
                "visible" => true,
                "user_id" => 4
            ],
            [
                "name" => "Ossobuco alla milanese",
                "description" => "Fettine di vitello stufate con osso contenente del midollo, servite con gremolata",
                "price" => 24.50,
                "visible" => true,
                "user_id" => 4
            ],
            [
                "name" => "Fettuccine Alfredo",
                "description" => "Fettuccine fatte in casa condite con una salsa cremosa a base di burro e parmigiano",
                "price" => 18.90,
                "visible" => true,
                "user_id" => 4
            ],
            [
                "name" => "Polenta e brasato",
                "description" => "Polenta fatta con farina di mais servita con carne brasata in un saporito sugo di pomodoro",
                "price" => 20.75,
                "visible" => true,
                "user_id" => 4
            ],
            [
                "name" => "Cotoletta alla milanese",
                "description" => "Fettina di vitello impanata e fritta, servita con un tocco di limone",
                "price" => 19.50,
                "visible" => true,
                "user_id" => 4
            ],
        ];

        $messicana = [
            [
                "name" => "Tacos al Pastor",
                "description" => "Tortillas di mais ripiene di carne di maiale marinata con ananas, cipolla e coriandolo",
                "price" => 11.99,
                "visible" => true,
                "user_id" => 5
            ],
            [
                "name" => "Guacamole",
                "description" => "Salsa a base di avocado, pomodoro, cipolla, lime e coriandolo",
                "price" => 7.50,
                "visible" => true,
                "user_id" => 5
            ],
            [
                "name" => "Enchiladas",
                "description" => "Tortillas di mais ripiene di pollo, formaggio e salsa di pomodoro piccante",
                "price" => 13.50,
                "visible" => true,
                "user_id" => 5
            ],
            [
                "name" => "Quesadillas",
                "description" => "Tortillas di mais ripiene di formaggio fuso e pollo, servite con panna acida e salsa",
                "price" => 9.25,
                "visible" => true,
                "user_id" => 5
            ],
            [
                "name" => "Chili con carne",
                "description" => "Spezzatino di carne macinata di manzo con fagioli, pomodoro e peperoncino",
                "price" => 14.99,
                "visible" => true,
                "user_id" => 5
            ],
            [
                "name" => "Tamales",
                "description" => "Pasticcini di mais ripieni di carne di maiale o pollo e salsa, avvolti in foglie di mais",
                "price" => 10.99,
                "visible" => true,
                "user_id" => 6
            ],
            [
                "name" => "Mole Poblano",
                "description" => "Pollo cotto in una salsa densa e complessa a base di cioccolato, peperoncini e spezie",
                "price" => 16.50,
                "visible" => true,
                "user_id" => 6
            ],
            [
                "name" => "Ceviche",
                "description" => "Pesce crudo marinato con succo di lime, peperoncino, cipolla e coriandolo",
                "price" => 12.75,
                "visible" => true,
                "user_id" => 6
            ],
            [
                "name" => "Pozole",
                "description" => "Zuppa tradizionale messicana a base di mais, carne di maiale e condimenti vari",
                "price" => 11.50,
                "visible" => true,
                "user_id" => 6
            ],
            [
                "name" => "Elote",
                "description" => "Pannocchie di mais grigliate ricoperte di maionese, formaggio cotija, peperoncino e lime",
                "price" => 6.99,
                "visible" => true,
                "user_id" => 6
            ],
        ];

        $francese = [
            [
                "name" => "Boeuf Bourguignon",
                "description" => "Stufato di manzo cotto in vino rosso con cipolle, carote e funghi",
                "price" => 18.50,
                "visible" => true,
                "user_id" => 7
            ],
            [
                "name" => "Coq au Vin",
                "description" => "Pollo cotto in vino rosso con funghi, cipolle e pancetta",
                "price" => 16.75,
                "visible" => true,
                "user_id" => 7
            ],
            [
                "name" => "Quiche Lorraine",
                "description" => "Torta salata a base di pancetta, formaggio e uova",
                "price" => 10.99,
                "visible" => true,
                "user_id" => 7
            ],
            [
                "name" => "Soupe à l'oignon",
                "description" => "Zuppa di cipolle gratinata con crostini e formaggio",
                "price" => 9.25,
                "visible" => true,
                "user_id" => 7
            ],
            [
                "name" => "Salade Niçoise",
                "description" => "Insalata composta da tonno, uova sode, pomodori, olive e fagiolini",
                "price" => 12.99,
                "visible" => true,
                "user_id" => 7
            ],
            [
                "name" => "Bouillabaisse",
                "description" => "Zuppa di pesce provenzale con vari tipi di pesce, crostacei, pomodoro e aromi",
                "price" => 25.50,
                "visible" => true,
                "user_id" => 8
            ],
            [
                "name" => "Confit de Canard",
                "description" => "Cosce d'anatra confit, lentamente cotte nella propria grassa",
                "price" => 21.75,
                "visible" => true,
                "user_id" => 8
            ],
            [
                "name" => "Ratatouille",
                "description" => "Stufato di verdure provenzali come melanzane, zucchine, peperoni, pomodori e cipolle",
                "price" => 14.50,
                "visible" => true,
                "user_id" => 8
            ],
            [
                "name" => "Tarte Tatin",
                "description" => "Torta rovesciata alle mele caramellate con pasta sfoglia",
                "price" => 16.99,
                "visible" => true,
                "user_id" => 8
            ],
            [
                "name" => "Crème Brûlée",
                "description" => "Crema alla vaniglia caramellata servita con una croccante superficie zuccherata",
                "price" => 9.99,
                "visible" => true,
                "user_id" => 8
            ],
        ];

        $indiana = [
            [
                "name" => "Chicken Tikka Masala",
                "description" => "Pollo marinato e arrostito in salsa di pomodoro e spezie",
                "price" => 14.99,
                "visible" => true,
                "user_id" => 9
            ],
            [
                "name" => "Saag Paneer",
                "description" => "Spinaci cotti con formaggio paneer e spezie",
                "price" => 12.50,
                "visible" => true,
                "user_id" => 9
            ],
            [
                "name" => "Biryani di agnello",
                "description" => "Riso speziato cotto con agnello e condimenti",
                "price" => 16.75,
                "visible" => true,
                "user_id" => 9
            ],
            [
                "name" => "Butter Chicken",
                "description" => "Pollo cotto in una salsa cremosa di pomodoro, burro e spezie",
                "price" => 15.25,
                "visible" => true,
                "user_id" => 9
            ],
            [
                "name" => "Dal Makhani",
                "description" => "Lenticchie nere cotte con burro, pomodoro e spezie",
                "price" => 11.99,
                "visible" => true,
                "user_id" => 9
            ],
            [
                "name" => "Samosa",
                "description" => "Pasticcini fritti ripieni di patate, piselli e spezie",
                "price" => 8.99,
                "visible" => true,
                "user_id" => 10
            ],
            [
                "name" => "Paneer Tikka",
                "description" => "Cubetti di paneer marinati e grigliati con peperoni e cipolle",
                "price" => 13.50,
                "visible" => true,
                "user_id" => 10
            ],
            [
                "name" => "Vindaloo di maiale",
                "description" => "Spezzatino di maiale cotto con una salsa piccante di peperoni, aceto e spezie",
                "price" => 17.50,
                "visible" => true,
                "user_id" => 10
            ],
            [
                "name" => "Aloo Gobi",
                "description" => "Patate e cavolfiore cotti con cipolle, pomodoro e spezie",
                "price" => 10.75,
                "visible" => true,
                "user_id" => 10
            ],
            [
                "name" => "Rasgulla",
                "description" => "Palline dolci di paneer in sciroppo di zucchero e acqua di rosa",
                "price" => 9.25,
                "visible" => true,
                "user_id" => 10
            ],
        ];

        $cinese = [
            [
                "name" => "Pollo all'arancia",
                "description" => "Pollo fritto in una salsa dolce e aspra all'arancia",
                "price" => 13.99,
                "visible" => true,
                "user_id" => 11
            ],
            [
                "name" => "Maiale in agrodolce",
                "description" => "Maiale fritto con peperoni, ananas e salsa agrodolce",
                "price" => 12.50,
                "visible" => true,
                "user_id" => 11
            ],
            [
                "name" => "Anatra alla pechinese",
                "description" => "Anatra arrosto servita con sottile crepe di farina, cipolla verde e salsa di prugne",
                "price" => 19.75,
                "visible" => true,
                "user_id" => 11
            ],
            [
                "name" => "Ravioli al vapore",
                "description" => "Ravioli ripieni di carne di maiale e verdure, cotti al vapore",
                "price" => 9.25,
                "visible" => true,
                "user_id" => 11
            ],
            [
                "name" => "Zuppa agrodolce",
                "description" => "Zuppa a base di pomodoro, ananas, pollo e verdure con un tocco agrodolce",
                "price" => 8.99,
                "visible" => true,
                "user_id" => 11
            ],
            [
                "name" => "Manzo con broccoli",
                "description" => "Fettine di manzo saltate in padella con broccoli e salsa di soia",
                "price" => 15.50,
                "visible" => true,
                "user_id" => 12
            ],
            [
                "name" => "Gamberi in salsa agrodolce",
                "description" => "Gamberi fritti con peperoni, ananas e salsa agrodolce",
                "price" => 16.99,
                "visible" => true,
                "user_id" => 12
            ],
            [
                "name" => "Mapo Tofu",
                "description" => "Tofu e carne di maiale macinata cucinati in una salsa piccante a base di fagioli fermentati e peperoncino",
                "price" => 14.75,
                "visible" => true,
                "user_id" => 12
            ],
            [
                "name" => "Anatra alla cantonese",
                "description" => "Anatra arrosto servita con salsa di prugne e verdure miste",
                "price" => 18.25,
                "visible" => true,
                "user_id" => 12
            ],
            [
                "name" => "Frittella di gamberi",
                "description" => "Gamberi e verdure in pastella fritti, serviti con salsa agrodolce",
                "price" => 11.50,
                "visible" => true,
                "user_id" => 12
            ],
        ];

        $spagnola = [
            [
                "name" => "Paella",
                "description" => "Piatto di riso giallo cotto con frutti di mare, pollo, e/o coniglio, condito con zafferano e altre spezie.",
                "price" => 20.50,
                "visible" => true,
                "user_id" => 13
            ],
            [
                "name" => "Gazpacho",
                "description" => "Zuppa fredda a base di pomodori, peperoni, cetrioli, cipolle, aglio e pane, condita con olio d'oliva e aceto.",
                "price" => 8.75,
                "visible" => true,
                "user_id" => 13
            ],
            [
                "name" => "Tortilla Española",
                "description" => "Frittata di patate, cipolle e uova, spesso servita come antipasto o piatto principale.",
                "price" => 9.99,
                "visible" => true,
                "user_id" => 13
            ],
            [
                "name" => "Tapas Variadas",
                "description" => "Selezione di piccoli piatti, che possono includere patatas bravas, croquetas, calamari, e altre specialità spagnole.",
                "price" => 14.99,
                "visible" => true,
                "user_id" => 13
            ],
            [
                "name" => "Pulpo a la Gallega",
                "description" => "Polpo cotto e servito con patate, paprika, sale grosso e olio d'oliva.",
                "price" => 18.99,
                "visible" => true,
                "user_id" => 13
            ],
            [
                "name" => "Crema Catalana",
                "description" => "Crema dolce alla vaniglia simile alla crème brûlée, ma di origine catalana.",
                "price" => 10.50,
                "visible" => true,
                "user_id" => 14
            ],
            [
                "name" => "Churros con Cioccolato",
                "description" => "Dolce fritto a forma di bastoncino, spesso servito con cioccolato caldo per intingere.",
                "price" => 7.25,
                "visible" => true,
                "user_id" => 14
            ],
            [
                "name" => "Jamón Ibérico",
                "description" => "Prosciutto spagnolo di alta qualità, proveniente dal maiale ibérico.",
                "price" => 25.99,
                "visible" => true,
                "user_id" => 14
            ],
            [
                "name" => "Empanadas",
                "description" => "Torte salate ripiene di carne, pesce, o verdure, avvolte in una pasta simile alla pasta sfoglia e poi fritte o cotte al forno.",
                "price" => 12.75,
                "visible" => true,
                "user_id" => 14
            ],
            [
                "name" => "Arroz con Leche",
                "description" => "Dolce a base di riso cotto con latte, zucchero, e cannella.",
                "price" => 8.99,
                "visible" => true,
                "user_id" => 14
            ]
        ];

        $tailandese = [
            [
                "name" => "Pad Thai",
                "description" => "Noodles di riso saltati in padella con gamberetti, pollo o tofu, uova, germogli di soia, e conditi con salsa di tamarindo, peperoncino, aglio, lime e arachidi tritate.",
                "price" => 15.99,
                "visible" => true,
                "user_id" => 15
            ],
            [
                "name" => "Tom Yum Goong",
                "description" => "Zuppa di gamberi piccante e aspra con erbe aromatiche come lemon grass, galanga, foglie di lime kaffir e peperoncino.",
                "price" => 18.75,
                "visible" => true,
                "user_id" => 15
            ],
            [
                "name" => "Massaman Curry",
                "description" => "Curry cremoso a base di carne (spesso manzo o pollo), patate, cipolle e spezie come cannella, cardamomo e noce moscata.",
                "price" => 17.50,
                "visible" => true,
                "user_id" => 15
            ],
            [
                "name" => "Som Tum",
                "description" => "Insalata di papaya verde, pestata con pomodori ciliegia, fagiolini, arachidi e condita con salsa di pesce, lime e peperoncino.",
                "price" => 12.99,
                "visible" => true,
                "user_id" => 15
            ],
            [
                "name" => "Khao Pad",
                "description" => "Riso fritto saltato con uova, cipolle, cipollotti, e spesso carne o frutti di mare.",
                "price" => 14.99,
                "visible" => true,
                "user_id" => 15
            ],
            [
                "name" => "Gaeng Keow Wan",
                "description" => "Curry verde piccante a base di pollo, manzo o gamberi con latte di cocco, melanzane, peperoni, basilico e lime kaffir.",
                "price" => 19.99,
                "visible" => true,
                "user_id" => 16
            ],
            [
                "name" => "Pad Krapow Moo",
                "description" => "Maiale tritato saltato con basilico thai, peperoncino, aglio e salsa di pesce, spesso servito con riso bianco e un uovo fritto in cima.",
                "price" => 16.75,
                "visible" => true,
                "user_id" => 16
            ],
            [
                "name" => "Tom Kha Gai",
                "description" => "Zuppa di pollo con latte di cocco, galanga, lemon grass, foglie di lime kaffir, peperoncino e funghi.",
                "price" => 15.50,
                "visible" => true,
                "user_id" => 16
            ],
            [
                "name" => "Pad See Ew",
                "description" => "Noodles di riso larghi saltati in padella con carne (spesso manzo o pollo), uova, broccoli e salsa di soia dolce.",
                "price" => 16.99,
                "visible" => true,
                "user_id" => 16
            ],
            [
                "name" => "Mango Sticky Rice",
                "description" => "Dolce tradizionale tailandese composto da riso glutinoso cotto al vapore, servito con fettine di mango fresco e una salsa dolce di cocco.",
                "price" => 9.99,
                "visible" => true,
                "user_id" => 16
            ]
        ];        

        foreach($giapponese as $dish){
            Dish::create($dish);
        }
        
        foreach($italiana as $dish){
            Dish::create($dish);
        }
        
        foreach($messicana as $dish){
            Dish::create($dish);
        }

        foreach($francese as $dish){
            Dish::create($dish);
        }

        foreach($indiana as $dish){
            Dish::create($dish);
        }

        foreach($cinese as $dish){
            Dish::create($dish);
        }

        foreach($spagnola as $dish){
            Dish::create($dish);
        }

        foreach($tailandese as $dish){
            Dish::create($dish);
        }
    }
}
