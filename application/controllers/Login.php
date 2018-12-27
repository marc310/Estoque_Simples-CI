<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Login extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
    }

    function index() 
    {
		if($this->session->userdata('nomeusuario') != '')  
           {  
                redirect(site_url('dashboard')); 
           }
        $this->load->view('login/entrar');
	}
	
	/**
	* login function.
	*/
	public function login()
	{
		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		// set validation rules
		$this->form_validation->set_rules('nomeusuario', 'Nomeusuario', 'required');
		$this->form_validation->set_rules('senha', 'Senha', 'required');
		
		if ($this->form_validation->run())
		{
			// true
			$nomeusuario = $this->input->post('nomeusuario');
			$senha = md5($this->input->post('senha'));
			#
			$this->load->model('Usuario_model');
			if ($this->Usuario_model->validar($nomeusuario, $senha))
			{
				$session_data = array(
					'nomeusuario' => $nomeusuario
				);
				$this->session->set_userdata($session_data);
				redirect(base_url() . 'login/enter');
			}
			else
			{
				$this->session->set_flashdata('Error', 'Nome de usuário e senha não confere.');
				redirect(base_url() . 'login');
			}
		}
		else
		{
			//false
			$this->login();
		}
		
	}
	
	/**
	 * logout function.
	 * 
	 */

	function enter(){  
           if($this->session->userdata('nomeusuario') != '')  
           {  
                #$data['boasVindas'] = echo '<h2>Bem Vindo - '.$this->session->userdata('nomeusuario').'</h2>';  
                #$data['logout'] = echo '<label><a href="'.base_url().'login/logout">Logout</a></label>';  
				redirect(base_url() . 'dashboard/index');  
           }  
           else  
           {  
			   //TODO
			   redirect(base_url() . 'login');  
           }  
      }  
      function logout()  
      {  
           $this->session->unset_userdata('nomeusuario');  
           redirect(base_url() . 'login');  
      }  
    #
    #
    #
}
