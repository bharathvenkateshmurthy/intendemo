console.log["added js"];


function verifly(){
 const inputPassword = document.querySelector('#inputPassword')
 const confirmPassword = document.querySelector('#confirmPassword')
 const passwordAlert = document.querySelector('#password')

  if(inputPassword.value !== confirmPassword.value){
    // console.log("Password match")
    passwordAlert.innerHTML="Password doesn't match";
    passwordAlert.style.display= "block"
  }else {

    // console.log("Password doesn't match")
    passwordAlert.style.display= "none"

  }
  }


let friuts = ["mango","apple","banana"]
      console.log(friuts)

   const details = [
    {  
      name:"prem",
      role:"students"
    },
    {
      name:"nandan",
      role:"student"
    },
    {
      name:"gombe",
      role:"student"
    }
   ]
   console.log(details)