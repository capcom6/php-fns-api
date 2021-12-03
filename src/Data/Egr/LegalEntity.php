<?php

namespace \SoftC\FnsApi\Data\Egr;

/**
 * Информация о юридическом лице
 *
 * @author aleksandr
 */
class LegalEntity {
    /**
     * ИНН
     * @var string
     */
    public $inn;
    /**
     * Краткое наименование
     * @var string
     */
    public $shortName;
    /**
     * Полное наименование
     * @var string
     */
    public $fullName;
    /**
     * Контактные данные
     * @var Contacts
     */
    public $contacts;
    
    public function __construct(object $jsonObject) {
        $this->inn = $jsonObject->ИНН;
        $this->shortName = $jsonObject->ИНН;
        $this->fullName = $jsonObject->ИНН;
        $this->contacts = new Contacts($jsonObject->Контакты);
    }
}
