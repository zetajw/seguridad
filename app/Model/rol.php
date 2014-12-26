<?php
class Rol extends AppModel{
    var $name = 'Rol';
    var $displayField = 'name_rol';
    //var $hasAndBelongsToMany = array('User');
    //var $hasAndBelongsToMany = array('Form');
    var $validate = array(
      'name_rol' => array(
          'rule'=> 'notEmpty',
          'message' => 'Llene el campo'
      )
    );
    var $hasAndBelongsToMany = array(
        'User'  => array(
            'className' => 'User',
            'joinTable' => 'users_rols',
            'foreignKey'=> 'rol_id',
            'associationForeinKey' => 'user_id'
        ),
        'Forms' => array('with' => 'rols_forms')
        
    );
    
    
    
  /*  var $hasAndBelongsToMany = array(
        'Form'  => array(
            'className' => 'Form',
            'joinTable' => 'rols_forms',
            'foreignKey'=> 'rol_id',
            'associationForeinKey' => 'form_id'
        )
    );*/
}