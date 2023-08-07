function btnVoltar(){
    document.getElementById('agendamento-conteiner').style.display = 'none';
    document.getElementById('manha').checked = false;
    document.getElementById('tarde').checked = false;
    document.getElementById('manha').style = '';
    document.getElementById('tarde').style = '';
    document.getElementById('confirmar-btn').style = '';
}

document.querySelector('#voltarBtn').addEventListener('click', btnVoltar);

function formulario() {
    const manha = document.getElementById('manha').checked;
    const tarde = document.getElementById('tarde').checked;
    const form = {};

    if (manha && tarde) {
        if(horario.length > 0){
                horario.forEach(horario => {
            if (horario.horario === 'manhã') {
                form.horario = 'tarde';
                return;
            } else if (horario.horario === 'tarde') {
                form.horario = 'manhã';
            } 
        });   
        }else {
            document.getElementById('mensagem-form').innerText = 'você pode selecionar apenas uma opção';
            return;
        }
    } else if (manha === true) {
        form.horario = 'manhã';
    } else if (tarde === true) {
        form.horario = 'tarde';
    } else {
        document.getElementById('mensagem-form').innerText = 'selecione uma opção';
        return;
    }
    form.dia = dia;
    form.mes = mes;
    form.procedimento = document.getElementById('procedimento').value;
    fetch('/models/formularioAgendaCreate.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(form)
    })
    btnVoltar();
    buscarAgendamento(mes);
}

document.getElementById('form-agendamento').addEventListener('submit', (e) => {
    e.preventDefault();
    formulario();
});
