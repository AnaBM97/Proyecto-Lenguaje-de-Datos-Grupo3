function calculo()
{

    var precio = document.getElementById("precio1").value; //retrieve with JS
    var porobligatorio = document.getElementById("porobligatorio1").value;
    var poropcional = document.getElementById("poropcional1").value;  
    var preciocalculado = parseInt(precio) + parseInt(precio)*parseInt(porobligatorio)/100 + parseInt(precio)*parseInt(poropcional)/100;

    alert(preciocalculado);    
}