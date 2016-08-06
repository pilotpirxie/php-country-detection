# PHP Country and Currency Detection

### How to use
```php
<?php
// hook up a library
require 'CountryDetection.class.php';
// use static method and get country
// ex. New Zealand
echo CountryDetection::get('country');
// other nice stuff to detect
// ex. NZD
echo CountryDetection::get('currency');
```

### License
```
MIT
```
