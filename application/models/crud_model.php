<?php
class crud_model extends CI_Model{

    //1. ye hmara sara data dega tabel se

public function getAllProducts(){

    $query=$this->db->get('products');
    //echo $this->db->last_query();
    //print_r($query);
  
    if($query)
    {
        return $query->result();
    }
   }

   // 2.insert data in tabel

 public function insertProduct($data)
    {
    $query=$this->db->insert('products',$data);
    
     //$query=$this->db->get('products');
 
    

}
//3. which data edit in your tabel
public function getSingleProduct($id)
{
  $this->db->where('id',$id);
  $query=$this->db->get('products');
  //echo $this->db->last_query();
  
  if($query)
  {
      return $query->result();
  }

}
//  edit data in tabel

public function updateProduct($data,$id){
    $this->db->where('id',$id);
    $this->db->update('products',$data);
   
}

  // 4.delet data in model

 public function deleteItem($id)
 {

      $this->db->where('id',$id);
      $query=$this->db->delete('products');
     
  }





}



?>
