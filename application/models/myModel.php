<?php

/**
 *
 */
class myModel extends CI_Model
{

  public function get_users($user_id,$uname)
  {

    //$res = $this->db->get('info');

    $this->db->where(['Id' => $user_id, 'username' => $uname]);

    $res = $this->db->get('info');

    return $res->result();
  }

  public function create_user($data)
  {
    $this->db->insert('info',$data);
  }

  public function update_user($data,$id)
  {
    $this->db->where('Id',$id);
    $this->db->update('info',$data);
  }

  public function delete_user($id)
  {
    $this->db->where('Id',$id);
    $this->db->delete('info');
  }



}



 ?>
