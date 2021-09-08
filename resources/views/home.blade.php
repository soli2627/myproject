@extends('layout')
@section('content')
   <script>
       let curDate = new Date();

   </script>
        <div class="container">
            <div>
                {{-- <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="email">Report Type</label>
                    
                       <select name="attendance" id="attendance" class="form-control">
                        <option value="P">Present</option>
                        <option value="A">Absent</option>
                        <option value="H">Holiday</option>
                        <option value="L">Late</option>
                       </select>
                    </div>
                    <div class="form-group">
                      <label for="date">Date:</label>
                      <input type="text" class="form-control" name="date" value="<?php echo date('Y-m-d')?>">
                    </div>
                     
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form> --}}
            </div>
        </div> 
{{-- <!DOCTYPE html>
<html>
<body>
 
Current Time:
<input type="text" id="currentTime">
<button id="btn">Submit</button>
<br><br>
<script>
var today = new Date();
var time = today.getHours();
if(time =>9){
document.getElementById("currentTime").disabled = true;
document.getElementById("btn").disabled = true;
}else
{
document.getElementById("currentTime").disabled = false;
document.getElementById("btn").disabled = true;
}
   
</script>  
</body>
</html> --}}
@endsection