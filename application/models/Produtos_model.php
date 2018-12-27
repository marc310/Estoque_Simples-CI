<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Produtos_model extends CI_Model
{

    public $table = 'produtos';
    public $idP = 'idP';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->idP, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($idP)
    {
        $this->db->where($this->idP, $idP);
        return $this->db->get($this->table)->row();
    }

    
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('idP', $q);
	$this->db->or_like('nome', $q);
	$this->db->or_like('descricao', $q);
	$this->db->or_like('modeloID', $q);
    $this->db->or_like('categoriaID', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        #$this->db->from('produtos');
        $this->db->order_by('idP', 'DESC');
        $this->db->join('modelos','produtos.modeloID = modelos.id');
        $this->db->join('categorias','produtos.categoriaID = categorias.id');
        #$this->db->join('modelos','produtos.modeloID = modelos.id');
        

        $this->db->like('idP', $q);
	$this->db->or_like('nome', $q);
	$this->db->or_like('produtos.descricao', $q);
	$this->db->or_like('modeloID', $q);
	$this->db->or_like('categoriaID', $q);
    $this->db->or_like('modelo', $q);
	$this->db->or_like('categoria', $q);
    $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($idP, $data)
    {
        $this->db->where($this->idP, $idP);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($idP)
    {
        $this->db->where($this->idP, $idP);
        $this->db->delete($this->table);
    }

}
