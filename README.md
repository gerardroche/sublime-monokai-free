# Monokai Free

[![Continuous Integration](https://github.com/gerardroche/sublime-monokai-free/actions/workflows/ci.yml/badge.svg)](https://github.com/gerardroche/sublime-monokai-free/actions/workflows/ci.yml) [![Build status](https://ci.appveyor.com/api/projects/status/rbfi67f8aoamq322?svg=true)](https://ci.appveyor.com/project/gerardroche/sublime-monokai-free) [![Package Control](https://img.shields.io/packagecontrol/dt/MonokaiFree)](https://packagecontrol.io/packages/MonokaiFree)

An enhanced version of the Monokai color scheme for Sublime Text.

## Installation

Install [MonokaiFree](https://packagecontrol.io/packages/MonokaiFree) via Package Control.

## Screenshots

> PHP

![PHP](monokai-php.webp)

> CSS

![CSS](monokai-css.webp)

> Javascript

![Javascript](monokai-javascript.webp)

## Customization

Try it with the Adaptive theme for a more immersive experience.

Menu → Preferences → Select Theme → Adaptive

Override some global settings, for example, the following settings make:

- the caret yellow
- the block caret and selections style square
- the line highlight blue

Menu → Preferences → Customize Color Scheme

```json
{
    "variables": {},
    "globals": {
        "caret": "yellow",
        "block_caret": "yellow",
        "line_highlight": "#66d9ef22",
        "block_caret_corner_style": "square",
        "selection_corner_style": "square"
    },
    "rules": []
}
```

> Color schemes based on the .sublime-color-scheme format are specified by filename only, not a package-based file path. This allows users to customize a color scheme by overriding variables or globals, and adding rules.
>
> &mdash; [Color Schemes Customizations](https://www.sublimetext.com/docs/color_schemes.html#customization)

## Contributing

Feel free to open GitHub Issues to report any problem or submit suggestions.

To run the tests install [ColorSchemeUnit](https://github.com/gerardroche/sublime-color-scheme-unit).

## License

Released under the [GPL-3.0-or-later License](LICENSE).
