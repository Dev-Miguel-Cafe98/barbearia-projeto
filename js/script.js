const loginForm = document.getElementById('loginForm');
const registrationForm = document.getElementById('registrationForm');

loginForm.addEventListener('submit', function (event) {
    event.preventDefault();
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
                window.location.href = 'home.php';
            } else {
                alert(data.message);
            }
        })
        .catch(error => {
            console.error('Erro ao logar:', error);
            alert('Erro ao logar. Por favor, tente novamente mais tarde.');
        });
});

registrationForm.addEventListener('submit', function (event) {
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
    fetch('cadastro.php', {
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
                window.location.href = 'login.php';
            } else {
                alert(data.message);
            }
        })
        .catch(error => {
            console.error('Erro ao registrar:', error);
            alert('Erro ao registrar. Por favor, tente novamente mais tarde.');
        });
});

// Obtendo todos os links da navbar
const navLinks = document.querySelectorAll('.links-menu a');

// Adicionando um event listener a cada link
navLinks.forEach(link => {
  link.addEventListener('click', (event) => {
    event.preventDefault(); // Impede o comportamento padrão do link

    const targetId = link.getAttribute('data-target');
    const targetElement = document.getElementById(targetId);

    if (targetElement) {
      targetElement.scrollIntoView({ behavior: 'smooth' });
    }
  });
});

const menuToggle = document.querySelector('.menu-toggle');
const linksMenu = document.querySelector('.links-menu');

// Toggle menu visibility
menuToggle.addEventListener('click', (event) => {
    event.preventDefault(); // Prevent default link behavior
    linksMenu.classList.toggle('active'); // Toggle the 'active' class
});




