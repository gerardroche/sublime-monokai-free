<!-- COLOR SCHEME TEST "MonokaiFree/MonokaiFree.tmTheme" "Markdown" -->

# This is an <h1> tag
<!-- ^ fg=#e6db74 fs=bold build>=3127 -->

## This is an <h2> tag
#^ fg=#75715e fs=bold build>=3127
<!-- ^ fg=#e6db74 fs=bold build>=3127 -->

### This is an <h3> tag
# ^ fg=#75715e fs=bold build>=3127
<!-- ^ fg=#e6db74 fs=bold build>=3127 -->

#### This is an <h4> tag
# ^ fg=#75715e fs=bold build>=3127
<!-- ^ fg=#e6db74 fs=bold build>=3127 -->

##### This is an <h5> tag
# ^ fg=#75715e fs=bold build>=3127
<!--  ^ fg=#e6db74 fs=bold build>=3127 -->

###### This is an <h6> tag
# ^ fg=#75715e fs=bold build>=3127 -->
<!--   ^ fg=#e6db74 fs=bold build>=3127 -->

### X ###
<!--  ^ fg=#75715e fs=bold -->

# EMPHASIS

This is *italic text* and _so is this_.
<!-- ^^^ fg=#f8f8f2 fs= -->
<!--    ^ fg=#75715e fs=italic -->
<!--     ^^^^^^^^^^^ fg=#f8f8f2 fs=italic -->
<!--                ^ fg=#75715e fs=italic -->
<!--                 ^^^^^ fg=#f8f8f2 fs= -->
<!--                      ^ fg=#75715e fs=italic -->
<!--                       ^^^^^^^^^^ fg=#f8f8f2 fs=italic -->
<!--                                 ^ fg=#75715e fs=italic -->
<!--                                  ^ fg=#f8f8f2 fs= -->

This is **bold text** and __so is this__.
<!-- ^^^ fg=#f8f8f2 fs= -->
<!--    ^^ fg=#75715e fs=bold -->
<!--      ^^^^^^^^^ fg=#f8f8f2 fs=bold -->
<!--               ^^ fg=#75715e fs=bold -->
<!--                 ^^^^^ fg=#f8f8f2 fs= -->
<!--                      ^^ fg=#75715e fs=bold -->
<!--                        ^^^^^^^^^^ fg=#f8f8f2 fs=bold -->
<!--                                  ^^ fg=#75715e fs=bold -->
<!--                                    ^ fg=#f8f8f2 fs= -->

If you like *you **can** combine them*
<!-- ^^^^^^^ fg=#f8f8f2 fs= -->
<!--        ^ fg=#75715e fs=italic -->
<!--         ^^^^ fg=#f8f8f2 fs=italic -->
<!--             ^^ fg=#f8f8f2 fs=italic build>=4118 -->
<!--               ^^^ fg=#f8f8f2 fs=italic build>=4118 -->
<!--                  ^^ fg=#f8f8f2 fs=italic build>=4118 -->
<!--                    ^^^^^^^^^^^^^ fg=#f8f8f2 fs=italic -->
<!--                                 ^ fg=#75715e fs=italic -->

If you like **you *can* combine them**
<!-- ^^^^^^^ fg=#f8f8f2 fs= -->
<!--        ^^ fg=#75715e fs=bold -->
<!--          ^^^^ fg=#f8f8f2 fs=bold -->
<!--              ^ fg=#75715e fs=bold italic -->
<!--               ^^^ fg=#f8f8f2 fs=bold italic -->
<!--                  ^ fg=#75715e fs=bold italic -->
<!--                   ^^^^^^^^^^^^^ fg=#f8f8f2 fs=bold -->
<!--                                ^^ fg=#75715e fs=bold -->

*Abc [X](y)*
<!-- ^^^^^^ fs=italic -->

*Abc [X][1]*
<!-- ^^^^^^ fs=italic -->

**Ab [X](y)**
<!-- ^^^^^^ fs=bold -->

**Ab [X][1]**
<!-- ^^^^^^ fs=bold -->

# Images

.... ![Alt](url)
<!-- ^^ fg=#75715e fs= -->
<!--   ^^^ fg=#e6db74 fs= -->
<!--      ^^ fg=#75715e fs= -->
<!--        ^^^ fg=#66d9ef fs= -->
<!--           ^ fg=#75715e fs= -->

.... ![Alt][1]
<!-- ^^ fg=#75715e fs= -->
<!--   ^^^ fg=#e6db74 fs= -->
<!--      ^^ fg=#75715e fs= -->
<!--        ^ fg=#66d9ef fs= build>=4134 -->
<!--         ^ fg=#75715e fs= -->

[12345]: url
<!-- ^ fg=#a6e22e fs= build>=3150 -->
<!--  ^^ fg=#75715e fs= -->
<!--     ^^^ fg=#66d9ef fs= -->

# Links

https://github.com - automatic
<!-- ^^^^^^^^^^^^^ fg=#66d9ef fs= build>=3127 -->
<!--              ^^^^^^^^^^^^ fg=#f8f8f2 fs= -->

..... [Alt](url)
<!--  ^ fg=#75715e fs= -->
<!--   ^^^ fg=#e6db74 fs= -->
<!--      ^^ fg=#75715e fs= -->
<!--        ^^^ fg=#66d9ef fs= -->
<!--           ^ fg=#75715e fs= -->

.... [Alt][1]
<!-- ^ fg=#75715e fs= -->
<!--  ^^^ fg=#e6db74 fs= -->
<!--     ^^ fg=#75715e fs= -->
<!--       ^ fg=#66d9ef fs= build>=4134 -->
<!--        ^ fg=#75715e fs= -->

.... [Alt][]
<!-- ^ fg=#75715e fs= -->
<!--  ^^^ fg=#e6db74 fs= -->
<!--     ^^^ fg=#75715e fs= -->

[12345]: url
<!-- ^ fg=#a6e22e fs= build>=3150 -->
<!--  ^^ fg=#75715e fs= -->
<!--     ^^^ fg=#66d9ef fs= -->

# [X](y)
# ^ fg=#75715e fs=bold
#  ^ fg=#e6db74 fs=bold
#   ^^ fg=#75715e fs=bold
#     ^ fg=#66d9ef fs=bold
#      ^ fg=#75715e fs=bold

# [X][1]
# ^ fg=#75715e fs=bold
#  ^ fg=#e6db74 fs=bold
#   ^^ fg=#75715e fs=bold
#     ^ fg=#ae81ff fs=bold
#      ^ fg=#75715e fs=bold

## [X](y)
#^ fg=#75715e fs=bold
#  ^ fg=#75715e fs=bold
#   ^ fg=#e6db74 fs=bold
#    ^^ fg=#75715e fs=bold
#      ^ fg=#66d9ef fs=bold
#       ^ fg=#75715e fs=bold

### [X](y)
#^^ fg=#75715e fs=bold
#   ^ fg=#75715e fs=bold
#    ^ fg=#e6db74 fs=bold
#     ^^ fg=#75715e fs=bold
#       ^ fg=#66d9ef fs=bold
#        ^ fg=#75715e fs=bold

Firstname Lname <name@example.com>
<!-- ^^^^ fg=#f8f8f2 fs= -->
<!--      ^^^^^ fg=#f8f8f2 fs= -->
<!--            ^ fg=#75715e fs= -->
<!--             ^^^^^^^^^^^^^^^^ fg=#66d9ef fs= -->
<!--                             ^ fg=#75715e fs= -->

# Blockquotes

As Kanye West said:

  > We're living the future so
  > the present is our past.
# ^ fg=#75715e bg=#272822 fs=italic -->
<!-- ^^^^^^^^^^^^^^^^^^^^^^^ fg=#f8f8f2cc fs=italic -->

# Lists

Unordered

* Item 1
* Item 2
  * Item 2a
# ^ fg=#75715e fs= -->
#   ^ fg=#f8f8f2 fs= -->
  * Item 2b
# ^ fg=#75715e fs= -->
#   ^ fg=#f8f8f2 fs= -->

Ordered

1. Item 1
2. Item 2
3. Item 3
   * Item 3a
#  ^ fg=#75715e fs= -->
#    ^ fg=#f8f8f2 fs= -->
   * Item 3b
#  ^ fg=#75715e fs= -->
#    ^ fg=#f8f8f2 fs= -->

# Escapes

.... \*x\\y\.z
<!-- ^^ fg=#ae81ff fs= -->
<!--   ^ fg=#f8f8f2 fs= -->
<!--    ^^ fg=#ae81ff fs= -->
<!--      ^ fg=#f8f8f2 fs= -->
<!--       ^^ fg=#ae81ff fs= -->
<!--         ^ fg=#f8f8f2 fs= -->

# Entities

.... &nbsp; . &copy;
<!-- ^^^^^^ fg=#ae81ff fs= -->
<!--          ^^^^^^ fg=#ae81ff fs= -->

.... &#35;
<!-- ^^^^^ fg=#ae81ff fs= -->

.... &MadeUpEntity;
<!-- ^^^^^^^^^^^^^^ fg=#ae81ff fs= -->

# Inline code

I think you should use an `<addr>` element here instead.
<!--                  ^^^^ fg=#f8f8f2 bg=#272822 fs= -->
<!--                      ^ fg=#75715e bg=#272822 fs= -->
<!--                       ^^^^^^ fg=#fd971f bg=#272822 fs= -->
<!--                             ^ fg=#75715e bg=#272822 fs= -->
<!--                              ^^^ fg=#f8f8f2 bg=#272822 fs= -->

# Syntax highlighting

Here's an example of how you can use syntax highlighting with GitHub Flavored Markdown:

```javascript
#^^ fg=#75715e bg=#272822 fs= build>=3127 -->
#  ^^^^^^^^^^ fg=#ae81ff bg=#272822 fs= build>=3127
function x() {}
<!-- ^^^ fg=#66d9ef bg=#272822 fs=italic build>=3184 -->
```
#^^ fg=#75715e bg=#272822 fs= build>=3127 -->

You can also simply indent your code by four spaces:

    function x() {
    # ^^^^^^^^^^^^^ fg=#fd971f bg=#272822 fs= -->
    }
#^^^^ fg=#fd971f bg=#272822 fs= build>=3127 -->

Here's an example of Python code without syntax highlighting:

    def foo():
    # ^^^^^^^^ fg=#fd971f bg=#272822 fs= build>=3127 -->
      if not bar:
        return True

# Task Lists

- [x] list syntax required (any unordered or ordered list supported)
- [x] this is a complete item
- [ ] this is an incomplete item
- [x] <del>tags</del> support
  <!--^ fg=#75715e fs= -->
  <!-- ^^^ fg=#f92672 fs= build>=3127 -->
  <!--    ^ fg=#75715e fs= -->
  <!--     ^^^^ fg=#f8f8f2 fs= -->
  <!--         ^^ fg=#75715e fs= -->
  <!--           ^^^ fg=#f92672 fs= build>=3127 -->
  <!--              ^ fg=#75715e fs= -->
  <!--               ^^^^^^^^ fg=#f8f8f2 fs= -->
- [x] **formatting** *support*
  <!--^^ fg=#75715e fs=bold -->
  <!--  ^^^^^^^^^^ fg=#f8f8f2 fs=bold -->
  <!--            ^^ fg=#75715e fs=bold -->
  <!--              ^ fg=#f8f8f2 fs= -->
  <!--               ^ fg=#75715e fs=italic -->
  <!--                ^^^^^^^ fg=#f8f8f2 fs=italic -->
  <!--                       ^ fg=#75715e fs=italic -->
- [x] @mentions, #refs, [links]()
  <!-- ^^^^^^^^^^^^^^^^^ fg=#f8f8f2 fs= -->
  <!--                  ^ fg=#75715e fs= build>=3158 -->
  <!--                   ^^^^^ fg=#e6db74 fs= build>=3158 -->
  <!--                        ^^^ fg=#75715e fs= build>=3158 -->

If you include a task list in the first comment of an Issue, you will get a handy progress indicator in your issue list. It also works in Pull Requests!

# Tables

You can create tables by assembling a list of words and dividing them with hyphens - (for the first row), and then separating each column with a pipe |:

First Header | Second Header
------------ | -------------
Content from cell 1 | Content from cell 2
Content in the first column | Content in the second column

# Line breaks

***
#^^ fg=#75715e bg=#272822 fs=

---
#^^ fg=#75715e bg=#272822 fs=

___
#^^ fg=#75715e bg=#272822 fs=

# SHA references

Any reference to a commit’s SHA-1 hash will be automatically converted into a link to that commit on GitHub.

16c999e8c71134401a78d4d46435517b2271d6ac
mojombo@16c999e8c71134401a78d4d46435517b2271d6ac
mojombo/github-flavored-markdown@16c999e8c71134401a78d4d46435517b2271d6ac

# Issue references within a repository

Any number that refers to an Issue or Pull Request will be automatically converted into a link.

#1
mojombo#1
mojombo/github-flavored-markdown#1

# Username @mentions

Typing an @ symbol, followed by a username, will notify that person to come and view the comment. This is called an “@mention”, because you’re mentioning the individual. You can also @mention teams within an organization.
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ fg=#f8f8f2 fs= -->

# Automatic linking for URLs

Any URL (like http://www.github.com/) will be automatically converted into a clickable link.
<!-- ^^^^^^^^^ fg=#f8f8f2 fs= -->
<!--          ^^^^^^^^^^^^^^^^^^^^^^ fg=#66d9ef fs= build>=3127-->
<!--                                ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ fg=#f8f8f2 fs= build>=3142 -->

# Strikethrough

Any word wrapped with two tildes (like ~~this~~) will appear crossed out.
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ fg=#f8f8f2 fs= -->
<!--                                     ^^^^ fg=#f8f8f2 fs= build>=3157 -->
<!--                                           ^^^^^^^^^^^^ fg=#f8f8f2 fs= -->
<!--                                   ^^ fg=#75715e fs= build>=3157 -->
<!--                                         ^^ fg=#75715e fs= build>=3157 -->
