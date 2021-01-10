<?php include( 'include/header.php');?>
<!-- Header Section-->

<section class="dashboard-header"> 
  
  <div class="costest">
<div class="container">
<div class="add_category ">
                <h4 class="add_name">Sentiment Analysis</h4>
				
            </div>
        


		
            </div>
            
        </div>
  <div class="mt-1">
    <div class="container">
      <div class="create-box">
        <div class="row">
		<div class="col-md-12">
		
		<div class="row">
		<div class="col-md-12">
		<div class="form-group">
		<label>Search Queries</label>
		<input type="text" class="form-control" />
		</div>
		</div>
		
		
		<div class="col-md-6">
		<div class="form-group">
		<label>From Date</label>
		<div id="datepicker" class="date date-icon" data-date-format="mm-dd-yyyy">
    <input class="form-control" type="text" />
    <span class="input-group-addon"><i class="glyphicon fas fa-calendar-plus"></i></span>
</div>
		</div>
		</div>
		
		
		<div class="col-md-6">
		<div class="form-group">
		<label>To Date</label>
		<div id="enddate" class="date date-icon" data-date-format="mm-dd-yyyy">
    <input class="form-control" type="text" />
    <span class="input-group-addon"><i class="glyphicon fas fa-calendar-plus"></i></span>
</div>
		</div>
		</div>
		<div class="col-md-12">
		<label>Language</label>
		</div>
		
		<div class="col-md-3">
		<div class="form-group">
		
		<div class="language">
		<label>
    <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_0">&nbsp;&nbsp;
    English</label>
		</div>
		</div>
		</div>
		
		<div class="col-md-3">
		<div class="form-group">
		
		<div class="language">
		<label>
    <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_1">&nbsp;&nbsp;
    Arabic</label>
		</div>
		</div>
		</div>
		
		<div class="col-md-12">
		<button class="btn btn-success text-uppercase btn-lg" onclick="location.href='sentiment-analysis-data.php'">Start</button>
		</div>
		
		
		
		</div>
		</div>
		
		
		
		
		
		
		</div>
		</div>
      </div>
    </div>
  </div>
</section>
<?php include( 'include/footer.php');?>
