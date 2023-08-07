const date = new Date();
let ano = date.getFullYear();
let mes = date.getMonth();
let dia;
let horario;
mes++;

function calendario() {

    function mesSelecionado(ano, mes) {
        const dias = new Date(ano, mes, 0).getDate();
        return dias;
    }

    document.querySelector('.fa-chevron-left').addEventListener('click', () => {
        mes--;
        gerarCalendario(mesSelecionado(ano, mes));
    });

    document.querySelector('.fa-chevron-right').addEventListener('click', () => {
        mes++;
        gerarCalendario(mesSelecionado(ano, mes));
    });


    function gerarCalendario(dias) {
        document.getElementById('calendario').innerHTML = "";
        for (let i = 1; i <= dias; i++) {
            const div = document.createElement('div');
            div.setAttribute('class', 'block');
            div.innerHTML = `<span class="dia">${i}</span>`;
            div.innerHTML += '<div class="circle-conteiner"></div>';
            document.getElementById('calendario').appendChild(div);
        }

        document.getElementById('mes').innerText = `${new Date(ano, mes, 0).toLocaleDateString('pt-BR', { month: 'long' })}`;
    }

    gerarCalendario(mesSelecionado(ano, mes));

    document.getElementById('calendario').addEventListener('click', (e) => {
        const target = e.target;
        function selecionarDia() {
            if (target === document.getElementById('calendario')) return;
            dia = target.innerText;
            let diaFormatado = target.innerText;
            let mesFormatado = `${new Date(ano, mes, 0).toLocaleDateString('pt-BR', { month: 'long' })}`;
            if (parseInt(target.innerText) < 10) {
                diaFormatado = `0${target.innerText}`;
            }
            document.getElementById('data').innerText = `${diaFormatado}/${mesFormatado}`;
            const form = {};
            form.mes = mes;
            fetch('/models/buscarAgendamentos.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(form)
            }).then(response => response.json()).then(data => {
                const check = data.filter(item => item.dia === dia);
                horario = check;
                if(check.length > 0){
                    check.forEach(check =>{
                        if(check.horario == 'manhã'){
                            document.getElementById('manha').checked = true;
                            document.getElementById('manha').style.pointerEvents = 'none';
                            document.getElementById('manha').style.accentColor = 'green';
                        }else{
                            document.getElementById('tarde').checked = true;
                            document.getElementById('tarde').style.pointerEvents = 'none';
                            document.getElementById('tarde').style.accentColor = 'green';
                        }

                    })
                }
                if(check.length === 2){
                    document.getElementById('confirmar-btn').style.pointerEvents = 'none';
                }
             });
            document.getElementById('agendamento-conteiner').style.display = 'flex';
        }
        selecionarDia();
    });

}
calendario();


