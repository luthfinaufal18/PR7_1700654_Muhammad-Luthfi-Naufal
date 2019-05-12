<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  /**
  *
  */
  class Home extends CI_Controller
  {

    function __construct()
    {
      // code...
      parent::__construct();
      $this->load->model('web');
    }

    public function index()
    {
      $data = array(
        'title' => 'Data Kereta',
        'data_lokomotif' => $this->web->get_all_lokomotif(),
        'data_gerbong' => $this->web->get_all_gerbong(),
        'data_kursi' => $this->web->get_all_kursi(),
        'datalj' => $this->web->get_all_LJ(),
        'datarj' => $this->web->get_all_RJ()
      );

      $this->load->view('backend/header');
      $this->load->view('backend/home', $data);
      $this->load->view('backend/footer');
    }
    public function about(){

    }
  }

  ?>

</html>
