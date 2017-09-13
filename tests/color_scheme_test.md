<!-- COLOR SCHEME TEST "MonokaiFree/MonokaiFree.tmTheme" "Markdown" -->
        <!-- This indented comment is to the preceding whitespace. -->
<!-- ^ fg=#f8f8f2 bg=#272822 fs= -->

# This is an <h1> tag
<!-- ^ fg=#a6e22e fs=bold build>=3127 -->

## This is an <h2> tag
<!-- ^ fg=#a6e22e fs=bold build>=3127 -->

### This is an <h3> tag
<!-- ^ fg=#a6e22e fs=bold build>=3127 -->

#### This is an <h4> tag
<!-- ^ fg=#a6e22e fs=bold build>=3127 -->

##### This is an <h5> tag
<!--  ^ fg=#a6e22e fs=bold build>=3127 -->

###### This is an <h6> tag
<!-- ^ fg=#75715e fs=bold build>=3127 -->
<!--   ^ fg=#a6e22e fs=bold build>=3127 -->

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
<!--             ^^ fg=#75715e fs=italic bold -->
<!--               ^^^ fg=#f8f8f2 fs=italic bold -->
<!--                  ^^ fg=#75715e fs=italic bold -->
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

# Lists

Unordered

* Item 1
* Item 2
  * Item 2a
  * Item 2b

Ordered

1. Item 1
2. Item 2
3. Item 3
   * Item 3a
   * Item 3b

# Images

.... ![Alt](url)
<!-- ^^ fg=#f8f8f2 fs= -->
<!--   ^^^ fg=#e6db74 fs= -->
<!--      ^^ fg=#f8f8f2 fs= -->
<!--        ^^^ fg=#66d9ef fs=underline -->
<!--           ^ fg=#f8f8f2 fs= -->

Format: ![Alt](url)
<!-- ^^^^^ fg=#f8f8f2 fs= -->
<!--      ^^^ fg=#e6db74 fs= -->
<!--         ^^ fg=#f8f8f2 fs= -->
<!--           ^^^ fg=#66d9ef fs=underline -->
<!--              ^ fg=#f8f8f2 fs= -->

# Links

.... http://github.com - automatic
<!-- ^^^^^^^^^^^^^^^^^ fg=#66d9ef fs=underline build>=3127 -->
<!--                  ^^^^^^^^^^^^ fg=#f8f8f2 fs= -->

..... [Alt](url)
<!--  ^ fg=#f8f8f2 fs= -->
<!--   ^^^ fg=#e6db74 fs= -->
<!--      ^^ fg=#f8f8f2 fs= -->
<!--        ^^^ fg=#66d9ef fs=underline -->
<!--           ^ fg=#f8f8f2 fs= -->

# Blockquotes

As Kanye West said:

  > We're living the future so
  > the present is our past.
# ^ fg=#75715e bg=#75715e fs=italic -->
<!-- ^^^^^^^^^^^^^^^^^^^^^^^ fg=#f8f8f2 fs=italic -->

# Escapes

.... \*x\\y\.z
<!-- ^^ fg=#ae81ff fs= -->
<!--   ^ fg=#f8f8f2 fs= -->
<!--    ^^ fg=#ae81ff fs= -->
<!--      ^ fg=#f8f8f2 fs= -->
<!--       ^^ fg=#ae81ff fs= -->
<!--         ^ fg=#f8f8f2 fs= -->

# Inline code

I think you should use an `<addr>` element here instead.
<!--                  ^^^^ fg=#f8f8f2 fs= -->
<!--                      ^ fg=#75715e fs= -->
<!--                       ^^^^^^ fg=#f8f8f2 fs= -->
<!--                             ^ fg=#75715e fs= -->
<!--                              ^^^ fg=#f8f8f2 fs= -->

# Syntax highlighting

Here's an example of how you can use syntax highlighting with GitHub Flavored Markdown:

```javascript
#^^ fg=#f8f8f2 bg=#3e3d32 fs= build>=3127 -->
#  ^^^^^^^^^^ fg=#ae81ff bg=#3e3d32 fs= build>=3127
function fancyAlert(arg) {
<!-- ^^^^^^^^^^^^^^^^^^^^^ fg=#f8f8f2 bg=#3e3d32 fs= build>=3127 -->
    if(arg) {
        $.facebox({div:'#foo'})
    }
}
```
#^^ fg=#f8f8f2 bg=#3e3d32 fs= build>=3127 -->

You can also simply indent your code by four spaces:

    function fancyAlert(arg) {
    <!-- ^^^^^^^^^^^^^^^^^^^^^ fg=#f8f8f2 bg=#3e3d32 fs= -->
        if(arg) {
          $.facebox({div:'#foo'})
        }
    }
<!--^^^ fg=#f8f8f2 bg=#3e3d32 fs= -->

Here's an example of Python code without syntax highlighting:

    def foo():
      if not bar:
        return True

# Task Lists

- [x] list syntax required (any unordered or ordered list supported)
- [x] this is a complete item
- [ ] this is an incomplete item
- [x] <del>tags</del> support
  <!--^ fg=#f8f8f2 fs= -->
  <!-- ^^^ fg=#f92672 fs= build>=3127 -->
  <!--    ^^^^^^^ fg=#f8f8f2 fs= -->
  <!--           ^^^ fg=#f92672 fs= build>=3127 -->
  <!--              ^^^^^^^^^ fg=#f8f8f2 fs= -->
- [x] **formatting** support
  <!--^^ fg=#75715e fs=bold -->
  <!--  ^^^^^^^^^^ fg=#f8f8f2 fs=bold -->
  <!--            ^^ fg=#75715e fs=bold -->
  <!--              ^^^^^^^^ fg=#f8f8f2 fs= -->
- [x] @mentions, #refs, [links]()
  <!-- ^^^^^^^^^^^^^^^^^^ fg=#f8f8f2 fs= -->
  <!--                   ^^^^^^^^ fg=#f8f8f2 fs= build>=3127 -->

If you include a task list in the first comment of an Issue, you will get a handy progress indicator in your issue list. It also works in Pull Requests!

# Tables

You can create tables by assembling a list of words and dividing them with hyphens - (for the first row), and then separating each column with a pipe |:

First Header | Second Header
------------ | -------------
Content from cell 1 | Content from cell 2
Content in the first column | Content in the second column

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
<!--          ^^^^^^^^^^^^^^^^^^^^^^ fg=#66d9ef fs=underline build>=3127-->
<!--                                ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ fg=#f8f8f2 fs= -->

# Strikethrough

Any word wrapped with two tildes (like ~~this~~) will appear crossed out.
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ fg=#f8f8f2 fs= -->
