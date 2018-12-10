<?php namespace Pixney\MapcontactBlockExtension\Oo;

use Pixney\MapcontactBlockExtension\Oo\Contract\OoRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class OoRepository extends EntryRepository implements OoRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var OoModel
     */
    protected $model;

    /**
     * Create a new OoRepository instance.
     *
     * @param OoModel $model
     */
    public function __construct(OoModel $model)
    {
        $this->model = $model;
    }
}
