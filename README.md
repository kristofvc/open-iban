# PHP Open IBAN implementation

## Usage

```php 
require __DIR__ . '/../vendor/autoload.php';

$repo = new \Kristofvc\OpenIban\Repository\IbanRepository();

$message = $repo->findIban('BE30000000001111');

if ($message->isValid() {
    $bic = $message->getBankData()->getBic();
}
```