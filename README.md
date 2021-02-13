# API

Created because i don't really wanna get my hands dirty coz of using the old php-curl
:shit: example.

#### Installation :fire:

`composer require irfanmyj/api`

#### Example Usage :confetti_ball:
```php
//use your own bpjs config
$vclaim_conf = [
    'base_url' => 'https://namadomain.com',
    'service_name' => 'api'
];

// use Referensi service

$referensi = new Irfanmyj\Api\Classapi\Auth($vclaim_conf);
var_dump($referensi->login(['username'=>'tes','password'=>'123']));
```

