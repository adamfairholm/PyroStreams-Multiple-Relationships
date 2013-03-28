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