<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\FlatsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class FlatsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class FlatsCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Flats::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/flats');
        CRUD::setEntityNameStrings('flats', 'flats');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('id');
        CRUD::column('compassDirection');
        CRUD::column('flatNumber');
        CRUD::column('floorID');
        CRUD::column('hasBalcony');
        CRUD::column('isSold');
        CRUD::column('name');
        CRUD::column('roomCount');
        CRUD::column('sqPrice');
        CRUD::column('balconySQM');
        CRUD::column('liveableSQM');
        CRUD::column('sumSQM');
        CRUD::column('typeID');
        CRUD::column('created_at');
        CRUD::column('updated_at');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(FlatsRequest::class);

        CRUD::field('name');
        CRUD::field('flatNumber');
        CRUD::field('floorID');
        CRUD::field('hasBalcony');
        CRUD::field('isSold');
        CRUD::field('sqPrice');
        CRUD::field('roomCount');
        CRUD::field('balconySQM');
        CRUD::field('liveableSQM');
        CRUD::field('sumSQM');
        CRUD::field('compassDirection');
        CRUD::field('typeID');
        $this->crud->addField(
            [   // Upload
                'name'      => 'photos',
                'label'     => 'Photos',
                'type'      => 'upload_multiple',
                'upload'    => true,
            ]
        );

        $flat = $this->crud->getCurrentEntry();

        $this->crud->addField(
            [   // Upload
                'label'     => "Floor",
                'type'      => 'select',
                'name'      => 'floorID',
                'entity'    => 'floor',
                'attribute' => 'floorNumber',
                'options'   => (function ($query) use ($flat) {
                    return $query->orderBy('floorNumber', 'ASC')->where('buildingID', $flat->floor->building->id)->get();
                }),
            ]
        );
//        CRUD::field('id');
//        CRUD::field('created_at');
//        CRUD::field('updated_at');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();

    }
}
