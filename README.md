# WordPress Project Starter Template

* * *

## Requirements

*   PHP 7 or greater
*   MySQL 5.6 or greater OR MariaDB 10.0 or greater
*   The mod_rewrite Apache module

For more info on WordPress requirements:  
[https://wordpress.org/about/requirements/](https://wordpress.org/about/requirements/)

* * *

## Installation

1.  Download the master branch:  

    `https://bitbucket.org/digitalexpertsunited/wp-starter.git`  

2.  Clone it inside the root folder of your server (usually htdocs, public_html, www, etc), the folder's name where you will clone the repo its recommended to be the name of the project.  

3.  Create a new database named after the projects name, for example if the projects name is called LiveJournal, the database can be called, livejournal.  

4.  Create a new virtualhost on windows (VHOSTS), by editing the vhosts configuration file on XAMPP server and hosts file on Windows folder.  
    Its recommanded to name the virtualhost after the name of the project (i.e project is named LiveJournal, vhost name is livejournal.dev)  
    For more info regarding "how to setup virtualhosts on windows", you can check here:  
    [http://foundationphp.com/tutorials/apache_vhosts.php](http://foundationphp.com/tutorials/apache_vhosts.php)  
    [https://www.cloudways.com/blog/configure-virtual-host-on-windows-10-for-wordpress/](https://www.cloudways.com/blog/configure-virtual-host-on-windows-10-for-wordpress/)  

5.  Restart Apache Server. On Windows you need to open XAMPP/Wamp and manually stop and start Apache service. This needs to be done in order for Apache to "read" the latest vhosts file. On Linux web server you need to login via SSH and run the command:  

    `sudo service apache2 restart`  

    For more info on how to work with Apache service on Linux/UNIX based OS you can read the article below:  
    [https://www.cyberciti.biz/faq/star-stop-restart-apache2-webserver/](https://www.cyberciti.biz/faq/star-stop-restart-apache2-webserver/)  

6.  Open the url you configured above (i.e livejournal.dev) on your browser of choice and you will be asked to install WordPress.  

7.  Follow all the WordPress installation steps as requested, then login on your admin panel with your credentials and here you have it ... you just installed the WP starter project on your local development environment.
8.  Check that everything is up to date (WordPress core, plugins) before start developing, if not, update everything then check all works correctly ... only then you can start developing. This is to ensure that we develop using the latest possible features/technologies/methods and our code is safe to use with the current technologies (no reason to keep supporting old technologies if we don't support web trends).

* * *

## Whats inside the project?

*   WordPress (latest version, if not update and check all works correctly)
*   Installed Plugins (latest version, if not update and check all works correctly)
    *   Advanced Custom Fields ([https://wordpress.org/plugins/advanced-custom-fields/](https://wordpress.org/plugins/advanced-custom-fields/))
    *   Advanced Reset WP ([https://wordpress.org/plugins/advanced-reset-wp/](https://wordpress.org/plugins/advanced-reset-wp/))
    *   Developer ([https://wordpress.org/plugins/developer/](https://wordpress.org/plugins/developer/))
    *   Theme Check ([https://wordpress.org/plugins/theme-check/](https://wordpress.org/plugins/theme-check/))
    *   What The File ([https://wordpress.org/plugins/what-the-file/](https://wordpress.org/plugins/what-the-file/))
    *   WordPress Importer ([https://wordpress.org/plugins/wordpress-importer/](https://wordpress.org/plugins/wordpress-importer/))
*   Installed Themes
    *   Digitaleheimat WordPress Boostrap Starter Theme
    *   Digitaleheimat WordPress Foundation Starter Theme

* * *

## How to work with pre-defined Themes?

Inside <kbd>themes</kbd> folder on WordPress there are installed 2 pre-defined themes which where built from scratch in order to use them as starter themes. Both the themes have almost the same files/folders structure and it is recommended to keep it that way (if possible, based on specific project needs).

The big difference between the 2 themes is the frontend CSS/JS framework used on the themes, one of them uses [Bootstrap](http://getbootstrap.com/) [(latest version)](https://github.com/twbs/bootstrap/releases) and the other theme uses [Foundation](https://foundation.zurb.com/) [(latest version)](https://github.com/zurb/foundation-sites/releases)

While developing using these pre-defined themes, it is recommended to:

*   continue developing using same files/folders structure (specially for the <kbd>includes</kbd> folder)
*   continue developing using same coding standards as defined in the themes (so same spaces, same bracket conventions, same naming variables/functions conventions, etc)

The themes have a self-explenatory files/folders structure. In the root of the theme you will find the basic WordPress views. What is custom are folders like:

*   **assets** - all css/js/fonts/img will be put here
*   **includes** - theme logic will be put here (more on includes will be explained below
*   **languages** - folder where pot/po/mo files will be put to make the theme translation ready
*   **loop** - the WordPress loop templates (where the contet of pages/posts/cpts, etc are created)
*   **page-templates** - all custom page templates will be put here
*   **partials** - here we can add page elements that are repetitive, so they need to be in every page like a component/module

Based on this files/folders structure it's easy to understand that the theme has a clear division between what is logic and what is a view and where each should be put. So the code also needs to be conform this concept, separating logic from view, where it is possible. Example if you need to trim the title of a post on a certain loop, it might be better to create a helper function, or WordPress filter in helpers.php and then call the function in the view or in the case of the filter, wont need to be called its automatically working. Problem with using the filter in this case is that the filter is universal so will be applied to all the titles in the website not just the ones you might want to trim.

In order to make it easier for the developer to understand how <kdb>includes</kdb> folder works here is a more detailed explanation:

*   **admin** - here will be added code related to the theme customizer and theme documentation
*   **ajax** - for each ajax action that we will be doing in frontend, we need an ajax handler in WordPress, so for each ajax action, on this folder we create a file that will do the ajax request handling
*   **extras** - theme functionalities like custom meta, custom footer, etc
*   **helpers** - helper functions needed for the frontend or even for logic
*   **libraries** - libraries used in the theme, for example bootstrap navwalker class
*   **setup** - here the theme will declare all its supports, widgets, menus, custom media sizes, enqueue scripts/styles, etc

* * *

## Theme Standards

The themes only are used as a starter theme. Which means they will be used from developers so they can create the new themes on top of these themes following the themes structure, code organisation and structure and coding best practices.

In order to guarantee that themes are following all of the above they will be tested when the development phase in the theme is finished for:

*   theme files/folder structure is clear and organised
*   theme will be reviewed at code level
*   theme will be checked that the developer has taken into account edge cases that can happen in CMSs ([https://codex.wordpress.org/Theme_Unit_Test](https://codex.wordpress.org/Theme_Unit_Test))
*   theme should be translation ready (except cases when its explicitely specified from PM that it shouldnt be)
*   theme must pass all tests from Theme Check plugin ([https://wordpress.org/plugins/theme-check/](https://wordpress.org/plugins/theme-check/))
*   theme will be checked in mobile devices (so it needs to be responsive ready)
*   theme will be checked on BrowserStack (so it shouldnt have any cross-browser compatibility issues)

Failing in any 1 of the above "checklist" items means that the theme will be put again on development status until all issues found are solved and ofcurse it will be checked again that those issues found are solved (and also an exploratory testing needs to be made in order to check that the latest fixes didnt break anything else).

* * *

## Coding Best Practices

While this is a very broad topic and very relative also (different people have different opinions on which to consider as best practice), i'm considering as best practice what has been proven to work in the past.

### Universal Best Practices

*   Keep the code structure clean
*   Do not misc view and logic, try as much as possible to divide view from logic (using helpers and other WordPress functions)
*   Do not reinvent the wheel. For example no need to create a custom pagination function, WordPress already provides one and ways to modify it for your specific needs.
*   Be consistent while coding. It is recommended to keep the same naming conventions, same space type (tab with 4 spaces or tab with 2 spaces, do not use spaces to indent, etc) ... important is to be consistent. So no matter what convention you chose to use, be consistent, it helps making the code more readable.
*   Try to write readable, clean and maintanable code (which also if well done helps making the code future-proof ready)

### WordPress Coding Standards

*   [PHP Coding Standards](https://make.wordpress.org/core/handbook/best-practices/coding-standards/php/)
*   [HTML Coding Standards](https://make.wordpress.org/core/handbook/best-practices/coding-standards/html/)
*   [CSS Coding Standards](https://make.wordpress.org/core/handbook/best-practices/coding-standards/css/)
*   [JavaScript Coding Standards](https://make.wordpress.org/core/handbook/best-practices/coding-standards/javascript/)
*   [WordPress Developer Handbook - Themes](https://developer.wordpress.org/themes/getting-started/)
*   [WordPress Developer Handbook - Plugins](https://developer.wordpress.org/plugins/)

While no-one is asking you to learn all the standards, it is good for every WordPress to know how to use WordPress at its best, using standards and practices recommended from them. If there are practices recommended in the WordPress Coding Standards that are against other standards recommended on this Guideline, the standarts presented here have priority.

### Other references:

*   [http://codeguide.co/](http://codeguide.co/)
*   [http://www.phptherightway.com/](http://www.phptherightway.com/)
*   [https://css-tricks.com/bem-101/](https://css-tricks.com/bem-101/)
*   [https://cssguidelin.es/](https://cssguidelin.es/)
*   [http://bradfrost.com/blog/post/css-architecture-for-design-systems/](http://bradfrost.com/blog/post/css-architecture-for-design-systems//)

* * *

## Working with Git

*   Push at least daily on Git
*   Before pushing changes online, check that all is working (if you work in group you might create problems for other team members)
*   When you work on new features, add a new branch on the git repo and push all changes related to that feature to that branch
*   When the feature is finished and confirmed from QA/PM/Client, merge feature branch to master

* * *

## Recommended Plugins

*   **Advanced Custom Fields Pro** - Needed only if the project needs can't be achieved using free version of [ACF](https://wordpress.org/plugins/advanced-custom-fields/) which is already pre-bundled in this project. In cases like that ask PM/Team Leader for supervision.
*   [Yoast SEO](https://wordpress.org/plugins/wordpress-seo/) - Improve On-Page SEO of website.
*   [iThemes Security (formerly Better WP Security)](https://wordpress.org/plugins/better-wp-security/) - Improve security of WordPress website by implementing multiple layers of security.
*   [W3 Total Cache](https://wordpress.org/plugins/w3-total-cache/) - Improve website's performance
*   [Smush Image Compression and Optimization](https://wordpress.org/plugins/wp-smushit/) - Optimise images uploaded in WordPress. For more advanced features, depending on project needs, you might need to ask from PM/Team Leader for access on **Smush Image Compression and Optimization Pro**
*   [Gravity Forms Pro](http://www.gravityforms.com/) - Gravity Forms is the Easiest Tool to Create Advanced Forms for Your WordPress Powered Website (ask your Team Leader/PM/supervisor if you need the license to use this plugin)

**For all premium plugins it is advised to consult before with Team Leader/PM/supervisor since there might be licensing issues, etc.**

* * *

## Browser Support

Browser support is related to the way how each of the libraries/frameworks used, support each of the main browsers. If a certain library does not support a certain browser then that browser support is partial or not supported and viceversa, if a library/framework, supports all browsers then the browser support for that library is fully supported.

Based on this definition, here are the browser support for the libraries pre-included with WP Start project template:

*   [Bootstrap](https://v4-alpha.getbootstrap.com/getting-started/browsers-devices/)
*   [Foundation](http://foundation.zurb.com/sites/docs/compatibility.html)
*   [jQuery](https://jquery.com/browser-support/)

When you chose which technologies to use on your project (in our case, which theme to use), keep always in mind project requirements in order so the technology chosen will not be a blocker to achieve the projects requirements.

Other references:

*   [Modernizr](https://modernizr.com/)
*   [Can i use](https://caniuse.com/)

* * *

## Issues

If you find anything weird with WP Starter Project, please let us know using the issues tracker.

* * *

## Copyright and License

[GPL-V2](https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html)