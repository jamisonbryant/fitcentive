<?php

App::uses('AppModel', 'Model');

/**
 * User Model
 */
class User extends AppModel {
    /**
     * @var string Display field
     */
	public $displayField = 'name';

	/**
     * @var array hasMany associations
     */
	public $hasMany = array(
		'Intake' => array(
			'className' => 'Intake',
			'foreignKey' => 'user_id',
			'dependent' => false
		),
		'Output' => array(
			'className' => 'Output',
			'foreignKey' => 'user_id',
			'dependent' => false
		)
	);

	/**
	 * @var array hasAndBelongsToMany associations
	 */
	public $hasAndBelongsToMany = array(
        'Deal' => array(
            'className' => 'Deal',
            'joinTable' => 'deals_users',
            'foreignKey' => 'user_id',
            'associationForeignKey' => 'deal_id',
            'unique' => 'keepExisting'
        ),
		'Event' => array(
			'className' => 'Event',
			'joinTable' => 'events_users',
			'foreignKey' => 'user_id',
			'associationForeignKey' => 'event_id',
			'unique' => 'keepExisting'
		)
	);

	/**
	 * @var array Validation rules
	 */
	public $validate = array(
        'email' => array(
            'rule1' => array(
                'rule' => 'notEmpty',
                'message' => 'This field cannot be left blank'
            ),
            'rule2' => array(
                'rule' => 'email',
                'message' => 'Please enter a valid email address'
            )
        ),
        'password' => array(
            'rule1' => array(
                'rule' => 'notEmpty',
                'message' => 'This field cannot be left blank',
                'on' => 'create'
            )
        )
    );
}