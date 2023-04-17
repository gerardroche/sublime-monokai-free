# MonokaiFree

<p>
    <a href="https://github.com/gerardroche/sublime-monokai-free/actions/workflows/ci.yml"><img alt="GitHub CI Status" src="https://github.com/gerardroche/sublime-monokai-free/actions/workflows/ci.yml/badge.svg?branch=master"></a>
    <a href="https://packagecontrol.io/packages/MonokaiFree"><img alt="Downloads" src="https://img.shields.io/packagecontrol/dt/MonokaiFree.svg"></a>
</p>

A beautiful, high quality, Monokai theme for Sublime Text. Enhanced syntax highlighting for PHP, HTML, CSS, JS, Ruby, Python, Markdown, and more.

![Color palette](palette.png)

## Installation

Install MonokaiFree via [Package Control](https://packagecontrol.io/packages/MonokaiFree).

## Screenshots

> CSS

![CSS screenshot](screenshot-css.png)

> HTML

![HTML screenshot](screenshot-html.png)

> PHP

![PHP screenshot](screenshot-php.png)

> XML

![XML screenshot](screenshot-xml.png)

## Setup

To custom any colors create a color scheme override named "MonokaiFree.sublime-color-scheme" in your Sublime Text User directory (**Menu > Preferences > Browse Packages**). An example override:

```json
{
    "globals": {
        "block_caret": "yellow",
        "caret": "yellow",
        "selection_corner_style": "square",
    },
    "rules":
    [
        {
            "scope": "comment, punctuation.definition.comment",
            "foreground": "#7e8e91"
        }
    ]
}
```

## Contributing

To run the tests install [ColorSchemeUnit][] (a framework for testing Sublime Text color schemes), and run the `ColorSchemeUnit: Test Suite` command via the Command Palette (`Ctrl+Shift+P`).

## License

Released under the [BSD 3-Clause License](LICENSE).

[ColorSchemeUnit]: https://github.com/gerardroche/sublime-color-scheme-unit
