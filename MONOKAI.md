# SPEC

&nbsp;| COLOR     | HEX       | R   | G   | B   | Example usage
-----:|:----------|:----------|:----|:----|:----|:-------------
1     | bg0       | `#272822` |  39 |  40 |  34 | Background.
2     | bg1       | `#3e3d32` |  62 |  61 |  50 | Rulers, invisibles.
3     | bg2       |           |     |     |     |
4     | bg3       |           |     |     |     |
5     | fg0       | `#f8f8f2` | 248 | 248 | 242 | Text
6     | fg1       | `#cfcfc2` | 207 | 207 | 194 | Text (soft)
7     | fg2       | `#75715e` | 117 | 113 |  94 | Comments, selections, gutter text.
8     | fg3       |           |     |     |     |
9     | yellow    | `#e6db74` | 230 | 219 | 116 | Strings, cursors.
10    | orange    | `#fd971f` | 253 | 151 |  31 | Language identifiers, function parameters.
11    | red       | `#f92672` | 249 |  38 | 114 | Control structures, modifiers, operators.
12    | magenta   | `#fd5ff0` | 253 |  95 | 240 |
13    | violet    | `#ae81ff` | 174 | 129 | 255 | Constants, numbers, booleans.
14    | blue      | `#66d9ef` | 102 | 217 | 239 |
15    | cyan      | `#a1efe4` | 161 | 239 | 228 |
16    | green     | `#a6e22e` | 166 | 226 |  46 | Class names, function names.

Sublime Text color scheme documentation: https://www.sublimetext.com/docs/3/color_schemes.html

Here is the table of % [opacity to hex](https://stackoverflow.com/a/28481374) values e.g. to specify red with 50% opacity use `#ff000080`:

- 100% — FF
-  95% — F2
-  90% — E6
-  85% — D9
-  80% — CC
-  75% — BF
-  70% — B3
-  65% — A6
-  60% — 99
-  55% — 8C
-  50% — 80
-  45% — 73
-  40% — 66
-  35% — 59
-  30% — 4D
-  25% — 40
-  20% — 33
-  15% — 26
-  10% — 1A
-   5% — 0D
-   0% — 00

## List of Packages with Enhanced Supported

- [LESS](https://packagecontrol.io/packages/LESS)
- [LSP](https://packagecontrol.io/packages/LSP)
- [Laravel Blade Highlighter](https://packagecontrol.io/packages/Laravel%20Blade%20Highlighter)
- [Sass](https://packagecontrol.io/packages/Sass)
- [Vue Syntax Highlight](https://packagecontrol.io/packages/Vue%20Syntax%20Highlight)

## Notes

- `inactiveSelectionForeground` doesn't work. See https://github.com/SublimeTextIssues/Core/issues/2118.
- `inactiveSelectionBorder` doesn't work. See https://github.com/SublimeTextIssues/Core/issues/2118.
- `brackets*` background doesn't work. See https://github.com/SublimeTextIssues/Core/issues/2123.
- `tags*` background doesn't work. See https://github.com/SublimeTextIssues/Core/issues/2123.
- LSP This fix is required, because we use use transparent red background color for sublimelinter gutter and region highlighting scopes (not the new diagnostic markup), and in LSP we don't want a red background, but the LSP scopes contain `sublimelinter.*` scopes.
