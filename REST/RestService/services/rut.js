var validar_formatear = function(rut){
    rutSinPuntos=""
    try{
        for(i = 0; i<rut.length; i ++){
            if(rut[i] !="." && rut[i] !="-"){
                rutSinPuntos += rut[i] 
            }
        }
    }catch(e){
        console.log("no hay datos");
    }
    return(rutSinPuntos)
}

var validar_rut = function(req,res){
    var {rut} = req.body
    var secuencia = [2,3,4,5,6,7,2,3,4,5,6,7];
    var invert="";
    var multi = 0;

    var rutFormateado = validar_formatear(rut)

    //Aqui empieza el algoritmo de calculo del DV
    for(i = rutFormateado.length -2; i >= 0; i--){ 
        invert = invert + rutFormateado[i];
    }
    for(i = 0; i<=invert.length-1; i ++){
        multi = multi + (Number(invert[i] * secuencia[i])); 
        
    }
    div = (Math.trunc(multi/11))*11;
    rest = multi - div;

    dv= 11-rest;
    if(dv == 11){
        dv = 0;
    }else if(dv == 10){
        dv = "k";//arreglar los tipos, para que dv sea string
    }
    if(rut[rut.length - 1] == dv){
        res.json({
            message: 'Felicitaciones!, Rut correcto',
            rut: rut
            
        })
    }else{
        res.json({
            message: 'El rut es incorrecto',
            rut: rut
        })
    }
       
}

module.exports = {validar_rut}