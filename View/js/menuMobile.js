

    document.getElementById('cabb').classList.add('cab');
var x = 0;

function menu(){
    if (x%2 == 0) {
        document.getElementById('cabb').classList.add('menuAberto');
        document.getElementById('cabb').classList.remove('cab');
        document.getElementById('cabb').classList.remove('cab');
    
        document.getElementById('menu-catalogo').classList.remove('word');
        document.getElementById('menu-sobre').classList.remove('word');
        document.getElementById('menu-parceiro').classList.remove('word');
        document.getElementById('menu-contato').classList.remove('word');
        document.getElementById('menu-carrinho').classList.remove('icon-tchau');
        document.getElementById('menu-login').classList.remove('icon-tchau');

        
    }else{
        document.getElementById('cabb').classList.remove('menuAberto');
        document.getElementById('cabb').classList.add('cab');
    
        document.getElementById('menu-catalogo').classList.add('word');
        document.getElementById('menu-sobre').classList.add('word');
        document.getElementById('menu-parceiro').classList.add('word');
        document.getElementById('menu-contato').classList.add('word');
        document.getElementById('menu-carrinho').classList.add('icon-tchau');
        document.getElementById('menu-login').classList.add('icon-tchau');
    }
    x++;
  

}