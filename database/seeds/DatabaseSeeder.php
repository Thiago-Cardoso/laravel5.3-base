<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {		
    	Model::unguard();
         $this->call(ProdutoTableSeeder::class);
    }
}


class ProdutoTableSeeder extends Seeder {

	public function run(){
				DB::insert('insert into produtos
			(nome, quantidade, valor, descricao)
			values (?,?,?,?)',
			array('Geladeira', 2, 50.00,
			'Side by Side com gelo na porta'));

	}
}	