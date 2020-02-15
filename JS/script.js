$(document).ready(function(){

    //Variavel
    var _container = new Object();
    var _fileReader = new FileReader();
    var x;

    //Objetos
    _container = {
        formulario : $('[data-container-upload="formulario"]'),
        inputfile : $('[data-container-upload="inputfile"]'),
        inputbtn : $('[data-container-upload="inputbtn"]'),
        miniatura : $('[data-container-upload="miniatura"]')
    };

    _container2 = {
        formulario : $('[data-container-upload="formulario"]'),
        inputfile : $('[data-container-upload="inputfile2"]'),
        inputbtn : $('[data-container-upload="inputbtn"]'),
        miniatura : $('[data-container-upload="miniatura2"]')
    };

    _container3 = {
        formulario : $('[data-container-upload="formulario"]'),
        inputfile : $('[data-container-upload="inputfile3"]'),
        inputbtn : $('[data-container-upload="inputbtn"]'),
        miniatura : $('[data-container-upload="miniatura3"]')
    };

    _container4 = {
        formulario : $('[data-container-upload="formulario"]'),
        inputfile : $('[data-container-upload="inputfile4"]'),
        inputbtn : $('[data-container-upload="inputbtn"]'),
        miniatura : $('[data-container-upload="miniatura4"]')
    };
    console.log(_container);

    //Funcoes

    function inputAlterado(callback){
        _container.inputfile.on("change", function(){
            x = 1;
            callback();
        });

        _container2.inputfile.on("change", function(){
            x = 2;
            callback();
        });

        _container3.inputfile.on("change", function(){
            x = 3;
            callback();
        });

        _container4.inputfile.on("change", function(){
            x = 4;
            callback();
        });
    }

    function carregaArquivo(){
        return _container.inputfile.prop('files');
    }

    function carregaFim(callback){
        _fileReader.onload = function(e){
           callback(e.target); 
        };
    }
    
    function cadastro(){
  	alert('ok');
	}

    //Execucao
    inputAlterado(function(){
        

        //Variavel
        var _imagem = carregaArquivo();

        //Modelo
        if (_imagem.length > 0 && x == 1){
            console.log(_imagem);
            carregaFim(function(e){
               console.log(e);
               _container.miniatura.attr('src', e.result);
            });
            _fileReader.readAsDataURL(_imagem[0]);

        } else if (_imagem.length > 0 && x == 2){
            _imagem = _container2.inputfile.prop('files')
            console.log(_imagem);
            carregaFim(function(e){
               console.log(e);
               _container2.miniatura.attr('src', e.result);
            });
            _fileReader.readAsDataURL(_imagem[0]);

        } else if (_imagem.length > 0 && x == 3){
            _imagem = _container3.inputfile.prop('files')
            console.log(_imagem);
            carregaFim(function(e){
               console.log(e);
               _container3.miniatura.attr('src', e.result);
            });
            _fileReader.readAsDataURL(_imagem[0]);

        } else if (_imagem.length > 0 && x == 4){
            _imagem = _container4.inputfile.prop('files')
            console.log(_imagem);
            carregaFim(function(e){
               console.log(e);
               _container4.miniatura.attr('src', e.result);
            });
            _fileReader.readAsDataURL(_imagem[0]);
        }

    });
});