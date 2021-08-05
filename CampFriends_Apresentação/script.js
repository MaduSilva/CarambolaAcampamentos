function loginauth(){
    var user = document.getElementById("user").value;
    var senha= document.getElementById("senha").value;

    if(user == "Gabi" && senha == "123"){
        //alert ("Bem-vindo de volta, "+user+"!");
        window.location.href = "./main.php";
        return false;
    }

}


function logout(){
    window.location.href="./index.php"
    return false;
}