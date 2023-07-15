# SPEC

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
