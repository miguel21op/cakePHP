<?php
App::uses('AppModel', 'Model');
/**
 * LegalCoverFamilyQuoteResponse Model
 *
 * @property LegalCoverFamilyPlan $LegalCoverFamilyPlan
 * @property LegalCoverFamilyQuoteRequest $LegalCoverFamilyQuoteRequest
 * @property Company $Company
 */
class LegalCoverFamilyQuoteResponse extends AppModel {

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
		'legal_cover_family_quote_request_id' => array(
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
		),
		'LegalCoverFamilyQuoteRequest' => array(
			'className' => 'LegalCoverFamilyQuoteRequest',
			'foreignKey' => 'legal_cover_family_quote_request_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Company' => array(
			'className' => 'Company',
			'foreignKey' => 'company_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
