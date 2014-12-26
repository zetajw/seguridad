<?php
class UserRols extends AppModel{
    var $name = UserRols;
    var $belongsTo = array('User'=>
        array('className' => 'User',
            'conditios' => '',
            'order' => '',
            'foreignKey' => 'user_id',
        )
    );
    var $belongsTo = array('Rol'=>
        array('className' => 'Rol',
            'conditios' => '',
            'order' => '',
            'foreignKey' => 'rol_id',
        )
    );
}