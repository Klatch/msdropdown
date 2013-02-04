
Packaging of the msdropdown javascript library for use in Elgg. 

Allows for graphics on drop down menus.

This is a library plugin. This plugin does nothing on its own. 

This plugin exists so that other plugins may use it to put up easy 
dropdown menus with graphics using the msdropdown library.

homepage: https://github.com/Klatch/msdropdown



Usage:

On the page you intend to show the dropdown on you need this:

<script language="javascript">

$(document).ready(function(e) { $("body select").msDropDown(); });

</script>


<select name="body">

<option value="linux" title="http://mydomain.com/linux.png">Linux</option>

<option value="mac" title="http://mydomain.com/mac.png">Mac</option>

<option value="win" title="htp://mydomain.com/win.png">Windows</option>

</select>




jslib: 

// MSDropDown - jquery.dd.js

// author: Marghoob Suleman - http://www.marghoobsuleman.com/

// Date: 10 Nov, 2012

// Version: 3.3

// Revision: 22

// web: www.marghoobsuleman.com

// msDropDown is free jQuery Plugin: you can redistribute it and/or modify

// it under the terms of the either the MIT License or the Gnu General Public License (GPL) Version 2

