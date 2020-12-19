<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Contacto extends Seeder
{
	public function run()
	{
		$nombre = "Marco Antonio";
		$paterno ="Pineda";
		$materno ="Peredo";
		$telefono ="5574287460";
		$email ="irekeber@gmail.com";
		$id_categoria = 1;

		$data = [
						'nombre' => $nombre,
						'paterno' => $paterno,
						'materno' => $materno,
						'telefono' => $telefono,
						'email' => $email,
						'id_categoria' => $id_categoria
                ];

		$this->db->table('t_contactos')->insert($data);
		
		$nombre2 = "Juan";
		$paterno2 ="Perez";
		$materno2 ="Medina";
		$telefono2 ="5520451612";
		$email2 ="juan@gmail.com";
		$id_categoria2 = 2;

		$data2 = [
						'nombre' => $nombre2,
						'paterno' => $paterno2,
						'materno' => $materno2,
						'telefono' => $telefono2,
						'email' => $email2,
						'id_categoria' => $id_categoria2
                ];

		$this->db->table('t_contactos')->insert($data2);
	}
}
