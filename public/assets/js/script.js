document.getElementById('loginForm').addEventListener('submit', function(event){
    event.preventDefault();

    const correctUsername = "Sigma";
    const correctPassword = "Skibidi";

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    
    if(username == correctUsername && password == correctPassword){
        alert("Login Berhasil")
        window.location.href = 'home';

    }else{
        alert("Username atau password salah")
    }

});