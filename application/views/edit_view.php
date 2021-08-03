
<html lang="en">
<head>
<meta charset="UTF-8">
    <title> Crud Operation </title>
    <link rel="stylesheet" type="text/css"href="<?php echo base_url();?>assets/css/bootstrap.min.css">

</head>

<body> 
    <div class="jumbotron">
    <h1 align="center">CRUD CI APP </APP>
    </div>
    <div class="container">
    <h3> Edit Product </h3>

    <form action="<?php echo base_url();?>index.php/Crud/update/<?php echo $singleProduct[0]->id; ?>" method="post" enctype="multipart/form-data"  onsubmit="return Validate(this);" >
    
    <div class="form-group">
    <label for="name"value="name" >Name</label>
    

      <input type="text"name="name"placeholder="enter your name" pattern="^[a-zA-Z\s]+" title="name do not consider integer" class="form_control" value="<?php echo $singleProduct[0]->name;?>">
      <br /><br />
      </div>

      <div class="form-group">
      <label for="Price" value="Price">Price</label>
      <input type="number"name="Price"placeholder="enter your price"class="form_control" value="<?php echo $singleProduct[0]->Price;?>"> 
      <br /><br />
      </div>

      <div class="form-group">
      <label for="Quantity" value="Quantity">Quantity</label>
      <input type="number"name="Quantity"placeholder="enter your quantity"class="form_control" value="<?php echo $singleProduct[0]->Quantity;?>">
      <br /><br />
      </div>
     


      <div class ="col-mod-6">
      <div class="form-group mb-2">
      <label> Image </label>
      <input type="file" name="picture" class="form-control"  required />
      </div>
      </div>

</div>
      
      <input type="submit" name="edit"value="Update"class="btn btn-primary" >

      <div>

      </form>


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
     
    
     
     



      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>



    </body>
    </html>