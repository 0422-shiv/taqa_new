 <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

       <!--  </div> -->
        <!-- END wrapper -->

       


        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!--C3 Chart-->
        <script src="assets/libs/d3.min.js"></script>
        <script src="assets/libs/c3.min.js"></script>

        <script src="assets/libs/echarts.min.js"></script>

        <script src="assets/libs/dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.0/handlebars.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
          <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js'></script>
		  <script src='https://cdn.jsdelivr.net/npm/apexcharts'></script>
		  <script src='https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js'></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
		  <script src="assets/js/pie-chat.js"></script>
		  <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment-with-locales.min.js'></script>
		  
		  <script src='assets/js/fullcalendar.js'></script>
		  <script src="assets/js/full-calender.js"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
		 
<!--------------------------Chat--------------------->
<!--------------------------------------------------->

<script>


$('textarea#summernote').summernote({
        placeholder: 'Hello bootstrap 4',
        tabsize: 2,
        height: 100,
  toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
        // ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
        //['fontname', ['fontname']],
       // ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'hr']],
        //['view', ['fullscreen', 'codeview']],
        ['help', ['help']]
      ],
      });



        $(document).ready(function() {
        $('#multiple-checkboxes').multiselect({
          includeSelectAllOption: true,
		   selectAllText: ' Select Language',
		   nonSelectedText: 'Select Language',
        });
		
		
		$('#multiple-checkboxes1').multiselect({
          includeSelectAllOption: true,
		   selectAllText: ' Select Location',
		   nonSelectedText: 'Select Location',
        });
		
		
		
    });
	$('.aa').click(function(e){
    $('#myDiv').toggleClass('fullscreen'); 
});


$('.filters ul li').click(function(){
  $('.filters ul li').removeClass('active');
  $(this).addClass('active');
  
  var data = $(this).attr('data-filter');
  $grid.isotope({
    filter: data
  })
});

var $grid = $(".grid").isotope({
  itemSelector: ".all",
  percentPosition: true,
  masonry: {
    columnWidth: ".all"
  }
})


$(document).on('click','.a',function(){
  $('.append-elements').append('<div class="row align-items-center b"><div class="col-md-5"><div class="form-group"><label>Budget</label><div class="dollorbox"><i class="fas fa-dollar-sign"></i><input type="text" placeholder="30" class="form-control" /></div></div></div><div class="col-md-1 text-center refbtn"><div class="form-group"><span class="btn btn-success btn-block btn-lg"><i class="fas fa-sync"></i></span></div></div><div class="col-md-5"><div class="form-group"><label>Impression</label><div class="imp-rate form-control"><ul><li>1</li><li>1</li><li>1</li><li>0</li><li>0</li><li>0</li><li>1</li><li>1</li></ul><span>K</span></div></div></div><div class="col-md-1 text-center refbtn1"><button class="btn btn-danger btn-block btn-lg"><i class="fas fa-trash-alt"></i></button></div></div>');
});
$(document).on('click','.b',function(){
  $(this).remove();
});


$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})


$(function () {
  $("#datepicker, #enddate").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  }).datepicker('update', new Date());
});

 $(document).ready(function() {
        $('#multiple-checkboxes12').multiselect({
          includeSelectAllOption: true,
		  selectAllText: ' Select User',
		   nonSelectedText: 'Select User',
        });
		
		$('#multiple-checkboxes123').multiselect({
          includeSelectAllOption: true,
		  selectAllText: ' Select User',
		   nonSelectedText: 'Select User',
        });
		
    });


</script>
<script>
            $(document).ready(function() {
    $('#example').DataTable();
} );
        </script>
<script>

// Iterate over each select element
$('select').each(function () {

    // Cache the number of options
    var $this = $(this),
        numberOfOptions = $(this).children('option').length;

    // Hides the select element
    $this.addClass('s-hidden');

    // Wrap the select element in a div
    $this.wrap('<div class="select form-control"></div>');

    // Insert a styled div to sit over the top of the hidden select element
    $this.after('<div class="styledSelect"></div>');

    // Cache the styled div
    var $styledSelect = $this.next('div.styledSelect');

    // Show the first select option in the styled div
    $styledSelect.text($this.children('option').eq(0).text());

    // Insert an unordered list after the styled div and also cache the list
    var $list = $('<ul />', {
        'class': 'options'
    }).insertAfter($styledSelect);

    // Insert a list item into the unordered list for each select option
    for (var i = 0; i < numberOfOptions; i++) {
        $('<li />', {
            text: $this.children('option').eq(i).text(),
            rel: $this.children('option').eq(i).val()
        }).appendTo($list);
    }

    // Cache the list items
    var $listItems = $list.children('li');

    // Show the unordered list when the styled div is clicked (also hides it if the div is clicked again)
    $styledSelect.click(function (e) {
        e.stopPropagation();
        $('div.styledSelect.active').each(function () {
            $(this).removeClass('active').next('ul.options').hide();
        });
        $(this).toggleClass('active').next('ul.options').toggle();
    });

    // Hides the unordered list when a list item is clicked and updates the styled div to show the selected list item
    // Updates the select element to have the value of the equivalent option
    $listItems.click(function (e) {
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass('active');
        $this.val($(this).attr('rel'));
        $list.hide();
        /* alert($this.val()); Uncomment this for demonstration! */
    });

    // Hides the unordered list when clicking outside of it
    $(document).click(function () {
        $styledSelect.removeClass('active');
        $list.hide();
    });

});
</script>



    </body>
</html>