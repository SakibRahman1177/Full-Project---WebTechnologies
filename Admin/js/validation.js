    function validateform(){  
      var username=document.myform.username.value;  
      var email=document.myform.email.value;
      var password=document.myform.password.value;  
      var address=document.myform.address.value;
      var phonenum=document.myform.phonenum.value;
      var dob=document.myform.dob.value;
      var gender=document.myform.gender.value;
      var confirmpass=document.myform.confirmpass.value;
      var name=document.myform.name.value;
        
      if (username==null || username==""){  
        alert("Name can't be blank");  
        return false;  
      } 
      else if(password.length<4){  
        alert("Password must be at least 4 characters long.");  
        return false;  
      }
      else if(phonenum.length<11){  
        alert("Password must be at least 11 characters long.");  
        return false;  
      }    
    }

    function checkEmpty() {
        if (document.myform.username.value = "") {
          alert("Name can't be blank");
            return false;  
        }
      }  
      function checkEmpty() {
        if (document.myform.name.value = "") {
          alert("Name can't  blank");
            return false;  
        }
      }
    function checkUName() {
      if (document.getElementById("username").value == "") {
          document.getElementById("usernameErr").innerHTML = "Username can't be blank";
          document.getElementById("usernameErr").style.color = "red";
          document.getElementById("username").style.borderColor = "red";
      }
      else{
          document.getElementById("usernameErr").innerHTML = "";
          document.getElementById("usernameErr").style.color = "red";
          document.getElementById("username").style.borderColor = "green";
      }
      
        }

      //       function checkName() {
      // if (document.getElementById("name").value == "") {
      //     document.getElementById("nameErr").innerHTML = "Name can't be blank";
      //     document.getElementById("nameErr").style.color = "red";
      //     document.getElementById("name").style.borderColor = "red";
      // }
      // else if(document.getElementById("name").value.length<2){
      //     document.getElementById("nameErr").innerHTML = "Name must contain at least 2 words.";
      //     document.getElementById("name").style.borderColor = "red";
      //     document.getElementById("nameErr").style.color = "red";
        
      // }
      // else{
      //     document.getElementById("nameErr").innerHTML = "";
      //     document.getElementById("nameErr").style.color = "red";
      //     document.getElementById("name").style.borderColor = "black";
      // }      
      //   }

           function checkAddress() {
      if (document.getElementById("address").value == "") {
          document.getElementById("addressErr").innerHTML = "Address can't be blank";
          document.getElementById("addressErr").style.color = "red";
          document.getElementById("address").style.borderColor = "red";
      }else{
          document.getElementById("addressErr").innerHTML = "";
          document.getElementById("address").style.borderColor = "green";
      }
        }
        function checkNumber() {
      if (document.getElementById("phonenum").value == "") {
          document.getElementById("phonenumErr").innerHTML = "Number can't be blank";
          document.getElementById("phonenumErr").style.color = "red";
          document.getElementById("phonenum").style.borderColor = "red";
      }else if(document.getElementById("phonenum").value.length<11){
          document.getElementById("phonenum").style.borderColor = "red";
          document.getElementById("phonenumErr").style.color = "red";
        document.getElementById("phonenumErr").innerHTML = "Number must be at least 11 digit long.";
      }
      else{
          document.getElementById("phonenumErr").innerHTML = "";
        document.getElementById("phonenum").style.borderColor = "green";
      }
        }
        function checkDob() {
         
      if (document.getElementById("dob").value == "") {
          document.getElementById("dobErr").innerHTML = "Date Of Birth can't be blank";
          document.getElementById("dobErr").style.color = "red";
          document.getElementById("dob").style.borderColor = "red";
      }
      else{
          document.getElementById("dobErr").innerHTML = "";
        document.getElementById("dob").style.borderColor = "green";
      }
        }
       function checkGender() {
      if (document.getElementById("gender").value == "") {
          document.getElementById("genderErr").innerHTML = "Gender can't be blank";
          document.getElementById("genderErr").style.color = "red";
          document.getElementById("gender").style.borderColor = "red";
      }else{
          document.getElementById("genderErr").innerHTML = "";
        document.getElementById("gender").style.borderColor = "green";
      }
        }
        function checkPass(){
          if (document.getElementById("password").value == "") {
          document.getElementById("passwordErr").innerHTML = "Password can't be blank";
          document.getElementById("passwordErr").style.color = "red";
          document.getElementById("password").style.borderColor = "red";
      }else if(document.getElementById("password").value.length<4){
          document.getElementById("password").style.borderColor = "red";
          document.getElementById("passwordErr").style.color = "red";
        document.getElementById("passwordErr").innerHTML = "Password must be at least 4 characters long.";
      }
      else if(document.getElementById("password").value.search(/[!\@\#\$\%]/)==-1){
          document.getElementById("password").style.borderColor = "red";
          document.getElementById("passwordErr").style.color = "red";
        document.getElementById("passwordErr").innerHTML = "Password must have one special characters (@,#,$,%)!.";
     }
     else if(document.getElementById("password").value.search(/[0-9]/)==-1){
          document.getElementById("password").style.borderColor = "red";
          document.getElementById("passwordErr").style.color = "red";
        document.getElementById("passwordErr").innerHTML = "Password must have at least 1 numeric value!.";
     }
      else{
        document.getElementById("passwordErr").innerHTML = "";
          document.getElementById("passwordErr").style.color = "red";
        document.getElementById("password").style.borderColor = "green";
      }
        }
          function checkEmail() {
      if (document.getElementById("email").value == "") {
          document.getElementById("emailErr").innerHTML = "Email can't be blank";
          document.getElementById("emailErr").style.color = "red";
          document.getElementById("email").style.borderColor = "red";
      }
     else if(document.getElementById("email").value.indexOf('@')<=0){
        document.getElementById("emailErr").innerHTML="Cannot use @ in the beginning";
        document.getElementById("emailErr").style.color = "red";
        document.getElementById("email").style.borderColor = "red";
      }
      else if(document.getElementById("email").value.search('@gmail.com')==-1){
        document.getElementById("emailErr").innerHTML="Invalid Email Format! (example@gmail.com,example@yahoo.com)";
        document.getElementById("emailErr").style.color = "red";
        document.getElementById("email").style.borderColor = "red";
      }
      else if(document.getElementById("email").value.search('@yahoo.com')==-1){
        document.getElementById("emailErr").innerHTML="Invalid Email Format! (example@gmail.com,example@yahoo.com)";
        document.getElementById("emailErr").style.color = "red";
        document.getElementById("email").style.borderColor = "red";
      }    
       else{
        document.getElementById("emailErr").innerHTML = "";
          document.getElementById("emailErr").style.color = "red";
        document.getElementById("email").style.borderColor = "green";
      }
    }
    function confirmPass(){
          if (document.getElementById("confirmpass").value == "") {
          document.getElementById("confirmpassErr").innerHTML = "Retype the Password";
          document.getElementById("confirmpassErr").style.color = "red";
          document.getElementById("confirmpass").style.borderColor = "red";
      }
      else if(document.getElementById("confirmpass").value != document.getElementById("password").value){
          document.getElementById("confirmpass").style.borderColor = "red";
          document.getElementById("confirmpassErr").style.color = "red";
        document.getElementById("confirmpassErr").innerHTML = "Both Passwords must be same!";
      }
        else {
        document.getElementById("confirmpassErr").innerHTML = "";
          document.getElementById("confirmpassErr").style.color = "red";
        document.getElementById("confirmpass").style.borderColor = "green";
      }

        }
