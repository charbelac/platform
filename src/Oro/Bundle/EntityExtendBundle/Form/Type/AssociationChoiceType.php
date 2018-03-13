<?php

namespace Oro\Bundle\EntityExtendBundle\Form\Type;

use Symfony\Component\OptionsResolver\OptionsResolver;

class AssociationChoiceType extends AbstractAssociationType
{
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults(
            [
                'placeholder' => false,
                'choices'     => ['No', 'Yes'],
                'schema_update_required' => function ($newVal, $oldVal) {
                    return true == $newVal && false == $oldVal;
                },
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->getBlockPrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'oro_entity_extend_association_choice';
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'choice';
    }
}
