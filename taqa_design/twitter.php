<?php include( 'include/header.php');?>
<!-- Header Section-->
<section class="dashboard-header reviews">
    <div class="container">
       
		<div class=" reviews">
            <div class="add_category">
                <h4 class="add_name">Overview - Twitter</h4>
				<p>Key performance metrics for the selected period.</p>
            </div>
            
            
        </div>
		
		<div class="row mt-40">
		<div class="col">
		<div class="chart-box">
		<div class="twitterdata">
		<h3><span><i class="fas fa-thumbs-down"></i></span> <div class="tweetsb"> Tweets 
		<small>575 <i class="fas fa-caret-up"></i></small>
		</div>
		</h3>
		</div>
		<div id="tweets"></div>
		</div>
		</div>
		
		<div class="col">
		<div class="chart-box">
		<div class="twitterdata">
		<h3><span><i class="fas fa-thumbs-down"></i></span> <div class="tweetsb"> Tweets Impression
		<small class="red">575 <i class="fas fa-caret-down"></i></small>
		</div>
		</h3>
		</div>
		 <div id="timeline-chart"></div>
		</div>
		</div>
		
		
		<div class="col">
		<div class="chart-box">
		<div class="twitterdata">
		<h3><span><i class="far fa-comment-dots"></i></span> <div class="tweetsb"> Profile visits
		<small class="red">57% <i class="fas fa-caret-down"></i></small>
		</div>
		</h3>
		</div>
		 <div id="radar-chart"></div>
		</div>
		</div>
		
		<div class="col">
		<div class="chart-box">
		<div class="twitterdata">
		<h3><span><i class="fas fa-share"></i></span> <div class="tweetsb"> New Followers
		<small>575 <i class="fas fa-caret-up"></i></small>
		</div>
		</h3>
		</div>
		 <div id="news"></div>
		</div>
		</div>
		
		

		</div>
        
    </div>
</section>
<?php include( 'include/footer.php');?>