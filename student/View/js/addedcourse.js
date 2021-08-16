 
 		function getResult(data)
 		{
 		
 			var req = new XMLHttpRequest();	
 			req.open("GET","http://localhost/wt/Student/Controller/addedcourseaction.php?datavalue="+data.courseid.value,true); 
 			req.send();

 			req.onreadystatechange=function()
 			{
 				if(req.readyState == 4 && req.status==200)
 				{
 			
 					document.getElementById('result').innerHTML = req.responseText;
 		
 					console.log(req.responseText);
 				}

 			}
 		}



 		function deleteFunction(id)
 		{
 			console.log("delete button");
 			console.log(id);
 			 

 			var req = new XMLHttpRequest();	
 			req.open("GET","http://localhost/wt/Student/Controller/addedcourseactiondelete.php?id="+id,true); 
 			req.send();

 			req.onreadystatechange=function()
 			{
 				if(req.readyState == 4 && req.status==200)
 				{
 					document.getElementById('update').innerHTML = req.responseText;
 					console.log(req.responseText);
 				}

 			}
 		}
 
