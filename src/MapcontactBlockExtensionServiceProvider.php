<?php namespace Pixney\MapcontactBlockExtension;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Pixney\MapcontactBlockExtension\Office\Contract\OfficeRepositoryInterface;
use Pixney\MapcontactBlockExtension\Office\OfficeRepository;
use Anomaly\Streams\Platform\Model\MapcontactBlock\MapcontactBlockOfficesEntryModel;
use Pixney\MapcontactBlockExtension\Office\OfficeModel;
use Pixney\MapcontactBlockExtension\Oo\Contract\OoRepositoryInterface;
use Pixney\MapcontactBlockExtension\Oo\OoRepository;
use Anomaly\Streams\Platform\Model\MapcontactBlock\MapcontactBlockOoEntryModel;
use Pixney\MapcontactBlockExtension\Oo\OoModel;
use Pixney\MapcontactBlockExtension\Block\Contract\BlockRepositoryInterface;
use Pixney\MapcontactBlockExtension\Block\BlockRepository;
use Anomaly\Streams\Platform\Model\MapcontactBlock\MapcontactBlockBlocksEntryModel;
use Pixney\MapcontactBlockExtension\Block\BlockModel;
use Illuminate\Routing\Router;

class MapcontactBlockExtensionServiceProvider extends AddonServiceProvider
{

    /**
     * Additional addon plugins.
     *
     * @type array|null
     */
    protected $plugins = [];

    /**
     * The addon Artisan commands.
     *
     * @type array|null
     */
    protected $commands = [];

    /**
     * The addon's scheduled commands.
     *
     * @type array|null
     */
    protected $schedules = [];

    /**
     * The addon API routes.
     *
     * @type array|null
     */
    protected $api = [];

    /**
     * The addon routes.
     *
     * @type array|null
     */
    protected $routes = [];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //Pixney\MapcontactBlockExtension\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * Addon group middleware.
     *
     * @var array
     */
    protected $groupMiddleware = [
        //'web' => [
        //    Pixney\MapcontactBlockExtension\Http\Middleware\ExampleMiddleware::class,
        //],
    ];

    /**
     * Addon route middleware.
     *
     * @type array|null
     */
    protected $routeMiddleware = [];

    /**
     * The addon event listeners.
     *
     * @type array|null
     */
    protected $listeners = [
        //Pixney\MapcontactBlockExtension\Event\ExampleEvent::class => [
        //    Pixney\MapcontactBlockExtension\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => Pixney\MapcontactBlockExtension\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        MapcontactBlockOfficesEntryModel::class => OfficeModel::class,
        MapcontactBlockOoEntryModel::class => OoModel::class,
        MapcontactBlockBlocksEntryModel::class => BlockModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        OfficeRepositoryInterface::class => OfficeRepository::class,
        OoRepositoryInterface::class => OoRepository::class,
        BlockRepositoryInterface::class => BlockRepository::class,
    ];

    /**
     * Additional service providers.
     *
     * @type array|null
     */
    protected $providers = [
        //\ExamplePackage\Provider\ExampleProvider::class
    ];

    /**
     * The addon view overrides.
     *
     * @type array|null
     */
    protected $overrides = [
        //'streams::errors/404' => 'module::errors/404',
        //'streams::errors/500' => 'module::errors/500',
    ];

    /**
     * The addon mobile-only view overrides.
     *
     * @type array|null
     */
    protected $mobile = [
        //'streams::errors/404' => 'module::mobile/errors/404',
        //'streams::errors/500' => 'module::mobile/errors/500',
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        // Run extra pre-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Boot the addon.
     */
    public function boot()
    {
        // Run extra post-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Map additional addon routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        // Register dynamic routes here for example.
        // Use method injection or commands to bring in services.
    }

}
