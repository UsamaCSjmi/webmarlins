
function subscribe(){

    const email = document.getElementById('email').value;
    const name = document.getElementById('name').value;
    let e_msg= document.getElementById('email-msg');
    let n_msg= document.getElementById('name-msg');
    let msg= document.getElementById('final-msg');
    e_msg.innerText = "";
    n_msg.innerText = "";
    msg.innerText = "";
    
    var alright = true;
    if(email == "" ){
        alright = false;
        e_msg.classList.add("error");
        e_msg.innerText = "Email can't be empty";
    }
    if(name == ""){
        alright = false;
        n_msg.classList.add("error");
        n_msg.innerText = "Name can't be empty";
    }
    data_object = {
        email: email,
        name: name
    }
    if(alright){
        send_mail(data_object);
    }
}

function analyze_site(){
    const website = document.getElementById('url').value;
    let msg= document.getElementById('analyze-msg');
    msg.innerText = "";
    msg.classList.remove("error");
    msg.classList.remove("success");
    
    var alright = true;
    if(website == "" ){
        alright = false;
        msg.classList.add("error");
        msg.innerText = "Website can't be empty";
    }
    data_object = {
        website: website
    }
    if(alright){
        send_mail(data_object,"analyze-msg");
    }    
}

function sign_up(){
    const email = document.getElementById('email_sign_up').value;
    let msg= document.getElementById('final-msg');
    msg.innerText = "";
    msg.classList.remove("error");
    msg.classList.remove("success");
    
    var alright = true;
    if(email == "" ){
        alright = false;
        msg.classList.add("error");
        msg.innerText = "Email can't be empty";
    }
    data_object = {
        email: email
    }
    if(alright){
        send_mail(data_object);
    }
}

function send_contact(){
    const email = document.getElementById('email').value;
    const name = document.getElementById('name').value;
    const website = document.getElementById('website').value;
    const phone = document.getElementById('phone').value;
    const message = document.getElementById('message').value;
    let msg= document.getElementById('final-msg');
    msg.innerText = "";
    
    var alright = true;
    if(email == "" ){
        alright = false;
        msg.classList.add("error");
        msg.innerText = "Email can't be empty";
    }
    else if(name == ""){
        alright = false;
        msg.classList.add("error");
        msg.innerText = "Name can't be empty";
    }
    data_object = {
        email: email,
        name: name,
        website : website,
        phone : phone,
        message : message
    }
    if(alright){
        send_mail(data_object);
    }
}

function send_mail(data_object,id){
    id = id || "final-msg";
    const location = "./backend/mail_API/mail.php";

        axios(
            {
                method: "post",
                url: location,
                data: data_object
            }
        )
        .then(function (response) {
            showMessage(response.data,id);
        })
        .catch(function (error) {
            showMessage("error",id);
        });
}

function showMessage(type,id){
    let msg = document.getElementById(id);
    if(type == "success"){
        msg.classList.add('success');
        msg.innerText = "Thank You. We will contact you shortly";
    }
    else{
        msg.classList.add('error');
        msg.innerText = "An error occured. We are deeply regretted for the inconvinience";
    }
    console.log(type);
}

function menu(action){
    main_menu = document.getElementById('nav-list');
    open_btn = document.getElementById('menu-open');
    close_btn = document.getElementById('menu-close');
    if(action=="open"){
        open_btn.style.display = "none";
        close_btn.style.display = "block";
        main_menu.classList.add("active-nav")
    }
    else if(action == "close"){
        close_btn.style.display = "none";
        open_btn.style.display = "block";
        main_menu.classList.remove("active-nav")
    }
}

function scrollToTop() {
    window.scrollTo(0, 0);
}