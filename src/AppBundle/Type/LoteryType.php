<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 13.12.2017
 * Time: 1:45
 */

namespace AppBundle\Type;

use AppBundle\Entity\Lotery;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LoteryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('organizer')
            ->add('lotery_start')
            ->add('lotery_end')
            ->add('jackpot')
            ->add('ticket_price')
            ->add('tickets_quantity')
            ->add('sponsor')
            ->add('winner')
            // а вот тут уже идет тот код, за который мне стыдно
            // ибо реализовать случайный выбор победителя так как планировали
            // изначально - не вышло, а сроки горят очень сильно
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Lotery::class,
        ));
    }


}