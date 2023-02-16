<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	function __construct()
    {
        parent::__construct();
		$cek = $this->session->userdata('login');
		$url =   $url = current_url();
		$url_cek = $this->session->userdata('url-server');
        if($cek=='sign_up')
		{
			if($url!=$url_cek)
			{
				redirect(base_url('home'));

			}
		}
    }


	
	public function index()
	{
		$this->load->view('login');
	}

	public function sign_in()
	{
		$username      	= $_POST['username'];
		$user       	= $this->db->get_where('login', ['Username' => $username])->row_array();
		if ($user!=null) {
			$this->_login();
			$this->default_nilai();
			} else {
				echo json_encode(array(
					"statusCode"=>400,
						"pesan"     => "Sign-in Gagal, Akun Anda belum terdaftar!"
				));
			}
	}


    private function _login()
    {
        $username      	= $this->input->post('username');
        $password   	= $this->input->post('password');
        $user       	= $this->db->get_where('login', ['Username' => $username])->row_array();
        $verify         = password_verify($password, $user['Password']);
		$url			=   $url = current_url();

		//array session
		$data = [
			'username'      => $user['Username'],
			'password'      => $password,
			'status'        => $user['Status'],
			'login'         => 'sign_up',
			'url-server'    => $url
		];

      
            if ($verify) {
                if($user['Status']==0)
                {
					echo json_encode(array(
					"statusCode"=>400,
						"pesan"     => "Sign-in Gagal, Account Anda telah dinonaktifkan!"
					));

                }else{
					$this->session->set_userdata($data);
                   	echo json_encode(array(
						 "statusCode"   =>200,
						 "pesan"        => "Sukses, Sign-in Berhasil!"
					 ));
                }
               
            } else {
				echo json_encode(array(
					"statusCode"=>400,
						"pesan"     => "Sign-in Gagal, Username atau Password Salah!"
					));
            }
       
    }

	private function default_nilai()
	{
		$default_K_value = [
			'nilai_K' => 5
		];
		$this->session->set_userdata($default_K_value);
	}

	//SECURITI ACCESS
    public function sign_up()
    {
		$this->load->view('regist');
    }

    public function user_add()
    {
        $validation     = $this->form_validation;
        $this->form_validation->set_rules('username', 'Username','required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confpassword', 'Password Confirmation', 'required|matches[password]');
		$array = [
			'Username' => $_POST['username']
		];
		$cek_user = $this->db->get_where('login', $array)->row_array();
        if ($validation->run() == false) {
            echo json_encode(array(
                "statusCode"   =>500,
                "pesan"        => "Failed, Gagal Register!"
            ));
        } else {
			if($cek_user>0)
			{
				echo json_encode(array(
					"statusCode"   =>500,
					"pesan"        => "Failed, User ini telah digunakan!"
				));
			}else{
				$this->model->add_user();
					echo json_encode(array(
					"statusCode"   =>200,
					"pesan"        => "Sukses, Berhasil Register!"
				));

			}
        }
    }

    // public function delete_user_where()
    // {
    //     $id = [
    //         'Id_login' => $_POST['id_login']
    //     ];
    //     $this->model->delete_where('login', $id);
    // }


    // public function where_user()
    // {
      
    //     $id = $_POST['id_login'];
    //     $query = "select * from login where Id_login ='$id'";
    //     $row   = $this->db->query($query)->row_array();
        
    //         $User_data = array();
    //         $User_data[0]=$row['Id_login'];
    //         $User_data[1]=$row['NPM'];
    //         $User_data[2]=$row['NIP'];
    //         $User_data[3]=$row['Username'];
    //         $User_data[4]=$row['Password'];
    //         $User_data[5]=$row['Status'];

    //     echo json_encode($User_data);
    // }
    
    // public function edit_user()
    // {
    //     $where = [
    //         'Id_login' => $_POST['Id_login'],
    //     ];
    //     $data = [
    //         'NPM' => $_POST['npm'],
    //         'NIP' => $_POST['nip'],
    //         'Username' => $_POST['username'],
    //         'Password' => $_POST['password'],
    //         'Status'   => $_POST['status'],
    //     ];
    //     $this->model->edit_data($where,$data,'login');
    // }
}
