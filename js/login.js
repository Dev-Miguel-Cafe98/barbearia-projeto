
const form = document.getElementById('loginForm');
form.addEventListener('submit', (e) => {
    e.preventDefault();
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    // Add your login logic here
    console.log(email, password);
});

    fetch('login.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ email, password })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Login realizado com sucesso!');
            window.location.href = 'home.html'; // Redirect to home page after successful login
        } else {
            alert(data.message);
        }
    })
    .catch(error => {
        console.error('Erro ao logar:', error);
        alert('Erro ao logar. Por favor, tente novamente mais tarde.');
    });
