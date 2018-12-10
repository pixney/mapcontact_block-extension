<?php namespace Pixney\MapcontactBlockExtension\Http\Controller\Admin;

use Pixney\MapcontactBlockExtension\Oo\Form\OoFormBuilder;
use Pixney\MapcontactBlockExtension\Oo\Table\OoTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class OoController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param OoTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(OoTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param OoFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(OoFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param OoFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(OoFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
