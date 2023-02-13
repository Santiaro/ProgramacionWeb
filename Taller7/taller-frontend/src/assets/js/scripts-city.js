document.addEventListener("DOMContentLoaded", function () {

    const form = document.getElementById('form');
    
    form.addEventListener('submit', (event) => {
        event.preventDefault();
        console.log(form);
    
        const formData = new FormData(form);
        const formObj = Object.fromEntries(formData);
    
        
        
        const name = document.getElementById('name');  
        
        checkUser(name);
    
        
        
    });
    function checkUser(input){
        var nameRegex = /^[a-zA-Z0-9]+$/;
        if ( input.value.length > 20 ){
            setWrongInput(input,'La longitud no debe ser mayor a  20 carácteres');
            return;
            
        } else if (input.value.match(nameRegex)==null){
            setWrongInput(input,'El nombre no debe tener carácteres especiales');
            return ;
        }
        removeWrongInput(input);
    }
function setWrongInput(input, messages) {
    input.classList.add('is-invalid');
    input.classList.remove('is-valid');
    input.parentNode.querySelector('.invalid-feedback').innerText = messages;
}
function removeWrongInput(input) {
    input.classList.remove('is-invalid');
    input.classList.add('is-valid');
    input.parentNode.querySelector('.invalid-feedback').innerText = '';
}

});
