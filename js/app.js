let cadastrarFuncionario = document.querySelector('#cadastrarF');

let funcionarioLista = [];
let depedenteLista = [];

cadastrarFuncionario.addEventListener('click' , enviarCadastro)

function enviarCadastro() {
    let nomeFuncionario = document.querySelector('#nomeFun').value;
    let idadeFuncionario = document.querySelector('#idade').value;
   
    if(nomeFuncionario === '' && idadeFuncionario ==='') {
          alert('Os Campos Nome e Idade não podem estar vazios');
    }  else {            
    funcionario = {
        nomeFuncionario: nomeFuncionario,
        idadeFuncionario: idadeFuncionario
    }; 
    limparCampoFuncionario();

    funcionarioLista.push(funcionario); 
    } 
}

function limparCampoFuncionario() { //Limpa os Campos de Cadastro Nome e Idade
    let nomeFuncionario = document.querySelector('#nomeFun').value = '';
    let idadeFuncionario = document.querySelector('#idade').value = '';
}

let cadastrarDepedente = document.querySelector('#cadastrarDepedente'); // Btn
cadastrarDepedente.addEventListener('click' , adicionarDepedente); 

function adicionarDepedente() {
    let nomeDepedente = document.querySelector('#nomeDepedente').value;
    let idadeDepedente = document.querySelector('#idadeDepedente').value;    
    if(nomeDepedente === '' && idadeDepedente ==='') {
        alert('Os Campos Nome e Idade não podem estar vazios');
    } else {
    depedente = {
        nomeDepedente: nomeDepedente,
        idadeDepedente: idadeDepedente 
    }; 
    depedenteLista.push(depedente); 
    } 
    atuaizarTela();
    limparCampoDepedente();
}

function atuaizarTela(){   
    let depedenteItem = '<li class="list-group-item animated bounceInUp"><strong>Nome:</strong>' + depedente.nomeDepedente + ' | <strong>Idade:</strong> ' + depedente.idadeDepedente + '</li>'
    document.getElementById('tabelaDepedentes').innerHTML += depedenteItem;
};  


function limparCampoDepedente(){
    let nomeDepedente = document.querySelector('#nomeDepedente').value = '';
    let idadeDepedente = document.querySelector('#idadeDepedente').value = '';  
}





