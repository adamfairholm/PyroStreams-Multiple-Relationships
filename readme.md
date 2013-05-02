# PyroStreams Multiple Relationships Field Type 2.0.1

The multiple relationships field type allows you to relate multiple entries to a single entry.

## Compatibility

This field type is compatible with PyroCMS 2.2.x versions.

## Changelog

### 2.0.1 - March 28, 2013

* Fixing several join errors

### 2.0 - February 27, 2013

* New syntax that takes advantage of the 2.2 plugin override function.
* Adds support for multi-select as well as the regular drag and drog.
* UI Enhancements for PyroCMS 2.2.

## Installation

To install, download from GitHub and rename the folder to "multiple". Put this in your addons/<site\_ref>/field_types/ or addons/shared\_addons/field\_types folder. Once you've placed it into one of these folders, it'll be ready to use with PyroStreams.

## Usage

To display the related entries, loop throught your multiple relationship ouput as a tag pair. You can use all of the parameters available to you on the main streams cycle.

Example:

	{{ streams:cycle stream="owners" }}

	<h2>{{ name }}</h2>

		<ul>
		{{ dogs order_by="name" limit="5" }}
		  <li>{{ name }}</li>
		{{ dogs }}
		</ul>
	  
	{{ /streams:cycle }}

## API Usage

For efficiency, in the tag system, the multiple relationships field type is only called if you need it. So, if you have a multiple relationship field call "locations", you'd do this in the tag system:

	{{ locations limit="3" }}
		{{ location_name }}
	{{ /locations }}

That tag is calling a function in the field type named `plugin_override()`, which fetches the rows based on the attributes we give it.

So, when you want to use multiple relationship values via the Streams API with PHP, you need to replicate this logic based on whether you need the data or not. Since field types are PHP classes, you can pass it the data like this and get the entries back manually:

	$field = $this->field_m->get_field($fieldId);
	 
	$attributes = array(
	  'stream_slug' => 'sample', // The stream of the related stream.
	  'row_id' => $rowId, // The ID of the current entry row.
	);
	 
	$entries = $this->type->types->multiple->plugin_override($field, $attributes);

This helps keep database calls as efficient as possible while giving you more control over what streams is and what data it is fetching. 