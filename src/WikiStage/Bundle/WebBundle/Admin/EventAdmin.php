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
            ->with('Details')
                ->add('name')
                ->add('description', null, array(
                    'required'  => false
                ))
                ->add('date', 'datetime', array(
                    'date_widget'   => 'single_text',
                    'time_widget'   => 'single_text',
                    'help'          => 'Start date & time'
                ))
                ->add('place', null, array(
                    'help'          => 'Name of the place of the event (will be displayed)',
                ))
                ->add('address', 'genemu_jquerygeolocation', array(
                    'help'          => 'Address of the place. Search powered by Google Maps.',
                    'required'      => false
                ))
            ->end()
            ->with('On the web')
                ->add('links', 'sonata_type_immutable_array', array(
                    'keys'      => array(
                        array('website', 'url', array('required' => false)),
                        array('tickets', 'url', array('required' => false, 'label' => 'Ticket shop')),
                        array('facebook', 'url', array('required' => false)),
                        array('flickr', 'url', array('required' => false)),
                        array('googleplus', 'url', array('required' => false, 'label' => 'Google+')),
                        array('twitter', 'url', array('required' => false)),
                        array('other', 'url', array('required' => false))
                    ),
                    'help'      => 'Links related only to this particular event',
                    'required'  => false
                ))
                ->add('gallery_url', 'url', array(
                    'required'  => false,
                    'help'      => 'Link to an online gallery containing pictures of the event'
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
