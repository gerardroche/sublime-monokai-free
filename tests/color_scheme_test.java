// COLOR SCHEME TEST "MonokaiFree/MonokaiFree.sublime-color-scheme" "Java"

package hi;
// ^ fg=#f92672 fs=
//      ^^ fg=#a6e22e fs= build>=3157
//        ^ fg=#f8f8f2 fs=

import java.util.HashMap;
// ^ fg=#f92672 fs=
//     ^^^^ fg=#66d9ef fs= build>=4125
//         ^ fg=#f8f8f2 fs= build>=3157
//          ^^^^ fg=#66d9ef fs= build>=4125
//              ^ fg=#f8f8f2 fs= build>=3157
//               ^^^^^^^ fg=#a6e22e fs= build>=4125
//                      ^ fg=#f8f8f2 fs=
import javax.swing.*;
//     ^^^^^ fg=#66d9ef fs= build>=4125
//          ^ fg=#f8f8f2 fs= build>=3157
//           ^^^^^ fg=#66d9ef fs= build>=4125
//                ^ fg=#f8f8f2 fs= build>=3150
//                 ^ fg=#f92672 fs= build>=3157
//                  ^ fg=#f8f8f2 fs=

class ExtendsTest implements Foo {}
// ^ fg=#66d9ef fs=italic build>=3127
//    ^ fg=#a6e22e fs=
//                ^ fg=#f92672 fs=
//                           ^ fg=#a6e22e fs=italic
//                               ^^ fg=#f8f8f2 fs=

class Foo<A> extends Bar<? extends A> {}
// ^ fg=#66d9ef fs=italic build>=3127
//    ^^^ fg=#a6e22e fs=
//       ^ fg=#f8f8f2 fs=
//        ^ fg=#66d9ef fs=italic build>=3127
//         ^ fg=#f8f8f2 fs=
//           ^ fg=#f92672 fs=
//                   ^^^ fg=#a6e22e fs=italic
//                      ^ fg=#f8f8f2 fs= build>=3127
//                       ^ fg=#f92672 fs= build>=3127
//                         ^^^^^^^ fg=#f92672 fs= build>=3127
//                                 ^ fg=#66d9ef fs=italic build>=3127
//                                  ^ fg=#f8f8f2 fs=
//                                    ^^ fg=#f8f8f2 fs=

public class FibCalculator extends Fibonacci implements Calculator {
// ^ fg=#f92672 fs=
//     ^ fg=#66d9ef fs=italic build>=3127
//           ^ fg=#a6e22e fs=
//                         ^ fg=#f92672 fs=
//                                 ^ fg=#a6e22e fs=italic
//                                           ^ fg=#f92672 fs=
//                                                      ^ fg=#a6e22e fs=italic

    public static final int A_CONSTANT = 1;
    //                  ^ fg=#66d9ef fs=italic
    //                      ^ fg=#a6e22e fs=

    private static Map<Integer, Integer> memoized = new HashMap<Integer, Integer>();
    // ^ fg=#f92672 fs=
    //      ^ fg=#f92672 fs=
    //             ^^^ fg=#66d9ef fs=italic
    //                ^ fg=#f8f8f2 fs= build>=3127
    //                 ^^^^^^^ fg=#66d9ef fs=italic
    //                        ^ fg=#f8f8f2 fs= build>=3127
    //                          ^^^^^^^ fg=#66d9ef fs=italic
    //                                 ^ fg=#f8f8f2 fs= build>=3127
    //                                   ^ fg=#f8f8f2 fs=
    //                                            ^ fg=#f92672 fs=
    //                                              ^^^ fg=#f92672 fs=
    //                                                  ^^^^^^^ fg=#66d9ef fs=italic
    //                                                         ^ fg=#f8f8f2 fs= build>=3127
    //                                                          ^^^^^^^ fg=#66d9ef fs=italic
    //                                                                 ^ fg=#f8f8f2 fs= build>=3127
    //                                                                   ^^^^^^^ fg=#66d9ef fs=italic
    //                                                                          ^ fg=#f8f8f2 fs= build>=3127
    //                                                                           ^^^ fg=#f8f8f2 fs=

    public static void x(String... args) {}
    // ^ fg=#f92672 fs=
    //     ^ fg=#f92672 fs=
    //            ^^^^ fg=#66d9ef fs=italic
    //                 ^ fg=#a6e22e fs=
    //                  ^ fg=#f8f8f2 fs=
    //                   ^^^^^^ fg=#66d9ef fs=italic
    //                         ^^^ fg=#f92672 fs= build>=3127
    //                             ^^^^ fg=#fd971f fs=italic
    //                                 ^^^^ fg=#f8f8f2 fs=

    public static void main(String[] args) {
    // ^ fg=#f92672 fs=
    //     ^ fg=#f92672 fs=
    //            ^^^^ fg=#66d9ef fs=italic
    //                 ^^^^ fg=#a6e22e fs=
    //                     ^ fg=#f8f8f2 fs=
    //                      ^^^^^^ fg=#66d9ef fs=italic
    //                            ^^ fg=#f8f8f2 fs=
    //                               ^^^^ fg=#fd971f fs=italic
    //                                   ^ fg=#f8f8f2 fs=
    //                                     ^ fg=#f8f8f2 fs=
        System.out.println("Hello World!");
        // ^^^ fg=#66d9ef fs=italic build>=3150
        //    ^ fg=#f8f8f2 fs= build>=3127
        //     ^^^ fg=#f8f8f2 fs=
        //        ^ fg=#f8f8f2 fs= build>=3127
        //         ^^^^^^^ fg=#66d9ef fs= build>=3127
        //                ^ fg=#f8f8f2 fs= build>=3127
        //                 ^^^^^^^^^^^^^^ fg=#e6db74 fs=
        //                               ^^ fg=#f8f8f2 fs=

        memoized.put(1, 1);
        memoized.put(2, 1);
        // ^^^^^ fg=#f8f8f2 fs=
        //      ^ fg=#f8f8f2 fs= build>=3127
        //       ^^^ fg=#66d9ef fs= build>=3127
        //          ^ fg=#f8f8f2 fs=
        //           ^ fg=#ae81ff fs=
        //            ^ fg=#f8f8f2 fs=
        //              ^ fg=#ae81ff fs=
        //               ^^ fg=#f8f8f2 fs=
        System.out.println(fibonacci(12)); //Get the 12th Fibonacci number and print to console
        // ^^^ fg=#66d9ef fs=italic build>=3150
        //    ^ fg=#f8f8f2 fs= build>=3127
        //     ^^^ fg=#f8f8f2 fs=
        //        ^ fg=#f8f8f2 fs= build>=3127
        //         ^^^^^^^ fg=#66d9ef fs= build>=3127
        //                ^ fg=#f8f8f2 fs=
        //                 ^^^^^^^^^ fg=#66d9ef fs= build>=3127
        //                          ^ fg=#f8f8f2 fs=
        //                           ^^ fg=#ae81ff fs=
        //                             ^^^ fg=#f8f8f2 fs=
    }
//  ^ fg=#f8f8f2 fs=

    public static int fibonacci(int fibIndex) {
    //            ^^^ fg=#66d9ef fs=italic
    //                ^ fg=#a6e22e fs=
    //                          ^^^ fg=#66d9ef fs=italic
    //                              ^ fg=#fd971f fs=italic
        if (memoized.containsKey(fibIndex)) {
    //  ^ fg=#f92672 fs=
            return memoized.get(fibIndex);
            // ^ fg=#f92672 fs=
        } else {
        // ^ fg=#f92672 fs=
            int answer = fibonacci(fibIndex - 1) + fibonacci(fibIndex - 2);
        //  ^^^ fg=#66d9ef fs=italic
            //         ^ fg=#f92672 fs=
            //                              ^ fg=#f92672 fs=
            //                                   ^ fg=#f92672 fs=
            //                                                        ^ fg=#f92672 fs=
            memoized.put(fibIndex, answer);
            // ^^^^^ fg=#f8f8f2 fs=
            //      ^ fg=#f8f8f2 fs= build>=3127
            //       ^^^ fg=#66d9ef fs= build>=3127
            //          ^^^^^^^^^^^^^^^^^^^ fg=#f8f8f2 fs=

            return answer;
            // ^ fg=#f92672 fs=
            //     ^^^^^^^ fg=#f8f8f2 fs=
        }
    //  ^ fg=#f8f8f2 fs=
    }
//  ^ fg=#f8f8f2 fs=
}

public class Hello extends JFrame {
    public Hello() {
        super.setDefaultCloseOperation(WindowConstants.EXIT_ON_CLOSE);
        // ^ fg=#fd971f fs=italic
        //   ^ fg=#f8f8f2 fs= build>=3127
        //    ^ fg=#66d9ef fs= build>=3127
        //                            ^ fg=#f8f8f2 fs=
        //                             ^ fg=#66d9ef fs=italic build>=3150
        //                                            ^ fg=#f8f8f2 fs= build>=3127
        //                                             ^ fg=#ae81ff fs=
        //                                                          ^^ fg=#f8f8f2 fs=
        super.add(new JLabel("Hello, world!"));
        //            ^ fg=#66d9ef fs=italic
        super.setVisible(true);
        //               ^^^^ fg=#ae81ff fs=
    }
}
