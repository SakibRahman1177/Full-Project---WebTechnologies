    

  function validateform(){
      var name=document.myform.name.value;
      var email=document.myform.email.value;
      var username=document.myform.username.value;  
      var password=document.myform.password.value;
      var confirmpass=document.myform.confirmpass.value;
      var address=document.myform.address.value; 
      var birthday=document.myform.birthday.value;
      var gender=document.myform.gender.value;    


      if (username==null || username==""){  
        alert("Name must be Filled-Up");  
        return false;  
      }else if(password.length<5){  
        alert("Password must be at least 5 characters long.");  
        return false;  
      }  
    }
    function checkEmpty() {
        if (document.myform.username.value = "") {
          alert("Name must be Filled-Up");
            return false;  
        }
  }
     function checkName() {
      if (document.getElementById("name").value == "") {
          document.getElementById("nameErr").innerHTML = "Name must be Filled-Up";
          document.getElementById("nameErr").style.color = "red";
          document.getElementById("name").style.borderColor = "red";
      }else if(document.getElementById("name").value.length<=4){
          document.getElementById("name").style.borderColor = "red";
          document.getElementById("nameErr").style.color = "red";
        document.getElementById("nameErr").innerHTML = "Name required at least 5 characters.";
      }
      else{
        document.getElementById("nameErr").innerHTML = "";
          document.getElementById("nameErr").style.color = "red";
        document.getElementById("name").style.borderColor = "green";
      }
        }
    // function checkEmail() {
    //   var mailformat = /^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/;
    //   if (document.getElementById("email").match(mailformat)) {
    //       document.getElementById("emailErr").innerHTML = "";
    //       document.getElementById("emailErr").style.color = "red";
    //       document.getElementById("email").style.borderColor = "green";
    //   }
    //   else{
    //     document.getElementById("emailErr").innerHTML = "Email must have ...@ sign!";
    //       document.getElementById("emailErr").style.color = "red";
    //     document.getElementById("email").style.borderColor = "red";
    //   }
    //     }


      function checkUsername() {
      if (document.getElementById("username").value == "") {
          document.getElementById("usernameErr").innerHTML = "UserName must be Filled-Up";
          document.getElementById("usernameErr").style.color = "red";
          document.getElementById("username").style.borderColor = "red";
      }else if(document.getElementById("username").value.length<3){
          document.getElementById("username").style.borderColor = "red";
          document.getElementById("usernameErr").style.color = "red";
        document.getElementById("usernameErr").innerHTML = "UserName must be at least 3 characters long.";
      }
      else{
        document.getElementById("usernameErr").innerHTML = "";
          document.getElementById("usernameErr").style.color = "red";
        document.getElementById("username").style.borderColor = "green";
      }
        }

      
        function checkPass(){
          if (document.getElementById("password").value == "") {
          document.getElementById("passwordErr").innerHTML = "Password must be Filled-Up";
          document.getElementById("passwordErr").style.color = "red";
          document.getElementById("password").style.borderColor = "red";
      }else if(document.getElementById("password").value.length<5){
          document.getElementById("password").style.borderColor = "red";
          document.getElementById("passwordErr").style.color = "red";
        document.getElementById("passwordErr").innerHTML = "Password must be at least 6 characters long.";
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
          
    function checkDOB() {
      if (document.getElementById("birthday").value == "") {
          document.getElementById("birthdayErr").innerHTML = "Date of Birth must be Filled-Up";
          document.getElementById("birthdayErr").style.color = "red";
          document.getElementById("birthday").style.borderColor = "red";
      }
      else{
        document.getElementById("birthdayErr").innerHTML = "";
          document.getElementById("birthdayErr").style.color = "red";
        document.getElementById("birthday").style.borderColor = "green";
      }
        }

      function checkGender() {
      if (document.getElementById("gender").value == "") {
          document.getElementById("genderErr").innerHTML = "Date of Birth must be Filled-Up";
          document.getElementById("genderErr").style.color = "red";
          document.getElementById("gender").style.borderColor = "red";
      }
      else{
        document.getElementById("genderErr").innerHTML = "";
          document.getElementById("genderErr").style.color = "red";
        document.getElementById("gender").style.borderColor = "green";
      }
        }

      function checkAddress() {
      if (document.getElementById("address").value == "") {
          document.getElementById("addressErr").innerHTML = "Fill-Up your present address";
          document.getElementById("addressErr").style.color = "red";
          document.getElementById("address").style.borderColor = "red";
      }
      else{
        document.getElementById("addressErr").innerHTML = "";
          document.getElementById("addressErr").style.color = "red";
        document.getElementById("address").style.borderColor = "green";
      }
        }
         
      function checkEmail() {
      if (document.getElementById("email").value == "") {
          document.getElementById("emailErr").innerHTML = "Email must be Filled-Up";
          document.getElementById("emailErr").style.color = "red";
          document.getElementById("email").style.borderColor = "red";
      }
     else if(document.getElementById("email").value.indexOf('@')<=0){
        document.getElementById("emailErr").innerHTML="Invalid Email Position of @";
        document.getElementById("emailErr").style.color = "red";
        document.getElementById("email").style.borderColor = "red";
      } 
      else if(document.getElementById("email").value.search('@gmail.com')==-1){
        document.getElementById("emailErr").innerHTML="Invalid Email Format! (Format has to be ...@gmail.com)";
        document.getElementById("emailErr").style.color = "red";
        document.getElementById("email").style.borderColor = "red";
      }     
       else{
        document.getElementById("emailErr").innerHTML = "";
          document.getElementById("emailErr").style.color = "red";
        document.getElementById("email").style.borderColor = "green";
      }
    }