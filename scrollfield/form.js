// form validation JS
function checkMe(event){
    const na = document.forms["form"]["Na"].value;
    const em = document.forms["form"]["Em"].value;
    const nu = document.forms["form"]["Nu"].value;
    const errorElem = document.getElementById('error');
    const form = document.forms["form"];
  
    let messages = [];
    if(na === '' || na === null){
        messages.push('Name is required');
    }
    if(em === '' || em === null){
        messages.push('Email is required');
    }
    if(nu === "" || nu === null){
        messages.push('Number is required');
    }
    if(messages.length > 0){
        const err = errorElem.innerText = messages.join(' , ')
        // alert("messages:" + messages.length); 
        errorElem.innerHtml = err; 
        event.preventDefault();  
    }
}







