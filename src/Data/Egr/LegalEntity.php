<?php

/*
 * Copyright 2021 Aleksandr Soloshenko.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace SoftC\FnsApi\Data\Egr;

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

    public function __construct(array $jsonObject) {
        $this->inn = $jsonObject['ИНН'];
        $this->shortName = $jsonObject['НаимСокрЮЛ'];
        $this->fullName = $jsonObject['НаимПолнЮЛ'];
        $this->contacts = new Contacts($jsonObject['Контакты'] ?? [] ?: []);
    }
}