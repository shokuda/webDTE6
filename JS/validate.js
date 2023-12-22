
// console.log(username);
// console.log(pass);
function validateLogin() {  
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
      // Verifica las credenciales (esto debería hacerse en el servidor en un entorno real)
     if (username === 'DTER6' && password === '123') {
       // Si las credenciales son válidas, redirige al usuario a otra página
       window.location.href = '../DTER6 Web/form.html';
     } else {
       // Si las credenciales son incorrectas, muestra un mensaje de error
       alert('Credenciales incorrectas. Por favor, inténtalo de nuevo.');
     }
    }

 // validateLogin(username, password);