
## Barcode Plugin for CakePHP 2+

### Plugin version: 1.3

**AUTHOR:** Lorenzo Maieru

**DATE:** 21-March-2014

**LICENSE:** MIT

*Based on the Barcode PHP image generation component by **Walter Cattebeke***


**What is it?**

this plugin allows you to generate the corresponding image to a given barcode and insert it in your view.

**Installation**

add the plugin to the controller helpers:

```php
public $helpers = array('Barcode.Barcode'); 
```

**Usage**

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

This Plugin has a basic hotlinking prevention that can be disabled by setting the following in your **Config/bootstrap.php**:

```php
Configure::write('Barcode.disallowHotlinking', false);
```
