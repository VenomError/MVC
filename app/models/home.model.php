<?php
class home extends Model
{
  public function __construct()
  {
    parent::__construct();
    $this->_table = 'tabel_user';
    $data = $this->select()->orderBy('id_user', 'DESC')->get();
    echo json_encode($data);
    echo '<br>' . $this->count();
    // $this->data(
    //   [
    //     'nama_lengkap' => 'nijdiads',
    //     'username' => 'kon',
    //     'password' => 'password',
    //   ]
    // );
    // $this->insert();
    // $this->find(3);
    // // $this->where(['id_user'], '=', 5);
    // $this->update(" WHERE ", " id_user = 5");
    // $this->find(5);
    // $this->delete('id_user', 5);
  }
}
