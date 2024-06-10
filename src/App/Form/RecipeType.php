<?php

declare(strict_types=1);

namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

final class RecipeType extends AbstractType 
{
  public function __construct() {}

  public function buildForm(FormBuilderInterface $builder, array $options): void
  {
      $builder->add(
          'image',
          FileType::class,
          [
              'required' => false,
              'label' => 'Image',
              'label_attr' => [
                'class' => 'col-form-label col-3',
              ],
              'attr' => [
                'class' => 'form-control',
              ]
          ],
      );

      $builder->add(
          'name',
          TextType::class,
          [
              'required' => true,
              'label' => 'Recipe name',
              'label_attr' => [
                'class' => 'col-form-label col-3',
              ],
              'attr' => [
                'class' => 'form-control',
              ]
          ],
      );

      $builder->add(
          'description',
          TextType::class,
          [
              'required' => false,
              'label' => 'Recipe description',
              'label_attr' => [
                'class' => 'col-form-label col-3',
              ],
              'attr' => [
                'class' => 'form-control',
              ]
          ],
      );
  }
}