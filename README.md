
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
This plugin add Twig filter `{{ snippet }}`. 

`{{ snippet }} is output tiny html (or other text) inside a document from file. 


## Installation

Installing `Snippet` plugin can only manual install now. [Download](https://github.com/gracix/grav-plugin-snippet/archive/master.zip) this plugin and extracting all plugin files to 

    user/plugins/snippet
    
## Usage

    {{ 'filename.txt' |  snippet  }}
    

 1. Write a tiny html (or other text) to file. (ex: snippet1.html)
 2. The file put into user/data directory. (You can change directory path in plugin's config)
 3. Write twig tag in page content or theme file. (ex: `{{ 'filename.txt' |  snippet  }}`)
 4. Preview the site.

## Security

***!Caution!***

This plugin **RAW** output from text file. Please check HTML tags before upload.

## License

Copyright (c) 2016 [Takefumi Ota](https://github.com/gracix).

Licensed for use under the terms of the [MIT](http://www.opensource.org/licenses/mit-license.php).
 
## Found a mistakes ?

Please tell my mistakes about English if any. :-p