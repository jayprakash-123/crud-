<?php

// main controller


class Crud extends CI_Controller {

	

	public function index(){
	
		// ye hmare  crud_view file ko load karega all data ke sath and $data hmara array hai product detals hmara index hai jo 
		//getallproduct ka detail store krega
		
		$data['product_details']=$this->crud_model->getAllProducts();
		
  

		// 1. ye hmare sare data ko crud_view  me bhej dega show karane ke liye

		$this->load->view('crud_view',$data);
	}

//  2. add data in your database
//
//
//
//

public function addProduct(){
	
	//$file=$this->request->getfile('image');
	//print_r($file);
   
	 //Check whether user upload picture
	 if(!empty($_FILES['picture']['name'])){

        

		$config['upload_path'] = './uploads/images/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['file_name'] = $_FILES['picture']['name'];
		
		//Load upload library and initialize configuration
		$this->load->library('upload',$config);
		if($this->upload->do_upload('picture')){
			$uploadData = $this->upload->data();
			$picture = $uploadData['file_name'];
		}else{
			$picture="";
		}
	}
	else{
		$picture="";
	}
		// insert data in a tabel
		$result=$this->crud_model->insertProduct([

			'name'=> $this->input->post('name'),
			'Price'=> $this->input->post('Price'),
			'Quantity'=> $this->input->post('Quantity'),
			'image'=>$picture,
			
			
			
			]);
			
			
	
	redirect('index.php/Crud');
		}
	
	

		// 3.pass id which row you are update

		public function editProduct($id)
		{
  
		  $data['singleProduct']=$this->crud_model->getSingleProduct($id);
		  
		  $this->load->view('edit_view',$data);
  
		
  
		}
	

	
      //  update data in your table validation

	  public function update($id){
		if(!empty($_FILES['picture']['name'])){

			$config['upload_path'] = './uploads/images/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = $_FILES['picture']['name'];
			
			//Load upload library and initialize configuration
			$this->load->library('upload',$config);
			if($this->upload->do_upload('picture')){
				$uploadData = $this->upload->data();
				$picture = $uploadData['file_name'];
			}else{
				$picture="";
			}
		}
		else{
			$picture="";
		}

		

			// value update  in your table

			$result=$this->crud_model->updateProduct([

				'name'=> $this->input->post('name'),
				'Price'=> $this->input->post('Price'),
				'Quantity'=> $this->input->post('Quantity'),
				'image'=>$picture,
				
				
			],$id);
				 
		
		
		redirect('index.php/Crud');
		
	}

	

	  // 4.delete data in your database

	public function deleteProduct($id){
	
		$query=$this->crud_model->deleteItem($id);


		redirect('index.php/crud');
	}



	
	
}

?>