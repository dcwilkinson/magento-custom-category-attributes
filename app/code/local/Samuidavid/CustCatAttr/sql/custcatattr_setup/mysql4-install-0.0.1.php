<?php
$this->startSetup();
$this->addAttribute(
    Mage_Catalog_Model_Category::ENTITY,
    'category_banners',
    array(
        'group' => 'General Information',
        'input' => 'image',
        'type' => 'varchar',
        'label' => 'Category Banner',
        'backend' => 'catalog/category_attribute_backend_image',
        'visible' => true,
        'required' => false,
        'visible_on_front' => false,
        'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    )
);
$this->endSetup();
?>