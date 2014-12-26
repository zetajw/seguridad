<?php
class Form extends AppModel{
    var $name = 'Form';
   // var $displayField = 'name_form';
   // var $hasAndBelongsToMany = array('Rol');
     var $validate = array(
      'name_form' => array(
          'rule'=> 'notEmpty',
          'message' => 'Llene el campo'
      ),
        'url_form' => array(
          'rule'=> 'notEmpty',
          'message' => 'Llene el campo'
      )
    );
      var $hasAndBelongsToMany = array(
        'Rol'  => array(
            'className' => 'Rol',
            'joinTable' => 'rols_forms',
            'foreignKey'=> 'form_id',
            'associationForeinKey' => 'rol_id'
        )
    );
}   