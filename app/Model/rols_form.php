<?php
class RolForm extends AppModel{
    var $name = RolForm;
    var $belongsTo = array('Rol'=>
        array('className' => 'Rol',
            'conditios' => '',
            'order' => '',
            'foreignKey' => 'rol_form_id',
        )
    );
    var $belongsTo = array('Form'=>
        array('className' => 'Form',
            'conditios' => '',
            'order' => '',
            'foreignKey' => 'rol_form_id',
        )
    );
}