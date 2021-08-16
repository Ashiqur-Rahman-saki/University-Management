
    function jsValid() 
    { 
        const form = document.getElementById('form'); 
        const coursename = document.getElementById('coursename');
        const time = document.getElementById('time');
        const edition = document.getElementById('edition');
        const numberofcopy = document.getElementById('numberofcopy');

         
        var flag = true;       
        checkInputs();

 

        function checkInputs() 
        {
            

            const  coursenameValue = coursename.value.trim();   
            const  timeValue = time.value.trim();   
            const  room = room.value.trim();   
            const  sectionValue = section.value.trim();   
            

            if (coursenameValue === ''){
                
                setErrorFor(coursename,'Course name cannot be blank');
                flag = false;
            }
            else if(coursenameValue.length > 100){
                setErrorFor(coursename,'Course name cannot be > 100 character');
                flag = false;
            }
            else{
                
                setSuccessFor(coursename);
            }



            if (timeValue === ''){
                setErrorFor(time,'Time cannot be blank');
                flag = false;
            }
            else if(timeValue.length > 50) {
                setErrorFor(time,'Time cannot be > 50 character');
                flag = false;
            }
            else setSuccessFor(time);



            if (room === ''){
                setErrorFor(room,'Room cannot be blank');
                flag = false;
            }
            else if(room.length > 10) {
                setErrorFor(room,'Room cannot be > 10 character');
                flag = false;
            }
            else setSuccessFor(room);

         

            if (sectionValue === '') {
                setErrorFor(section,'Section cannot be blank');
                flag = false;
            }
            else if(sectionValue.length > 10) {
                setErrorFor(section,'Section cannot be > 10 character');
                flag = false;
            }
            else setSuccessFor(section);

 
         
          }

         function setErrorFor(input, message)
         {
            const formControl = input.parentElement; 
            const small = formControl.querySelector('small');

            
            small.innerText = message;

            
            formControl.className = 'form-control error';
         } 

         function setSuccessFor(input)
         {
            const formControl = input.parentElement; 
         
            
            formControl.className = 'form-control success';
         }

         return flag;
         
    }