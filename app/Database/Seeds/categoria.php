<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Categoria extends Seeder
{
	public function run()
	{
		$categoria = "Escuela";
		$descripcion ="Gente de la escuela";

		$data = [
						'categoria' => $categoria,
						'descripcion' => $descripcion
                ];

		$this->db->table('t_categorias')->insert($data);
		
		$categoria2 = "Empresa";
		$descripcion2 ="Gente del trabajo";

		$data2 = [
						'categoria' => $categoria2,
						'descripcion' => $descripcion2
                ];

        $this->db->table('t_categorias')->insert($data2);
	}
}
