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
                ->add('date')
                ->add('place')
            ->end()
            ->with('Web related')
                ->add('links', null, array(
                    'required'  => false
                ))
                ->add('gallery_url', null, array(
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
