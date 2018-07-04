var refereciaServidor = 'http://192.168.1.102/z/'

//cadastro 
document.getElementById("cadastroUsuario").action = refereciaServidor + "inserts.php?parametro=cadastroUsuario";


document.getElementById("cadastroQuestionario").action = refereciaServidor + "inserts.php?parametro=cadastroQuestionario";
