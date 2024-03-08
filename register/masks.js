function maskTel(){
    var telefone = document.getElementById("telefone")
    if(telefone.value.length == 0){
        telefone.value += "("
    } else if(telefone.value.length == 3){
        telefone.value += ")"
    } else if(telefone.value.length == 9){ 
        telefone.value += "-"
    }
}