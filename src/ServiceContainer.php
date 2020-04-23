<?php
namespace Supen\Alipay;

use Supen\Alipay\Config;
use Supen\Alipay\Provider\ConfigServiceProvider;
use Pimple\Container;
/**
 * Class ServiceContainer
 *
 * @property \Supen\Alipay\Config                 $config
 */
class ServiceContainer extends Container
{
    /**
     * @var array
     */
    protected $providers = [];
    /**
     * @var array
     */
    protected $defaultConfig = [];
    /**
     * @var array
     */
    protected $userConfig = [];
    /**
     * Constructor.
     *
     * @param array       $config
     */
    public function __construct(array $config = [])
    {
        $this->registerProviders($this->getProviders());
        parent::__construct();
        $this->userConfig = $config;  
        $config = new Config();
        $this->defaultConfig = $config->config;
    }
    public function getConfig()
    {
        return array_replace_recursive($this->defaultConfig, $this->userConfig);
    }
    /**
     * Return all providers.
     *
     * @return array
     */
    public function getProviders()
    {
        return array_merge([
            ConfigServiceProvider::class,
        ], $this->providers);
    }
    /**
     * @param array $providers
     */
    public function registerProviders(array $providers)
    {
        foreach ($providers as $provider) {
            parent::register(new $provider());
        }
    }
}