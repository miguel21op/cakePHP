<?php
App::uses('AppModel', 'Model');
/**
 * LegalCoverFamilyPlan Model
 *
 * @property LegalCoverFamilyProvider $LegalCoverFamilyProvider
 * @property LegalCoverFamilyCoverage $LegalCoverFamilyCoverage
 * @property LegalCoverFamilyPremium $LegalCoverFamilyPremium
 * @property LegalCoverFamilyQuoteResponse $LegalCoverFamilyQuoteResponse
 */
class LegalCoverFamilyPlan extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'legal_cover_family_provider_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'is_active' => array(
			'boolean' => array(
				'rule' => array('boolean'),
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
		'LegalCoverFamilyProvider' => array(
			'className' => 'LegalCoverFamilyProvider',
			'foreignKey' => 'legal_cover_family_provider_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'LegalCoverFamilyCoverage' => array(
			'className' => 'LegalCoverFamilyCoverage',
			'foreignKey' => 'legal_cover_family_plan_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'LegalCoverFamilyPremium' => array(
			'className' => 'LegalCoverFamilyPremium',
			'foreignKey' => 'legal_cover_family_plan_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'LegalCoverFamilyQuoteResponse' => array(
			'className' => 'LegalCoverFamilyQuoteResponse',
			'foreignKey' => 'legal_cover_family_plan_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
