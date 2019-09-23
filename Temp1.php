<html><head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
</head>
<body>

<div class="row">
  <div class="col-lg-6">
    <div class="input-group">
      <span class="input-group-addon">
        <input type="checkbox" aria-label="Checkbox for following text input">
      </span>
      <input type="text" class="form-control" aria-label="Text input with checkbox">
    </div>
  </div>
  <div class="col-lg-6">
    <div class="input-group date" id='datetimepicker6' style="height:20%">
      <span class="input-group-addon">
        <span class="glyphicon glyphicon-calendar"></span>
      </span>
      <input type="text" class="form-control" aria-label="Text input with radio button">
    </div>
  </div>
</div>

<div class="container">
    <div class='col-md-5'>
        <div class="form-group">
            <div class='input-group date'>
                <input type='text' class="form-control" placeholder="Select your check in date" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <div class='col-md-5'>
        <div class="form-group">
            <div class='input-group date' id='datetimepicker7'>
                <input type='text' class="form-control" placeholder="Select your check out date" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
</div>
</body>
<script type="text/javascript">
$(document).ready(function() {

        $(function () {

            $('#datetimepicker6').datetimepicker({
                format:'DD-MM-YYYY'
                //minTime:'11:00'
            });
            $('#datetimepicker7').datetimepicker({
                format:'DD-MM-YYYY',
                useCurrent: false //Important! See issue #1075
            });
            $("#datetimepicker6").on("dp.change", function (e) {
                $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
            });
            $("#datetimepicker7").on("dp.change", function (e) {
                $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
            });
        });
    });
</script>
</html>