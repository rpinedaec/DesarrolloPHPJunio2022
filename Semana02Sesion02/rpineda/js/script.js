



document.getElementById("enviarCorreo").addEventListener("click", function () {

    let direccion = document.getElementById("correo").value;

    let xhttp = new XMLHttpRequest();
    xhttp.open("GET", "email.php?email=" + direccion, true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            // Response
            let response = this.responseText;

            if(response==="Guardado completo"){
                alert("Se guardo correctamente");
            }
            else{
                alert("No se guardo, intentalo de nuevo");
            }
        }
    };
    xhttp.send();
});