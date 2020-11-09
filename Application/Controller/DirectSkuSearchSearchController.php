<?php

namespace Aggrosoft\DirectSkuSearch\Application\Controller;

class DirectSkuSearchSearchController extends DirectSkuSearchSearchController_parent
{
    public function init()
    {
        parent::init();

        $list = $this->getArticleList();
        if ($list->count() === 1) {
            $article = $list->current();

            $oConfig = \OxidEsales\Eshop\Core\Registry::getConfig();
            $query = trim($oConfig->getRequestParameter('searchparam', true));

            if ($query === $article->oxarticles__oxartnum->value) {
                \OxidEsales\Eshop\Core\Registry::getUtils()->redirect($article->getLink(), false, 303);
            }
        }
    }
}