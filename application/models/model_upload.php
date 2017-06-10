<?php

class Model_upload extends CI_Model {


  public function create($data_transaksi){

    $this->db->insert('transaksi', $data_transaksi);

  }

}


  ?>
