<?php
/* 
 * Marcelo Motta Desenvolvedor
 * www.marcelomotta.com
 */
 
class Tamanhos_produto_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tamanhos_produto by id
     */
    function get_tamanhos_produto($id)
    {
        return $this->db->get_where('tamanhos_produtos',array('idT'=>$id))->row_array();
    }

    /*
     * Get tamanhos_produto by id
     */
    function lista_tamanhos_produto($id)
    {
        #return $this->db->get_where('tamanhos_produtos',array('produtoID'=>$id))->row_array();
        $this->db->select('*');    
        #$this->db->from('tamanhos_produtos');
        $this->db->where('produtoID',$id);
        $this->db->order_by('idT', 'desc');
        $this->db->join('produtos','tamanhos_produtos.produtoID = produtos.idP');
        $this->db->join('cores','tamanhos_produtos.corID = cores.id');
        $this->db->join('tamanhos','tamanhos_produtos.tamanhoID = tamanhos.id');
        return $this->db->get('tamanhos_produtos')->result_array();
        
    }
    
    /*
     * Get all tamanhos_produtos count
     */
    function get_all_tamanhos_produtos_count()
    {
        $this->db->from('tamanhos_produtos');

        return $this->db->count_all_results();
    }
        
    /*
     * Get all tamanhos_produtos
     */
    function get_all_tamanhos_produtos($params = array())
    {
        $this->db->order_by('idT', 'desc');
        $this->db->join('produtos','tamanhos_produtos.produtoID = produtos.id');
        $this->db->join('cores','tamanhos_produtos.corID = cores.id');
        $this->db->join('tamanhos','tamanhos_produtos.tamanhoID = tamanhos.id');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('tamanhos_produtos')->result_array();
    }
        
    /*
     * function to add new tamanhos_produto
     */
    function add_tamanhos_produto($params)
    {
        $this->db->insert('tamanhos_produtos',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tamanhos_produto
     */
    function update_tamanhos_produto($id,$params)
    {
        $this->db->where('idT',$id);
        return $this->db->update('tamanhos_produtos',$params);
    }
    
    /*
     * function to delete tamanhos_produto
     */
    function delete_tamanhos_produto($id)
    {
        return $this->db->delete('tamanhos_produtos',array('idT'=>$id));
    }
}
