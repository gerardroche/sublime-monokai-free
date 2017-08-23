// COLOR SCHEME TEST "molokai/Monokai.tmTheme" "JavaScript"
        // This test is testing
        // the whitespace before
        // the comment.
// ^ fg=#f8f8f2 bg=#272822 fs=

    // comment
//  ^^ fg=#75715e fs=
//     ^ fg=#75715e fs=

    /* comment */
//  ^^ fg=#75715e fs=
//     ^ fg=#75715e fs=
//             ^^ fg=#75715e fs=

    /** comment */
//  ^^^ fg=#75715e fs=
//      ^ fg=#75715e fs=
//              ^^ fg=#75715e fs=

    /*
//  ^^ fg=#75715e fs=

        comment
//      ^ fg=#75715e fs=

    */
//  ^^ fg=#75715e fs=

    /**
     * comment
     */
//   ^^ fg=#75715e fs=

function $initHighlight(block, cls) {
// ^ fg=#66d9ef fs=italic
//       ^^ fg=#a6e22e fs=

    var name = 'str';
    //^ fg=#66d9ef fs=italic
    //  ^ fg=#f8f8f2 fs=
    //       ^ fg=#f92672 fs=
    //         ^^ fg=#e6db74 fs=
    //              ^ fg=#f8f8f2 fs=

    try {
//  ^ fg=#f92672 fs=

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
        //          ^^^^^^ fg=#f8f8f2 fs=
        //                ^^ fg=#e6db74 fs=

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
