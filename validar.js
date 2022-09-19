function validarFormulario(event){ 

usuario = document.getElementById('usuario').value; 
email = document.getElementById('email').value
clave = document.getElementById('clave').value;


if(usuario.length == 0){ 

alert('El campo usuario esta vacio');
    
event.preventDefault();  
}

if(email.length == 0){ 

alert('El campo email esta vacio');
        
event.preventDefault();  
}
    
if(clave.length == 0){ 
    
alert('El campo clave esta vacio');
    
event.preventDefault();
}}


