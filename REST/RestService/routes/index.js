var express = require("express");
var router = express.Router();
var {validar_rut} = require('../services/rut');
var {nombreSexo} =require('../services/nombre');

router.post('/rut',validar_rut);
router.post('/nombre',nombreSexo);


module.exports = router;