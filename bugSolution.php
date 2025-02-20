```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    //strict type check
    if (is_numeric($number)){
        $sum += $number;
    } else {
        //Handle the error appropriately
        echo "Error: Non-numeric value encountered: " . $number . "\n";
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4'];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; //Correct output
```