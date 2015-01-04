<?php
App::uses('AppModel', 'Model');
/**
 * LegalCoverFamilySubCoveragesDescription Model
 *
 * @property LegalCoverFamilySubCoverage $LegalCoverFamilySubCoverage
 */
class LegalCoverFamilySubCoveragesDescription extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'LegalCoverFamilySubCoverage' => array(
			'className' => 'LegalCoverFamilySubCoverage',
			'foreignKey' => 'legal_cover_family_sub_coverages_description_id',
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
