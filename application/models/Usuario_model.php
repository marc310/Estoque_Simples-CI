<?php
/* 
 * Desenvolvido por Marcelo Motta 
 * www.marcelomotta.com
 */
 
class Usuario_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /**
	 * valida a entrada do usuario
	 */
    public function validar($nomeusuario, $senha)
    {
        $this->db->where('nomeusuario', $nomeusuario);
        $this->db->where('senha', $senha);
        $query = $this->db->get('usuarios');
        #
        if($query->num_rows() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    #
    #
    /*
     * Get usuario by id
     */
    function get_usuario($id)
    {
        return $this->db->get_where('usuarios',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all usuarios count
     */
    function get_all_usuarios_count()
    {
        $this->db->from('usuarios');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all usuarios
     */
    function get_all_usuarios($params = array())
    {
        $this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('usuarios')->result_array();
    }
        
    /*
     * function to add new modelo
     */
    function add_usuario($params)
    {
        $this->db->insert('usuarios',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update modelo
     */
    function update_usuario($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('usuarios',$params);
    }
    
    /*
     * function to delete modelo
     */
    function delete_usuario($id)
    {
        return $this->db->delete('usuarios',array('id'=>$id));
    }
    #
    #
    #
}
