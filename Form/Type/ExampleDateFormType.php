<?php
namespace Mopa\Bundle\BootstrapSandboxBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;


class ExampleDateFormType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->setAttribute('widget_remove_btn', 'remove')
            ->add('startAt','date', array(
                'label_render' => false,
                'widget_control_group' => false,
                'widget_controls' => false,
                'attr' => array('class' => 'startdate span1'),
                'widget' => 'choice',
                'format' => 'dd MM yyyy',
            ))
            ->add('endAt','date', array(
                'label_render' => false,
                'widget_control_group' => false,
                'widget_controls' => false,
                'attr' => array('class' => 'enddate span2'),
                'widget' => 'choice',
                'format' => 'dd MM yyyy',
            ))
            ->add('special','checkbox', array(
                'label_render' => false,
                'widget_control_group' => false,
                'widget_controls' => false,
                'label'     => 'Special?',
                'required'  => false,
                'widget_remove_btn' => 'remove',
            ))
            ;
    }

    public function getName()
    {
        return 'example_date';
    }

}

