<?php include "includes/admin_header.php" ?>


	<div id="wrapper">





        <!-- Navigation -->

        <?php include "includes/admin_navigation.php" ?>




<div id="page-wrapper">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">


            <h1 class="page-header">
                Welcome to admin
                <small>Author</small>
            </h1>

                 <br />
                 <br />
                 <h2 align="center">Add New Task</h2>
                 <div class="form-group">
                      <form name="add_name" id="add_name" action="addtask.php" method="post" enctype="multipart/form-data">
                           <div class="table-responsive">
                                <table class="table table-bordered" id="dynamic_field">
 									<tr>
                                          <td><input type="text" name="username" placeholder="Enter your Name" class="form-control name_list" /></td>
                                          
                                     </tr>

 								 </table>
 								 <table class="table table-bordered" id="dynamic_field_tag">
 									<tr>
                                          <td>
										  <select name="domain" class="form-control name_list">
										  <?php
											$qry2="SELECT * FROM `tags` ";
											$run1=mysqli_query($connection,$qry2);
											$row1=mysqli_num_rows($run1);
											
											while($row=mysqli_fetch_assoc($run1))
											{
												?>
											<option value="<?php echo $row['name'];?>"  ><?php  echo $row['name'];?></option>
											<?php 
											}
											?>
											</select>
										  </td>
                                          

 								 </table>
 								 <table class="table table-bordered">

 									<tr>
 										<td>Title of the task</td><td><input type="text" name="title" placeholder="Enter the full title" required></td>
 									</tr>
 									<tr>
 										<td>Description of task</td><td><input type="text" name="description" placeholder="Enter the description" required></td>
 									</tr>
 									<tr>
 			                            <td>Current Status </td><td><input type="radio" name="status" label="ongoing" value="ongoing" required>Ongoing</td><td><input type="radio" name="status" label ="completed" value="completed" required>Completed</td>
 		                            </tr>
 									<tr>
 			<td>StartDate: </td><td><input type="date" name="start_date" required></td>
 		</tr>


 		<tr>
 			<td>Enddate</td><td><input type="date" name="end_date" ></td>
 		</tr>
 		
                                </table>
                                <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />

                      </form>
                 </div>
            </div>
			<!--     Add ur code here         -->





        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->


</div>








        <!-- /#page-wrapper -->

    <?php include "includes/admin_footer.php" ?>
		<script>
	  $(document).ready(function(){
	       var i=1;
	       var j=1;
	 	  $('#add').click(function(){
	            i++;
	            $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="team[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
	       });
	 		$('#add_tag').click(function(){
	            j++;
	            $('#dynamic_field_tag').append('<tr id="row'+j+'">'+'<td>'+'<select name="name[]"class="form-control name_list">'+'<?php
											$qry2="SELECT * FROM `tags` ";
											$run1=mysqli_query($connection,$qry2);
											$row1=mysqli_num_rows($run1);
											
											while($row=mysqli_fetch_assoc($run1))
											{
												?>'+
											'<option value="<?php echo $row['name'];?>"  ><?php  echo $row['name'];?></option>'+
											'<?php 
											}
											?>'+
											'</select>'
				+'</td>'+'</tr>');
	       });
		   
	       $(document).on('click', '.btn_remove', function(){
	            var button_id = $(this).attr("id");
	            $('#row'+button_id+'').remove();
	       });
	 	$(document).on('click', '.btn_remove_tag', function(){
	            var button_id = $(this).attr("id");
	            $('#row'+button_id+'').remove();
	       });
	       $('#submit').click(function(){
	            $.ajax({
	                 url:"name.php",
	                 method:"POST",
	                 data:$('#add_name').serialize(),
	                 success:function(data)
	                 {
	                      alert(data);
	                      $('#add_name')[0].reset();
	                 }
	            });
	       });
	  });
	  </script>
    <?php
     if(isset($_POST['submit']))
    	{

    		$id=uniqid();

    		$title=$_POST['title'];
    		$status=$_POST['status'];
    		$description=$_POST['description'];
			   $domain=$_POST['domain'];
    		$startdate=$_POST['start_date'];
			$enddate=$_POST['end_date'];
    		$username=$_POST['username'];
			$qry="SELECT * FROM `users` WHERE `username`='$username'";
			$run=mysqli_query($con,$qry);
			$qry2="SELECT * FROM `tags` WHERE `name`='$domain'";
			$run1=mysqli_query($con,$qry2);
			$row1=mysqli_fetch_assoc($run1);
			$row=mysqli_fetch_assoc($run);
			$user_id=$row['user_id'];
			$tagid=$row1['id'];
			$qry1="INSERT INTO `tasks`(`id`, `user_id`, `title`, `domain`, `description`, `start_date`, `end_date`) VALUES ('$id','$user_id','$title','$tagid','$description','$startdate','$enddate')";
    		$runn=mysqli_query($con,$qry1);
		}

    	?>
