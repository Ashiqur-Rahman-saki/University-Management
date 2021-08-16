 
    function jsValid() 
    { 
        const form = document.getElementById('form'); 
        const OldPassword = document.getElementById('OldPassword');
        const NewPassword = document.getElementById('NewPassword');
        const NewPasswordAgain = document.getElementById('NewPasswordAgain');
        
 
         
        var flag = true;       
        checkInputs();

 

        function checkInputs() 
        {
            

            const  OldPasswordValue = OldPassword.value.trim();   
            const  NewPasswordValue = NewPassword.value.trim();   
            const  NewPasswordAgainValue = NewPasswordAgain.value.trim();   
           

            if (OldPasswordValue === ''){
                
                setErrorFor(OldPassword,'Password cannot be blank');
                flag = false;
            }
            else if(OldPasswordValue.length > 15){
                setErrorFor(OldPassword,'Password cannot be > 15 character');
                flag = false;
            }
            else{
                
                setSuccessFor(OldPassword);
            }



            if (NewPasswordValue === ''){
                setErrorFor(NewPassword,'New Password cannot be blank');
                flag = false;
            }
            else if(NewPasswordValue.length > 15) {
                setErrorFor(NewPassword,'New Password cannot be > 15 character');
                flag = false;
            }
            else setSuccessFor(NewPassword);



            if (NewPasswordAgainValue === ''){
                setErrorFor(NewPasswordAgain,'Re-Enter Password cannot be blank');
                flag = false;
            }
            else if(NewPasswordAgainValue.length > 15) {
                setErrorFor(NewPasswordAgain,'Re-Enter Password cannot be > 15 character');
                flag = false;
            }
            else if(NewPasswordAgainValue !== NewPasswordValue) {
                setErrorFor(NewPasswordAgain,'Password does not match');
                flag = false;
            }
            else setSuccessFor(NewPasswordAgain);
 
         
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
 
    
 
