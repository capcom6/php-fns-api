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

namespace SoftC\FnsApi;

use Http\Client\Exception\HttpException;
use Http\Client\HttpClient;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Message\MessageFactory;

/**
 * Клиент API
 *
 * @author aleksandr
 */
class Client {
    const BASE_URI = 'https://api-fns.ru/api/';

    /**
     * Ключ доступа
     * @var string
     */
    protected string $token;
    /**
     * HTTP-клиент
     * @var \Http\Client\HttpClient
     */
    protected HttpClient $client;
    /**
     * Фабрика сообщений
     * @var \Http\Message\MessageFactory
     */
    protected MessageFactory $messageFactory;

    /**
     * Ключ доступа к API
     * @param string $token Ключ доступа к API
     * @param HttpClient $client HTTP-клиент, если не передан, то будет создан со значениями по-умолчанию
     */
    public function __construct(string $token, ? HttpClient $client = null) {
        $this->token = $token;

        $this->client = $client ?? HttpClientDiscovery::find();
        $this->messageFactory = MessageFactoryDiscovery::find();
    }

    /**
     * 
     * @param string $inn ОГРН или ИНН искомой компании (юридического лица или ИП)
     * @return array<\SoftC\FnsApi\Data\Egr\LegalEntity>
     * @throws \Exception
     */
    public function egrGet(string $inn) {
        $query = http_build_query(
            [
                'req' => $inn,
                'key' => $this->token
            ]
        );

        $json = $this->sendRequest('GET', 'egr?' . $query);

        $items = $json['items'];

        $result = [];

        foreach ($items as $item) {
            if (empty($item['ЮЛ'])) {
                continue;
            }
            $result[] = new \SoftC\FnsApi\Data\Egr\LegalEntity($item['ЮЛ']);
        }

        return $result;
    }

    /**
     * Выполняет запрос к серверу
     * @param string $method http-метод
     * @param string $uri адрес
     * @param object|null $payload тело запроса
     * @throws \RuntimeException 
     * @return array<mixed>
     */
    protected function sendRequest(string $method, string $uri, ?object $payload = null) {
        $data = isset($payload) ? json_encode($payload) : null;
        if ($data === false) {
            throw new \RuntimeException('Не удалось сериализовать данные');
        }

        $request = $this->messageFactory->createRequest(
            $method,
                static::BASE_URI . $uri,
            [],
            $data
        );
        $response = $this->client->sendRequest($request);

        if ($response->getStatusCode() >= 400) {
            throw HttpException::create($request, $response);
        }

        $result = json_decode($response->getBody(), true);
        if (!is_array($result)) {
            throw new \RuntimeException('Не удалось десериализовать ответ');
        }

        return $result;
    }
}