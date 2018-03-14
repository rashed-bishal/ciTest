<?php

/**
 *
 */
class Home extends CI_Controller
{

  public function test($user_id)
  {
    //$this->load->model('myModel');

    $info["objects"] = $this->myModel->get_users($user_id,'Drew');

    $this->load->view('new_view',$info);

  }


  public function insert()
  {
    $user = 'Rashed Bishal';
    $pass = 'vvsecret';

    $this->myModel->create_user(['username'=>$user, 'password'=>$pass]);

  }

  public function update()
  {
    $id = 5;

    $user = 'anonymous';
    $pass = 'published';

    $this->myModel->update_user(['username'=>$user,'password'=>$pass],$id);
  }

  public function delete()
  {
    $id = 5;

    $this->myModel->delete_user($id);
  }

  public function index()
  {
    $data['main_view'] = 'new_view';
    $this->load->view('layouts/main',$data);
  }


}



 ?>
