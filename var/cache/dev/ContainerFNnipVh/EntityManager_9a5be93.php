<?php

namespace ContainerFNnipVh;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1e60a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc3969 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties909f5 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'getConnection', array(), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'getMetadataFactory', array(), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'getExpressionBuilder', array(), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'beginTransaction', array(), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'getCache', array(), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'transactional', array('func' => $func), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->transactional($func);
    }

    public function commit()
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'commit', array(), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->commit();
    }

    public function rollback()
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'rollback', array(), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'getClassMetadata', array('className' => $className), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'createQuery', array('dql' => $dql), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'createNamedQuery', array('name' => $name), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'createQueryBuilder', array(), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'flush', array('entity' => $entity), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'clear', array('entityName' => $entityName), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->clear($entityName);
    }

    public function close()
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'close', array(), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->close();
    }

    public function persist($entity)
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'persist', array('entity' => $entity), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'remove', array('entity' => $entity), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'refresh', array('entity' => $entity), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'detach', array('entity' => $entity), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'merge', array('entity' => $entity), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'contains', array('entity' => $entity), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'getEventManager', array(), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'getConfiguration', array(), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'isOpen', array(), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'getUnitOfWork', array(), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'getProxyFactory', array(), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'initializeObject', array('obj' => $obj), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'getFilters', array(), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'isFiltersStateClean', array(), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'hasFilters', array(), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return $this->valueHolder1e60a->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerc3969 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder1e60a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1e60a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1e60a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, '__get', ['name' => $name], $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        if (isset(self::$publicProperties909f5[$name])) {
            return $this->valueHolder1e60a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1e60a;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1e60a;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1e60a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1e60a;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, '__isset', array('name' => $name), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1e60a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1e60a;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, '__unset', array('name' => $name), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1e60a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1e60a;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, '__clone', array(), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        $this->valueHolder1e60a = clone $this->valueHolder1e60a;
    }

    public function __sleep()
    {
        $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, '__sleep', array(), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;

        return array('valueHolder1e60a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc3969 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc3969;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc3969 && ($this->initializerc3969->__invoke($valueHolder1e60a, $this, 'initializeProxy', array(), $this->initializerc3969) || 1) && $this->valueHolder1e60a = $valueHolder1e60a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1e60a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1e60a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
