function checkGender(){
    if(document.getElementById('male').checked) {
       alert("Selected gender: "+document.getElementById('male').value)
    }else if(document.getElementById('female').checked) {
       alert("Selected gender: "+document.getElementById('female').value)
    }
    else{
       alert("Please choose your gender")
    }
  }