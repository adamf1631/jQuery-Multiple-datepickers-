<!DOCTYPE html>
<html lang="en">
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="jquery/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="jquery/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="jquery/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">
<script src="jquery/jquery-1.11.1.min.js"></script>
<script src="jquery/jquery.ui-1.10.4.datepicker.min.js"></script>
<script>
	var holidays= ["2018-3-30","2018-5-28","2018-7-4","2018-9-3","2018-11-22","2018-11-23","2018-12-24","2018-12-25","2018-12-31"] /*These are the dates you change to make custom blocked out dates*/
	$(function() {
    $("#datepicker1").datepicker({ /*<--- make .datepicker to change to class, # is a id att.*/
		changeMonth: true,
      changeYear: true,
beforeShowDay:  function(date){
    var string = jQuery.datepicker.formatDate('yy-m-d', date);
     var noWeekend = $.datepicker.noWeekends(date);
         if (noWeekend[0]) {
        return  [$.inArray(string, holidays) == -1];
        }
        else
        return noWeekend;
    }
    });
    $("#datepicker2").datepicker({
		changeMonth: true,
      changeYear: true,
beforeShowDay:  function(date){
    var string = jQuery.datepicker.formatDate('yy-m-d', date);
     var noWeekend = $.datepicker.noWeekends(date);
         if (noWeekend[0]) {
        return  [$.inArray(string, holidays) == -1];
        }
        else
        return noWeekend;
    }
    });
		 $("#datepicker3").datepicker({
			changeMonth: true,
      changeYear: true,
beforeShowDay:  function(date){
    var string = jQuery.datepicker.formatDate('yy-m-d', date);
     var noWeekend = $.datepicker.noWeekends(date);
         if (noWeekend[0]) {
        return  [$.inArray(string, holidays) == -1];
        }
        else
        return noWeekend;
    }
    });
		 $("#datepicker4").datepicker({
			changeMonth: true,
      changeYear: true,
beforeShowDay:  function(date){
    var string = jQuery.datepicker.formatDate('yy-m-d', date);
     var noWeekend = $.datepicker.noWeekends(date);
         if (noWeekend[0]) {
        return  [$.inArray(string, holidays) == -1];
        }
        else
        return noWeekend;
    }
    });
		 $("#datepicker5").datepicker({
			changeMonth: true,
      changeYear: true,
beforeShowDay:  function(date){
    var string = jQuery.datepicker.formatDate('yy-m-d', date);
     var noWeekend = $.datepicker.noWeekends(date);
         if (noWeekend[0]) {
        return  [$.inArray(string, holidays) == -1];
        }
        else
        return noWeekend;
    }
    });
});
	</script>
<title>CCL Lumberton Calendar Tracker</title>
</head>
<body>

<div id="formdiv">
<h2 class="text-center">Enter Your Event Here:</h2>
<p class="text-muted text-center">Create A New Event.</p>
<div class="row">
<form action="test_insert.php" method="post"><!--this is your line to change for you php form, i have not included-->
  
   <div class="col col-lg-2 col-lg-offset-0">
    <div class="form-group col-lg-offset-0 col-lg-12">
        <label for="Name">Employee Name:</label>
        <input type="text" name="name" placeholder="First & Last Name" id="name" required>
        <p class="help-block col-lg-12">First and Last Name Please.</p>
    </div>
	</div>
   <div class="col col-lg-offset-0 col-lg-2">
    <div class="form-group col-lg-12">
        <label for="description">Description:</label>
        <input type="text" name="description" id="description" placeholder="description..." required>
       <p class="help-block">For Example: "Vacation Full Day" or "PTO 2 Hours."</p>
    </div>
	</div>
       <div class="col col-lg-offset-0 col-lg-3">
        <label for="shift">Shift:</label><br>
        <input type="radio" name="shift" value="First Shift" id="shift" checked> First Shift |
        <input type="radio" name="shift" value="Second Shift" id="shift"> Second Shift |
        <input type="radio" name="shift" value="Third Shift" id="shift"> Third Shift
        <p class="help-block">Select Correct Shift Worked.</p>
	</div>
   <div class="col col-lg-offset-0 col-lg-3">
    <div class="form-group col-lg-10">
      <label for="date2">Date/Dates:</label>
    <input type="text" id="datepicker1" name="daterange" placeholder="Select Your Date"  />	
    </div>
    <div class="form-group col-lg-10">
      <label for="date2">Date/Dates:</label>
    <input type="text" id="datepicker2" name="daterange" placeholder="Select Your Date"  />	
    </div>
    <div class="form-group col-lg-10">
      <label for="date2">Date/Dates:</label>
    <input type="text" id="datepicker3" name="daterange" placeholder="Select Your Date"  />	
    </div>
    <div class="form-group col-lg-10">
      <label for="date2">Date/Dates:</label>
    <input type="text" id="datepicker4" name="daterange" placeholder="Select Your Date"  />	
    </div>
    <div class="form-group col-lg-10">
      <label for="date2">Date/Dates:</label>
    <input type="text" id="datepicker5" name="daterange" placeholder="Select Your Date"  />	
    </div>
    

   <div class="form-group col-lg-6">
	  <input type="submit" name="submit" class= "btn btn-primary"> 
	   </div>
	</div>
	 
	</div>
	</form>
	</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="../js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="../js/bootstrap.js"></script>
</body>
</html>
