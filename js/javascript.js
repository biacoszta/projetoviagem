function verificar(){
    console.log("entrou na funcao");
    var dadosajax = {
        'email' : $("#exampleInputEmail").val(),
        'senha' : $("#exampleInputPassword").val(),
    };
    pageurl = 'entrar.php';
    $.ajax({
        url: 'php_action/entrar.php',
        type: 'post',
        data: dadosajax,
        success: function (result) {
            // console.log("entrou no success do ajax");
            // // window.location.href = "login.php"
            // $(".result").html(result);
            console.log(result);
            if(result == "user"){
                console.log('testando');
                window.location.href = "index.php";
            // }else{
            //     alert('Usuário ou Senha Incorretos.');
            }else{
                window.location.href = "indexAdm.php";
            }
        }
    });
}

function favoritar(id){
    console.log("entrou na funcao fav");
   
    pageurl = 'favoritar.php';
    $.ajax({
        url: 'php_action/favoritar.php',
        type: 'post',
        data: {
            'id' : id,
        },
        success: function (result) {
            // console.log("entrou no success do ajax");
            // // window.location.href = "login.php"
            // $(".result").html(result);

            if(result == "ok"){
                alert("sucesso");
                $(".coracao-unchecked-"+id).hide();
                $(".coracao-checked-"+id).show();
                // window.location.href = "index.php";
            }else{
                alert('Usuário ou Senha Incorretos.');
            }
        }
    });
}

function concluir(id){
    pageurl = 'concluir.php';
    $.ajax({
        url: 'php_action/concluir.php',
        type: 'post',
        data: {
            'id' : id,
        },
        success: function (result) {
            // console.log("entrou no success do ajax");
            // // window.location.href = "login.php"
            // $(".result").html(result);

            if(result == "ok"){
                alert("destino favoritado com sucesso");
                $(".ckeck-unchecked-"+id).hide();
                $(".check-checked-"+id).show();
                // window.location.href = "index.php";
            }else{
                alert('Usuário ou Senha Incorretos.');
            }
        }
    });
}

function add(){
    var dadosajax = {
        'nome' : $("#formGroupExampleInput").val(),
        'valor' : $("#valor").val(),
        'dias' : $("#dias").val(),
        'descricao' : $("#descricao").val(),
        'imagem' : $("#imagem").val(),
    };
    pageurl = 'php_action/enviar.php';
    $.ajax({
        url: 'php_action/enviar.php',
        type: 'post', 
        data: dadosajax,
        success: function (result) {
        window.location.href = "indexAdm.php";
        alert("Cadastro efetuado com sucesso");
            $(".result").html(result);
        }
    });
}

function editar(){
    var dadosajax = {
        'id' : $("#id1").val(),
        'nome' : $("#formGroupExampleInput1").val(),
        'valor' : $("#valor1").val(),
        'descricao' : $("#descricao1").val(),
        'dias' : $("#dias1").val(),
        'imagem' : $("#imagem1").val(),
    };
    console.log(dadosajax);
    pageurl = 'editar.php';
    $.ajax({
        url: 'php_action/editar.php',
        type: 'post', 
        data: dadosajax,
        success: function (result) {
            // alert("Destino atualizado com sucesso");
            $(".result").html(result);
            window.location.href = "indexAdm.php";
        }
    });
}

function exibir(id){
    $.ajax({
        url: 'php_action/update.php',
        type: 'get',
        datatype:'json',
        data: {
            'id':id, 
        }, 
        success: function (result) {
            // var options = "";
            result=JSON.parse(result);
         
            $("#id1").val(result.id),
            $("#formGroupExampleInput1").val(result.nome),
            $("#valor1").val(result.valor),
            $("#descricao1").val(result.descricao),
            $("#dias1").val(result.dias),
            $("#imagem1").val(result.imagem),

            $(".result").html(result);
        }
    });
}

      
function deletar(id){
    $.ajax({
        url: 'php_action/delete.php',
        type: 'post',
        data: {
            'id':id,
            'btn-deletar':id,
        },
        success: function (result) {
            console.log(id);
            $(".result").html(result);
            window.location.href = "indexAdm.php";   
            alert("Destino deletado com sucesso");

        }
    });
}


function listagem(id){
    $.ajax({
        url: 'php_action/listagem.php',
        type: 'get',
        datatype:'json',
        data: {
            'id':id, 
        }, 
        success: function (result) {
         
            result = JSON.parse(result);

            content="<table><thead>"
            $.each(result, function(index, value) {
                console.log(value);
                content+='<tr><td>'+value.nomeUsu+'</td>'
                content+='<td>'+'  -  '+value.situacao+'</td></tr></table></thead>'
              });

            $(".content").html(content);
        }
    });
}