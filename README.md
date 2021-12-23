# MonokaiFree

A beautiful, modern, high quality, Monokai theme for Sublime Text. Enhanced syntax highlighting for PHP, HTML, CSS, Markdown, JavaScript, Ruby, Python, etc., and includes support for [GitGutter][], [SublimeLinter][], [NeoVintageous][], [PHPUnitKit][].

[![Continuous Integration](https://github.com/gerardroche/sublime-monokai-free/actions/workflows/ci.yml/badge.svg)](https://github.com/gerardroche/sublime-monokai-free/actions/workflows/ci.yml) [![Latest Version](https://img.shields.io/github/tag/gerardroche/sublime-monokai-free.svg?style=flat-square&label=version)](https://github.com/gerardroche/sublime-monokai-free/tags) [![GitHub stars](https://img.shields.io/github/stars/gerardroche/sublime-monokai-free.svg?style=flat-square)](https://github.com/gerardroche/sublime-monokai-free/stargazers) [![Downloads](https://img.shields.io/packagecontrol/dt/MonokaiFree.svg?style=flat-square)](https://packagecontrol.io/packages/MonokaiFree)

![Color palette](palette.png)

## Installation

### Package Control installation

The preferred method of installation is [Package Control](https://packagecontrol.io/packages/MonokaiFree).

`Ctrl/Command + Shift + P` to open the Command Palette
Select `Package Control: Install Package`
Search for `MonokaiFree`
Press `Enter`
Go to `Menu > Preferences > Color Scheme...` and select MonokaiFree.

### Manual installation

Close Sublime Text, then download or clone this repository to a directory named `MonokaiFree` in the Sublime Text Packages directory for your platform:

* Linux: `git clone https://github.com/gerardroche/sublime-monokai-free.git ~/.config/sublime-text-3/Packages/MonokaiFree`
* OSX: `git clone https://github.com/gerardroche/sublime-monokai-free.git ~/Library/Application\ Support/Sublime\ Text\ 3/Packages/MonokaiFree`
* Windows: `git clone https://github.com/gerardroche/sublime-monokai-free.git %APPDATA%\Sublime/ Text/ 3/Packages/MonokaiFree`

## Screenshots

> CSS

![CSS screenshot](screenshot-css.png)

> HTML

![HTML screenshot](screenshot-html.png)

> PHP

![PHP screenshot](screenshot-php.png)

> XML

![XML screenshot](screenshot-xml.png)

## Customise to taste

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

## CONTRIBUTING

### Tests

To run the tests install [ColorSchemeUnit][] (a framework for testing Sublime Text color schemes), and run the `ColorSchemeUnit: Test Suite` command via the Command Palette (`Ctrl+Shift+P`).

## LICENSE

Released under the [BSD 3-Clause License](LICENSE).

[ColorSchemeUnit]: https://github.com/gerardroche/sublime-color-scheme-unit
[GitGutter]: https://github.com/jisaacks/GitGutter
[NeoVintageous]: https://github.com/NeoVintageous/NeoVintageous
[PHPUnitKit]: https://github.com/gerardroche/sublime-phpunit
[SublimeLinter]: https://github.com/SublimeLinter/SublimeLinter3
