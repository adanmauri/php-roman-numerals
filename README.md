# What is PHP Roman Numerals
PHP Roman Numerals is a library in order to convert arabic and roman numerals.

## deromanize()
### Definition and Usage
The deromanize function converts a roman numeral string to its corresponding arabic numeral integer.

### Syntax
```php
deromanize(string)
```

### Parameters values
* **string**: Required. The roman numeral string

### Example

Returns a integer which is the corresponding arabic number of "MMXVII":

```php
$num = deromanize("MMXVII");
```
The result of *num* will be:
```php
2017
```

## romanize()
### Definition and Usage
The romanize method converts a arabic numeral integer to its corresponding roman numeral string.

### Syntax
```php
romanize(integer)
```

### Parameters values
* **integer**: Required. The arabic numeral integer

#### Example

Returns a string which is the corresponding arabic number of 2017:
```php
$num = romanize(2017);
```
The result of *num* will be:
```php
MMXVII
```
