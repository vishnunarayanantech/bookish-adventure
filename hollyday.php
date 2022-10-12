<!doctype html>
<html lang = "en">
   <head>
      <meta charset = "utf-8">
      <title>jQuery UI Datepicker functionality</title>
      <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      
      <!-- Javascript -->
      <script>
 

         $(document).ready(function(){	

            $( "#datepicker-13" ).datepicker();
            $( "#datepicker-13" ).datepicker("show");

            $( "#datepicker-14" ).datepicker();
            $( "#datepicker-14" ).datepicker("show");



                        $( "#btno" ).click(function() { 
                                                    
                                                    
                                                    var user =  $('#datepicker-13').val();
                                                    var edit = 0;
                                                    
                                                    $.ajax({

                                                    url: 'ajax.php',
                                                    type: 'POST',
                                                    data:{user:user,edit:edit,},
                                                    success: function(data) 
                                                    {
                                                        alert(data);
                                                    }

                                                    });
                        });


                        $( "#livet" ).click(function() { 
                                                    
                                                    var propertyID  =  "133539";
                                                    var strCheckIn  =  $('#datepicker-13').val();
                                                    var strCheckOut =  $('#datepicker-14').val();

                                                        // alert(propertyID);
                                                        // alert(strCheckIn);
                                                        // alert(strCheckOut);
                                                        //https://bookings.holidayvacationrental.com/rentals/ajax/get-datepicker.cfm 
                                                        //https://bookings.holidayvacationrental.com/ajax/get-datepicker.cfm  // wrong

                                                    $.ajax({                                                       
                                                    url: 'https://bookings.holidayvacationrental.com/rentals/ajax/get-datepicker.cfm ',
                                                    type: 'POST',
                                                    data:{propertyID:propertyID,},
                                                    success: function(data) 
                                                    {
                                                       // alert("success");
                                                        //alert(data);
                                                        $("#apnt").append(data);
                                                    }

                                                    });
                        });
						
	   });
					

       

      </script>
   </head>
   
   <body>
      <!-- HTML --> 
      Enter Start Date: <input type = "text" id = "datepicker-13"> &nbsp&nbsp&nbsp&nbsp&nbsp
      Enter End Date: <input type = "text" id = "datepicker-14">
      <br>
      
      <input type="button" id="btno" value="click"></input>
      <input type="button" id="livet" value="live test"></input>
      <br><br><br><br>
      <div id="apnt"></div>
   </body>
</html>