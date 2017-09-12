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

# Bold and italic

This is *italic* and so is _this_.
<!-- ^^^ fg=#f8f8f2 fs= -->
<!--    ^ fg=#75715e fs=italic -->
<!--     ^^^^^^ fg=#f8f8f2 fs=italic -->
<!--           ^ fg=#75715e fs=italic -->
<!--            ^^^^^^^^^^^ fg=#f8f8f2 fs= -->
<!--                       ^ fg=#75715e fs=italic -->
<!--                        ^^^^ fg=#f8f8f2 fs=italic -->
<!--                            ^ fg=#75715e fs=italic -->
<!--                             ^ fg=#f8f8f2 fs= -->

This is **bold** and so is __this__.
<!-- ^^^ fg=#f8f8f2 fs= -->
<!--    ^^ fg=#75715e fs=bold -->
<!--      ^^^^ fg=#f8f8f2 fs=bold -->
<!--          ^^ fg=#75715e fs=bold -->
<!--            ^^^^^^^^^^^ fg=#f8f8f2 fs= -->
<!--                       ^^ fg=#75715e fs=bold -->
<!--                         ^^^^ fg=#f8f8f2 fs=bold -->
<!--                             ^^ fg=#75715e fs=bold -->
<!--                               ^ fg=#f8f8f2 fs= -->

_You **can** combine them_
<!-- ^^ fg=#75715e fs=bold -->
<!--   ^^^ fg=#f8f8f2 fs=bold -->
<!--      ^^ fg=#75715e fs=bold -->
<!--        ^^^^^^^^^^^^^ fg=#f8f8f2 fs=italic -->
<!--                     ^ fg=#75715e fs=italic -->

# Unordered list

* Item 1
* Item 2
  * Item 2a
  * Item 2b

# Ordered list

1. Item 1
2. Item 2
3. Item 3
   * Item 3a
   * Item 3b

# Images

![GitHub Logo](/images/logo.png)
<!--             ^ fg=#e6db74 fs=underline -->

Format: ![Alt Text](url)
<!--                 ^ fg=#e6db74 fs=underline -->

# Links

http://github.com - automatic!
[GitHub](http://github.com)
<!--       ^ fg=#e6db74 fs=underline -->

# Blockquotes

As Kanye West said:

   > We're living the future so
   > the present is our past.
<!--^ fg=#75715e fs=italic -->
<!--  ^ fg=#75715e fs=italic -->

Inline code

I think you should use an
`<addr>` element here instead.

Syntax highlighting

Here's an example of how you can use syntax highlighting with GitHub Flavored Markdown:

```javascript
function fancyAlert(arg) {
  if(arg) {
    $.facebox({div:'#foo'})
  }
}
```

You can also simply indent your code by four spaces:

    function fancyAlert(arg) {
      if(arg) {
        $.facebox({div:'#foo'})
      }
    }

Here's an example of Python code without syntax highlighting:

def foo():
    if not bar:
        return True

Task Lists

- [x] @mentions, #refs, [links](), **formatting**, and <del>tags</del> supported
- [x] list syntax required (any unordered or ordered list supported)
- [x] this is a complete item
- [ ] this is an incomplete item

If you include a task list in the first comment of an Issue, you will get a handy progress indicator in your issue list. It also works in Pull Requests!
