$(document).ready( function() {

    $('#cpf').mask('000.000.000-00', {reverse: true});
    $('#telefone').mask('(00) 00000-0000');
    $('#telefone_secundario').mask('(00) 0000-00000');


    $('#botaoCadastrar').on('click', function(e){
        
        //validarCampos()
        if(validarCampos() == false)
        {
            e.preventDefault();
        }

    })


})


function validarCampos()
{

    //Obrigatórios
    let nome = $('#nome').val(); 
    let sobrenome = $('#sobrenome').val(); 
    let telefone = $('#telefone').val();

    //Não obrigatório
    let email = $('#email').val(); 
    let email_secundario = $('#email_secundario').val(); 
    let cpf = $('#cpf').val();
    let telefone_secundario = $('#telefone_secundario').val();

    //CAMPOS

    //Nome
    if(nome == ""){
        $('#nomeErro').html('O nome é obrigatório')
        return false
    }
    else if(nome.length < 3) {
        $('#nomeErro').html('Preencha o nome com no mínimo 4 caracteres')
        return false
    }
    else {
        $('#nomeErro').html('')
    }

    //Sobrenome
    if(sobrenome == ""){
        $('#sobrenomeErro').html('O sobrenome é obrigatório')
        return false
    }
    else if(sobrenome.length < 3) {
        $('#sobrenomeErro').html('Preencha o sobrenome com no mínimo 3 caracteres')
        return false
    }
    else {
        $('#sobrenomeErro').html('')
    }


    //CPF
    if(cpf.length > 0 && cpf.length < 14) {
        $('#cpfErro').html('Preencha corretamente o CPF')
        return false
    }
    else {
        $('#cpfErro').html('')
    }

    //telefone
    if(telefone == '') {
         $('#telefoneErro').html('O telefone é obrigatório') 
         return false
    }
    else if(telefone.length > 0 && telefone.length < 15) { 
         $('#telefoneErro').html('Preencha corretamente o Telefone')
         return false
    }
    else {
        $('#telefoneErro').html('')
        
    }

    //telefone secundário
    if(telefone_secundario.length > 0 && telefone_secundario.length < 15) { 
        $('#telefone_secundarioErro').html('Preencha corretamente o Telefone')
        return false
    }
    else {
       $('#telefone_secundarioErro').html('')
    }


    return true
}

