# WordPress Post Cacher
This class was created to deal with the slow loading and parsing of WordPress RSS feeds for displaying on various pages that do not use WordPress, an example of this will be [HelgeSverre.com](https://helgesverre.com), where the main page is pure HTML, CSS, JS and PHP.


WordPress is only used on the blog, however I wanted to display my latest posts on my homepage, and figured the simplest way to do this would be to fetch the RSS Feed, Parse it and display it.


This worked great, but the whole process takes about 3 seconds, and with PHP it blocks the server from sending the rest of the page while it chugs along with its RSS Parsing feast.


So I implemented a caching system that saves the generated list items in a file.

Documentation on how to use this will be written later, the code is commented with PHPDoc so if you really want to check it out before I make the documentation, you should figure out how it works just by looking at it. :)

Checkout the index.php file for reference, a live version of the example is available on http://test.helgesverre.com/wppostcacher/

Thanks.