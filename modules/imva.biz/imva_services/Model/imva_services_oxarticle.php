<?php

/**
 * imva.biz Module Services
 *
 *
 *
 * For redistribution in the provicer's network only.
 *
 * Weitergabe außerhalb des Anbieternetzwerkes verboten.
 *
 *
 *
 * This software is intellectual property of imva.biz respectively of its author and is protected
 * by copyright law. This software product is provided "as it is" with no guarantee.
 *
 * You are free to use this software and to modify it in order to fit your requirements.
 *
 * Any modification, copying, redistribution, transmission outsitde of the provider's platforms
 * is a violation of the license agreement and will be prosecuted by civil and criminal law.
 *
 * By applying and using this software product, you agree to the terms and conditions of use.
 *
 *
 *
 * Diese Software ist geistiges Eigentum von imva.biz respektive ihres Autors und ist durch das
 * Urheberrecht geschützt. Diese Software wird ohne irgendwelche Garantien und "wie sie ist"
 * angeboten.
 *
 * Sie sind berechtigt, diese Software frei zu nutzen und auf Ihre Bedürfnisse anzupassen.
 *
 * Jegliche Modifikation, Vervielfältigung, Redistribution, Übertragung zum Zwecke der
 * Weiterentwicklung außerhalb der Netzwerke des Anbieters ist untersagt und stellt einen Verstoß
 * gegen die Lizenzvereinbarung dar.
 *
 * Mit der Übernahme dieser Software akzeptieren Sie die zwischen Ihnen und dem Herausgeber
 * festgehaltenen Bedingungen. Der Bruch dieser Bedingungen kann Schadensersatzforderungen nach
 * sich ziehen.
 *
 *
 *
 * (EULA-13/7-OS)
 *
 *
 *
 * (c) 2012-2016 imva.biz, Johannes Ackermann, ja@imva.biz
 * @author Johannes Ackermann
 *
 * 16/9/22
 *
 */

/**
 * Class imva_services_oxarticle extends oxArticle
 */
class imva_services_oxarticle extends imva_services_oxarticle_parent
{




    /**
     * An array of the respective items from the basket. Contains personalized items as well.
     *
     * @return oxBasketItem[]
     */
    public function getRespectiveItemsFromBasket()
    {
        $basketItems = oxRegistry::getSession()->getBasket()->getContents();

        $respectiveItems = array();
        $i = 0;
        foreach ($basketItems as $BasketItem)
        {
            if ($BasketItem->getArticle()->getId() == $this->getId()){
                $respectiveItems[$i] = $BasketItem->getArticle();
                $i++;
            }
        }

        return $respectiveItems;
    }
}
