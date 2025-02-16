```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call
    } elseif (is_string($value)) {
      // Process string values
      $data[$key] = strtoupper($value);
    }
  }
  return $data;
}

$data = ['a' => 1, 'b' => ['c' => 2, 'd' => 'hello'], 'e' => 3];
$processedData = processData($data);
print_r($processedData);
```