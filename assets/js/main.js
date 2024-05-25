console.log("added js");


function verify(){
    const inputPassword = document.querySelector('#inputPassword')
    const confirmPassword = document.querySelector('#confirmPassword')
    const passwordAlert = document.querySelector('#password')
    if(inputPassword.value !== confirmPassword.value){
        passwordAlert.innerHTML = "doesnt match"
        passwordAlert.style.display = "block"
    }else{
        console.log("password not match");
        passwordAlert.style.display = "none"
    }
}



let fruits = ["mango","orange","apple"]

console.log(fruits);