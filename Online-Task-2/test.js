function validate(pForm){
    const username=pForm.username.value;
    const email=pForm.email.value;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const check=pForm.check.checked;
    console.log(check);
    let errorFlag=false;
    
    if(username==""){
        document.getElementById('userNameError').innerHTML='Please fill up the username';
        document.getElementById('userNameError').style.color='red';
        errorFlag=true;
    }
    
    if(email=="" || !emailRegex.test(email)){
        document.getElementById('userEmailError').innerHTML='Please provide a valid Email';
        document.getElementById('userEmailError').style.color='red';
        errorFlag=true;
    }
    if(check==false){
        document.getElementById('checkError').innerHTML='Please check the box';
        document.getElementById('checkError').style.color='red';
        errorFlag=true;
    }

    return !errorFlag;

}