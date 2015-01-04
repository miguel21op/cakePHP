<?php
App::uses('AppModel', 'Model');
/**
 * LegalCoverFamilyPremium Model
 *
 * @property LegalCoverFamilyPlan $LegalCoverFamilyPlan
 */
class LegalCoverFamilyPremium extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'legal_cover_family_plan_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'm_premium' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'LegalCoverFamilyPlan' => array(
			'className' => 'LegalCoverFamilyPlan',
			'foreignKey' => 'legal_cover_family_plan_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
