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
    .catch((error) => {
        console.error('Error:', error);
        //aqui você pode exibir uma mensagem de erro para o usuário
    });
