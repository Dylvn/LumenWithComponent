<?php

namespace App\Form;

use \Symfony\Component\Form\AbstractType;
use \Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class FormTestType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('choice', TextType::class, array(
                'label' => 'Test',
            ))
        ;
    }
}
