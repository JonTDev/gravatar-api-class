# PHP Gravatar API Class
A Simple PHP Class that can easily be dropped into a larger set of tools.  Easy to use and gets the job done.  

## Getting Started
1. Create the class
2. Add the email
3. Add the default url or parameter
4. Add the class to a string.  Done
```
<?php
    include_once(__DIR__ . DIRECTORY_SEPARATOR . 'gravatar.php');
    $gravatar = new Gravatar();
    $gravatar->setEmail('jon@taylor-made.agency')
        ->setDefault('mp');
    ?>
    <img src="<?php echo $gravatar; ?>"/>
    // <img src="https://www.gravatar.com/avatar/5d7f9d2d812c493b603adf629c1bb0c6?d=mp"/>
```

### Prerequisites
PHP >= 5.2 - Prior to this toString magic method only worked with print and echo.

### Installing
Add the gravatar.php file to your library.

I.E. 
* index.php
* classes
    * gravatar.php
    * someOtherClasses.php
```
<?php // index.php
include_once(__DIR__ . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'gravatar.php');

$gravatar = new Gravatar();
$gravatar->setEmail('jon@taylor-made.agency')
    ->setDefault('https://www.google.com/someurl/to/link/a/picture/to.png', true);
$gravatarUrl = (string) $gravatar;
var_dump($gravatarUrl);
// string(140) "https://www.gravatar.com/avatar/5d7f9d2d812c493b603adf629c1bb0c6?d=https%3A%2F%2Fwww.google.com%2Fsomeurl%2Fto%2Flink%2Fa%2Fpicture%2Fto.png" 
```

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
