

## Barcode Plugin for CakePHP 2+

### Plugin version: 1.2

**AUTHOR:** Lorenzo Maieru

**DATE:** 21-March-2014

**LICENSE:** MIT

*Based on the Barcode PHP component by Walter Cattebeke*

**Usage:**

add the plugin to the controller helpers:

```php
public $helpers = array('Barcode.Barcode'); 
```

use it like so:

```php
echo $this->Barcode->display(1234567890);
```

you can also pass it an optional array with extra paremeters:

```php
echo $this->Barcode->display(1234567890, 
	array(
		'p_charHeight' => 200,
		 'p_label' => "Y"
	)
);
```

Check **BarcodeHelper::display** for a full list of options.



### Barcode component for PHP

**AUTHOR:** Walter Cattebeke

**DATE:** 08-July-2004

**EMAIL:** cachiweb@telesurf.com.py

**LICENSE:** This code is free. You can use it and/or 
modify it.
I only want to be mentioned and notified if you
intend to do either.
