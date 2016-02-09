
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

This plugin add Twig filter `{{ snippet }}`.  The filter is output tiny html (or other text) inside a document from text file.  


## Installation

Installing `Snippet` plugin can only manual install now. [Download](https://github.com/gracix/grav-plugin-snippet/archive/master.zip) this plugin and extracting all plugin files to 

    user/plugins/snippet
    
## Usage

    {{ 'filename.txt' |  snippet  }}
    

 1. Create directory user/snippets if nothing. (This path is default. You can change directory name in plugin's config)
 2. Write a tiny html (or other text) to file. (ex: snippet1.html)
 3. The file put into user/snippets directory. 
 4. Write twig tag in page content or theme file. (ex: `{{ 'snippet1.html' |  snippet  }}`)
 5. Preview the site.

## Security

***!Caution!***

This plugin **RAW** output from text file. Please check Broken HTML tags and Security risk before upload.

## License

Copyright (c) 2016 [Takefumi Ota](https://github.com/gracix).

Licensed for use under the terms of the [MIT](http://www.opensource.org/licenses/mit-license.php).
 
## Found a mistakes ?

Please tell my mistakes about English if any. :-p