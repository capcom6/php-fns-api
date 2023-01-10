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

    public function __construct(array $jsonObject) {
        $this->phones = $jsonObject['Телефон'] ?? [];
        $this->emails = $jsonObject['e-mail'] ?? [];
        $this->sites = $jsonObject['Сайт'] ?? [];
    }
}