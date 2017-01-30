<?php
namespace WebSockets\Factory;

use Interop\Container\ContainerInterface;
use WebSockets\Controller\WebSocketCLIController;
use Zend\ServiceManager\Factory\FactoryInterface;
/**
 * Created by IntelliJ IDEA.
 * User: jason
 * Date: 23/04/2016
 * Time: 3:19 PM
 */
class WebSocketCLIControllerFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return WebSocketCLIController
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new WebSocketCLIController($container);
    }
}
