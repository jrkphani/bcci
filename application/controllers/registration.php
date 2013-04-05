
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
	 if($this->session->userdata('logged_in'))
	   {
		 $session_data = $this->session->userdata('logged_in');
		 $data['username'] = $session_data['username'];
		 $this->load->view('home', $data);
	   }
	   else
	   {
		$this->load->library('form_validation');
		  // field name, error message, validation rules
		  $this->form_validation->set_rules('firstname', 'First Name', 'trim|required|min_length[2]|max_length[20]|xss_clean');
		  $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|min_length[1]|max_length[20]|xss_clean');
		  $this->form_validation->set_rules('email_address', 'Email', 'trim|required|valid_email');
		  $this->form_validation->set_rules('pass_word', 'Password', 'trim|required|min_length[4]|max_length[32]');
		  //$this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');

		  if($this->form_validation->run() == FALSE)
		  {
			$data['errors']=validation_errors();
			$data['success']='no';
			$result['resultset']=$data;
			$this->load->view('json',$result);
		  }
		  else
		  {
			$this->load->model('user');
			$post_data=array(
							'firstname'=>$this->input->post('firstname'),
							'lastname'=>$this->input->post('lastname'),
							'email'=>$this->input->post('email_address'),
							'password'=>md5($this->input->post('pass_word')),
							'active'=>sha1(mt_rand(10000,99999).time().$this->input->post('email_address'))
						  );
			$check_data=array('email'=>$post_data['email']);
			if(!$this->user->check_user($check_data))
			{
				if($this->user->add_user($post_data))
				{
					$this->load->library('email');
					#$config['protocol'] = 'sendmail';
					#$config['mailpath'] = '/usr/sbin/sendmail';
					$config['charset'] = 'iso-8859-1';
					$config['wordwrap'] = TRUE;
					$config['mailtype']='html';
					$this->email->initialize($config);
					$this->email->from('bcci@digitalchakra.in', 'Bindaas Cricket Cafe!');
					$this->email->to($post_data['email']);
					#$this->email->cc('another@another-example.com');
					#$this->email->bcc('them@their-example.com');
					$this->email->subject('Confirm your bcci.com account, '.$post_data['firstname'].' '.$post_data['lastname']);
					$message= 'You\'re almost there! Just confirm your Email.<br><br>
					You have successfully created a bcci.com account and all you need to do is activate it. It will give you full access to bcci.com and all future notifications will be sent to this email address.
					<br><br>
					Verify your Account in <a href="'.base_url('registration/activation/'.$this->db->insert_id().'/'.$post_data['active']).'">Bindas Cricket Cafe!</a>
					<br><br>
					<b>It\'s your Bindas Cricket Cafe!</b>	'; 
					$this->email->message($message);
					if($this->email->send())
					{
						$data['mail']='yes';
					}
					else
					{
						$data['mail']='no';
					}
					$data['success']='yes';
					$result['resultset']=$data;
					$this->load->view('json',$result);
				}
				//$this->load->view('login_view');
				//redirect('home', 'refresh');
			}
			else
			{
				$data['errors']="Email is already registered";
				$data['success']='no';
				$result['resultset']=$data;
				$this->load->view('json',$result);
			}
		   
		  
		  }
	   }
   
 }
 function activation()
 {
	 $id = ($this->uri->segment(3)) ? $this->uri->segment(3) : NULL;
	 $code = ($this->uri->segment(4)) ? $this->uri->segment(4) : NULL;
	 if(($id) &&  strlen($code)>2)
	 {
		 $this->load->model('user');
		 if($this->user->activate_user($id,$code))
		 {
			$data['view_page'] = 'regiter_success';
			$this->load->view('template', $data);
		 }
		 else
		 {
			 redirect('home', 'refresh');
		 }
	 }
	 else
	 {
		 redirect('home', 'refresh');
	 }
 }

}

?>
