# Monokai Free

[![Continuous Integration](https://github.com/gerardroche/sublime-monokai-free/actions/workflows/ci.yml/badge.svg)](https://github.com/gerardroche/sublime-monokai-free/actions/workflows/ci.yml) [![Build status](https://ci.appveyor.com/api/projects/status/rbfi67f8aoamq322?svg=true)](https://ci.appveyor.com/project/gerardroche/sublime-monokai-free) [![Package Control](https://img.shields.io/packagecontrol/dt/MonokaiFree)](https://packagecontrol.io/packages/MonokaiFree)

An enhanced version of the Monokai color scheme for Sublime Text.

## Installation

Install [MonokaiFree](https://packagecontrol.io/packages/MonokaiFree) via Package Control.

## Enhanced support

- [NeoVintageous](https://packagecontrol.io/packages/NeoVintageous): Vim for Sublime Text.
- [PHPUnitKit](https://packagecontrol.io/packages/PHPUnitKit): PHPUnit test runner for Sublime Text.
- [SublimeLinter](https://packagecontrol.io/packages/SublimeLinter): The code linting framework for Sublime Text.

## Theme

Menu → Preferences → Select Theme → Adaptive

**Settings**

Menu → Preferences → Settings

```js
"monokaifree.theme": true,
"monokaifree.vcs_status_labels": true,
"monokaifree.vcs_status_badges": true,
```

## Font options

Don't like bold or italics?

Menu → Preferences → Settings

```js
"font_options": [
    "no_bold",
    "no_italic"
],
```

## Font

Try an alternative font like [Fira Code](https://github.com/tonsky/FiraCode).

```sh
sudo apt-get install fonts-firacode
```

Menu → Preferences → Settings

```js
"font_face": "Fira Code",
"font_options": [
    "subpixel_antialias"
],
```

## Customization

Menu → Preferences → Customize Color Scheme

```json
{
    "variables": {
        "bg0": "#292C3F",
    },
    "globals": {
        "caret": "yellow",
        "block_caret": "yellow",
        "block_caret_border": "yellow",
        "block_caret_corner_style": "square",
        "selection_corner_style": "square",
        "brackets_options": "foreground bold",
    },
    "rules": [

    ]
}
```

**Variables**

&nbsp;| COLOR     | HEX       | R   | G   | B   | Example usage
-----:|:----------|:----------|:----|:----|:----|:-------------
1     | bg0       | `#272822` |  39 |  40 |  34 | Background.
2     | bg1       | `#3e3d32` |  62 |  61 |  50 | Rulers, invisibles.
3     |           |           |     |     |     |
4     |           |           |     |     |     |
5     | fg0       | `#f8f8f2` | 248 | 248 | 242 | Text
6     | fg1       | `#cfcfc2` | 207 | 207 | 194 | Text (soft)
7     | fg2       | `#75715e` | 117 | 113 |  94 | Comments, selections, gutter text.
8     |           |           |     |     |     |
9     | yellow    | `#e6db74` | 230 | 219 | 116 | Strings, cursors.
10    | orange    | `#fd971f` | 253 | 151 |  31 | Language identifiers, function parameters.
11    | red       | `#f92672` | 249 |  38 | 114 | Control structures, modifiers, operators.
12    | magenta   | `#fd5ff0` | 253 |  95 | 240 | Errors, deprecations, notices.
13    | violet    | `#ae81ff` | 174 | 129 | 255 | Constants, numbers, booleans.
14    | blue      | `#66d9ef` | 102 | 217 | 239 | Built-in identifiers, declarations, functions.
15    | cyan      | `#a1efe4` | 161 | 239 | 228 |
16    | green     | `#a6e22e` | 166 | 226 |  46 | Class names, function names.

**Resources**

- [Sublime Text Color Schemes Documentation](https://www.sublimetext.com/docs/color_schemes.html#customization).

## Screenshots

> PHP

![PHP](monokai-php.webp)

> CSS

![CSS](monokai-css.webp)

> Javascript

![Javascript](monokai-javascript.webp)

## Contributing

Feel free to open GitHub Issues to report any problem or submit suggestions.  To run the tests install [ColorSchemeUnit](https://github.com/gerardroche/sublime-color-scheme-unit).

## License

Released under the [GPL-3.0-or-later License](LICENSE).
