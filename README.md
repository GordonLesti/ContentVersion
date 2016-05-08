# ContentVersion

[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-coverall]][link-coveralls]

Magento 2 content under version control.

## Install

* Add the repository to the repositories section of your composer.json file
```
 "repositories": [
    {
        "type": "vcs",
        "url": "git@github.com:GordonLesti/ContentVersion.git"
    }
 ],
```
* Require the module & install
```
 composer require lesti/module-content-version:dev-master
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email info@gordonlesti.com instead of using the issue tracker.

## Credits

- [Gordon Lesti][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-license]: https://img.shields.io/github/license/GordonLesti/ContentVersion.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/GordonLesti/ContentVersion/master.svg?style=flat-square
[ico-coverall]: https://img.shields.io/coveralls/GordonLesti/ContentVersion.svg?style=flat-square

[link-travis]: https://travis-ci.org/GordonLesti/ContentVersion
[link-coveralls]: https://coveralls.io/github/GordonLesti/ContentVersion
[link-author]: https://gordonlesti.com/
[link-contributors]: ../../contributors
