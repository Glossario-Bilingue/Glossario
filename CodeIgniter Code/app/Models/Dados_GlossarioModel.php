<?php namespace App\Models;

use CodeIgniter\Model;

class Dados_GlossarioModel extends Model{

    protected $table = 'dados_glossario';
    protected $primaryKey = 'id_termo';
    protected $allowedFields = ['termo', 'sigla', 'classe', 'plural', 'traducao', 'definicao', 'area', 'referencia', 'autor', 'dia'];

    public function searchTerm($term){

        if (is_null($term)) # Nenhum filtro informado, retorna todos os dados do banco
        {
            return $this -> getResultArray()
                         -> order_by('termo');

        } elseif (strlen($term) == 1) # Informado apenas a primeira letra, retorna termos com essa inicial
        {
            $query = $this->db
                            ->query("SELECT *
                                       FROM dados_glossario
                                      WHERE termo LIKE '$term%'
                                      ORDER BY termo");
            
            return $query -> getResultArray();

        } else # Informado algum termo ou pedaço de termo, retorna o que tiver isso em um dos filtros
        {
            $query = $this->db
                            ->query("SELECT *
                                       FROM dados_glossario
                                      WHERE termo LIKE '%$term%'
                                         OR sigla LIKE '%$term%'
                                         OR traducao LIKE '%$term%'
                                      ORDER BY termo");
            
            return $query -> getResultArray();
        }
    }
}