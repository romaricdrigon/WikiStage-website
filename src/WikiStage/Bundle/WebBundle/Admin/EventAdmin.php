<?php

namespace WikiStage\Bundle\WebBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class EventAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Information')
                ->add('name')
                ->add('description', null, array(
                    'required'  => false
                ))
                ->add('date', 'datetime', array(
                    'date_widget'   => 'single_text',
                    'time_widget'   => 'single_text'
                ))
                ->add('place', 'genemu_jquerygeolocation', array(
                    'map'   => true
                ))
            ->end()
            ->with('Web related')
                ->add('links', null, array(
                    'required'  => false
                ))
                ->add('gallery_url', 'url', array(
                    'required'  => false
                ))
            ->end()
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('date')
            ->add('place')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('date')
            ->add('place')
        ;
    }
}
