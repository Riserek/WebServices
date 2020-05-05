package com.ecodeup.ws;

import javax.xml.ws.Endpoint;

public class ServiciowebPublish {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		Endpoint.publish("http://localhost:1212/WS/Servicioweb", new ServiciowebImpl());

	}

}
