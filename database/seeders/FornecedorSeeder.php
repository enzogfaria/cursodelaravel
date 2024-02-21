<?php

namespace Database\Seeders;

use App\Models\Fornecedor;
use Illuminate\Database\Seeder;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 1';
        $fornecedor->site = 'fornecedor1.com.br';
        $fornecedor->uf = 'CE';
        $fornecedor->email = 'contato@fornecedor1.com.br';
        $fornecedor->save();
    }
}
