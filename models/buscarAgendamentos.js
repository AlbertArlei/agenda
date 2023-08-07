let agendamentos;
function buscarAgendamento(mes) {
    const form = {};
    form.mes = mes;
    fetch('/models/buscarAgendamentos.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(form)
    }).then(response => response.json()).then(data => {
        agendamentos = data;
        const blocks = document.querySelectorAll('.block');
        blocks.forEach(block => {
            let filtro = data.filter(item => item.dia === block.innerText);
            if (filtro.length > 0) {
                block.querySelector('.circle-conteiner').innerHTML = '';
                filtro.forEach(horario => {
                    if (horario.horario === 'manhã') {
                        block.querySelector('.circle-conteiner').innerHTML += '<div class="circle"></div>';
                    } else {
                        block.querySelector('.circle-conteiner').innerHTML += '<div class="circle"></div>';
                    }
                })
            }
        });
    });
}

buscarAgendamento(mes);
document.querySelector('.fa-chevron-left').addEventListener('click', () => {
    buscarAgendamento(mes);
});

document.querySelector('.fa-chevron-right').addEventListener('click', () => {
    buscarAgendamento(mes);
});
