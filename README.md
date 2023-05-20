# MonokaiFree

<p>
    <a href="https://github.com/gerardroche/sublime-monokai-free/actions/workflows/ci.yml"><img alt="GitHub CI Status" src="https://github.com/gerardroche/sublime-monokai-free/actions/workflows/ci.yml/badge.svg?branch=master"></a>
    <a href="https://packagecontrol.io/packages/MonokaiFree"><img alt="Downloads" src="https://img.shields.io/packagecontrol/dt/MonokaiFree.svg"></a>
</p>

A beautiful, high quality, Monokai color scheme for Sublime Text. Enhanced syntax highlighting for serious developers. MonokaiFree is an improvement on the default Monokai color scheme in Sublime Text.

## Installation

Install MonokaiFree via [Package Control](https://packagecontrol.io/packages/MonokaiFree).

## Screenshots

> PHP

![PHP](monokai-php.webp)

> CSS

![CSS](monokai-css.webp)

> Javascript

![Javascript](monokai-javascript.webp)

## Color Scheme Customization

> Color schemes based on the .sublime-color-scheme format are specified by filename only, not a package-based file path. This allows users to customize a color scheme by overriding variables or globals, and adding rules.

For example, to customise the MonokaiFree color scheme, create a file named `Packages/User/MonokaiFree.sublime-color-scheme` or select **Menu &gt; Preferences &gt; Customize Color Scheme**. The following settings will change the cursor color to be a bright yellow, squares the cursor and selections, and makes the line highlight a blue tint:

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

See [Sublime Text Color Schemes Customizations](https://www.sublimetext.com/docs/color_schemes.html#customization).

## Contributing

Feel free to open GitHub Issues to report any problem or submit suggestions. To run the tests install [ColorSchemeUnit](https://github.com/gerardroche/sublime-color-scheme-unit) (a framework for testing Sublime Text colour schemes), and run the ColorSchemeUnit: Test Suite command via the Command Palette.
