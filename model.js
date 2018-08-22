function textdisplay() {
    //alert("manisha");


	 if ($("#title").is(":checked")) {
	 	   
	 		$("#inputdescription").hide();//working
            
            $("#inputtitle").show();

     }  
     if ($("#desc").is(":checked")) {
     	     
             $("#inputtitle").hide();//working
             $("#inputdescription").show();///working
             
                
     }
         if ($("#non").is(":checked")) {
                
                $("#inputtitle").hide();
                $("#inputdescription").hide();//working
                
     }




}



  // $(document).ready(function(){
  //     $('#submit').click(function() {
  //       //alert("sunita");
  //        $.ajax({
  //              type:"post",
  //              url:"searchresult.php",
  //              data:  $("#form").serialize(),
  //              success: function(response){
  //                  $("#searchresult").html(response);
  //              }
  //        });
  //     });
  //  });

 $(document).ready(function(){
    
        $('#submit').click(function(e) { 
         // alert("sunita");
            e.preventDefault();
            $.ajax({ 
                type:"post",
                url:"searchresult.php",
                data: $("#form").serialize(),
                 success: function(response){
                  // alert (response);
                   
                 $("#oldresult" ).html("");
                 $("#showresut" ).html(response)}



                // success: function(response){

                //   alert (response);

                //   if( $("#showresut" ).is("")){
                //     alert("empty");
                //       $("#showresut" ).html(response);
                //     }
                   
                //    else {
                //     alert("full");
                    

                //      $("#oldresult" ).html("");
                     
                       
                //    $("#showresut" ).html(response);

                //    } 
                // }

            });
            //return false;
        }); 

    });


///backuppp latest
 // $(document).ready(function(){
    
 //        $('#submit').click(function(e) { 
 //          alert("sunita");
 //            e.preventDefault();
 //            $.ajax({ 
 //                type:"post",
 //                url:"searchresult.php",
 //                data: $("#form").serialize(),
 //                success: function(response){
 //                  alert (response);
 //                  $("#showresut" ).html(response)}

 //            });
 //            //return false;
 //        }); 

 //    });



// function check(){

//    alert("sunitaaaaaa");

//    $.ajax({
//       url: "",
//       data:{title:$('#title').val(),title:$('#title').val(),inputtitle:$('#inputtitle').val(),desc:$('#desc').val(),inputdescription:$('#inputdescription').val(),non:$('#non').val()}
//    }).done(function( response ) {
//        alert( response );
//    $("#search1").html(response); 
//   });

// }



// $(document).ready(function(){
//   $("#submit").click(function(e){
//    e.preventDefault();
//    $.ajax({
//     //type:"post";
//       url: "",
//       data:$("#form").serialize()
//    }).done(function( response ) {
//        alert( response );
//    $("#search1").html(response); 
//   }
//  });    
// });

// $('#form').submit(function(e){
//     e.preventDefault();
//     e.stopImmediatePropagation();
//     $.ajax({
//         type: "POST",
//         url: "",
//         data: $(this).serialize(),
//         success: function( response ) {
//             console.log( response );
//         }
//     });

//     return false;
// });