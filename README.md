# Modern CSS
I created this project as a way to test some modern CSS workflows and work on the concepts presented by next generation front end web design.

The branches show frozen forms of various working experiments, albeit without any design input and with some very vibrant color choices to directly represent the differences introduced by the experiments.

The commit history shows step by step enhancements to the working environment, and I hope my comments provide some clarity into how workflow functions.

## Setup Steps
1. Clone the repository
2. Install a LAMP/LEMP stack with PHP 5.6+
2. Install Composer
3. Install NodeJS & NPM
2. Run a ```$ composer install```
3. Run an ```$ npm install```
4. [Optional] Run Gulp to Recompile the CSS ```gulp```
4. Fire up a web server and point the webroot to ```[path/to/repo]/public```

### Pro Tip
#### Laravel Homestead
The vagrant file committed as part of this repository makes use of the Laravel Homestead vagrant box. If you currently use vagrant or homestead, you should be set to go by simply running ```homestead make``` in the repository directory to setup your Homestead.yaml file and be ready to rock. If this concept is foreign to you, feel free to [checkout the documentation here](http://laravel.com/docs/5.1/homestead). Or reach out to me for assistance. If you like PHP development, homestead is one of the best things I've encountered in years.

## Special Thanks
* [Jeffrey Way](https://github.com/JeffreyWay) for introducing me to these concepts and providing the resources for experience based learning on the front end.
* [Modern CSS](https://laracasts.com/series/modern-css-workflow/episodes/1) Laracast Series. If you're a professional developer and not a member of Laracasts, you're missing out.

# Laravel Framework
## Useful Information
* Laravel is an Open Source application framework. 
* The framework's official documentation [can be found here](http://laravel.com/docs/5.0). 
* Laravel is licensed under the [MIT License](http://opensource.org/licenses/MIT).
* Laravel is amazing, [to contribute to the framework](http://laravel.com/docs/5.1/contributions)!