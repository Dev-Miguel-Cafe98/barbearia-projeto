fetch('register.php', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify({ name, email, password })
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
