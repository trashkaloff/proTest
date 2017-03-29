<?php
/**
 * Created by PhpStorm.
 * User: trashkaloff
 * Date: 25.03.17
 * Time: 14:55
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')
            ->add('description')
            ->add('created_at', DateTimeType::class)
            ->add('submit', SubmitType::class);
    }

}