<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Categoria_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get categoria by id
     */
    function get_categoria($id)
    {
        return $this->db->get_where('categorias',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all categorias count
     */
    function get_all_categorias_count()
    {
        $this->db->from('categorias');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all categorias
     */
    function get_all_categorias($params = array())
    {
        $this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('categorias')->result_array();
    }
        
    /*
     * function to add new categoria
     */
    function add_categoria($params)
    {
        $this->db->insert('categorias',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update categoria
     */
    function update_categoria($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('categorias',$params);
    }
    
    /*
     * function to delete categoria
     */
    function delete_categoria($id)
    {
        return $this->db->delete('categorias',array('id'=>$id));
    }
}
