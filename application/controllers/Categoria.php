<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Categoria extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Categoria_model');
    } 

    /*
     * Listing of categorias
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('categoria/index?');
        $config['total_rows'] = $this->Categoria_model->get_all_categorias_count();
        $this->pagination->initialize($config);

        $data['categorias'] = $this->Categoria_model->get_all_categorias($params);
        
        $data['_view'] = 'categoria/index';
        $this->load->view('common/header');
        $this->load->view('common/menu');
        $this->load->view('layouts/main',$data);
        $this->load->view('common/footer');
    }

    /*
     * Adding a new categoria
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('categoria','Categoria','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'categoria' => $this->input->post('categoria'),
            );
            
            $categoria_id = $this->Categoria_model->add_categoria($params);
            redirect('categoria/index');
        }
        else
        {            
            $data['_view'] = 'categoria/add';
            $this->load->view('common/header');
            $this->load->view('common/menu');
            $this->load->view('layouts/main',$data);
            $this->load->view('common/footer');
        }
    }  

    /*
     * Editing a categoria
     */
    function edit($id)
    {   
        // check if the categoria exists before trying to edit it
        $data['categoria'] = $this->Categoria_model->get_categoria($id);
        
        if(isset($data['categoria']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('categoria','Categoria','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'categoria' => $this->input->post('categoria'),
                );

                $this->Categoria_model->update_categoria($id,$params);            
                redirect('categoria/index');
            }
            else
            {
                $data['_view'] = 'categoria/edit';
                $this->load->view('common/header');
                $this->load->view('common/menu');
                $this->load->view('layouts/main',$data);
                $this->load->view('common/footer');
            }
        }
        else
            show_error('The categoria you are trying to edit does not exist.');
    } 

    /*
     * Deleting categoria
     */
    function remove($id)
    {
        $categoria = $this->Categoria_model->get_categoria($id);

        // check if the categoria exists before trying to delete it
        if(isset($categoria['id']))
        {
            $this->Categoria_model->delete_categoria($id);
            redirect('categoria/index');
        }
        else
            show_error('The categoria you are trying to delete does not exist.');
    }
    
}