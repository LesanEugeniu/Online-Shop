const form = document.querySelector('.form');
const submitbtn = document.querySelector('.submit');
const errortext = document.querySelector('.error p');

form.onsubmit = (e) => {
    e.preventDefault();
}

submitbtn.addEventListener("click",function(){
    // start ajax
    let xhr = new XMLHttpRequest();
    xhr.open("POST","./php/login.php",true);
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

