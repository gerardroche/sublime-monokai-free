# Changelog

## 2.9.0 - Unreleased

### Changed

- Tailwind CSS: `@apply` directive is now red and blue, previously all red
- Vue: Attribute directives are now green, previously they were blue
- Vue: Template tag directive names are now green, previously they were orange
- Vue: Template tags are now fg0 and red, the same as other tags, previously they were dull red
- CSS: Suffixes like the number "px" suffix are now violet, the same color as the number, previously blue

### Fixed

- CSS: function argument punctuation should be fg0 - previously violet

## 2.8.1 - 2023-10-20

### Fixed

- Fix wildcard constants should be red (build 4157)

## 2.8.0 - 2023-10-06

### Added

- Add `guide` variable

### Changed

- Remove border from LSP popups

## 2.7.1 - 2023-08-15

- Fix `"monokaifree.vcs_status_badges": false` crowds file name spacing

## 2.7.0 - 2023-08-13

### Added

- Enhanced markdown rendering
- Improved selection behaviour
- Enhanced caret appearance
- Introducing new `caret` variable
- Introducing new `bg2` variable
- Introducing new `selection` variable

### Changed

- Selections now use `bg2` (previously `fg2`)
- Block caret corner style changed to square (previously round)
- Carets are now displayed in `fg0` (previously yellow)

## 2.6.0 - 2023-08-10

### Added

* New variant: Monokai - Dracula
* New variant: Monokai - Yaru Dark

## 2.5.0 - 2023-08-07

### Added

* New variant: Monokai - Dark

### Changed

* Markdown: Bullets are now violet

## 2.4.0 - 2023-07-31

### Changed

* "bracket_contents_foreground": `var(yellow)` → `var(fg1)`
* "active_guide": `color(var(yellow) alpha(0.25))` → `var(fg1)`
* "stack_guide": `color(var(fg0) alpha(0.06))` → `color(var(fg1) alpha(0.5))`
* "guide": `color(var(fg2) alpha(0.06))` → `color(var(fg1) alpha(0.2))`
* "line_highlight": `color(var(fg0) alpha(0.082))` → `color(var(fg0) alpha(0.06))`

## 2.3.0 - 2023-07-22

### Added

- Keywords like class, trait, functions, are now red (PHP)
- Extended classes and interfaces are now underlined (PHP)
- Enhanced support for PHPUnitKit (plugin)

## 2.2.1 - 2023-07-21

- Fix PHPUnitKit support issues (plugin)
- Fix `popup` style SublimeLinter has too much padding (plugin)
- Fix add missing `bg1` variable

## 2.2.0 - 2023-07-18

### Added

* New variant: Monokai - Blue
* Default Dark enhanced theme
* Default enhanced theme

### Changed

* Themes are now enabled by default

### Fixed

* Use theme sidebar background for vcs as contrast background
* Leave theme tree row highlight as default

## 2.1.0 - 2023-07-17

### Added

* Adaptive enhanced theme

### Changed

* Revert "Change modified lines to orange instead of yellow"
* Bracket options bold glow

## 2.0.4 - 2023-07-07

* Fixed: Class namespaces should be white and not italic (php)

## 2.0.3 - 2023-07-07

* Fixed: Accessor namespace should use fg0 (php)

## 2.0.2 - 2023-06-19

* Fixed: Inactive Selection Border yellow(80%) → fg2(80%) (`yellow80` → `fg280`)

## 2.0.1 - 2023-06-17

* Fixed: Revert Brackets Foreground yellow → orange

## 2.0.0 - 2023-06-16

### Changed

* Block Caret yellow underline with contrast (`#ffff00` → `#e6db74`)
* Brackets Foreground yellow → orange (`#e6db74` → `#fd971f`)
* Fold Markers yellow (default → `#e6db74`)
* Gutter Highlight Foreground fg1 (`#d8d8d2` → `#cfcfc2`)
* Improve JSON key-value
* Inactive Selection Background bg0 → bg0(80%) (`#272822` → `bg080`)
* Inactive Selection Border yellow(80%) (`???` → `yellow80`)
* Inactive Selection fg2 → fg2(80%) (`#75715e` → `fg280`)
* Line Diff Added (Gutter) green (`greenish` → `#a6e22e`)
* Line Diff Deleted (Gutter) red (`redish` → `#f92672`)
* Line Diff Modified (Gutter) orange (`yellowish` → `#fd971f`)
* Misspellings red (`#ff0000` → `#f92672`)
* Rulers fg(80%) → fg2 (`fg280` → `#75715e`)
* Selection Border fg2 (`#575446` → `#75715e`)
* Tags Foreground yellow(50%) → yellow (`yellow50` → `#e6db74`)
* Tags Options underline ( → underline)
* `--bluish` blue (`#66d9ef` → `#66d9ef`)
* `--cyanish` cyan (`#66d9ef` → `#a1efe4`) \*
* `--greenish` green (`#a6e22e` → `#a6e22e`)
* `--orangish` orange (`#fd971f` → `#fd971f`)
* `--pinkish` magenta (`#fd5ff0` → `#fd5ff0`)
* `--purplish` violet (`#ae81ff` → `#ae81ff`)
* `--redish` red (`#f92672` → `#f92672`)
* `--yellowish` yellow (`#e6db74` → `#e6db74`)
* block Caret yellow border with contrast (`#ffff007f` → `#e6db74`)
* block Caret yellow with contrast (`#ffff00` → `#e6db74`)

### Removed

* Support for tmTheme color scheme. Only Sublime Text versions >= 3.2 will be updated to MonokaiFree ^2.0, others will stay on MonokaiFree ^1.0.
