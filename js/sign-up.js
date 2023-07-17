const pass = document.querySelector('#pass-signup');
const eye = document.querySelector('#eye-icon1');
eye.onclick = function () {
    if (pass.type == "password") {
        pass.type = "text"; eye.classList.remove('fa-eye');
        eye.classList.remove('fa-sharp');
        eye.classList.remove('fa-thin');
        eye.classList.add('fa-regular');
        eye.classList.add('fa-eye-slash');
    }
    else {
        pass.type = 'password';
        eye.classList.add('fa-eye');
        eye.classList.add('fa-sharp');
        eye.classList.add('fa-thin');
        eye.classList.remove('fa-regular');
        eye.classList.remove('fa-eye-slash');
    }
}
const cpass = document.querySelector('#cpass-signup');
const ceye = document.querySelector('#eye-icon');
ceye.onclick = function () {
    if (cpass.type == "password") {
        cpass.type = "text"; 
        ceye.classList.remove('fa-eye');
        ceye.classList.remove('fa-sharp');
        ceye.classList.remove('fa-thin');
        ceye.classList.add('fa-regular');
        ceye.classList.add('fa-eye-slash');
    }
    else {
        cpass.type = 'password';
        ceye.classList.add('fa-eye');
        ceye.classList.add('fa-sharp');
        ceye.classList.add('fa-thin');
        ceye.classList.remove('fa-regular');
        ceye.classList.remove('fa-eye-slash');
    }
}
const message=document.querySelector('#message');
cpass.onchange=function(){
    
    if(cpass.value==""){
        message.innerHTML="";
    }
    
    else if(pass.value==cpass.value){
            message.innerHTML="Matched";
            message.style.color="green";
        }
        
        else{
            // message.remove.innerHTML="Matched";
            message.innerHTML="Not Matched";
            message.style.color="red";
        }
} 
const regex = new RegExp('[a-zA-Z0-9\._]+@[a-z0-9]{2,4}');
const email=document.querySelector('#email-signup');
email.onchange=function(){
  if (regex.test(email.value)) {
            email.classList.add('is-valid');
            email.classList.remove('is-invalid');
}

else{ 
            email.classList.remove('is-valid');
            email.classList.add('is-invalid');
}
}
const err=document.querySelector('#err-pass');
pass.onchange=function(){
   
    if(pass.value==""){
        message.innerHTML="";
    }
    else if(pass.value==cpass.value){
        message.innerHTML="Matched";
        message.style.color="green";
    }   
    else{
        message.innerHTML="Not Matched";
        message.style.color="red";
    }
    if(pass.value.length<=6){
        err.innerHTML=" *at least 8 characters";
        err.style.color="red";
    }
    else{
        err.innerHTML="";
    }
}