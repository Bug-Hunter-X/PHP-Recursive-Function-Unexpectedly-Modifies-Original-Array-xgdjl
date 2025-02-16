```php
function processData(array $data): array {
  $dataCopy = $data; // Create a copy of the array
  foreach ($dataCopy as $key => $value) {
    if (is_array($value)) {
      $dataCopy[$key] = processData($value); // Recursive call on the copy
    } elseif (is_string($value)) {
      $dataCopy[$key] = strtoupper($value);
    }
  }
  return $dataCopy;
}

$data = ['a' => 1, 'b' => ['c' => 2, 'd' => 'hello'], 'e' => 3];
$processedData = processData($data);
print_r($processedData);
print_r($data); // Original array remains unchanged
```