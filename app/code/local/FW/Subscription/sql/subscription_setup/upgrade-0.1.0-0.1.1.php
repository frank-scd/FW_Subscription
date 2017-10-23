<?php
$installer = $this;
$installer->startSetup();

$entity = 'catalog_product';
$code = 'digital_parent';
$attr = Mage::getResourceModel('catalog/eav_attribute')
    ->loadByCode($entity,$code);

if( !$attr->getId())
{
	/** @var Mage_Catalog_Model_Resource_Setup $this */
	$this->addAttribute(Mage_Catalog_Model_Product::ENTITY, $code, array(
    		'group'         => 'General Information',
    		'input'         => 'text',
    		'type'          => 'text',
    		'label'         => 'Digital Parent',
    		'backend'       => '',
    		'visible'       => true,
    		'required'      => false,
    		'is_unique'     => false,
    		'visible_on_front' => true,
    		'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
	));
}

$code = 'digital_fulfillment_date';
$attr = Mage::getResourceModel('catalog/eav_attribute')
    ->loadByCode($entity,$code);

if( !$attr->getId())
{
	/** @var Mage_Catalog_Model_Resource_Setup $this */
	$this->addAttribute(Mage_Catalog_Model_Product::ENTITY, $code, array(
	    'group'         => 'General Information',
	    'input'         => 'datetime',
	    'type'          => 'date',
	    'label'         => 'Digital Fulfillment Date',
	    'backend'       => '',
	    'visible'       => true,
	    'required'      => false,
	    'is_unique'     => false,
	    'visible_on_front' => false,
	    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
	));
}

$code = 'flag';
$attr = Mage::getResourceModel('catalog/eav_attribute')
    ->loadByCode($entity,$code);

if( !$attr->getId())
{
	/** @var Mage_Catalog_Model_Resource_Setup $this */
	$this->addAttribute(Mage_Catalog_Model_Product::ENTITY, $code, array(
	    'group'         => 'General Information',
	    'input'         => 'text',
	    'type'          => 'text',
	    'label'         => 'Digital Fullfilment Flag',
	    'backend'       => '',
	    'visible'       => false,
	    'required'      => false,
	    'is_unique'     => true,
	    'visible_on_front' => false,
	    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
	));
}

$installer->endSetup();
