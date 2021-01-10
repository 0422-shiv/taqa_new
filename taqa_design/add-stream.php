<?php include( 'include/header.php');?>
<!-- Header Section-->
<section class="dashboard-header reviews">
    <div class="container">
       
		<div class="likesbox mt-40 ">
		<div class="top-title justify-content-end">
		
		<div class="top-stream">
		<ul>
		<li><a href="#" class="btn btn-dark">Start Stream</a></li>
		<li class="dropdown"><a href="#" class="btn btn-dark dropdown-toggle" data-toggle="dropdown"><i class="fas fa-redo"></i> <span class="rightbx"><i class="fas fa-angle-down"></i></span></a>
		<ul class="dropdown-menu">
    <li><a href="#">Manual Refresh</a></li>
    <li><a href="#">Every 1 Minutes</a></li>
    <li><a href="#">Every 3 Minutes</a></li>
	<li><a href="#">Every 6 Minutes</a></li>
  </ul>
		
		</li>
		</ul>
		</div>
		</div>

		
		<div class="add-strambox">
		<div class="row">
		<div class="col-md-4">
		<div class="btn-upload">
		<span><i class="fas fa-upload"></i> Upload Logo
		<input type="file" multiple="false" accept="image/*" id=finput onchange="upload()">
		</span>
		
		</div>
		</div>
		
		<div class="col-md-4 text-center offset-3">
		<div class="logo-upload">
		<img src="assets/images/logo.png"/>
		</div>
		</div>
		
		</div>
		
		
		<div class="row mt-5">
		<div class="col-md-4">
		<div class="btn-upload">
		
		<button class="btn btn-dark btn-half">Select Colour
		
		<input type="color">
		</button>
		
		</div>
		</div>
		
		<div class="col-md-4 offset-3">
		<div class="textareabox">
		<img src="assets/images/palate.jpg"/>
		</div>
		</div>
		
	
		</div>
		
		
		<div class="row mt-5">
		<div class="col-md-4">
		<div class="btn-upload">
		
		<button class="btn btn-dark btn-half">Enter Keyword</button>
		
		</div>
		</div>
		
		<div class="col-md-4 offset-3">
		<div class="textareabox">
		<textarea></textarea>
		</div>
		</div>
		
	
		</div>
		
		
		<div class="row mt-5">
		<div class="col-md-4 ">
		<div class="multiplebox">
		<select id="multiple-checkboxes" multiple class="form-control">
		
		<option value="English">English</option>
		<option value="Abkhaz">Abkhaz</option>
		<option value="Adyghe">Adyghe</option>
		<option value="Afrikaans">Afrikaans</option>
		<option value="American Sign Language">American Sign Language</option>
		<option value="Albanian">Albanian</option>
		<option value="Amharic">Amharic</option>
		</select>
		</div>
		</div>
		
		<div class="col-md-4 offset-3">
		<div class="multiplebox">
		<select id="multiple-checkboxes1" multiple class="form-control">
		
		<option value="Afghanistan">Afghanistan</option>
		<option value="Albania">Albania</option>
		<option value="Algeria">Algeria</option>
		<option value="Bahrain">Bahrain</option>
		<option value="Bangladesh">Bangladesh</option>
		<option value="Canada">Canada</option>
		<option value="China">China</option>
		</select>
		</div>
		</div>
		
	
		</div>
		
		
		
		</div>
		
		
		</div>
        
    </div>
</section>
<?php include( 'include/footer.php');?>