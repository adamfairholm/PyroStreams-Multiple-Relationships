# PyroStreams Multiple Relationships Field Type 1.3

The multiple relationships field type allows you to relate multiple entries to a single entry.

## Compatibility

This field type is compatible with PyroCMS 2.1.x versions.

## Installation

To install, download from GitHub and rename the folder to "multiple". Put this in your addons/site\_ref/field_types/ or addons/shared\_addons/field\_types folder. Once you've placed it into one of these folders, it'll be ready to use with PyroStreams.

## Usage

To display the related entries, you can run them in a cycle just like you would the main stream with the related function:

	{{ streams:cycle stream="real_estate_agents" }}

	<h2>{{ name }}</h2>

		<ul>
		{{ streams:multiple field="real_estate_listings" order_by="address" limit="5" }}
		<li>{{ address }}</li>
		{{ /streams:multiple }}
		</ul>
	  
	{{ /streams:cycle }}