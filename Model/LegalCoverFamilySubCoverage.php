<?php
App::uses('AppModel', 'Model');
/**
 * LegalCoverFamilySubCoverage Model
 *
 * @property LegalCoverFamilyCoverage $LegalCoverFamilyCoverage
 * @property LegalCoverFamilySubCoveragesDescription $LegalCoverFamilySubCoveragesDescription
 */
class LegalCoverFamilySubCoverage extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'legal_cover_family_coverage_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'legal_cover_family_sub_coverages_description_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'amount' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
		'LegalCoverFamilyCoverage' => array(
			'className' => 'LegalCoverFamilyCoverage',
			'foreignKey' => 'legal_cover_family_coverage_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'LegalCoverFamilySubCoveragesDescription' => array(
			'className' => 'LegalCoverFamilySubCoveragesDescription',
			'foreignKey' => 'legal_cover_family_sub_coverages_description_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
