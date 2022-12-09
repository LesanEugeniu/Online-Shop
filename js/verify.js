const otp = document.querySelectorAll('.otp_field');

otp[0].focus();

otp.forEach((field, index) =>{

    field.addEventListener('keydown', (e) => {
        if(e.key >= 0 && e.key <= 9){
            otp[index].value = "";
            setTimeout(() => {
                otp[index + 1].focus();
            }, 4);
        }
        else if(e.key === 'Backspace'){
            setTimeout(() => {
                otp[index - 1].focus();
            }, 4);
        }
    });
}) ;

const form = document.querySelector('.form');
const submitbtn = document.querySelector('.submit');
const errortext = document.querySelector('.error p');

form.onsubmit = (e) => {
    e.preventDefault();
}

submitbtn.addEventListener("click",function(){
    // start ajax
    let xhr = new XMLHttpRequest();
    xhr.open("POST","./php/otp.php",true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status == 200){
                let data = xhr.response;
                if(data == "success"){
                    location.href = "./index.php";
                }
                else{
                    errortext.textContent = data;
                    document.querySelector('.error').style.display = "block";
                }
            }
        }
    }
    // trimiterea datelor prin ajax in php
    let formData = new FormData(form);
    xhr.send(formData);
})