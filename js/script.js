const dia = document.querySelector('.dia');
const horario = document.querySelector('.horario');
const btnHorario = document.querySelector('.btnHorario');
const nome = document.querySelector('.nome');
const telefone = document.querySelector('.telefone');
const servico = document.querySelector('.servico');
const observacoes = document.querySelector('.observacoes');
const agendar = document.querySelector('.agendar');

let reserva = {
    dia: '',
    horario: '',
    nome: '',
    telefone: '',
    servico: '',
    observacoes: ''
}

dia.addEventListener('change', (e) => {
    reserva.dia = e.target.value;
});

horario.addEventListener('change', (e) => {
    reserva.horario = e.target.value;
});

nome.addEventListener('change', (e) => {
    reserva.nome = e.target.value;
});

telefone.addEventListener('change', (e) => {
    reserva.telefone = e.target.value;
});

servico.addEventListener('change', (e) => {
    reserva.servico = e.target.value;
});

observacoes.addEventListener('change', (e) => {
    reserva.observacoes = e.target.value;
});

agendar.addEventListener('click', () => {
    console.log(reserva);
    //aqui você pode enviar os dados para o seu servidor
});
    fetch('https://seu-servidor.com/api/reserva', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(reserva)
    })
    .then(response => response.json())
    .then(data => {
        console.log('Success:', data);
        //aqui você pode exibir uma mensagem de sucesso para o usuário
    })
<<<<<<< HEAD
    .catch((error) => {
        console.error('Error:', error);
        //aqui você pode exibir uma mensagem de erro para o usuário
    });
=======
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




>>>>>>> 4a22b51bab60a717f21ba8edfd7c15b8a28617ce
