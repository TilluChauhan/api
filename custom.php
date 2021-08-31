<?php
include "config/config.php";
$sql="select * from image";
$result=mysqli_query($conn, $sql);

  ?>
<html>

<head>
  <title>image</title>
  <?php include "head.php"; 
  
  ?>
</head>

<body>
  <section>
    <div class="container ">
      <div class="row">
        <div class="col-md-12 ">
          <dv class="tyu">
            <h1>workshop image</h1>

            <div class="form-group qwer">
              <label for="email">Name</label>
              <input type="email" class="form-control" placeholder="Enter name" id="name">
            </div>
            <div class="form-group qwer">
              <label for="pwd">Image</label>
              <input type="file" class="form-control" placeholder="" id="image">
            </div>

            <button type="submit" id="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
    </div>
    </div>
  </section>
  <section class="anki">
    <div class="container ">
      <div class="row">
        <div class="col-md-12 ">
        <?php 
            while($catch=mysqli_fetch_array($result)){
            
              ?>
              
              
              
              <?php
            }
          ?>

      </div>
    </div>
    </div>
    
  </section>
  <?php include "script.php"; ?>
</body>
<script>
  $(document).ready(function() {
    $("#submit").click(function() {
      var name = $("#name").val();
      var image = $("#image")[0].files[0];

      console.log(name);
      console.log(image);
      var data= new FormData();
      data.append('U_name',name);
      data.append('U_image',image);

      $.ajax({
					type:'POST',
					url:'ajax/ajax.php',
					contentType:false,
					processData:false,
					data:data,
					success:function(response){
						if(response == 1){
							window.location.reload();
						}else{
							
						}
					}
					
				})
    });
  });
</script>

</html>