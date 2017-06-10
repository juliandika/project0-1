<?php

class Model_master_data extends CI_Model {

  public function all(){

    $data = $this->db->get('transaksi');

    return $data->result();

  }

  public function find($id_transaksi){
    $hasil = $this->db->where('id_transaksi', $id_transaksi)
                      ->limit(1)
                      ->get('transaksi');
      if($hasil->num_rows() > 0){
        return $hasil->row();
      } else {
        return array();
      }
  }

  public function payment($id_transaksi, $data_transaksi){
    $this->db->where('id_transaksi', $id_transaksi)
             ->update('transaksi', $data_transaksi);

  }

  public function getSaldo($id_user){

    $hasil = $this->db->select('saldo')
                      ->where('id_user', $id_user)
                      ->get('users');

    return $hasil->row_array();
  }

  public function getPrice($id_transaksi){
    $hasil = $this->db->select('harga')
                      ->where('id_transaksi', $id_transaksi)
                      ->get('transaksi');

    return $hasil->row_array();
  }

  public function getStatusPembayaran($id_transaksi){
    $hasil = $this->db->select('status_pembayaran')
                      ->where('id_transaksi', $id_transaksi)
                      ->get('transaksi');

    return $hasil->row_array();
  }

  public function update_saldo($id_user, $users) {

    $this->db->where('id_user', $id_user)
             ->set($users)
             ->update('users');
  }

  public function update_pembayaran($id_transaksi, $transaksi){

    $this->db->where('id_transaksi', $id_transaksi)
             ->set($transaksi)
             ->update('transaksi');
  }
}


?>
