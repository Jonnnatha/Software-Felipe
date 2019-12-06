<?php

use Illuminate\Database\Seeder;
use App\Entities\usuario;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      usuario::create([
'nome'  => 'felipe',
'senha' => bcrypt('123'),
'telefone' => '9999999999',
      ]);
    }
}
