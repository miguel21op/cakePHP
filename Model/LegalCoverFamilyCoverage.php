<?php
App::uses('AppModel', 'Model');
/**
 * LegalCoverFamilyCoverage Model
 *
 * @property LegalCoverFamilyPlan $LegalCoverFamilyPlan
 * @property LegalCoverFamilyCoveragesDescription $LegalCoverFamilyCoveragesDescription
 * @property LegalCoverFamilySubCoverage $LegalCoverFamilySubCoverage
 */
class LegalCoverFamilyCoverage extends AppModel {

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
		'legal_cover_family_coverages_description_id' => array(
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
		'LegalCoverFamilyCoveragesDescription' => array(
			'className' => 'LegalCoverFamilyCoveragesDescription',
			'foreignKey' => 'legal_cover_family_coverages_description_id',
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
		'LegalCoverFamilySubCoverage' => array(
			'className' => 'LegalCoverFamilySubCoverage',
			'foreignKey' => 'legal_cover_family_coverage_id',
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
