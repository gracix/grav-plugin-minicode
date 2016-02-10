
##### Table of Contents:

* [About](#about)
* [Require](#Require)
* [Installation](#installation)
* [Usage](#usage)
* [Contributing](#contributing)
* [Security](#Security)
* [License](#license)

## About

`Minicode` is [Grav](https://getgrav.org/) plugin.

This plugin add Twig filter `{{ | minicode }}`.  The filter is output tiny html (or other text) inside a document from text file.

And the filter can use on Templates too. You can output codes of site global. (ex: Sidebars, Ads, New product information...)


## Installation

Installing `Minicode` plugin can only manual install now. [Download](https://github.com/gracix/grav-plugin-minicode/archive/master.zip) this plugin and extracting all plugin files to 

    user/plugins/minicode
    
## Usage

    {{ 'filename.txt' |  minicode  }}
    

 1. Create directory user/minicodes if nothing. (This name is default. You can change directory name in plugin's config)
 2. Write a tiny html (or other text) to file. (ex: minicode1.html)
 3. The file put into user/minicodes directory. (ex: user/minicodes/minicode1.html)
 4. Write twig tag in page content or theme file. (ex: `{{ 'minicode1.html' |  minicode  }}`)
 5. Preview the site.

## Security

***!Caution!***

This plugin **RAW** output from file. Please check Broken HTML tags and Security risk before upload.

## License

Copyright (c) 2016 [Takefumi Ota](https://github.com/gracix).

Licensed for use under the terms of the [MIT](http://www.opensource.org/licenses/mit-license.php).
 
## Found a mistakes ?

Please tell my mistakes about English if any. :-p