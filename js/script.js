document.getElementById('registrationForm').addEventListener('submit', function (event) {
    event.preventDefault(); 

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;

    if (password !== confirmPassword) {
        alert('Senhas não conferem!');
        return;
    }

    const userData = { name, email, password };
    fetch('register.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(userData)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Cadastro realizado com sucesso!');
            window.location.href = 'login.html';
        } else {
            alert(data.message);
        }
    })
    .catch(error => {
        console.error('Erro ao registrar:', error);
        alert('Erro ao registrar. Por favor, tente novamente mais tarde.');
    });
});

const form = document.getElementById('loginForm');
form.addEventListener('submit', (e) => {
    e.preventDefault();
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    const userData = { email, password };
    fetch('login.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(userData)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Login realizado com sucesso!');
            window.location.href = 'home.html'; 
        } else {
            alert(data.message);
        }
    })
    .catch(error => {
        console.error('Erro ao logar:', error);
        alert('Erro ao logar. Por favor, tente novamente mais tarde.');
    });
});