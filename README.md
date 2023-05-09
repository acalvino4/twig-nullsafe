# Twig Nullsafe operator

The nullsafe (also called "optional chaining") operator exists in PHP 8 and many other programming language, but not twig. The aim of this package was to bring it's convenience to twig as well. See [discussion](https://github.com/twigphp/Twig/issues/3260).

![License](https://img.shields.io/github/license/acalvino4/twig-nullsafe)
![Build Status](https://img.shields.io/github/actions/workflow/status/acalvino4/nullsafe/qa.yml)

![Phpstan Level](https://img.shields.io/badge/PHPStan-level%208-brightgreen.svg)
![Easy Coding Standard](https://img.shields.io/badge/Easy%20Coding%20Standard-%20enabled-brightgreen.svg)

> **Info**
> By building and testing this POC, I came to understand the existing behavior and abilities of Twig better, and decided that this functionality is not actually that valuable relative to what's possible already. Hence, I will not be developing this any more unless convinced otherwise. Read my reasoning [here](https://github.com/twigphp/Twig/issues/3260#issuecomment-1540765585).
>
> There are also probably a lot of edge cases that this doesn't handle quite right, so while it is not recommended for production, perhaps it will inspire a more robust implementation.

## Usage

Load this extension as appropriate for your framework. Then

```twig
{# my_template.twig #}
Some content
{{ a?.b }} {# outputs a.b if a is defined, nothing otherwise #}
More content
```
