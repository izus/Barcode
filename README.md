## Barcode Plugin for CakePHP 2+

### Plugin version: 1.3

**Author:** Lorenzo Maieru

**Last Update:** 21-March-2014

**License Type:** MIT

Based on the Barcode Generator by **Walter Cattebeke**


#### What is it?

This plugin allows you to generate the corresponding image to a given barcode and insert it in your view.

#### Installation

Add the plugin to the helpers list of the Controller you want to use it in:

```php
public $helpers = array('Barcode.Barcode'); 
```

#### Usage

You can print the barcode to your view by adding the following line:

```php
echo $this->Barcode->display(1234567890);
```

You can also pass it an optional array with extra paremeters:

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
