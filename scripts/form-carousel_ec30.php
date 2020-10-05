<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Form Submission',
    'email_message' => 'You have a new form submission',
    'success_redirect' => '',
    'email' => array(
        'from' => 'from@incdsg.github.io',
        'to' => 'incdsg@yahoo.com'
    ),
    'fields' => array(
        'name' => array(
            'order' => 1,
            'type' => 'string',
            'label' => 'Name',
            'required' => true,
            'errors' => array(
                'required' => 'Field \'Name\' is required.'
            )
        ),
        'email' => array(
            'order' => 2,
            'type' => 'email',
            'label' => 'Email',
            'required' => true,
            'errors' => array(
                'required' => 'Field \'Email\' is required.'
            )
        ),
        'address' => array(
            'order' => 3,
            'type' => 'string',
            'label' => 'Address',
            'required' => true,
            'errors' => array(
                'required' => 'Field \'Address\' is required.'
            )
        ),
        'phone' => array(
            'order' => 4,
            'type' => 'tel',
            'label' => 'Phone',
            'required' => true,
            'errors' => array(
                'required' => 'Field \'Phone\' is required.'
            )
        ),
    )
);

$processor = new FormProcessor();
$processor->process($form);

?>