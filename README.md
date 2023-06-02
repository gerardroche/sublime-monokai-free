# Monokai Free

[![Continuous Integration](https://github.com/gerardroche/sublime-monokai-free/actions/workflows/ci.yml/badge.svg)](https://github.com/gerardroche/sublime-monokai-free/actions/workflows/ci.yml) [![Build status](https://ci.appveyor.com/api/projects/status/rbfi67f8aoamq322?svg=true)](https://ci.appveyor.com/project/gerardroche/sublime-monokai-free) [![Package Control](https://img.shields.io/packagecontrol/dt/MonokaiFree)](https://packagecontrol.io/packages/MonokaiFree)

An enhanced version of the Monokai color scheme bundled with Sublime Text.

## Installation

Install [MonokaiFree](https://packagecontrol.io/packages/MonokaiFree) via Package Control.

## Screenshots

> PHP

![PHP](monokai-php.webp)

> CSS

![CSS](monokai-css.webp)

> Javascript

![Javascript](monokai-javascript.webp)

## Color Scheme Customization

> Color schemes based on the .sublime-color-scheme format are specified by filename only, not a package-based file path. This allows users to customize a color scheme by overriding variables or globals, and adding rules.
> &mdash; [Color Schemes Customizations](https://www.sublimetext.com/docs/color_schemes.html#customization)

For example, the following settings make:

- the cursor color a bright yellow
- the caret style square
- the selections style square
- the line highlight a tint of blue

**Menu → Preferences → Customize Color Scheme**

```json
{
    "variables": {},
    "globals": {
        "block_caret": "yellow",
        "block_caret_corner_radius": "cut",
        "block_caret_corner_style": "square",
        "caret": "yellow",
        "line_highlight": "#66d9ef44",
        "selection_border_width": "1",
        "selection_corner_style": "square"
    },
    "rules": []
}
```

## Contributing

Feel free to open GitHub Issues to report any problem or submit suggestions. To run the tests install [ColorSchemeUnit](https://github.com/gerardroche/sublime-color-scheme-unit).

## License

Released under the [GPL-3.0-or-later License](LICENSE).
