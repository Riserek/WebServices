package com.ecodeup.ws;

import javax.jws.WebService;

@WebService(endpointInterface="com.ecodeup.ws.Servicioweb")
public class ServiciowebImpl implements Servicioweb{

	@Override
	public String validarrut(String rut) {
		// TODO Auto-generated method stub
		this.Rut=rut;
		barra=0;
		contador=0;
		for (int i=0;i<Rut.length();i++) {
			if(Rut.codePointAt(i)>=48 || Rut.codePointAt(i)<=57||barra<=1) {
				if(Rut.codePointAt(i)==45 && Rut.charAt(Rut.length()-1)!='-') {
					barra++;
				}
				else {
					return"Rut Invalido";
				}
				contador++;
			}
			else {
				return "Rut Invalido";
			}
			
		}
		if(contador>8&&contador<11&&barra==1) {
			String newdigito="";
			int cantidad=2;
			//int m = Math.max(0, Rut.length() - cantidad);
			String RutsnD=Rut.substring(0, Rut.length()-cantidad);
			//static String RUT="12345678"
			int M = 0, S = 1;
			int T = Integer.parseInt(RutsnD);
			for (; T != 0; T /= 10) {
			        S = (S + T % 10 * (9 - M++ % 6)) % 11;
			}
			char ultimo = Rut.charAt(Rut.length()-1);
			String cadena=Character.toString(ultimo);
			newdigito=Rut+"-"+(char) (S != 0 ? S + 47 : 75);
			char ultimo2=newdigito.charAt(newdigito.length()-1);
			String cadena2=Character.toString(ultimo2);

			if (cadena2.equals(cadena)) {
				return "Rut Valido";
			}
			else {
				return "Rut Invalido";
			}
			
		}
		else {
			
			return "Rut Invalido";
				
			}
		
		
	}
	
	public String Rut;
	public int barra;
	public int contador;
	


	

	@Override
	public String nombrepropio(String nombres, String apellidopa, String apellidoma, String sexo) {
		// TODO Auto-generated method stub
		this.nombres=nombres;
		this.appaterno=apellidopa;
		this.apmaterno=apellidoma;
		this.genero=sexo;
		invalido="";
		fallar=0;
		int  f_nombre=0;
		int f_appaterno=0;
		int f_apmaterno=0;
		int f_genero=0;
		
		
		if(genero.equalsIgnoreCase("m")|| genero.equalsIgnoreCase("f")) {
			
			}
		else {
			f_genero++;
		}
		if (f_genero>0) {
			invalido=invalido+ "Genero Invalido\n";
			fallar++;
			}
		
		for (int i=0;i<nombres.length();i++) {
			if((nombres.codePointAt(i)>=65 && nombres.codePointAt(i)<=90)||
				(nombres.codePointAt(i)>=97 && nombres.codePointAt(i)<=122)) {
				
				}
			else {
				f_nombre++;
			}
			}
		if (f_nombre>0) {
			invalido=invalido+ "Nombre Invalido\n";
			fallar++;
			}
		for (int i=0;i<appaterno.length();i++) {
			if((appaterno.codePointAt(i)>=65 && appaterno.codePointAt(i)<=90)||
				(appaterno.codePointAt(i)>=97 && appaterno.codePointAt(i)<=122)) {
				}
			else {
				f_appaterno++;
			}
			}
		if (f_appaterno>0){
			invalido=invalido+ "Apellido_Pa Invalido\n";
			fallar++;
		}
		for (int i=0;i<apmaterno.length();i++) {
			if((apmaterno.codePointAt(i)>=65 && apmaterno.codePointAt(i)<=90)||
				(apmaterno.codePointAt(i)>=97 && apmaterno.codePointAt(i)<=122)) {
				}
			else {
				f_apmaterno++;
			}
			}	
		if(f_apmaterno>0) {
			invalido=invalido+ "Apellido_Ma Invalido\n";
			fallar++;
		}
		if (fallar>0) {
			return invalido;
		}
		
		
		
		nombres=nombres.toLowerCase();
		String nombres2="";
		for(int i=0;i<nombres.length();i++) {
			if(i==0){
				nombres2=nombres2.concat(nombres.substring(i,i+1).toUpperCase());
			}
			else {
				nombres2=nombres2.concat(nombres.substring(i,i+1));
			}
		}
		appaterno=appaterno.toLowerCase();
		String appaterno2="";
		for(int i=0;i<appaterno.length();i++) {
			if(i==0){
				appaterno2=appaterno2.concat(appaterno.substring(i,i+1).toUpperCase());
			}
			else {
				appaterno2=appaterno2.concat(appaterno.substring(i,i+1));
			}
		}
		apmaterno=apmaterno.toLowerCase();
		String apmaterno2="";
		for(int i=0;i<apmaterno.length();i++) {
			if(i==0){
				apmaterno2=apmaterno2.concat(apmaterno.substring(i,i+1).toUpperCase());
			}
			else {
				apmaterno2=apmaterno2.concat(apmaterno.substring(i,i+1));
			}
		}
		if(genero.equalsIgnoreCase("m")) {
			saludo="Sr";
		}
		if(genero.equalsIgnoreCase("f")) {
			saludo="Sra";
		}
		
		return saludo+" "+nombres2+" "+appaterno2+" "+apmaterno2;
	}
	
	
	public String nombres;
	public String appaterno;
	public String apmaterno;
	public String genero;
	public String saludo;
	public String invalido;
	public int fallar;
}


