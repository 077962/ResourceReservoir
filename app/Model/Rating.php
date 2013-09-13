<?php
App::uses('AppModel', 'Model');
/**
 * Rating Model
 *
 * @property User $User
 */
class Rating extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'rating';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'rating_cycle' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'User' => array(
			'className' => 'User',
			'joinTable' => 'ratings_users',
			'foreignKey' => 'rating_id',
			'associationForeignKey' => 'user_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
