// COLOR SCHEME TEST "MonokaiFree/MonokaiFree.tmTheme" "JavaScript"

        // This indented comment is to the preceding whitespace.
// ^ fg=#f8f8f2 bg=#272822 fs=

    // x
//  ^^^^ fg=#75715e fs=
    /* x */
//  ^^^^^^^ fg=#75715e fs=
    /** x */
//  ^^^^^^^^ fg=#75715e fs=
    /*
//  ^^ fg=#75715e fs=
        x
//      ^ fg=#75715e fs=
    */
//  ^^ fg=#75715e fs=
    /**
     * x
     */
//   ^^ fg=#75715e fs=

function $x(block, cls) {
// ^ fg=#66d9ef fs=italic
//       ^^ fg=#a6e22e fs=
//         ^ fg=#f8f8f2 fs=
//          ^^^^^ fg=#fd971f fs=italic
//               ^ fg=#f8f8f2 fs=
//                 ^^^ fg=#fd971f fs=italic
//                    ^ fg=#f8f8f2 fs=
//                      ^ fg=#f8f8f2 fs=

    var x = 'ab';
    //^ fg=#66d9ef fs=italic
    //  ^ fg=#f8f8f2 fs=
    //    ^ fg=#f92672 fs=
    //      ^^^^ fg=#e6db74 fs=
    //          ^ fg=#f8f8f2 fs=

    try {
    //^ fg=#f92672 fs=

        if (cls.search(/\bno\-highlight\b/) != -1)
    //  ^ fg=#f92672 fs=
        //      ^ fg=#66d9ef fs=
        //             ^ fg=#e6db74 fs=
        //              ^^ fg=#f92672 fs=
        //                ^^ fg=#e6db74 fs=
        //                  ^^ fg=#ae81ff fs=
        //                    ^^^^^^^^^ fg=#e6db74 fs=
        //                             ^^ fg=#f92672 fs=
        //                               ^ fg=#e6db74 fs=
        //                                  ^^ fg=#f92672 fs=
        //                                     ^ fg=#f92672 fs=
        //                                      ^ fg=#ae81ff fs=

        return process(block, true, 0x0F) +
        // ^ fg=#f92672 fs=
        //     ^ fg=#66d9ef fs=
        //                    ^^^^ fg=#ae81ff fs=
        //                          ^^^^ fg=#ae81ff fs=
        //                                ^ fg=#f92672 fs=
            `class="${cls}"`;
        //  ^^^^^^^^ fg=#e6db74 fs=
        //          ^^ fg=#f8f8f2 fs= build>=3127
        //            ^^^ fg=#f8f8f2 fs=
        //               ^ fg=#f8f8f2 fs= build>=3127
        //                ^^ fg=#e6db74 fs=
        //                  ^ fg=#f8f8f2 fs=

    } catch (e) {
    // ^ fg=#f92672 fs=

    }

    for (var i = 0 / 2; i < classes.length; i++) {
    //^ fg=#f92672 fs=
    //    ^ fg=#66d9ef fs=italic
    //         ^ fg=#f92672 fs=
    //           ^ fg=#ae81ff fs=
    //             ^ fg=#f92672 fs=
    //               ^ fg=#ae81ff fs=
    //                    ^ fg=#f92672 fs=
    //                                       ^^ fg=#f92672 fs=

    if (checkCondition(classes[i]) === undefined)
//  ^ fg=#f92672 fs=
    //  ^ fg=#66d9ef fs=
    //                             ^^^ fg=#f92672 fs=
    //                                 ^ fg=#ae81ff fs=
        console.log('undefined');
        // ^ fg=#66d9ef fs=italic
        //      ^ fg=#66d9ef fs=
        //          ^^ fg=#e6db74 fs=
    }
}

export $initHighlight;
// ^ fg=#f92672 fs=
//     ^^ fg=#f8f8f2 fs=

class Foo extends React.Component {
// ^ fg=#66d9ef fs=italic
//    ^ fg=#a6e22e fs=
//        ^ fg=#f92672 fs=
//                ^^^^^ fg=#66d9ef fs=italic build>=3157
//                     ^ fg=#f8f8f2 fs=
//                      ^^^^^^^^^ fg=#a6e22e fs=italic
//                                ^ fg=#f8f8f2 fs=

    constructor()
    // ^ fg=#a6e22e fs=
    //         ^^ fg=#f8f8f2 fs=
        {}
    //  ^^ fg=#f8f8f2 fs=

    [foo.bar](arg) {
//  ^ fg=#f8f8f2 fs=
//   ^^^^^^^ fg=#f8f8f2 fs= build>=3157
//          ^^ fg=#f8f8f2 fs=
//            ^^^ fg=#fd971f fs=italic
//               ^^^ fg=#f8f8f2 fs=
    }
//  ^ fg=#f8f8f2 fs=

    get x() {
    //^ fg=#66d9ef fs=italic
    //  ^ fg=#a6e22e fs=
    //   ^^ fg=#f8f8f2 fs=
        return this._foo;
        // ^ fg=#f92672 fs=
        //     ^^^^ fg=#fd971f fs=italic
        //         ^^^^^^ fg=#f8f8f2 fs=
    }

    static x(y) {}
    // ^ fg=#f92672 fs= build>=3156
    //     ^ fg=#a6e22e fs=
    //      ^ fg=#f8f8f2 fs=
    //       ^ fg=#fd971f fs=italic
    //        ^ fg=#f8f8f2 fs=
    //          ^^ fg=#f8f8f2 fs=

    set (v) { return x; }
    //^ fg=#a6e22e fs=
    //  ^ fg=#f8f8f2 fs=
    //   ^ fg=#fd971f fs=italic
    //    ^ fg=#f8f8f2 fs=
    //      ^ fg=#f8f8f2 fs=
    //        ^ fg=#f92672 fs=
    //               ^^ fg=#f8f8f2 fs=
    //                  ^ fg=#f8f8f2 fs=
}
