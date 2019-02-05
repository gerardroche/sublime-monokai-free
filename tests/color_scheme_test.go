// COLOR SCHEME TEST "MonokaiFree/MonokaiFree.tmTheme" "Go"

package examples
// ^ fg=#f92672 fs=
//      ^ fg=#f8f8f2 fs=

import (
// ^ fg=#f92672 fs=
//     ^ fg=#f8f8f2 fs=
    "fmt"
//  ^^^^^ fg=#e6db74 fs=
    )
//  ^ fg=#f8f8f2 fs=

import "ab"
// ^ fg=#f92672 fs=
//     ^^^^ fg=#e6db74 fs=

var valid int = 0
//^ fg=#66d9ef fs=italic
//  ^ fg=#f8f8f2 fs=
//        ^^^ fg=#66d9ef fs=italic
//            ^ fg=#f92672 fs=
//              ^ fg=#ae81ff fs=

var var1, var2, var3
//  ^^^^^ fg=#f8f8f2 fs=
//        ^^^^^ fg=#f8f8f2 fs=
//              ^^^^ fg=#f8f8f2 fs=

var1 := 1
//   ^^ fg=#f92672 fs=
//      ^ fg=#ae81ff fs=

var1, var2 := imported.Vals
// ^^ fg=#f8f8f2 fs=
//    ^^^^ fg=#f8f8f2 fs=
//         ^^ fg=#f92672 fs=
//            ^^^^^^^^^^^^^^ fg=#f8f8f2 fs=

type myStruct struct {
// ^ fg=#66d9ef fs=italic
//   ^ fg=#a6e22e fs=
//            ^ fg=#66d9ef fs=italic
//                   ^ fg=#f8f8f2 fs=
    FirstFunc   func(arg string)
    // ^ fg=#f8f8f2 fs=
    //          ^^^^ fg=#66d9ef fs=italic
    //              ^ fg=#f8f8f2 fs=
    //               ^^^ fg=#fd971f fs=italic
    //                   ^^^^^^ fg=#66d9ef fs=italic
    //                         ^ fg=#f8f8f2 fs=

    SecondFunc  func(arg interface{})
    // ^ fg=#f8f8f2 fs=
    //          ^^^^ fg=#66d9ef fs=italic
    //              ^ fg=#f8f8f2 fs=
    //               ^^^ fg=#fd971f fs=italic
    //                   ^^^^^^^^^ fg=#66d9ef fs=italic
    //                            ^^^ fg=#f8f8f2 fs=
}

const (
// ^ fg=#66d9ef fs=italic
//    ^ fg=#f8f8f2 fs=
    graveAccentString = `hi %s and %[1]s`
    //  ^ fg=#ae81ff fs= build>=3177
    //                ^ fg=#f92672 fs=
    //                  ^^^^ fg=#e6db74 fs=
    //                      ^^ fg=#ae81ff fs=
    //                        ^^^^^ fg=#e6db74 fs=
    //                             ^^^^^ fg=#ae81ff fs= build>=3189
    //                                  ^ fg=#e6db74 fs=
    normalString = "hi %q and %[1]s"
    // ^ fg=#ae81ff fs= build>=3177
    //           ^ fg=#f92672 fs=
    //             ^^^^ fg=#e6db74 fs=
    //                 ^^ fg=#ae81ff fs=
    //                   ^^^^^ fg=#e6db74 fs=
    //                        ^^^^^ fg=#ae81ff fs= build>=3189
    //                             ^ fg=#e6db74 fs=
    dynamicFieldWidths = "abc %[1]*.[2]*f %*.*f"
    // ^ fg=#ae81ff fs= build>=3177
    //                 ^ fg=#f92672 fs=
    //                   ^^^^ fg=#e6db74 fs=
    //                        ^^^^^^^^^^^ fg=#e6db74 fs= build>=3177
    //                                   ^ fg=#e6db74 fs=
    //                                    ^^^^^ fg=#e6db74 fs= build>=3177
    //                                         ^ fg=#e6db74 fs=
)

func () {
// ^ fg=#66d9ef fs=italic
//  ^^^^^ fg=#f8f8f2 fs=
    Label:
//  ^^^^^ fg=#f8f8f2 fs= build>=3177
//       ^ fg=#f8f8f2 fs=
}
