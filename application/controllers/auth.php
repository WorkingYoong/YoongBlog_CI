<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 인증 클래스
 */
class auth extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
  }
  public function login()
  {
    $this->load->view('head');
    $this->load->view('login');
    $this->load->view('footer');
  }
  public function authentication()
  {
    if ( $this->input->post('id') == $authentication('id') && $this->input->post('password') == $authentication('password'))
    {
      $this->session->set_userdata('is_login', true);
      $this->load->helper('url');
      redirect("/topic/add");
    }
    else
    {
      $this->session->set_flashdata('message', '로그인에 실패 했습니다');
      $this->load->helper('url');
      redirect("/auth/login");
    }

  }


}


?>
