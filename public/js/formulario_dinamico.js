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




*/

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
