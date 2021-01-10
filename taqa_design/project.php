<?php include( 'include/header.php');?>
<!-- Header Section-->
<section class="dashboard-header">

<!--<div class="costest">
<div class="container">
<div class="add_category mb-3">
                <h4 class="add_name">Employee</h4>
				
            </div>
        
<div class="searchox">
		<i class="fas fa-search"></i>
		<input type="text" class="form-control" placeholder="Search Directory">
		
		</div>

		
            </div>
            
        </div>-->
<div class="mt-1">
    <div class="container">
       
		<div class="create-box">
		<h2 class="task">Manage Projects <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn text-uppercase btn-success btn-rounded">Add Project</a></h2>
		

	<div class="task-table reviews">
		<table class="table table-striped" id="example">
                    <thead>
                        <tr>
                            <th>
                                Name
                            </th>
                            
							<th>Start Date</th>
                            <th>End Date</th>
                            
                            
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <b>Project 1</b>
                            </td>
                            
                          
                            <td><span class="color-green">18-12-2020</span></td>
                            <td><span class="color-green">18-12-2020</span></td>
                      
                            
                            <td align="center">
                                <a href="" class="atach red"><i class="fas fa-trash-alt"></i></a>
								
								<a href="" class="atach color-green"><i class="fas fa-pencil-alt"></i> </a>
                            </td>
                        </tr>
						
						<tr>
                            <td>
                                <b>Project 1</b>
                            </td>
                            
                          
                            <td><span class="color-green">18-12-2020</span></td>
                            <td><span class="color-green">18-12-2020</span></td>
                      
                            
                            <td align="center">
                                <a href="" class="atach red"><i class="fas fa-trash-alt"></i></a>
								
								<a href="" class="atach color-green"><i class="fas fa-pencil-alt"></i> </a>
                            </td>
                        </tr>
						
						
						<tr>
                            <td>
                                <b>Project 1</b>
                            </td>
                            
                          
                            <td><span class="color-green">18-12-2020</span></td>
                            <td><span class="color-green">18-12-2020</span></td>
                      
                            
                            <td align="center">
                                <a href="" class="atach red"><i class="fas fa-trash-alt"></i></a>
								
								<a href="" class="atach color-green"><i class="fas fa-pencil-alt"></i> </a>
                            </td>
                        </tr>
						
						
						<tr>
                            <td>
                                <b>Project 1</b>
                            </td>
                            
                          
                            <td><span class="color-green">18-12-2020</span></td>
                            <td><span class="color-green">18-12-2020</span></td>
                      
                            
                            <td align="center">
                                <a href="" class="atach red"><i class="fas fa-trash-alt"></i></a>
								
								<a href="" class="atach color-green"><i class="fas fa-pencil-alt"></i> </a>
                            </td>
                        </tr>
						
						
						<tr>
                            <td>
                                <b>Project 1</b>
                            </td>
                            
                          
                            <td><span class="color-green">18-12-2020</span></td>
                            <td><span class="color-green">18-12-2020</span></td>
                      
                            
                            <td align="center">
                                <a href="" class="atach red"><i class="fas fa-trash-alt"></i></a>
								
								<a href="" class="atach color-green"><i class="fas fa-pencil-alt"></i> </a>
                            </td>
                        </tr>
						
						
						<tr>
                            <td>
                                <b>Project 1</b>
                            </td>
                            
                          
                            <td><span class="color-green">18-12-2020</span></td>
                            <td><span class="color-green">18-12-2020</span></td>
                      
                            
                            <td align="center">
                                <a href="" class="atach red"><i class="fas fa-trash-alt"></i></a>
								
								<a href="" class="atach color-green"><i class="fas fa-pencil-alt"></i> </a>
                            </td>
                        </tr>
						
						
                    </tbody>
                </table>
		
		
		
		
		</div>
		
		
		
		
		
		

		
		</div>
		
		
        
    </div>
	</div>
</section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
	  <h5>Add Project <button type="button" class="close close-rounded" data-dismiss="modal" aria-label="Close">
        <i class="fas fa-times-circle"></i>
        </button></h5>
        
		<div class="form-project">
		<div class="form-group">
		<label>Project name</label>
		<input type="text" class="form-control" />
		</div>
		
		<div class="form-group">
		<label>Description</label>
		<textarea id="summernote"></textarea>
		</div>
		
		<div class="row">
		<div class="col-md-6">
		<div class="form-project">
		<div class="form-group">
		<label>Start Date</label>
		<div id="datepicker" class="date date-icon" data-date-format="mm-dd-yyyy">
    <input class="form-control" type="text" />
    <span class="input-group-addon"><i class="glyphicon fas fa-calendar-plus"></i></span>
</div>

		</div>
		</div>
		</div>
		
		<div class="col-md-6">
		<div class="form-project">
		<div class="form-group">
		<label>End Date</label>
		<div id="enddate" class="date date-icon" data-date-format="mm-dd-yyyy">
    <input class="form-control" type="text" />
    <span class="input-group-addon"><i class="glyphicon fas fa-calendar-plus"></i></span>
</div>
		</div>
		</div>
		</div>
		
		
		<div class="col-md-6">
		<div class="form-project">
		<div class="form-group">
		<label>Estimated Hours</label>
	 <input class="form-control" type="text" placeholder="HH:MM" />
		</div>
		</div>
		</div>
		
		<div class="col-md-6">
		<div class="form-project">
		<div class="form-group">
		<label>Attach Project File</label>
	 <input class="form-control" type="file"  />
		</div>
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


<?php include( 'include/footer.php');?>