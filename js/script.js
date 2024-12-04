
document.getElementById('registrationForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Impede que o formulário seja enviado normalmente

    // Obtenha valores de formulário
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;

    // Validação básica
    if (password !== confirmPassword) {
        alert('Senhas não conferem!');
        return;
    }

    // Espaço reservado para ações adicionais (por exemplo, envio de dados ao servidor)
    console.log('Name:', name);
    console.log('Email:', email);
    console.log('Password:', password);

    // Opcionalmente, redirecione para outra página após o registro bem-sucedido
    // window.location.href = 'login.html';
});