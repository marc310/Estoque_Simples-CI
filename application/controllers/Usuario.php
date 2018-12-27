<?php
/* 
 * Desenvolvido por Marcelo Motta 
 * www.marcelomotta.com
 */
 
class Usuario extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Usuario_model');
    } 

    /*
     * Listing of Usuarios
     */
    function index()
    {
        if($this->session->userdata('nomeusuario') == '')  
           {  
                redirect(site_url('login')); 
           }
           #
           #
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('usuario/index?');
        $config['total_rows'] = $this->Usuario_model->get_all_usuarios_count();
        $this->pagination->initialize($config);

        $data['usuarios'] = $this->Usuario_model->get_all_usuarios($params);
        
        $data['_view'] = 'usuario/index';
        $this->load->view('common/header');
        $this->load->view('common/menu');
        $this->load->view('layouts/main',$data);
        $this->load->view('common/footer');
    }

    /*
     * Adding a new usuario
     */
    function add()
    {   
        if($this->session->userdata('nomeusuario') == '')  
           {  
                redirect(site_url('login')); 
           }
           #
           #
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nomeusuario','Nomeusuario','required');
		$this->form_validation->set_rules('senha','Senha','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'nomeusuario' => $this->input->post('nomeusuario'),
				'senha' => md5($this->input->post('senha')),
            );
            
            $usuario_id = $this->Usuario_model->add_usuario($params);
            redirect('usuario/index');
        }
        else
        {            
            $data['_view'] = 'usuario/add';
            $this->load->view('common/header');
            $this->load->view('common/menu');
            $this->load->view('layouts/main',$data);
            $this->load->view('common/footer');
        }
    }  

    /*
     * Editing a modelo
     */
    function edit($id)
    {   
        if($this->session->userdata('nomeusuario') == '')  
           {  
                redirect(site_url('login')); 
           }
           #
           #
        // check if the usuario exists before trying to edit it
        $data['usuario'] = $this->Usuario_model->get_usuario($id);
        
        if(isset($data['usuario']['id']))
        {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('usuario','Usuario','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'nomeusuario' => $this->input->post('nomeusuario'),
					'senha' => $this->input->post('senha'),
                );

                $this->Usuario_model->update_usuario($id,$params);            
                redirect('usuario/index');
            }
            else
            {
                $data['_view'] = 'usuario/edit';
                $this->load->view('common/header');
                $this->load->view('common/menu');
                $this->load->view('layouts/main',$data);
                $this->load->view('common/footer');
            }
        }
        else
            show_error('The usuario you are trying to edit does not exist.');
    } 

    /*
     * Deleting modelo
     */
    function remove($id)
    {
        $usuario = $this->Usuario_model->get_usuario($id);

        // check if the usuario exists before trying to delete it
        if(isset($usuario['id']))
        {
            $this->Usuario_model->delete_usuario($id);
            redirect('usuario/index');
        }
        else
            show_error('The usuario you are trying to delete does not exist.');
    }
    
}
