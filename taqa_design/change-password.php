<?php include( 'include/header.php');?>
<!-- Header Section-->
<section class="dashboard-header">


<div class="mt-1">
    <div class="container">
       
		<div class="create-box">
		<h2 class="task">Change Password</h2>

	 <div class="change-password">
	 <div class="row">
	 <div class="col-md-6">
	 <div class="form-group">
	 <label>Old Password</label>
	 <input type="text" class="form-control"  />
	 </div>
	 </div>
	 
	  <div class="col-md-6">
	 <div class="form-group">
	 <label>New Password</label>
	 <input type="text" class="form-control"  />
	 </div>
	 </div>
	 <div class="col-md-6">
	 <div class="form-group">
	 <label>Confirm Password</label>
	 <input type="text" class="form-control"  />
	 </div>
	 </div>
	 
	 <div class="col-md-12">
	 <div class="form-group">
	 <button class="btn text-uppercase btn-success btn-rounded">Save</button>
	 
	 </div>
	 </div>
	 
	 
	 </div>
	 </div>
		
		
		
		
		</div>
		
		
		
		
		
		

		
		</div>
		
		
        
    </div>
	
</section>


<!-- Modal -->
<div class="modal fade" id="edit-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
	  <h5>Edit User <button type="button" class="close close-rounded" data-dismiss="modal" aria-label="Close">
        <i class="fas fa-times-circle"></i>
        </button></h5>
        
		<div class="form-project">
		
		
		
		
		<div class="row">
	
		
		
		<div class="col-md-6">
		<div class="form-group">
		<label>User Name</label>
	 <input class="form-control" type="text" placeholder="Abdulaziz" />
		</div>
		
		</div>
		
		<div class="col-md-6">
		<div class="form-group">
		<label>Email</label>
	 <input class="form-control" type="email" placeholder="xyz@gmail.com" />
		</div>
		
		</div>
		
		<div class="col-md-6">
		<div class="form-group">
		<label>Phone Number</label>
	 <input class="form-control" type="text" placeholder="+123 4567 89" />
		</div>
		
		</div>
		
		<div class="col-md-6">
		<div class="form-group">
		<label>Password</label>
	<input class="form-control" type="password" placeholder="********" />
		</div>
		
		</div>
		
		<div class="col-md-6">
		<div class="form-group">
		<label>Select Role</label>
	<select class="form-control">
	<option>Role Name</option>
	<option>Role Name</option>
	<option>Role Name</option>

	</select>
		</div>
		
		</div>
		
		
		
	
		
		
		
	
		
	
		<div class="col-md-6">
	<div class="form-group">
	<label>City</label>
	<input class="form-control" type="text" placeholder="Riyadh" />
	</div>
		</div>
		
		<div class="col-md-6">
	<div class="form-group">
	<label>Country</label>
	<input class="form-control" type="text" placeholder="Saudi Arabia" />
	</div>
		</div>
	
		
		<div class="col-md-12">
		
		<div class="form-group">
		<label>Address</label>
	<textarea class="form-control height" placeholder="47 D, xyz street ,xyz Road"></textarea>
		</div>
		
		</div>
		
		
		
		
		<div class="col-md-12">
		<button class="btn text-uppercase btn-success btn-rounded">Save</button>
		</div>
		
		
		</div>
		
      </div>
     
    </div>
  </div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="add-user" tabindex="-1" role="dialog" aria-labelledby="add-userModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
	  <h5>Add User <button type="button" class="close close-rounded" data-dismiss="modal" aria-label="Close">
        <i class="fas fa-times-circle"></i>
        </button></h5>
        
		<div class="form-project">
		
		
		
		
		<div class="row">
		
		
		
		<div class="col-md-6">
		<div class="form-group">
		<label>User Name</label>
	 <input class="form-control" type="text" placeholder="" />
		</div>
		
		</div>
		
		<div class="col-md-6">
		<div class="form-group">
		<label>Email</label>
	 <input class="form-control" type="email" placeholder="" />
		</div>
		
		</div>
		
		<div class="col-md-6">
		<div class="form-group">
		<label>Phone Number</label>
	 <input class="form-control" type="text" placeholder="" />
		</div>
		
		</div>
		<div class="col-md-6">
		<div class="form-group">
		<label>Password</label>
	<input class="form-control" type="password" placeholder="taqa@123" />
		</div>
		
		</div>
		<div class="col-md-6">
		<div class="form-group">
		<label>Select Role</label>
	<select class="form-control">
	<option>Role Name</option>
	<option>Role Name</option>
	<option>Role Name</option>

	</select>
		</div>
		
		</div>
		
		
		
		
		
	
		
		
	
		<div class="col-md-6">
	<div class="form-group">
	<label>City</label>
	<input class="form-control" type="text" placeholder="" />
	</div>
		</div>
		
		<div class="col-md-6">
	<div class="form-group">
	<label>Country</label>
	<input class="form-control" type="text" placeholder="" />
	</div>
		</div>
		
		
		<div class="col-md-12">
		
		<div class="form-group">
		<label>Address</label>
	<textarea class="form-control height" placeholder=""></textarea>
		</div>
		
		</div>
		
		
		
		
		
		<div class="col-md-12">
		<button class="btn text-uppercase btn-success btn-rounded">Save</button>
		</div>
		
		
		</div>
		
      </div>
     
    </div>
  </div>
</div>
</div>



<?php include( 'include/footer.php');?>