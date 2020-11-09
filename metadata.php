<?php

$sMetadataVersion = '1.1';

$aModule = array(
    'id'           => 'agdirectskusearch',
    'title'        => 'Direct Sku search',
    'description'  => 'Redirect user to product if sku matches in search and no other results found',
    'thumbnail'    => '',
    'version'      => '1.0.0',
    'author'       => 'Aggrosoft GmbH',
    'extend'      => array(
        \OxidEsales\Eshop\Application\Controller\SearchController::class => \Aggrosoft\DirectSkuSearch\Application\Controller\DirectSkuSearchSearchController::class
    )
);
