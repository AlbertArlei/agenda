<div id="calendario-conteiner">
    <div id="chevron">
        <i class="fa-solid fa-chevron-left" style="color: #000000;"></i>
        <span id="mes"></span>
        <i class="fa-solid fa-chevron-right" style="color: #000000;"></i>
    </div>
    <div id="semana">
        <div class="dia-semana"><span>Dom</span></div>
        <div class="dia-semana"><span>Seg</span></div>
        <div class="dia-semana"><span>Ter</span></div>
        <div class="dia-semana"><span>Qua</span></div>
        <div class="dia-semana"><span>Qui</span></div>
        <div class="dia-semana"><span>Sex</span></div>
        <div class="dia-semana"><span>Sab</span></div>
    </div>
    <div id="calendario"></div>
</div>

<div id="agendamento-conteiner">
    <form id="form-agendamento">
        <div id="titulo-conteiner">
            <i id="voltarBtn" class="fa-solid fa-chevron-left" style="color: #000000;"></i>
            <span>horario</span>
        </div>
        <span id="data"></span>
        <div class="checkbox-conteiner">
            <span>manhã</span>
            <input type="checkbox" name="manha" id="manha">
        </div>
        <div class="checkbox-conteiner">
            <span>tarde</span>
            <input type="checkbox" name="tarde" id="tarde">
        </div>
        <select name="procedimento" id="procedimento">
            <option value="Selagem">Selagem</option>
            <option value="Botox">Botox</option>
            <option value="coloração">coloração</option>
            <option value="Loiro">Loiro</option>
        </select>
        <span id="mensagem-form"></span>
        <input type="submit" id="confirmar-btn" value="Confirmar">

    </form>
</div>

<script src="<?php echo $calendario; ?>"></script>
<script src="<?php echo $buscarAgendamento; ?>"></script>
<script src="<?php echo $formulario; ?>"></script>