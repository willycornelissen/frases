<?php

# database/seeds/QuoteTableSeeder.php

use App\Models\Quote;
use Illuminate\Database\Seeder;

class QuoteTableSeeder extends Seeder
{
    public function run()
    {
        Quote::truncate();
        Quote::create([
            'text' => 'Não há nada superior à verdade.',
            'author' => 'Helena Petrovna Blavatsky'

        ]);

        Quote::create([
            'text' => 'O homem tem o tamanho dos seus sonhos.',
            'author' => 'Jorge Angel Livraga.'
        ]);

        Quote::create([
            'text' => 'O ser humano é dono do que cala, e escravo do que fala.',
            'author' => 'Michel Echenique Isaza'
        ]);

        //... add more quotes if you want!
    }
}
