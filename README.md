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
   git clone https://github.com/gerardroche/sublime-monokai-free.git MonokaiFree
   ```
4. Now, to activate the MonokaiFree color scheme, go to `Command Palette → UI: Select Color Scheme` and select "MonokaiFree" from the list of available color schemes.

## Activating the MonokaiFree Color Scheme

To enjoy the MonokaiFree color scheme in Sublime Text, follow these simple steps:

1. Go to `Command Palette` by pressing `Ctrl+Shift+P` (Windows/Linux) or `Cmd+Shift+P` (Mac).

2. In the Command Palette, type `UI: Select Color Scheme`.

3. A new list of available color schemes will appear. Scroll through the list and select one of the following variants:

   - MonokaiFree - The classic Monokai color scheme.
   - MonokaiFreeBlue - A variant with a blue color palette.
   - MonokaiFreeDark - A darker version of the classic scheme.
   - MonokaiYaruDark - A variant inspired by Ubuntu Gnome Yaru Dark.
   - MonokaiDracula - A variant with a Dracula-inspired color scheme.

Now you can immerse yourself in the coding experience with the MonokaiFree color scheme that best suits your preferences. Enjoy the enhanced visual appeal and readability while writing code in Sublime Text. Happy coding!

## Activating Themes in Sublime Text

To change the theme in Sublime Text, you can use the Command Palette. Follow these steps to activate the desired theme:

1. Press `Ctrl+Shift+P` (Windows/Linux) or `Cmd+Shift+P` (Mac) to open the Command Palette.

2. In the Command Palette, type `UI: Select Theme`.

3. A new list of available themes will appear. Scroll through the list and select one of the following themes:

   - Adaptive
   - Default
   - Default Dark

Now you can work in Sublime Text with your preferred theme, enjoying a visually appealing and customizable coding environment. Happy coding!

## Settings

Command Palette → Preferences: Settings

```json
{
    "monokaifree.theme": true,
    "monokaifree.vcs_status_labels": true,
    "monokaifree.vcs_status_badges": true
}
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

Command Palette → Preferences: Settings

```json
{
    "font_face": "Cascadia Code",
    "font_options": [
        "gray_antialias",
        "ss01", "ss02", "ss03", "ss04",
        "ss05", "ss06", "ss07", "ss08",
        "ss09", "ss10", "ss19", "ss20"
    ]
}
```

### Font Options

Command Palette → Preferences: Settings

```json
{
    "font_options": [
        "no_bold",
        "no_italic"
    ]
}
```

Valid options on all platforms are:

- "no_bold": Disables bold text
- "no_italic": Disables italic text

Antialiasing options:

- "no_antialias": Disables antialiasing
- "gray_antialias": Uses grayscale antialiasing instead of subpixel

Ligature options:

- "no_liga": Disables standard ligatures (OpenType liga feature)
- "no_clig": Disables contextual ligatures (OpenType clig feature)
- "no_calt": Disables contextual alternatives (OpenType calt feature)
- "dlig": Enables discretionary ligatures (OpenType dlig feature)
- "ss01": Enables OpenType stylistic set 1. Can enable sets 1 to 10 by changing the last two digits.

Windows-only options:

- "directwrite": (default) Use DirectWrite for font rendering
- "gdi": Use GDI for font rendering
- "dwrite_cleartype_classic": Only applicable to "directwrite" mode, should render fonts similar to traditional GDI
- "dwrite_cleartype_natural": Only applicable to "directwrite" mode, should render fonts similar to ClearType "natural quality" GDI
- "subpixel_antialias": Force ClearType antialiasing when disabled at system level

Mac-only options:

- "no_round": Don't round glyph widths for monospace fonts when "font_size" is small.

### File Icons

Consider using [FileIcons](https://packagecontrol.io/packages/FileIcons) to incorporate color icons into your sidebar. If you prefer greyscale icons, they are also available [here](https://packagecontrol.io/packages/FileIcons%20Mono). These icons are compatible with both the Default and Adaptive themes.

![FileIcons](monokai-fileicons.webp)

### Streamlined Status Bar

For a minimalist status bar, consider the following steps:

1. Open the Command Palette by pressing `Ctrl+Shift+P` (Windows/Linux) or `Cmd+Shift+P` (macOS).
2. Choose "Preferences: Settings".
3. Add the following JSON configuration:
   ```json
   {
       "show_indentation": false,
       "show_line_column": "compact",
       "show_sidebar_button": false,
       "show_syntax": false
   }
   ```

This setup simplifies your status bar by removing indentation information, displaying line and column numbers in a compact format, hiding the sidebar button, and omitting syntax information.

### File tabs

For minimalist file tabs, consider the following steps:

1. Open the Command Palette by pressing `Ctrl+Shift+P` (Windows/Linux) or `Cmd+Shift+P` (macOS).
2. Choose "Preferences: Settings".
3. Add the following JSON configuration:
   ```json
   {
       "file_tab_style": "square",
       "mouse_wheel_switches_tabs": false,
       "show_tab_close_buttons": false
   }
   ```

### Inactive Sheets

If you'd like to disable sheet dimming for inactive sheets and make changing input focus less distracting, you can follow these steps:

1. Open the Command Palette by pressing `Ctrl+Shift+P` (Windows/Linux) or `Cmd+Shift+P` (macOS).
2. Choose "Preferences: Settings".
3. Add the following JSON configuration:
   ```json
   {
       "inactive_sheet_dimming": false
   }
   ```

This configuration will prevent inactive sheets from being dimmed and enhance the visibility of the input focus.

### Disabling Animations

If you prefer a more streamlined interface without animations, you can disable them by following these steps:

1. Open the Command Palette by pressing `Ctrl+Shift+P` (Windows/Linux) or `Cmd+Shift+P` (macOS).
2. Select "Preferences: Settings".
3. Add the following JSON configuration:
   ```json
   {
       "animation_enabled": false
   }
   ```

This configuration will turn off animations, providing you with a more static and efficient visual experience.

### Customizing Caret Appearance

You can personalize the appearance of the caret by customizing its corner style. Follow these steps to achieve it:

1. Open the Command Palette by pressing `Ctrl+Shift+P` (Windows/Linux) or `Cmd+Shift+P` (macOS).
2. Type and select "UI: Customize Color Scheme".
3. Integrate the following JSON configuration to customize the caret's corner style:
   ```json
   {
       "globals": {
           "block_caret_corner_style": "round"
       }
   }
   ```

By implementing this configuration, you'll modify the corner style of the caret, adding a round touch to its appearance. This small adjustment can contribute to enhancing your overall editing experience.

### Customizing Selection Appearance

To personalize the appearance of the selection, specifically its corner style, follow these steps:

1. Open the Command Palette by pressing `Ctrl+Shift+P` (Windows/Linux) or `Cmd+Shift+P` (macOS).
2. Type and select "UI: Customize Color Scheme".
3. Integrate the following JSON configuration to customize the corner style of the selection:
   ```json
   {
       "globals": {
           "selection_corner_style": "square"
       }
   }
   ```

By applying this configuration, you'll alter the corner style of the selection, giving it a square shape. This customization can contribute to a distinctive and visually appealing selection appearance during your editing tasks.

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
| 3     | bg2       | `#43443b` |     |     |     | Line highlight, selections
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

**Functional variables**

|           | Reference | Description
| :-------- | :-------- | :----------
| caret     | fg0       | Carets, gutter foreground highlight
| selection | bg2       | Selections, highlights

**Variants**

Variants inherit from the base and functional variables.

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

1. Open the Command Palette by pressing `Ctrl+Shift+P` (Windows/Linux) or `Cmd+Shift+P` (macOS).
2. Type and select "UI: Customize Color Scheme".
3. Integrate the following JSON configuration:
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

1. Open the Command Palette by pressing `Ctrl+Shift+P` (Windows/Linux) or `Cmd+Shift+P` (macOS).
2. Type and select "UI: Customize Color Scheme".
3. Integrate the following JSON configuration:
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
