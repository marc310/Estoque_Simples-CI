<?php
 
class Produto_model extends CI_Model
{
    public $table = 'produtos';
    public $id = 'id';
    public $order = 'DESC';
    
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get produto by id
     */
    function get_produto($id)
    {
        return $this->db->get_where('produtos',array('idP'=>$id))->row_array();
    }
    
    
    /*
     * Get all produtos count
     */
    function get_all_produtos_count()
    {
        $this->db->from('produtos');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all produtos
     */
    function get_all_produtos($params = array())
    {
        $this->db->order_by('idP', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('produtos')->result_array();
    }

    // get data by id
    function get_by_id($idP)
    {
        $this->db->where($this->idP, $idP);
        return $this->db->get($this->table)->row();
    }

    // get data by id
    function produtosPorID($idP)
    {
        $this->db->where('idP', $idP);
        $this->db->join('modelos','produtos.modeloID = modelos.id');
        $this->db->join('categorias','produtos.categoriaID = categorias.id');
        return $this->db->get($this->table)->row();
    }
        
    /*
     * function to add new produto
     */
    function add_produto($params)
    {
        $this->db->insert('produtos',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update produto
     */
    function update_produto($idP,$params)
    {
        $this->db->where('idP',$idP);
        return $this->db->update('produtos',$params);
    }
    
    /*
     * function to delete produto
     */
    function delete_produto($idP)
    {
        return $this->db->delete('produtos',array('idP'=>$idP));
    }
}
