
function registrarUser(e) {
    e.preventDefault();//prevenir que se recarge la página
    
    const nombre_usuario = document.getElementById("nombre_usuario");//Constante del nombre
    const correo_usuario = document.getElementById("correo_usuario"); //Constante de contraseña
    const passwrd_usuario = document.getElementById("passwrd_usuario"); //Constante del telefono
    //console.log(nombre.value+" "+correo.value+" "+passwrd.value);

    if(nombre_usuario.value =="" || correo_usuario.value == "" || passwrd_usuario.value ==""){
        alert("Completar todos los campos");
    }else{
        //console.log("No hay errores");
        //Si los campos no estan vacios hacemos una peticion mediante Ajax utilizando el XMLRequest
        const url = base_url + "Home/registrarnu";//Agregamos el controlador usuarios y mandar el método registrar
        const frm = document.getElementById("frmRegistro");//Almacenar el id del formulario
        const http = new XMLHttpRequest();//Instancia del objeto XMLHttpRequest
        http.open("POST", url, true);//Abrir una conexion e indicar que se ejecuta de forma asíncrona con true
        http.send(new FormData(frm)); //Enviar la peticion
        //Verificar el estado
        http.onreadystatechange = function(){
            //Si el readystate =4 y el status =200 eso quiere decir que la respuesta está lista 
            //Este onreadystate se ejecuta cada vez que cambia el ready state
            if(this.readyState == 4 && this.status == 200){
                //console.log(this.responseText);
                const res = JSON.parse(this.responseText);//Parsear el mensaje
                if(res == "registrado"){
                    frm.reset();
                    $("#mdlregistro").modal("hide");
                }else{
                    alert("Error: "+this.responseText);
                }
            }
        }
    }
}

