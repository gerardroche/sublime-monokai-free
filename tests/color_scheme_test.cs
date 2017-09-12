// COLOR SCHEME TEST "MonokaiFree/MonokaiFree.tmTheme" "C#"

using System;
// ^ fg=#f92672 fs=
//   ^^^^^^^^ fg=#f8f8f2 fs=
using System.Windows.Forms;
// ^ fg=#f92672 fs=
//   ^^^^^^^^^^^^^^^^^^^^^^ fg=#f8f8f2 fs=

class Program
// ^ fg=#66d9ef fs=italic build>=3127
//    ^ fg=#a6e22e fs=
{
    const double PI = 3.14;
    // ^ fg=#f92672 fs=
    //    ^^^^^^ fg=#66d9ef fs=italic
    //           ^^ fg=#f8f8f2 fs=
    //              ^ fg=#f92672 fs=
    //                ^^^^ fg=#ae81ff fs=
    //                    ^ fg=#f8f8f2 fs=

    public int X;
    // ^ fg=#f92672 fs=
    //     ^^^ fg=#66d9ef fs=italic
    //         ^^ fg=#f8f8f2 fs=

    int x = 37;
    //^ fg=#66d9ef fs=italic
    //  ^ fg=#f8f8f2 fs=
    //    ^ fg=#f92672 fs=
    //      ^^ fg=#ae81ff fs=
    //        ^ fg=#f8f8f2 fs=

    int[] x(int y) {return x + y;}
    //^ fg=#66d9ef fs=italic
    // ^^ fg=#f8f8f2 fs=
    //    ^ fg=#a6e22e fs=
    //     ^ fg=#f8f8f2 fs=
    //      ^^^ fg=#66d9ef fs=italic
    //          ^ fg=#fd971f fs=italic
    //           ^ fg=#f8f8f2 fs=
    //             ^ fg=#f8f8f2 fs=
    //              ^^^^^^ fg=#f92672 fs=
    //                     ^ fg=#f8f8f2 fs=
    //                       ^ fg=#f92672 fs= build>=3127
    //                         ^^^ fg=#f8f8f2 fs=

    abcd () {
    // ^ fg=#a6e22e fs=
    }

    X (string x) : base () {
    // ^^^^^^ fg=#66d9ef fs=italic
    //        ^ fg=#fd971f fs=italic
        Console.WriteLine("ab");
        // ^^^^^ fg=#f8f8f2 fs=
        //      ^^^^^^^^^ fg=#66d9ef fs= build>=3127
        //               ^ fg=#f8f8f2 fs=
        //                ^^^^ fg=#e6db74 fs=
        //                    ^^ fg=#f8f8f2 fs=
    }

    void x([Usage("ab")] int x, int y)
    // ^ fg=#66d9ef fs=italic
    //   ^ fg=#a6e22e fs=
    //    ^^^^^^^^ fg=#f8f8f2 fs=
    //            ^^^^ fg=#e6db74 fs=
    //                ^^ fg=#f8f8f2 fs=
    //                   ^^^ fg=#66d9ef fs=italic
    //                       ^ fg=#fd971f fs=italic
    //                        ^ fg=#f8f8f2 fs=
    //                          ^^^ fg=#66d9ef fs=italic
    //                              ^ fg=#fd971f fs=italic
    //                               ^ fg=#f8f8f2 fs=

    static void Main(string[] x)
    // ^ fg=#f8f8f2 bg=#f92672 fs= build>=3127
    //     ^ fg=#66d9ef fs=italic
    //          ^ fg=#a6e22e fs=
    //              ^ fg=#f8f8f2 fs=
    //               ^^^^^^ fg=#66d9ef fs=italic
    //                     ^^ fg=#f8f8f2 fs= build>=3127
    //                        ^ fg=#fd971f fs=italic
    //                         ^ fg=#f8f8f2 fs=
    {
    }
}

string verbatim = @"ab "" cd";
// ^ fg=#66d9ef fs=italic
//     ^^^^^^^^ fg=#f8f8f2 fs=
//              ^ fg=#f92672 fs= build>=3127
//                ^^^^^ fg=#e6db74 fs=
//                     ^^ fg=#ae81ff fs=
//                       ^^^^ fg=#e6db74 fs=
//                           ^ fg=#f8f8f2 fs=

public class GenericList<T>
// ^ fg=#f92672 fs=
//     ^ fg=#66d9ef fs=italic build>=3127
//          ^ fg=#f8f8f2 fs=
//           ^ fg=#a6e22e fs=
//                      ^ fg=#f8f8f2 fs=
//                       ^ fg=#66d9ef fs=italic build>=3127
//                        ^ fg=#f8f8f2 fs=
{
    void Add(T i) { }
    // ^ fg=#66d9ef fs=italic
    //   ^^^ fg=#a6e22e fs=
    //      ^ fg=#f8f8f2 fs=
    //       ^ fg=#66d9ef fs=italic
    //         ^ fg=#fd971f fs=italic
    //          ^^^^^ fg=#f8f8f2 fs=
}

class InheritingSomething: IYourInterface {
// ^ fg=#66d9ef fs=italic build>=3127
//    ^^^^^^^^^^^^^^^^^^^ fg=#a6e22e fs=
//                       ^ fg=#f8f8f2 fs=
//                         ^^^^^^^^^^^^^^ fg=#a6e22e fs=italic build>=3127
//                                        ^ fg=#f8f8f2 fs=
}

class WithGeneric<T1, T2> where T1: IEnumerable<T2> {}
// ^ fg=#66d9ef fs=italic build>=3127
//   ^ fg=#f8f8f2 fs=
//    ^^^^^^^^^^^ fg=#a6e22e fs=
//               ^ fg=#f8f8f2 fs=
//                ^^ fg=#66d9ef fs=italic build>=3127
//                  ^ fg=#f8f8f2 fs=
//                    ^^ fg=#66d9ef fs=italic build>=3127
//                      ^ fg=#f8f8f2 fs=
//                                  ^^^^^^^^^^^ fg=#a6e22e fs=italic build>=3127
//                                             ^ fg=#f8f8f2 fs=
//                                              ^^ fg=#66d9ef fs=italic
//                                                ^^^^ fg=#f8f8f2 fs=
