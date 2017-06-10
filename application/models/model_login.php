<?php

class Model_login extends CI_Model {

  public function all(){

    $result = $this->db->get('products');

    if($result->num_rows() > 0){
      return $result->result();
    } else {

      return array();
    }
  }

  public function find($id){

  $hasil = $this->db->where('id', $id)
                    ->limit(1)
                    ->get('products');
    if($hasil->num_rows() > 0){
      return $hasil->row();
    } else {
      return array();
    }
  }

  public function create($data_products){

    $this->db->insert('products', $data_products);

  }
  public function update($id, $data_products){

    $this->db->where('id', $id)
             ->update('products', $data_products);
  }
  public function delete($id){
    $this->db->where('id', $id)
             ->delete('products');
  }
}

?>
