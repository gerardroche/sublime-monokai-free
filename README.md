# Enhanced Monokai Color Scheme for Sublime Text

[![Continuous Integration](https://github.com/gerardroche/sublime-monokai-free/actions/workflows/ci.yml/badge.svg)](https://github.com/gerardroche/sublime-monokai-free/actions/workflows/ci.yml) [![Build status](https://ci.appveyor.com/api/projects/status/rbfi67f8aoamq322?svg=true)](https://ci.appveyor.com/project/gerardroche/sublime-monokai-free) [![Package Control](https://img.shields.io/packagecontrol/dt/MonokaiFree)](https://packagecontrol.io/packages/MonokaiFree)

The Enhanced Monokai color scheme for Sublime Text is a modification and improvement of the popular Monokai color scheme, designed to provide a more vibrant and visually appealing coding experience. It retains the essence of the original Monokai color palette while enhancing certain elements for better readability and highlighting.

**If you updated from v1 to v2, you may need to reset MonokaiFree as you color scheme e.g. Menu → Preferences → Select Color Scheme → MonokaiFree. See [issue #7](https://github.com/gerardroche/sublime-monokai-free/issues/7).**

![CSS](monokai-css.webp)

## Features

- Enhanced syntax highlighting: The Enhanced Monokai color scheme uses carefully selected colors for syntax elements, making code stand out and easily distinguishable.

- Improved contrast: The color contrast has been optimized to ensure better visibility and reduce eye strain during long coding sessions.

- Fine-tuned color choices: The color selections have been adjusted to strike a balance between aesthetic appeal and functional usage, resulting in a more harmonious and pleasant coding environment.

- Support for multiple languages: The Enhanced Monokai color scheme is suitable for various programming languages and markup languages, providing consistent and cohesive syntax highlighting.

## Installation

**Method 1: Using Package Control**

1. Open Sublime Text.
2. Press `Ctrl+Shift+P` (Windows/Linux) or `Cmd+Shift+P` (macOS) to open the Command Palette.
3. Type "Package Control: Install Package" and press `Enter`.
4. In the input field, type "MonokaiFree" and select it from the list of available packages.
5. Now, to activate the MonokaiFree color scheme, go to `Command Palette → UI: Select Color Scheme` and select "MonokaiFree" from the list of available color schemes.

**Method 2: Manual Installation**

1. Visit the [MonokaiFree GitHub repository](https://github.com/gerardroche/sublime-monokai-free).
2. Click on the "Code" button and select "Download ZIP."
3. Extract the downloaded ZIP file.
4. Open Sublime Text and go to `Preferences -> Browse Packages...` to open the Packages folder.
5. Copy the "MonokaiFree" folder from the extracted ZIP and paste it into the Packages folder.
6. Now, to activate the MonokaiFree color scheme, go to `Command Palette → UI: Select Color Scheme` and select "MonokaiFree" from the list of available color schemes.

**Method 3: Manual Git Repository Installation**

1. Open a terminal or command prompt.
2. Navigate to the Sublime Text Packages directory:
    - On Windows: `%APPDATA%\Sublime Text\Packages`
    - On macOS: `~/Library/Application Support/Sublime Text/Packages`
    - On Linux: `~/.config/sublime-text/Packages`
3. Clone the plugin repository directly into the Packages directory using Git:
   ```
   git clone https://github.com/gerardroche/sublime-monokai-free.git
   ```
4. Now, to activate the MonokaiFree color scheme, go to `Command Palette → UI: Select Color Scheme` and select "MonokaiFree" from the list of available color schemes.

## Activating the MonokaiFree Color Scheme

To enjoy the MonokaiFree color scheme in Sublime Text, follow these simple steps:

1. Open Sublime Text.

2. Go to `Command Palette` by pressing `Ctrl+Shift+P` (Windows/Linux) or `Cmd+Shift+P` (Mac).

3. In the Command Palette, type `UI: Select Color Scheme` and select the option from the list that appears.

4. A new list of available color schemes will appear. Scroll through the list and select one of the following variants of MonokaiFree:

   - MonokaiFree
   - MonokaiFreeBlue
   - MonokaiFreeDark

5. The selected MonokaiFree color scheme will be applied instantly, giving your coding environment a fresh and stylish look.

Now you can immerse yourself in the coding experience with the MonokaiFree color scheme that best suits your preferences. Enjoy the enhanced visual appeal and readability while writing code in Sublime Text. Happy coding!

## Activating Themes in Sublime Text

To change the theme in Sublime Text, you can use the Command Palette. Follow these steps to activate the desired theme:

1. Open Sublime Text.

2. Press `Ctrl+Shift+P` (Windows/Linux) or `Cmd+Shift+P` (Mac) to open the Command Palette.

3. In the Command Palette, type `UI: Select Theme` and select the option from the list that appears.

4. A new list of available themes will appear. Scroll through the list and select one of the following themes:

   - `Adaptive`: Use the command `UI: Select Theme → Adaptive` to activate the Adaptive theme.
   - `Default`: Use the command `UI: Select Theme → Default` to activate the Default theme.
   - `Default Dark`: Use the command `UI: Select Theme → Default Dark` to activate the Default Dark theme.

5. The selected theme will be applied instantly, giving your Sublime Text interface a fresh look and feel.

Now you can work in Sublime Text with your preferred theme, enjoying a visually appealing and customizable coding environment. Happy coding!

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

### Caret

Command Palette → UI: Customize Color Scheme

```json
{
    "globals": {
        "block_caret_corner_style": "round",
    }
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

The MonokaiFree color scheme is an open-source project, and contributions are welcome. If you have suggestions for improvements or encounter any issues, please feel free to submit a pull request or open an issue on the official repository.

## Enjoy Coding with MonokaiFree

With the MonokaiFree color scheme, you can elevate your coding experience in Sublime Text, making it more enjoyable and visually appealing. Embrace the vibrant and enhanced color palette to boost productivity and immerse yourself in the world of coding. Happy coding!

## License

Released under the [GPL-3.0-or-later License](LICENSE).
