<style type="text/css">
    
  .card-body-time
{
  background-color:#1C1C1C;
  text-align:center;
  font-family:helvetica;
}
/*h1
{
  margin:0px;
  margin-top:40px;
  color:#8181F7;
  font-size:45px;
}*/
#date
{
  margin-top:30px;
  color:silver;
  font-size:30px;
  border:2px dashed #2E9AFE;
  padding:10px;
  width:250px;
  margin-left:10px;
}
#time
{
  margin-top:20px;
  font-size:40px;
  color:silver;
  border:2px dashed #2E9AFE;
  padding:10px;
  width:200px;
  margin-left:10px;
}

</style>

  <p id="date"></p>
  <p id="time"></p>
  <script type="text/javascript">
    window.onload = setInterval(clock,1000);

    function clock()
    {
    var d = new Date();
    
    var date = d.getDate();
    
    var month = d.getMonth();
    var montharr =["Jan","Feb","Mar","April","May","June","July","Aug","Sep","Oct","Nov","Dec"];
    month=montharr[month];
    
    var year = d.getFullYear();
    
    var day = d.getDay();
    var dayarr =["Sun","Mon","Tues","Wed","Thurs","Fri","Sat"];
    day=dayarr[day];
    
    var hour =d.getHours();
      var min = d.getMinutes();
    var sec = d.getSeconds();
  
    document.getElementById("date").innerHTML=day+" "+date+" "+month+" "+year;
    document.getElementById("time").innerHTML=hour+":"+min+":"+sec;
    }
  </script>
