
    document.getElementById('menu').classList.add('cab');
var x = 0;

function menu(){
    if (x%2 == 0) {
        document.getElementById('menu').classList.add('menuAberto');
        document.getElementById('menu').classList.remove('cab');
    
        document.getElementById('menu-catalogo').classList.remove('word');
        document.getElementById('menu-sobre').classList.remove('word');
        document.getElementById('menu-parceiro').classList.remove('word');
        document.getElementById('menu-contato').classList.remove('word');
    }else{
        document.getElementById('menu').classList.remove('menuAberto');
        document.getElementById('menu').classList.add('cab');
    
        document.getElementById('menu-catalogo').classList.add('word');
        document.getElementById('menu-sobre').classList.add('word');
        document.getElementById('menu-parceiro').classList.add('word');
        document.getElementById('menu-contato').classList.add('word');
    }
    x++;
  

}