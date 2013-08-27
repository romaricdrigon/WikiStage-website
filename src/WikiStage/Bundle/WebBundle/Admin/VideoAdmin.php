<?php

namespace WikiStage\Bundle\WebBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class VideoAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Information')
                ->add('title')
                ->add('subtitle', null, array(
                    'required'  => false
                ))
            ->end()
            ->with('Event related')
                ->add('event')
                ->add('speaker', 'sonata_type_model')
            ->end()
            ->with('Tags')
                ->add('tags')
                ->add('language', 'sonata_type_model')
            ->end()
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('subtitle')
            ->add('event')
            ->add('speaker')
            ->add('tags')
            ->add('language')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
        ;
    }
}
