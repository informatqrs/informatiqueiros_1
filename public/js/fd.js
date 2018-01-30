/*

palavras-chave:

formulário-dinâmico:{

classe: formulario-dinamico,
classe: item,
classe: adicionar-item,
classe: remover-item


}


animações:{

classe: mudar-direcao-seta

}


pop-ups:{

  classe: confirmar-delecao

}





function add(){

  var doc = document.getElementByClass('FD');

  var input = document.createElement('input');

  input.classList.add('form-control mb-3');

  doc.appendChild('input');

}

function remove(){

  var doc = document.getElementByClass('FD');

  doc.removeChild(doc.childNodes[length(doc.childNodes)-1]);

}

document.getElementsByClass('fd-add').click(add());
document.getElementsByClass('fd-rm').click(remove());
*/

$( document ).ready(function(){

  function mudarSentido(){

    seta = document.getElementById('icon-'+this.id);
    if(seta.className == "fa fa-angle-double-down"){

      seta.className = "fa fa-angle-double-up";

    }else{

      seta.className = "fa fa-angle-double-down";

    }
  }

  function adicionarCampo(){

    console.log('add');
    var lista = document.getElementsByClassName('fd')[0];
    var input = document.createElement('input');
    input.name = "itens[]";
    input.className = "form-control mb-3";
    input.placeholder = "Digite o id do produto:";
    lista.appendChild(input);

  } // adiciona campo de input ao formulario

  function removerCampo(){

    console.log("rm");
    var lista = document.getElementsByClassName('fd')[0];
    lista.removeChild(lista.childNodes[lista.childElementCount-1]);

  } // remove campo de input do formulário

  function mudaTravas(){

    if(this.classList.contains('liberar')){

        this.classList.remove('liberar');

        this.classList.remove('btn-primary');

        this.classList.add('btn-danger');

        this.classList.remove('fa-unlock');

        this.classList.add('fa-lock');

        var campo = document.getElementById('campo-'+this.id);

        campo.disabled = false;

    }else{

      this.classList.remove('btn-danger');

      this.classList.add('btn-primary');

      this.classList.add('liberar');

      this.classList.remove('fa-lock');

      this.classList.add('fa-unlock');

      var campo = document.getElementById('campo-'+this.id);

      campo.disabled = true;

    }

  }

  var botoes = document.getElementsByClassName('flex');
  var adicionar = document.getElementsByClassName('fd-adicionar')[0];
  var remover = document.getElementsByClassName('fd-remover')[0];
  var travas = document.getElementsByClassName('trava');

  if(adicionar != null && remover != null){
    adicionar.addEventListener("click",adicionarCampo);
    remover.addEventListener("click",removerCampo);
  }

  for(var i = 0; botoes != null && i < botoes.length; i++){

      botoes[i].addEventListener("click",mudarSentido);

  }

  for(var i = 0; travas != null && i < travas.length; i++){

      travas[i].addEventListener("click",mudaTravas);

  }

});
