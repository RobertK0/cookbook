<?php

declare(strict_types=1);

namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

final class RecipeType extends AbstractType 
{
  public function __construct() {}

  public function buildForm(FormBuilderInterface $builder, array $options): void
  {
      $builder->add(
          'name',
          TextType::class,
          [
              'required' => true,
              'label' => 'Recipe name',
          ],
      );

      $builder->add(
          'description',
          TextType::class,
          [
              'required' => false,
              'label' => 'Recipe description',
          ],
      );
  }
}