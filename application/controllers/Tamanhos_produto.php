<?php
 
class Tamanhos_produto extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tamanhos_produto_model');
    } 

    /*
     * Listing of tamanhos_produtos
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('tamanhos_produto/index?');
        $config['total_rows'] = $this->Tamanhos_produto_model->get_all_tamanhos_produtos_count();
        $this->pagination->initialize($config);

        $data['tamanhos_produtos'] = $this->Tamanhos_produto_model->get_all_tamanhos_produtos($params);
            #
        $data['_view'] = 'tamanhos_produto/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tamanhos_produto
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('quantidade','Quantidade','required|integer');
		$this->form_validation->set_rules('corID','CorID','required');
		$this->form_validation->set_rules('produtoID','ProdutoID','required');
		$this->form_validation->set_rules('tamanhoID','TamanhoID','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'tamanhoID' => $this->input->post('tamanhoID'),
				'corID' => $this->input->post('corID'),
				'produtoID' => $this->input->post('produtoID'),
				'quantidade' => $this->input->post('quantidade'),
            );
            
            $tamanhos_produto_id = $this->Tamanhos_produto_model->add_tamanhos_produto($params);
            redirect('produto/edit/');
        }
        else
        {
			$this->load->model('Tamanho_model');
			$data['all_tamanhos'] = $this->Tamanho_model->get_all_tamanhos();

			$this->load->model('Cores_model');
			$data['all_cores'] = $this->Cores_model->get_all_cores();

			$this->load->model('Produto_model');
			$data['all_produtos'] = $this->Produto_model->get_all_produtos();
            
            $data['_view'] = 'tamanhos_produto/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Adding a new servicos_os
     */
    function adicionarTamanhos()
    {
        if(isset($_POST) && count($_POST) > 0)
        {
            $params = array(
				'tamanhoID' => $this->input->post('tamanhoID'),
				'corID' => $this->input->post('corID'),
				'produtoID' => $this->input->post('produtoID'),
				'quantidade' => $this->input->post('quantidade'),
            );


            $tamanhos_produto_id = $this->Tamanhos_produto_model->add_tamanhos_produto($params);
//            redirect('os/editar/' . $s['idOs']);
        }
        else
        {
            $this->load->model('Tamanho_model');
			$data['all_tamanhos'] = $this->Tamanho_model->get_all_tamanhos();

			$this->load->model('Cores_model');
			$data['all_cores'] = $this->Cores_model->get_all_cores();

			$this->load->model('Produto_model');
			$data['all_produtos'] = $this->Produto_model->get_all_produtos();
            
            $data['_view'] = 'produto/edit';
            $this->load->view('layouts/main',$data);
        }
    }

    /*
     * Editing a tamanhos_produto
     */
    function edit($id)
    {   
        // check if the tamanhos_produto exists before trying to edit it
        $data['tamanhos_produto'] = $this->Tamanhos_produto_model->get_tamanhos_produto($id);
         

        if(isset($data['tamanhos_produto']['idT']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('quantidade','Quantidade','required|integer');
			$this->form_validation->set_rules('corID','CorID','required');
			$this->form_validation->set_rules('produtoID','ProdutoID','required');
			$this->form_validation->set_rules('tamanhoID','TamanhoID','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'tamanhoID' => $this->input->post('tamanhoID'),
					'corID' => $this->input->post('corID'),
					'produtoID' => $this->input->post('produtoID'),
					'quantidade' => $this->input->post('quantidade'),
                );
                $produto = $this->input->post('produtoID');
                $this->Tamanhos_produto_model->update_tamanhos_produto($id,$params);            
                redirect('produto/edit/'.$produto);
            }
            else
            {
                

                $this->load->model('Tamanho_model');
                $data['all_tamanhos'] = $this->Tamanho_model->get_all_tamanhos();

                $this->load->model('Cores_model');
                $data['all_cores'] = $this->Cores_model->get_all_cores();

                $this->load->model('Produto_model');
                $data['all_produtos'] = $this->Produto_model->get_all_produtos();
                $data['NomeProduto'] = $this->Produto_model->get_produto($id);

                $data['_view'] = 'tamanhos_produto/edit';
                $this->load->view('common/header');
                $this->load->view('common/menu');
                $this->load->view('layouts/main',$data);
                $this->load->view('common/footer');
            }
        }
        else
            show_error('The tamanhos_produto you are trying to edit does not exist.');
    } 

    /*
     * Deleting tamanhos_produto
     */
    function remove($id)
    {
        $tamanhos_produto = $this->Tamanhos_produto_model->get_tamanhos_produto($id);

        // check if the tamanhos_produto exists before trying to delete it
        if(isset($tamanhos_produto['idT']))
        {
            $this->Tamanhos_produto_model->delete_tamanhos_produto($id);
            redirect('produtos/index');
        }
        else
            show_error('The tamanhos_produto you are trying to delete does not exist.');
    }
    
}
