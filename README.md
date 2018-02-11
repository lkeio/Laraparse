# Laraparse

[![Build Status](https://travis-ci.org/lkeio/Laraparse.svg?branch=master)](https://travis-ci.org/lkeio/Laraparse)

[![StyleCI](https://styleci.io/repos/120118206/shield?branch=master)](https://styleci.io/repos/120118206)

This package is a wrapper around [erusev/parsedown](https://github.com/erusev/parsedown) for Laravel.
Parsedown is a Markdown syntax Parser.

## Version Compatibility

 Laravel  | Laraparse
:---------|:----------
 5.5.x    | 1.1.x
 5.6.x    | 1.1.x

## Installing

```
composer require "lkeio/laraparse:1.1.*"
```

## Usage

- On your Controller 

```

    public function index()
    {
     // Insert Here your Markdown or Read it from your DB
        $text = '# MarkDown Syntax';
        return view('index', compact('text'));
    }

```
- On your View 

```

@laraparse($text)

```

## Tests 

On the root Package directory run :

```
./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/LaraparseTests

```

## Versioning

I use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/lkeio/Laraparse/tags). 

## Authors

* **Larbi Kamal Elguerch** - *All projects* - [lkeio](https://github.com/lkeio)

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details

