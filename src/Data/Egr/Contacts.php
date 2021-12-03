<?php

namespace \SoftC\FnsApi\Data\Egr;

/**
 * Контактные данные
 *
 * @author aleksandr
 */
class Contacts {
    /**
     * Номера телефонов
     * @var array<string>
     */
    public $phones;
    /**
     * Адреса электронной почты
     * @var array<string>
     */
    public $emails;
    /**
     * Сайты
     * @var array<string>
     */
    public $sites;
    
    public function __construct(object $jsonObject) {
        $this->phones = $jsonObject->Телефон;
        $this->emails = $jsonObject->{'e-mail'};
        $this->sites = $jsonObject->Сайт;
    }
}
