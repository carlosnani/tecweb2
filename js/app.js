
let adicionarDepedente = document.querySelector('#adicionarDepedente');
adicionarDepedente.addEventListener('click', adicionarCampoDepedente)

let value = 0;

function adicionarCampoDepedente(){
    let tabelaDepedentes = document.querySelector('#tabelaDepedentes');
    tabelaDepedentes.innerHTML += 
    '<div class="form-group"><label for="nome">Nome</label> <input id="nomeDepedente_'+ value++ +'"  type="text" name="nodeDepedente" class="form-control" placeholder="Nome"><small id="nameHelp" class="form-text text-muted">Nome completo</small><label for="name">Idade</label><input type="number" name="idadeDepedente" min="0" max="18" id="idade" class="form-control"><small id="iadadeHelp" class="form-text text-muted">Apenas Menores de 18</small></div>'
}

