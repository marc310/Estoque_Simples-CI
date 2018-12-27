<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Produtos extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Produtos_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if($this->session->userdata('nomeusuario') == '')  
           {  
                redirect(site_url('login')); 
           }

        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'produtos/index?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'produtos/index?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'produtos/index';
            $config['first_url'] = base_url() . 'produtos/index';
        }

        $config['per_page'] = 0;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Produtos_model->total_rows($q);
        $produtos = $this->Produtos_model->get_limit_data($config['per_page'], $start, $q);

        // $this->load->library('pagination');
        // $this->pagination->initialize($config);

        $data = array(
            'produtos_data' => $produtos,
            'q' => $q,
            //'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('common/header');
        $this->load->view('common/menu');
        $this->load->view('produtos/produtos_list', $data);
        $this->load->view('common/footer');
    }

    public function read($idP) 
    {
        $row = $this->Produtos_model->get_by_id($idP);
        if ($row) {
            $data = array(
		'idP' => $row->idP,
		'nome' => $row->nome,
		'descricao' => $row->descricao,
		'modeloID' => $row->modeloID,
		'categoriaID' => $row->categoriaID,
        );
        $this->load->view('common/header');
        $this->load->view('common/menu');
        $this->load->view('produto/produto_read', $data);
        $this->load->view('common/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('produtos'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('produtos/create_action'),
	    'id' => set_value('idP'),
	    'nome' => set_value('nome'),
	    'descricao' => set_value('descricao'),
	    'modeloID' => set_value('modeloID'),
	    'categoriaID' => set_value('categoriaID'),
	);
        $this->load->view('produtos/produtos_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nome' => $this->input->post('nome',TRUE),
		'descricao' => $this->input->post('descricao',TRUE),
		'modeloID' => $this->input->post('modeloID',TRUE),
		'categoriaID' => $this->input->post('categoriaID',TRUE),
	    );

            $this->Produtos_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('produtos'));
        }
    }
    
    public function update($idP) 
    {
        $row = $this->Produtos_model->get_by_id($idP);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('produtos/update_action'),
		'idP' => set_value('idP', $row->idP),
		'nome' => set_value('nome', $row->nome),
		'descricao' => set_value('descricao', $row->descricao),
		'modeloID' => set_value('modeloID', $row->modeloID),
		'categoriaID' => set_value('categoriaID', $row->categoriaID),
	    );
            $this->load->view('produtos/produtos_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('produtos'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idP', TRUE));
        } else {
            $data = array(
		'nome' => $this->input->post('nome',TRUE),
		'descricao' => $this->input->post('descricao',TRUE),
		'modeloID' => $this->input->post('modeloID',TRUE),
		'categoriaID' => $this->input->post('categoriaID',TRUE),
	    );

            $this->Produtos_model->update($this->input->post('idP', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('produtos'));
        }
    }
    
    public function delete($idP) 
    {
        $row = $this->Produtos_model->get_by_id($idP);

        if ($row) {
            $this->Produtos_model->delete($idP);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('produtos'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('produtos'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nome', 'nome', 'trim|required');
	$this->form_validation->set_rules('descricao', 'descricao', 'trim|required');
	$this->form_validation->set_rules('modeloID', 'modeloid', 'trim|required');
	$this->form_validation->set_rules('categoriaID', 'categoriaid', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "produtos.xls";
        $judul = "produtos";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Nome");
	xlsWriteLabel($tablehead, $kolomhead++, "Descricao");
	xlsWriteLabel($tablehead, $kolomhead++, "ModeloID");
	xlsWriteLabel($tablehead, $kolomhead++, "CategoriaID");

	foreach ($this->Produtos_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nome);
	    xlsWriteLabel($tablebody, $kolombody++, $data->descricao);
	    xlsWriteNumber($tablebody, $kolombody++, $data->modeloID);
	    xlsWriteNumber($tablebody, $kolombody++, $data->categoriaID);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=produtos.doc");

        $data = array(
            'produtos_data' => $this->Produtos_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('produtos/produtos_doc',$data);
    }

}
