<?php namespace Pixney\MapcontactBlockExtension\Office;

use Pixney\MapcontactBlockExtension\Office\Contract\OfficeRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class OfficeRepository extends EntryRepository implements OfficeRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var OfficeModel
     */
    protected $model;

    /**
     * Create a new OfficeRepository instance.
     *
     * @param OfficeModel $model
     */
    public function __construct(OfficeModel $model)
    {
        $this->model = $model;
    }
}
