COLOR SCHEME TEST "molokai/Monokai.tmTheme" "Markdown"
        // This test is testing
        // the whitespace before
        // the comment.
// ^ fg=#f8f8f2 bg=#272822 fs=

Headers

# This is an <h1> tag
// ^ fg=#fd971f fs=bold
## This is an <h2> tag
// ^ fg=#fd971f fs=bold
###### This is an <h6> tag
// ^ fg=#75715e fs=bold
//      ^ fg=#fd971f fs=bold

Emphasis

*This text will be italic*
// ^ fs=italic

_This will also be italic_
// ^ fs=italic

**This text will be bold**
// ^ fs=bold

__This will also be bold__
// ^ fs=bold

_You **can** combine them_

Lists

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

Images

![GitHub Logo](/images/logo.png)
//              ^ fg=#e6db74 fs=underline
Format: ![Alt Text](url)
//                  ^ fg=#e6db74 fs=underline

Links

http://github.com - automatic!
[GitHub](http://github.com)
//        ^ fg=#e6db74 fs=underline

Blockquotes

As Kanye West said:

   > We're living the future so
   > the present is our past.
// ^ fg=#75715e fs=italic
//   ^ fg=#75715e fs=italic

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
