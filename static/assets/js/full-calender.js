$(document).ready(function() {
  $("#calendar").fullCalendar({
    header: {
      left: "prev,next today",
      center: "title",
      right: "month,agendaWeek,agendaDay",
	  
    },

    defaultView: "month",
    navLinks: true, // can click day/week names to navigate views
    selectable: true,
    selectHelper: true,
    editable: true,
    eventLimit: true, // allow "more" link when too many events




  });

  // Bind the dates to datetimepicker.
  




});