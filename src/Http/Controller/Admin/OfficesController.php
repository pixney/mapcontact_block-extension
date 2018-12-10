<?php namespace Pixney\MapcontactBlockExtension\Http\Controller\Admin;

use Pixney\MapcontactBlockExtension\Office\Form\OfficeFormBuilder;
use Pixney\MapcontactBlockExtension\Office\Table\OfficeTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class OfficesController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param OfficeTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(OfficeTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param OfficeFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(OfficeFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param OfficeFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(OfficeFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
