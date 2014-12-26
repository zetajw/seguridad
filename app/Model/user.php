<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
class User extends AppModel{
    var $name = 'User';
    var $displayField = 'username';
    var $validate = array(
      'username' => array(
          'rule'=> 'notEmpty',
          'message' => 'Llene el campo'
      ),
        'password' => array(
          'rule'=> 'notEmpty',
          'message' => 'Llene el campo'
      )
    );
    var $hasAndBelongsToMany = array(
        'Rol'  => array(
            'className' => 'Rol',
            'joinTable' => 'users_rols',
            'foreignKey'=> 'user_id',
            'associationForeinKey' => 'rol_id'
        )
    );
    public function beforeSave($options = array()) {
        $this->data['User']['password'] = AuthComponent::password(
          $this->data['User']['password']
        );
        return true;
    }
    function hasPasswords($data) {
        if (isset($data['User']['password'])) {
            $data['User']['password'] = md5($data['User']['password']);
            return $data;
        }
        return $data;
    }


    /*public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash(
            $this->data[$this->alias]['password']
        );
    }
    return true;
}*/
}