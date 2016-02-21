<?php
namespace Admin\Form\Form;

use Zend\Form\Form;
use Zend\Form\Element\Csrf;

class FilterCommentForm extends Form
{
    public function init() {
        
        $this->setAttribute('method', 'post');

        $this->add(new Csrf('csrf'));
        $this->add(array(
            'name' => 'comment',
            'type' => 'CommentFilterFieldset',
             'options' => array(
                 'use_as_base_fieldset' => true,
             ),
        ));

        $this->add(array(
            'name'       => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Filtrer',
                'class' => 'btn btn-info'
            )
        ));
    }
}