<?php

namespace \SoftC\FnsApi;

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
    protected $token;
    
    /**
     * HTTP-клиент
     * @var \GuzzleHttp\Client
     */
    protected $client;

    /**
     * Ключ доступа к API
     * @param string $token
     */
    public function __construct(string $token) {
        $this->token = $token;
        
        $this->client = new \GuzzleHttp\Client([
            // Base URI is used with relative requests
            'base_uri' => self::BASE_URI,
            \GuzzleHttp\RequestOptions::SYNCHRONOUS => true,
            \GuzzleHttp\RequestOptions::TIMEOUT => 30
        ]);
    }
    
    /**
     * 
     * @param string $inn ОГРН или ИНН искомой компании (юридического лица или ИП)
     * @return array<\SoftC\FnsApi\Data\Egr\LegalEntity>
     * @throws \Exception
     */
    public function egrGet(string $inn) {
        $response = $this->client->get('/api/v1/receipt/pre/create', [
            \GuzzleHttp\RequestOptions::QUERY  => [
                'req' => $inn
            ]
        ]);
        
        if ($response->getStatusCode() !== 200) {
            throw new \Exception($response->getReasonPhrase(), $response->getStatusCode());
        }
        
        $json = json_decode($response->getBody()->getContents());
        $items = $json->items;
        
        return Dash\chain($json->items)
            ->map('ЮЛ')
            ->filter()
            ->map(function(object $item) {
                return new \SoftC\FnsApi\Data\LegalEntity($item);
            })
            ->value();
    }
}
