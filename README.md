# Laraparse

This package is a wrapper around [erusev/parsedown](https://github.com/erusev/parsedown) for Laravel.
Parsedown is a Markdown syntax Parser.

## Prerequisites
* Laravael 5.5

## Installing

```
composer require "lkeio/laraparse:1.*"
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

## Versioning

I use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/lkeio/Laraparse/tags). 

## Authors

* **Larbi Kamal Elguerch** - *All projects* - [lkeio](https://github.com/lkeio)

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details

