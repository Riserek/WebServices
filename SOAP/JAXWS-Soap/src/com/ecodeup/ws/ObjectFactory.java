
package com.ecodeup.ws;

import javax.xml.bind.JAXBElement;
import javax.xml.bind.annotation.XmlElementDecl;
import javax.xml.bind.annotation.XmlRegistry;
import javax.xml.namespace.QName;


/**
 * This object contains factory methods for each 
 * Java content interface and Java element interface 
 * generated in the com.ecodeup.ws package. 
 * <p>An ObjectFactory allows you to programatically 
 * construct new instances of the Java representation 
 * for XML content. The Java representation of XML 
 * content can consist of schema derived interfaces 
 * and classes representing the binding of schema 
 * type definitions, element declarations and model 
 * groups.  Factory methods for each of these are 
 * provided in this class.
 * 
 */
@XmlRegistry
public class ObjectFactory {

    private final static QName _Nombrepropio_QNAME = new QName("http://ws.ecodeup.com/", "nombrepropio");
    private final static QName _NombrepropioResponse_QNAME = new QName("http://ws.ecodeup.com/", "nombrepropioResponse");
    private final static QName _ValidarrutResponse_QNAME = new QName("http://ws.ecodeup.com/", "validarrutResponse");
    private final static QName _Validarrut_QNAME = new QName("http://ws.ecodeup.com/", "validarrut");

    /**
     * Create a new ObjectFactory that can be used to create new instances of schema derived classes for package: com.ecodeup.ws
     * 
     */
    public ObjectFactory() {
    }

    /**
     * Create an instance of {@link Validarrut }
     * 
     */
    public Validarrut createValidarrut() {
        return new Validarrut();
    }

    /**
     * Create an instance of {@link NombrepropioResponse }
     * 
     */
    public NombrepropioResponse createNombrepropioResponse() {
        return new NombrepropioResponse();
    }

    /**
     * Create an instance of {@link ValidarrutResponse }
     * 
     */
    public ValidarrutResponse createValidarrutResponse() {
        return new ValidarrutResponse();
    }

    /**
     * Create an instance of {@link Nombrepropio }
     * 
     */
    public Nombrepropio createNombrepropio() {
        return new Nombrepropio();
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link Nombrepropio }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://ws.ecodeup.com/", name = "nombrepropio")
    public JAXBElement<Nombrepropio> createNombrepropio(Nombrepropio value) {
        return new JAXBElement<Nombrepropio>(_Nombrepropio_QNAME, Nombrepropio.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link NombrepropioResponse }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://ws.ecodeup.com/", name = "nombrepropioResponse")
    public JAXBElement<NombrepropioResponse> createNombrepropioResponse(NombrepropioResponse value) {
        return new JAXBElement<NombrepropioResponse>(_NombrepropioResponse_QNAME, NombrepropioResponse.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link ValidarrutResponse }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://ws.ecodeup.com/", name = "validarrutResponse")
    public JAXBElement<ValidarrutResponse> createValidarrutResponse(ValidarrutResponse value) {
        return new JAXBElement<ValidarrutResponse>(_ValidarrutResponse_QNAME, ValidarrutResponse.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link Validarrut }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://ws.ecodeup.com/", name = "validarrut")
    public JAXBElement<Validarrut> createValidarrut(Validarrut value) {
        return new JAXBElement<Validarrut>(_Validarrut_QNAME, Validarrut.class, null, value);
    }

}
