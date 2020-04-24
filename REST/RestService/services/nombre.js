



var nombreSexo = function(req,res){
    var {nombre,apellido_p,apellido_m,sexo} = req.body;
    sexoLower = "";
    nombreLowerU="";
    
    try{
        //estandariza todas las strings en minuscula
        nombreLower = nombre.toLowerCase();
        apellidoPLower = apellido_p.toLowerCase();
        apellidoMLower = apellido_m.toLowerCase();
        sexoLower = sexo.toLowerCase();
        var finalNombre="";
        
        //pone la primera letra de la string en mayuscula
        nombres = nombreLower.split(" ");
        for(i =0; i < nombres.length; i++){
            nombreLowerU = (nombres[i].charAt(0).toUpperCase() + nombres[i].slice(1));
            finalNombre = finalNombre +  " " + nombreLowerU ;
        }
        
        finalNombre = finalNombre.slice(1);
        
        apellidoPLowerU=(apellidoPLower.charAt(0).toUpperCase() + apellidoPLower.slice(1));
        apellidoMLowerU=(apellidoMLower.charAt(0).toUpperCase() + apellidoMLower.slice(1));
        
       

    }catch(err){
        console.log("NO ha ingresado datos o no ha completado todos");
    } 
    
    switch(sexoLower){
        case "m":
            res.json({
                message: "Sr. " ,
                Nombre: finalNombre,
                apellido_p: apellidoPLowerU,
                apellido_m: apellidoMLowerU
            });
            break;
        case "f":
            res.json({
                message: "Sra. ",
                Nombre: nombreLowerUS[0],
                apllido_p: apellidoPLowerU,
                apellido_m: apellidoMLowerU
            });
            break;

        default:
            res.json({
            message: "No se han encontrado datos o no ha completado todos"
             });
    }
}

module.exports = {
    nombreSexo
}