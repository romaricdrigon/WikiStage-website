<?php

namespace WikiStage\Bundle\WebBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;

class UserAdmin extends Admin
{
    /**
     * @var EncoderFactoryInterface
     */
    protected $encoderFactory;

    public function setEncoderFactory(EncoderFactoryInterface $encoderFactory)
    {
        $this->encoderFactory = $encoderFactory;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Details')
                ->add('username')
                ->add('email', 'email')
                ->add('isActive', null, array(
                        'required'  => false
                    ))
            ->end()
        ;

        /*
         * Password is required when creating an User, but not at edit
         */
        $passwordRequired = ($this->getSubject()->getId() === null);

        $formMapper
            ->with('Password')
                ->add('password', 'repeated', array(
                        'type'      => 'password',
                        'invalid_message' => 'The password fields must match.',
                        'mapped'    =>false,
                        'required'  => $passwordRequired,
                        'first_options'  => array('label' => 'Password'),
                        'second_options' => array('label' => 'Repeat Password'),
                    ))
            ->end()
        ;

        /*
         * Password must be encoded before being set,
         * so we use a FormEvent to implement our logic
         */
        $formBuilder = $formMapper->getFormBuilder();
        $encoderFactory = $this->encoderFactory;

        $formBuilder
            ->addEventListener(
                FormEvents::SUBMIT,
                function (FormEvent $event) use ($encoderFactory) {
                    $user = $event->getData();

                    $password = $event->getForm()->get('password')->getData();

                    if (null === $password) {
                        return ;
                    }

                    $user->setPassword($password, $encoderFactory->getEncoder($user));
                }
            );
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('username')
            ->add('email')
            ->add('isActive')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('username')
            ->add('email')
            ->add('isActive')
            ->add('_action', 'actions', array(
                    'actions' => array(
                        'edit' => array(),
                    )
                ))
        ;
    }
}
