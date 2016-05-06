<?php
$xpdo_meta_map['simpleLookItem']= array (
  'package' => 'simplelook',
  'version' => '1.1',
  'table' => 'simplelook_items',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'id_user' => 0,
    'active' => 1,
  ),
  'fieldMeta' => 
  array (
    'id_user' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'int',
      'null' => false,
      'default' => 0,
    ),
    'active' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'phptype' => 'boolean',
      'null' => true,
      'default' => 1,
    ),
  ),
  'indexes' => 
  array (
    'id_user' => 
    array (
      'alias' => 'id_user',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'id_user' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'active' => 
    array (
      'alias' => 'active',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'active' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
);
