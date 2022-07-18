<?php

use Illuminate\Database\Seeder;
use App\Train;

class TrainsTableSeeder extends Seeder
{
    private $cities_partenza = ['Roma','Milano','Venezia','Torino','Napoli'];
    private $cities_arrivo = ['Berlino','Monaco','Trapani','Barcellona','Amsterdam'];
    private $number_carrozze = [18, 40, 60, 23, 46];
    private $orario_partenza = [17, 18, 19, 16, 15];
    private $orario_arrivo = [20, 21, 22, 23, 23];
    private $numero_treno = [4568, 7894, 4687, 4568, 3323];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++){
            $train = new Train();
            $train->Azienda = 'Trenord';
            $train->Cancellato = !rand(0,1);
            $train->Stazione_di_partenza = $this->cities_partenza[rand(0,4)];
            $train->Stazione_di_arrivo = $this->cities_arrivo[rand(0,4)];
            $train->Orario_di_partenza = $this->orario_partenza[rand(0,4)];
            $train->Orario_di_arrivo = $this->orario_arrivo[rand(0,4)];
            $train->Numero_carrozze = $this->number_carrozze[rand(0,4)];
            $train->Codice_Treno = $this->numero_treno[rand(0,4)];
            $train->In_orario = !rand(0,1);
            $train->save();
        }
    }
}
