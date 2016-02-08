
##### Table of Contents:

* [About](#about)
* [Require](#Require)
* [Installation](#installation)
* [Usage](#usage)
* [Contributing](#contributing)
* [Security](#Security)
* [License](#license)

## About

`Snippet` is [Grav](https://getgrav.org/) plugin.
This plugin is output tiny html code (or other text) inside a document from file. 

## Require

Require [Shortcodes Plugin](https://github.com/sommerregen/grav-plugin-shortcodes).


## Installation

Installing `Snippet` plugin can only manual install now. [Download](https://github.com/gracix/grav-plugin-snippet/archive/master.zip) this plugin and extracting all plugin files to 

    user/plugins/snippet
    
## Usage

    {{% snippet name="filename.txt" %}}


 1. Write a tiny html (or other text) to file. (ex: snippet1.html)
 2. The file put into user/data directory. (If not exists a user/data directory, create it.)
 3. Write shortcode in page content. (ex: `{{% snippet name="snippet1.html" %}}`)
 4. Preview the site.

## Security

***!Caution!***

This plugin **RAW** output from text file. Please check before upload.

## License

Copyright (c) 2016 [Takefumi Ota](https://github.com/gracix).

Licensed for use under the terms of the [MIT](http://www.opensource.org/licenses/mit-license.php).
 
## Found a mistakes ?

Please tell my mistakes about English if any. :-p