<?php

namespace Proxies\__CG__\Daw\DietaBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Usuario extends \Daw\DietaBundle\Entity\Usuario implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'id', 'nombre', 'apellido', 'telefono', 'fechanac', 'correo', 'password', 'salt', 'altura', 'peso', 'bmi', 'fecharegistro', 'estaactivo', 'role');
        }

        return array('__isInitialized__', 'id', 'nombre', 'apellido', 'telefono', 'fechanac', 'correo', 'password', 'salt', 'altura', 'peso', 'bmi', 'fecharegistro', 'estaactivo', 'role');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Usuario $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', array($nombre));

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', array());

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setApellido($apellido)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApellido', array($apellido));

        return parent::setApellido($apellido);
    }

    /**
     * {@inheritDoc}
     */
    public function getApellido()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApellido', array());

        return parent::getApellido();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefono($telefono)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefono', array($telefono));

        return parent::setTelefono($telefono);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefono()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefono', array());

        return parent::getTelefono();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechanac($fechanac)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechanac', array($fechanac));

        return parent::setFechanac($fechanac);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechanac()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechanac', array());

        return parent::getFechanac();
    }

    /**
     * {@inheritDoc}
     */
    public function setCorreo($correo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCorreo', array($correo));

        return parent::setCorreo($correo);
    }

    /**
     * {@inheritDoc}
     */
    public function getCorreo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCorreo', array());

        return parent::getCorreo();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', array($password));

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', array());

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setSalt($salt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalt', array($salt));

        return parent::setSalt($salt);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', array());

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function setAltura($altura)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAltura', array($altura));

        return parent::setAltura($altura);
    }

    /**
     * {@inheritDoc}
     */
    public function getAltura()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAltura', array());

        return parent::getAltura();
    }

    /**
     * {@inheritDoc}
     */
    public function setPeso($peso)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPeso', array($peso));

        return parent::setPeso($peso);
    }

    /**
     * {@inheritDoc}
     */
    public function getPeso()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPeso', array());

        return parent::getPeso();
    }

    /**
     * {@inheritDoc}
     */
    public function setBmi()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBmi', array());

        return parent::setBmi();
    }

    /**
     * {@inheritDoc}
     */
    public function getBmi()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBmi', array());

        return parent::getBmi();
    }

    /**
     * {@inheritDoc}
     */
    public function setFecharegistro()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFecharegistro', array());

        return parent::setFecharegistro();
    }

    /**
     * {@inheritDoc}
     */
    public function getFecharegistro()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFecharegistro', array());

        return parent::getFecharegistro();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstaactivo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstaactivo', array());

        return parent::setEstaactivo();
    }

    /**
     * {@inheritDoc}
     */
    public function getEstaactivo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstaactivo', array());

        return parent::getEstaactivo();
    }

    /**
     * {@inheritDoc}
     */
    public function setRole()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRole', array());

        return parent::setRole();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', array());

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', array());

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', array());

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function serialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'serialize', array());

        return parent::serialize();
    }

    /**
     * {@inheritDoc}
     */
    public function unserialize($serialized)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'unserialize', array($serialized));

        return parent::unserialize($serialized);
    }

}