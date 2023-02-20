<?php namespace App\Models;

use CodeIgniter\Model;

class Dados_AdminModel extends Model{

    protected $table = 'admin_glossario';
    protected $primaryKey = 'id_admin';
    protected $allowedFields = ['email', 'senha', 'data_acesso', 'hora_acesso'];

    public function validaLogin($dados){

        $sql = "SELECT *
                  FROM admin_glossario
                 WHERE email = ?
                   AND senha = ?";

        $query = $this->db->query($sql, [$dados['email'], md5($dados['senha'])]);
            
            return $query -> getResultArray();
    }
}