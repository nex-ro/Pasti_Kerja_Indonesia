<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';
use chriskacerguis\RestServer\RestController;
class Auth extends RestController
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_model','user');
    $this->load->model('Exp_model','exp');
  }
  function index_get()
    {
        // if($this->session->userdata('email')){
        //     redirect('Home');
        // }
        $this->form_validation->set_rules('email','Email','trim|required|valid_email',[
            'valid_email' => 'Email Not Valid',
            'required' => 'Email Must not be blank']);
        $this->form_validation->set_rules('pass','Password','trim|required',
            ['required' => 'Password must not be blank']);
        if($this->form_validation->run() == false){
            $this->load->view('layout/header_auth');
            $this->load->view('auth/login');
            $this->load->view('layout/footer_auth');
        } else {
            $this -> cek_login();
        }
    }
  function register_get()
    {
        if($this->session->userdata('email')){
            redirect('home');
        }
        $this->form_validation->set_rules('nama','Nama','required|trim',[
          'required'=> 'Please enter Your first Name',
        ]);
        $this->form_validation->set_rules('noHP','noHP','required|trim',[
          'required'=> 'Please enter your phone number',
        ]);
        $this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[user.email]',[
            'is_unique' => 'Email Have Registered!',
            'valid_email' => 'Must be a valid email',
            'required' => 'Email must not empty']);
        $this->form_validation->set_rules('pass','Password','required|trim|min_length[8]|matches[pass2]',[
            'matches' => 'Password Not same',
            'min_length' => 'Password to short',
            'required' => 'Password must not empty']);
        $this->form_validation->set_rules('pass2','Password','required|trim|min_length[8]|matches[pass]');
        if($this->form_validation->run() == false){
            $this->load->view('layout/header_auth');
            $this->load->view('auth/register');   
            $this->load->view('layout/footer_auth');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'noHp' => htmlspecialchars($this->input->post('noHP', true)),
                'pass' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT),
                'profilePicture' => 'default.jpg',
                'role' => "Worker",
                'jenis_kelamin' => htmlspecialchars($this->input->post('gender', true))
            ];
            $this->user->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun terdaftar, Silahkan Login!</div>');
            redirect('login');        
        }
    }
  public function cek_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('pass');
        if($email == "ADMIN@ADMIN.com" && $password == "ADMINPKI"){
            redirect("Admin");
        }
        $user = $this->db->get_where('user', ['email'=>$email])->row_array();
        if ($user) {
            if (password_verify($password, $user['pass'])) {
                $data = [
                    'email' => $user['email'],
                    'nama' => $user['nama'],
                    'role' => $user['role'],
                    'id' => $user['id'],
                ];
                $this->session->set_userdata($data);
                redirect('Home');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password!</div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email Not Found </div>');
            redirect("login");
        }
    }
    public function logout(){
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('id');
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Log out Success</div>');
        redirect('login');
    }
}
