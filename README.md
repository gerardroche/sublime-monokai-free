# Monokai Free

[![Continuous Integration](https://github.com/gerardroche/sublime-monokai-free/actions/workflows/ci.yml/badge.svg)](https://github.com/gerardroche/sublime-monokai-free/actions/workflows/ci.yml) [![Build status](https://ci.appveyor.com/api/projects/status/rbfi67f8aoamq322?svg=true)](https://ci.appveyor.com/project/gerardroche/sublime-monokai-free) [![Package Control](https://img.shields.io/packagecontrol/dt/MonokaiFree)](https://packagecontrol.io/packages/MonokaiFree)

An enhanced version of the Monokai colour scheme for Sublime Text.

**If you updated from v1 to v2, you may need to reset MonokaiFree as you color scheme e.g. Menu → Preferences → Select Color Scheme → MonokaiFree. See [issue #7](https://github.com/gerardroche/sublime-monokai-free/issues/7).**

![CSS](monokai-css.webp)

## Installation

**Using Package Control**

1. Open Sublime Text.
2. Press `Ctrl+Shift+P` (Windows/Linux) or `Cmd+Shift+P` (macOS) to open the Command Palette.
3. Type "Package Control: Install Package" and press `Enter`.
4. In the input field, type "MonokaiFree" and select it from the list of available packages.

## Activate Scheme

`Command Palette → UI: Select Color Scheme → MonokaiFree`

`Command Palette → UI: Select Color Scheme → MonokaiFreeBlue`

`Command Palette → UI: Select Color Scheme → MonokaiFreeDark`

## Activate Theme

`Command Palette → UI: Select Theme → Adaptive`

`Command Palette → UI: Select Theme → Default`

`Command Palette → UI: Select Theme → Default Dark`

## Settings

Menu → Preferences → Settings

```json
{
    "monokaifree.theme": true,
    "monokaifree.vcs_status_labels": true,
    "monokaifree.vcs_status_badges": true
}
```

### Font Options

Menu → Preferences → Settings

```json
{
    "font_options": [
        "no_bold",
        "no_italic"
    ]
}
```

```
// Valid options on all platforms are:
//  - "no_bold": Disables bold text
//  - "no_italic": Disables italic text
// Antialiasing options:
//  - "no_antialias": Disables antialiasing
//  - "gray_antialias": Uses grayscale antialiasing instead of subpixel
// Ligature options:
//  - "no_liga": Disables standard ligatures (OpenType liga feature)
//  - "no_clig": Disables contextual ligatures (OpenType clig feature)
//  - "no_calt": Disables contextual alternatives (OpenType calt feature)
//  - "dlig": Enables discretionary ligatures (OpenType dlig feature)
//  - "ss01": Enables OpenType stylistic set 1. Can enable sets 1 to 10
//        by changing the last two digits.
// Windows-only options:
//  - "directwrite": (default) Use DirectWrite for font rendering
//  - "gdi": Use GDI for font rendering
//  - "dwrite_cleartype_classic": Only applicable to "directwrite" mode,
//        should render fonts similar to traditional GDI
//  - "dwrite_cleartype_natural": Only applicable to "directwrite" mode,
//        should render fonts similar to ClearType "natural quality" GDI
//  - "subpixel_antialias": Force ClearType antialiasing when disabled
//        at system level
// Mac-only options:
//  - "no_round": Don't round glyph widths for monospace fonts when
//        "font_size" is small.
```

### Font

Try an alternative font.

| Font             | Repository                                                          | Description                                             |
|:---------------- |:------------------------------------------------------------------- |:------------------------------------------------------- |
| Fira Code        | [GitHub](https://github.com/tonsky/FiraCode)                        | Monospaced font with programming ligatures              |
| Cascadia Code    | [GitHub](https://github.com/microsoft/cascadia-code)                | Monospaced font designed for coding in Windows Terminal |
| Source Code Pro  | [GitHub](https://github.com/adobe-fonts/source-code-pro)            | Monospaced font aimed at coders and text editors        |
| Inconsolata      | [GitHub](https://github.com/google/fonts/tree/main/ofl/inconsolata) | Monospaced font for code listings and terminal use |
| Hack             | [GitHub](https://github.com/source-foundry/Hack)                    | Open-source monospaced font for developers              |
| JetBrains Mono   | [GitHub](https://github.com/JetBrains/JetBrainsMono)                | Typeface designed for coding, legible, and elegant      |
| Monoid           | [GitHub](https://github.com/larsenwork/monoid)                      | Unique coding font known for consistent shapes          |
| Hasklig          | [GitHub](https://github.com/i-tu/Hasklig)                           | Unique coding font known for consistent shapes

Menu → Preferences → Settings

```json
{
    "font_face": "Cascadia Code",
    "font_options": [
        "gray_antialias",
        "ss01",
        "ss02",
        "ss03",
        "ss04",
        "ss05",
        "ss06",
        "ss07",
        "ss08",
        "ss09",
        "ss10",
        "ss19",
        "ss20"
    ]
}
```

### File Icons

Try [FileIcons](https://packagecontrol.io/packages/FileIcons) to add sidebar color icons. [Also available in greyscale](https://packagecontrol.io/packages/FileIcons%20Mono). Supports both the Default and Adaptive themes.

![FileIcons](monokai-fileicons.webp)

### Compact status bar

Try a minimalist status bar.

Menu → Preferences → Settings

```json
{
    "show_indentation": false,
    "show_line_column": "compact",
    "show_sidebar_button": false,
    "show_syntax": false
}
```

### File tabs

Try a minimalist square-style file tabs.

Menu → Preferences → Settings

```json
{
    "file_tab_style": "square",
    "mouse_wheel_switches_tabs": false,
    "show_tab_close_buttons": false
}
```

### Inactive sheets

Try disabling sheet dimming.

Menu → Preferences → Settings

```json
{
    "inactive_sheet_dimming": false
}
```

### Animations

Try disabling animations.

Menu → Preferences → Settings

```json
{
    "animation_enabled": false
}
```

## Customizations

Make the colour scheme your own with your own customizations.

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
        "brackets_options": "foreground bold glow",
    },
    "rules": []
}
```

**Base variables**

|       | COLOR     | HEX       | R   | G   | B   | Example usage
| -----:|:----------|:----------|:----|:----|:----|:-------------
| 1     | bg0       | `#272822` |  39 |  40 |  34 | Background
| 2     | bg1       | `#3e3d32` |  62 |  61 |  50 | Rulers, invisibles
| 3     |           |           |     |     |     |
| 4     |           |           |     |     |     |
| 5     | fg0       | `#f8f8f2` | 248 | 248 | 242 | Text
| 6     | fg1       | `#cfcfc2` | 207 | 207 | 194 | Text (soft)
| 7     | fg2       | `#75715e` | 117 | 113 |  94 | Comments, selections, gutter text
| 8     |           |           |     |     |     |
| 9     | yellow    | `#e6db74` | 230 | 219 | 116 | Strings, cursors
| 10    | orange    | `#fd971f` | 253 | 151 |  31 | Language identifiers, function parameters
| 11    | red       | `#f92672` | 249 |  38 | 114 | Control structures, modifiers, operators
| 12    | magenta   | `#fd5ff0` | 253 |  95 | 240 | Errors, deprecations, notices
| 13    | violet    | `#ae81ff` | 174 | 129 | 255 | Constants, numbers, booleans
| 14    | blue      | `#66d9ef` | 102 | 217 | 239 | Built-in identifiers, declarations, functions
| 15    | cyan      | `#a1efe4` | 161 | 239 | 228 |
| 16    | green     | `#a6e22e` | 166 | 226 |  46 | Class names, function names

**Blue variant variables**

*Inherits from the base variables.*

|       | COLOR     | HEX       | R   | G   | B   | Example usage
| -----:|:----------|:----------|:----|:----|:----|:-------------
| 1     | bg0       | `#292C3F` |  41 |  44 |  63 | Background

**Example:** Customise Indent Guides

Menu → Preferences → Customize Color Scheme

```json
{
    "variables": {},
    "globals": {
        "active_guide": "var(green)",
        "guide": "var(blue)",
        "stack_guide": "var(fg2)",
    },
    "rules": []
}
```

**Example:** Customise Caret

Menu → Preferences → Customize Color Scheme

```json
{
    "variables": {},
    "globals": {
        "caret": "yellow",
        "block_caret": "yellow",
        "block_caret_border": "yellow",
    },
    "rules": []
}
```

**Example:** Customise Background

Menu → Preferences → Customize Color Scheme

```json
{
    "variables": {
        "bg0": "#292C3F",
    },
    "globals": {},
    "rules": []
}
```

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
