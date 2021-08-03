<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title> Crud Operation </title>
    <link rel="stylesheet" type="text/css"href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"href="<?php echo base_url();?>assets/js/bootstrap.min.js">

</head>

	<body> 
    <div class="jumbotron">
    <h1 align="center">CRUD CI APP </APP>
    </div>
    <div class="container">
    <div class="clear-fix">
    <h3 style="float: left"> All Product </h3>
   
    

    
    <a href="#" class="btn btn-primary" style="float: right"data-toggle="modal" data-target="#exampleModal"> Add Product </a>
    <table class="table table-striped table-hover">
  
    
<thead>
<tr>
<th> Product Name</th>
<th> Product Price</th>
<th> Product Quantity</th>

<th> Image </th>
<th> Action</th>

</tr>
</thead>
<tbody>

<?php foreach($product_details as $products):?>
  
<tr>
<td>
<?php echo $products->name;?>
</td>
<td>
<?php echo $products->Price;?>
</td>
<td>
<?php echo $products->Quantity;?>
</td>
<td>

<img src="<?php echo base_url().'/uploads/images/'.$products->image; ?> " height="100px" width="100px" alt="image">
</td>
<td>
<a href="<?php echo base_url().'index.php/Crud/editProduct/'.$products->id; ?>" class="btn btn-success">Edit</a>
<a href="<?php echo base_url().'index.php/Crud/deleteProduct/'.$products->id; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this data?');" value="">Delete</a>


</td>
</tr>
<?php endforeach; ?>

</tbody>

</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    
    <form action="<?php echo base_url();?>index.php/Crud/addProduct" method="POST" enctype="multipart/form-data" onsubmit="return Validate(this);">
    
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"" >ADD Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  
      <label for="name" value="name">Name</label>
      <input type="text" id="name" name="name"placeholder="enter your name" pattern="^[a-zA-Z\s]+" class="form_control" title="Name contain invalid"><br><br>

   

     

      </div>
      <div class="modal-body">
      <div class="form-group">
      <label for="Price" value="Price">Price</label>
      <input type="number"name="Price"placeholder="enter your price in number"class="form_control">
      
      </div>
      <div class="modal-body">
      <div class="form-group">
      <label for="Quantity" value="Quantity">Quantity</label>
      <input type="number"name="Quantity"placeholder="enter your quantity in number"class="form_control">
      <br /><br />
      </div>

      



      <div class ="col-mod-6">
      <div class="form-group mb-2">
      <label> Image </label>
      <input type="file" name="picture" class="form-control" required />
      </div>
      </div>

      

        
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="insert"value="Add Product"class="btn btn-info" >

      </div>
      </form>
    </div>
  </div>
</div>
<script>
      var _validFileExtensions = [".jpg", ".jpeg", ".bmp", ".gif", ".png"];    
function Validate(oForm) {
    var arrInputs = oForm.getElementsByTagName("input");
    for (var i = 0; i < arrInputs.length; i++) {
        var oInput = arrInputs[i];
        if (oInput.type == "file") {
            var sFileName = oInput.value;
            if (sFileName.length > 0) {
                var blnValid = false;
                for (var j = 0; j < _validFileExtensions.length; j++) {
                    var sCurExtension = _validFileExtensions[j];
                    if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                        blnValid = true;
                        break;
                    }
                }
                
                if (!blnValid) {
                    alert("Sorry please valid files " + _validFileExtensions.join(", "));
                    return false;
                }
            }
        }
    }
  
    return true;
}
      </script>
     

    


</div>
 

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    </body>
    </html>




