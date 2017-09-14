<?php // COLOR SCHEME TEST "MonokaiFree/MonokaiFree.tmTheme" "PHP"

        // This indented comment is to the preceding whitespace.
// ^ fg=#f8f8f2 bg=#272822 fs=

declare(encoding='UTF-8');
// ^ fg=#f92672 fs=
//     ^ fg=#f8f8f2 fs=
//      ^^^^^^^^ fg=#ae81ff fs=
//              ^ fg=#f92672 fs=
//               ^^^^^^^ fg=#e6db74 fs=
//                      ^^ fg=#f8f8f2 fs=

namespace X;
// ^ fg=#f92672 fs=
//        ^ fg=#a6e22e fs=
//         ^ fg=#f8f8f2 fs=

namespace X\Y\Z;
// ^ fg=#f92672 fs=
//        ^^^^^ fg=#a6e22e fs=
//             ^ fg=#f8f8f2 fs=

use A;
//^ fg=#f92672 fs=
// ^ fg=#f8f8f2 fs=
//  ^ fg=#66d9ef fs=italic
//   ^ fg=#f8f8f2 fs=

use A\B\C;
//^ fg=#f92672 fs=
//  ^^^^ fg=#f8f8f2 fs=
//      ^ fg=#66d9ef fs=italic
//       ^ fg=#f8f8f2 fs=

use A\B\C as D;
//^ fg=#f92672 fs=
//  ^^^^ fg=#f8f8f2 fs=
//      ^ fg=#66d9ef fs=italic
//        ^^ fg=#f92672 fs=
//           ^ fg=#a6e22e fs=
//            ^ fg=#f8f8f2 fs=

use function a;
//^ fg=#f92672 fs=
//  ^^^^^^^^ fg=#66d9ef fs=italic
//           ^ fg=#66d9ef fs=
//            ^ fg=#f8f8f2 fs=

use function a\b\c;
//^ fg=#f92672 fs=
//  ^^^^^^^^ fg=#66d9ef fs=italic
//           ^^^^ fg=#f8f8f2 fs=
//               ^ fg=#66d9ef fs=
//                ^ fg=#f8f8f2 fs=

use function a\b\c as x;
//^ fg=#f92672 fs=
//  ^^^^^^^^ fg=#66d9ef fs=italic
//           ^^^^ fg=#f8f8f2 fs=
//                ^ fg=#f8f8f2 fs=
//                 ^^ fg=#f92672 fs=
//                    ^ fg=#a6e22e fs=
//                     ^ fg=#f8f8f2 fs=

use const A;
//^ fg=#f92672 fs=
//  ^^^^^ fg=#66d9ef fs=italic
//        ^ fg=#ae81ff fs=
//         ^ fg=#f8f8f2 fs=

use const A\B\C;
//^ fg=#f92672 fs=
//  ^^^^^ fg=#66d9ef fs=italic
//        ^^^^ fg=#f8f8f2 fs=
//            ^ fg=#ae81ff fs=
//             ^ fg=#f8f8f2 fs=

use const A\B\C as X;
//^ fg=#f92672 fs=
//  ^^^^^ fg=#66d9ef fs=italic
//        ^^^^ fg=#f8f8f2 fs=
//            ^ fg=#ae81ff fs=
//              ^^ fg=#f92672 fs=
//                 ^ fg=#ae81ff fs=
//                  ^ fg=#f8f8f2 fs=

const X = 1;
// ^ fg=#f92672 fs=
//    ^ fg=#ae81ff fs=
//      ^ fg=#f92672 fs=
//        ^ fg=#ae81ff fs=
//         ^ fg=#f8f8f2 fs=

require_once 'x.y';
// ^ fg=#f92672 fs=
//          ^ fg=#f8f8f2 fs=
//           ^^^^^ fg=#e6db74 fs=
//                ^ fg=#f8f8f2 fs=

function x() {}
// ^ fg=#66d9ef fs=italic
//       ^ fg=#a6e22e fs=
//        ^^ fg=#f8f8f2 fs=
//           ^^ fg=#f8f8f2 fs=

interface x {}
// ^ fg=#66d9ef fs=italic
//       ^ fg=#f8f8f2 fs=
//        ^ fg=#a6e22e fs=
//          ^^ fg=#f8f8f2 fs=

trait x {}
// ^ fg=#66d9ef fs=italic
//    ^ fg=#a6e22e fs=
//      ^^ fg=#f8f8f2 fs=

class x {}
// ^ fg=#66d9ef fs=italic
//    ^ fg=#a6e22e fs=
//      ^^ fg=#f8f8f2 fs=

final class x {}
// ^ fg=#f92672 fs=
//    ^ fg=#66d9ef fs=italic
//         ^ fg=#f8f8f2 fs=
//            ^^ fg=#f8f8f2 fs=

abstract class x {}
// ^ fg=#f92672 fs=
//       ^ fg=#66d9ef fs=italic
//             ^ fg=#a6e22e fs=
//               ^^ fg=#f8f8f2 fs=

class x extends y {}
// ^ fg=#66d9ef fs=italic
//    ^ fg=#a6e22e fs=
//      ^ fg=#f92672 fs=
//              ^ fg=#a6e22e fs=italic
//                ^^ fg=#f8f8f2 fs=

class x implements y {}
// ^ fg=#66d9ef fs=italic
//    ^ fg=#a6e22e fs=
//      ^ fg=#f92672 fs=
//                 ^ fg=#a6e22e fs=italic
//                   ^^ fg=#f8f8f2 fs=

class x extends y implements z {}
// ^ fg=#66d9ef fs=italic
//    ^ fg=#a6e22e fs=
//      ^ fg=#f92672 fs=
//              ^ fg=#a6e22e fs=italic
//                ^ fg=#f92672 fs=
//                           ^ fg=#a6e22e fs=italic
//                             ^^ fg=#f8f8f2 fs=

class x extends stdClass implements Countable {}
// ^ fg=#66d9ef fs=italic
//    ^ fg=#a6e22e fs=
//      ^ fg=#f92672 fs=
//              ^ fg=#66d9ef fs=italic
//                       ^ fg=#f92672 fs=
//                                  ^ fg=#66d9ef fs=italic
//                                            ^^ fg=#f8f8f2 fs=

class x extends /* */ \a\b implements \c\d {}
// ^ fg=#66d9ef fs=italic
//    ^ fg=#a6e22e fs=
//      ^ fg=#f92672 fs=
//              ^^^^^ fg=#75715e fs=
//                    ^^^^ fg=#a6e22e fs=italic
//                         ^ fg=#f92672 fs=
//                                    ^^^^ fg=#a6e22e fs=italic
//                                         ^^ fg=#f8f8f2 fs=

function x($a = array(), $b = "x") {}
// ^ fg=#66d9ef fs=italic
//       ^ fg=#a6e22e fs=
//        ^ fg=#f8f8f2 fs=
//         ^^ fg=#fd971f fs=italic
//            ^ fg=#f92672 fs=
//              ^^^^^ fg=#66d9ef fs=
//                   ^^^ fg=#f8f8f2 fs=
//                       ^^ fg=#fd971f fs=italic
//                          ^ fg=#f92672 fs=
//                            ^^^ fg=#e6db74 fs=
//                               ^ fg=#f8f8f2 fs=
//                                 ^^ fg=#f8f8f2 fs=

function x($a = []) {}
//              ^^ fg=#f8f8f2 fs=

function x(array $a = [], $b = "x") {}
//         ^^^^^ fg=#66d9ef fs=italic

function x(array $a = [1, 2, 3, 4],  $b = "x") {}
//                    ^ fg=#f8f8f2 fs=
//                     ^ fg=#ae81ff fs=
//                      ^ fg=#f8f8f2 fs=
//                        ^ fg=#ae81ff fs=
//                         ^ fg=#f8f8f2 fs=
//                           ^ fg=#ae81ff fs=
//                            ^ fg=#f8f8f2 fs=
//                              ^ fg=#ae81ff fs=
//                               ^ fg=#f8f8f2 fs=

function x(array $a = null, $b = "x") {}
//                    ^^^^ fg=#ae81ff fs=

function x(&$x) {}
//       ^ fg=#a6e22e fs=
//        ^ fg=#f8f8f2 fs=
//         ^ fg=#f92672 fs=
//          ^^ fg=#fd971f fs=italic
//            ^ fg=#f8f8f2 fs=
//              ^^ fg=#f8f8f2 fs=

function x(X $c) {}
//       ^ fg=#a6e22e fs=
//        ^ fg=#f8f8f2 fs=
//         ^ fg=#66d9ef fs=italic
//           ^^ fg=#fd971f fs=italic
//             ^ fg=#f8f8f2 fs=

function x(Coutable $c) {}
//       ^ fg=#a6e22e fs=
//        ^ fg=#f8f8f2 fs=
//         ^^^^^^^^ fg=#66d9ef fs=italic
//                  ^^ fg=#fd971f fs=italic
//                    ^ fg=#f8f8f2 fs=
//                     ^^ fg=#f8f8f2 fs=

function x(int $a, string $b, bool $c, float $d) {}
//       ^ fg=#a6e22e fs=
//        ^ fg=#f8f8f2 fs=
//         ^^^ fg=#66d9ef fs=italic
//             ^^ fg=#fd971f fs=italic
//               ^ fg=#f8f8f2 fs=
//                 ^^^^^^ fg=#66d9ef fs=italic
//                        ^^ fg=#fd971f fs=italic
//                          ^ fg=#f8f8f2 fs=
//                            ^^^^ fg=#66d9ef fs=italic
//                                 ^^ fg=#fd971f fs=italic
//                                   ^ fg=#f8f8f2 fs=
//                                     ^^^^^ fg=#66d9ef fs=italic
//                                           ^^ fg=#fd971f fs=italic
//                                             ^ fg=#f8f8f2 fs=
//                                               ^^ fg=#f8f8f2 fs=

function x(...$x) {}
//       ^ fg=#a6e22e fs=
//        ^^^^ fg=#f8f8f2 fs=
//            ^^ fg=#fd971f fs=italic
//              ^ fg=#f8f8f2 fs=

function x(
    //    ^ fg=#f8f8f2 fs=
        $a,
    //  ^^ fg=#fd971f fs=italic
    //    ^ fg=#f8f8f2 fs=
        $b
    //  ^^ fg=#fd971f fs=italic
        ){}
    //  ^^^ fg=#f8f8f2 fs=


function x(): X {}
// ^^^^^ fg=#66d9ef fs=italic
//       ^ fg=#a6e22e fs=
//        ^^^ fg=#f8f8f2 fs=
//            ^ fg=#66d9ef fs=italic
//              ^^ fg=#f8f8f2 fs=

function x(): Countable {}
//       ^ fg=#a6e22e fs=
//        ^^^ fg=#f8f8f2 fs=
//            ^^^^^^^^^ fg=#66d9ef fs=italic

$abc = function() {};
// ^ fg=#f8f8f2 fs=
//   ^ fg=#f92672 fs=
//     ^^^^^^^^ fg=#66d9ef fs=italic
//             ^^ fg=#f8f8f2 fs=
//                ^^^ fg=#f8f8f2 fs=

$x = function(N $c) use ($a, $b) {};
//   ^ fg=#66d9ef fs=italic
//           ^ fg=#f8f8f2 fs=
//            ^ fg=#66d9ef fs=italic
//              ^^ fg=#fd971f fs=italic
//                ^ fg=#f8f8f2 fs=
//                  ^^^ fg=#f92672 fs=
//                      ^ fg=#f8f8f2 fs=
//                       ^^ fg=#fd971f fs=italic
//                         ^ fg=#f8f8f2 fs=
//                           ^^ fg=#fd971f fs=italic
//                             ^ fg=#f8f8f2 fs=
//                               ^^^ fg=#f8f8f2 fs=

if (isset($x) && is_callable($x)) {
//  ^^^^^ fg=#66d9ef fs=
//       ^^^^ fg=#f8f8f2 fs=
//            ^^ fg=#f92672 fs=
//               ^^^^^^^^^^^ fg=#66d9ef fs=
//                          ^^^^^ fg=#f8f8f2 fs=
//                                ^ fg=#f8f8f2 fs=

    if (29 - 10 + 2) * 2 > 4.2) {}
    // ^ fg=#f8f8f2 fs=
    //  ^^ fg=#ae81ff fs=
    //     ^ fg=#f92672 fs=
    //       ^^ fg=#ae81ff fs=
    //          ^ fg=#f92672 fs=
    //            ^ fg=#ae81ff fs=
    //             ^ fg=#f8f8f2 fs=
    //               ^ fg=#f92672 fs=
    //                 ^ fg=#ae81ff fs=
    //                   ^ fg=#f92672 fs=
    //                     ^^^ fg=#ae81ff fs=
    //                        ^ fg=#f8f8f2 fs=
    //                          ^^ fg=#f8f8f2 fs=

    $x = true | false | null;
    // ^ fg=#f92672 fs=
    //  ^ fg=#f8f8f2 fs=
    //   ^^^^ fg=#ae81ff fs=
    //        ^ fg=#f92672 fs=
    //          ^^^^^ fg=#ae81ff fs=
    //                ^ fg=#f92672 fs=
    //                  ^^^^ fg=#ae81ff fs=
    //                      ^ fg=#f8f8f2 fs=

    $x = 0123 & 0x1A && 0b11111111 / 1.2 + 1.2e3 + 7E-10;
    //   ^^^^ fg=#ae81ff fs=
    //        ^ fg=#f92672 fs=
    //          ^^^^ fg=#ae81ff fs=
    //               ^^ fg=#f92672 fs=
    //                  ^^^^^^^^^^ fg=#ae81ff fs=
    //                             ^ fg=#f92672 fs=
    //                               ^^^ fg=#ae81ff fs=
    //                                   ^ fg=#f92672 fs=
    //                                     ^^^^^ fg=#ae81ff fs=
    //                                           ^ fg=#f92672 fs=
    //                                             ^^^^^ fg=#ae81ff fs=
    //                                                  ^ fg=#f8f8f2 fs=

    print("a\t\nb" . 'ab');
    // ^^ fg=#66d9ef fs=
    //   ^ fg=#f8f8f2 fs=
    //    ^^ fg=#e6db74 fs=
    //      ^^^^ fg=#ae81ff fs=
    //          ^^ fg=#e6db74 fs=
    //             ^ fg=#f92672 fs=
    //               ^^^^ fg=#e6db74 fs=
    //                   ^^ fg=#f8f8f2 fs=

    user_defined();
    // ^^^^^^^^^ fg=#f8f8f2 fs=
    //          ^^ fg=#f8f8f2 fs=
    //            ^ fg=#f8f8f2 fs=

    phpversion();
    // ^^^^^^^ fg=#66d9ef fs=
    //        ^^ fg=#f8f8f2 fs=
    //          ^ fg=#f8f8f2 fs=

    error_reporting(E_ALL);
    // ^^^^^^^^^^^^ fg=#66d9ef fs=
    //             ^ fg=#f8f8f2 fs=
    //              ^^^^^ fg=#66d9ef fs=
    //                   ^^ fg=#f8f8f2 fs=

    $x();
//  ^^^^^ fg=#f8f8f2 fs=

    $x = $y($a, $b);
    //   ^^ fg=#f8f8f2 fs=
    //     ^^^^ fg=#f8f8f2 fs=
    //          ^^^^ fg=#f8f8f2 fs=

    $x = array();
    //   ^^^^^ fg=#66d9ef fs=
    //        ^^^ fg=#f8f8f2 fs=

    $x = [];
    //   ^^^ fg=#f8f8f2 fs=

    $x = array(
    //   ^^^^^ fg=#66d9ef fs=
    //        ^ fg=#f8f8f2 fs=
        "x" => "y",
    //  ^^^ fg=#e6db74 fs=
    //      ^^ fg=#f92672 fs=
    //         ^^^ fg=#e6db74 fs=
    //            ^ fg=#f8f8f2 fs=
        [
    //  ^ fg=#f8f8f2 fs=
            "x" => "y",
    //      ^^^ fg=#e6db74 fs=
    //          ^^ fg=#f92672 fs=
    //             ^^^ fg=#e6db74 fs=
    //                ^ fg=#f8f8f2 fs=
        ]
    //  ^ fg=#f8f8f2 fs=
    );
//  ^^ fg=#f8f8f2 fs=

    $x = array_merge([
    //   ^^^^^^^^^^^ fg=#66d9ef fs=
    //              ^ fg=#f8f8f2 fs=
    //               ^ fg=#f8f8f2 fs=
        'a' => 'b',
    //  ^^^ fg=#e6db74 fs=
    //      ^^ fg=#f92672 fs=
    //         ^^^ fg=#e6db74 fs=
    //            ^ fg=#f8f8f2 fs=
        'c' => 42
    //  ^^^ fg=#e6db74 fs=
    //      ^^ fg=#f92672 fs=
    //         ^^ fg=#ae81ff fs=
    ]);
//  ^^^ fg=#f8f8f2 fs=

        $argv['x']; $argc;
    //  ^^^^^ fg=#fd971f fs=italic
    //       ^ fg=#f8f8f2 fs=
    //        ^^^ fg=#e6db74 fs=
    //           ^^ fg=#f8f8f2 fs=
    //              ^^^^^ fg=#fd971f fs=italic
    //                   ^ fg=#f8f8f2 fs=

        $_FILES; $_ENV; $GLOBALS;
    //  ^^^^^^^ fg=#fd971f fs=italic
    //         ^ fg=#f8f8f2 fs=
    //           ^^^^^ fg=#fd971f fs=italic
    //                ^ fg=#f8f8f2 fs=
    //                  ^^^^^^^^ fg=#fd971f fs=italic
    //                          ^ fg=#f8f8f2 fs=

        $_SERVER['DOCUMENT_ROOT'];
    //  ^^^^^^^^ fg=#fd971f fs=italic
    //          ^ fg=#f8f8f2 fs=
    //           ^^^^^^^^^^^^^^^ fg=#e6db74 fs=
    //                          ^^ fg=#f8f8f2 fs=

        $_GET['x']; $_POST['x']; $_COOKIE['x']; $_SESSION['x']; $_REQUEST['x'];
    //  ^^^^^ fg=#fd971f fs=italic
    //       ^ fg=#f8f8f2 fs=
    //        ^^^ fg=#e6db74 fs=
    //           ^^ fg=#f8f8f2 fs=
    //              ^^^^^^ fg=#fd971f fs=italic
    //                    ^ fg=#f8f8f2 fs=
    //                     ^^^ fg=#e6db74 fs=
    //                        ^^ fg=#f8f8f2 fs=
    //                           ^^^^^^^^ fg=#fd971f fs=italic
    //                                   ^ fg=#f8f8f2 fs=
    //                                    ^^^ fg=#e6db74 fs=
    //                                       ^^ fg=#f8f8f2 fs=
    //                                          ^^^^^^^^^ fg=#fd971f fs=italic
    //                                                   ^ fg=#f8f8f2 fs=
    //                                                    ^^^ fg=#e6db74 fs=
    //                                                       ^^ fg=#f8f8f2 fs=
    //                                                          ^^^^^^^^^ fg=#fd971f fs=italic
    //                                                                   ^ fg=#f8f8f2 fs=
    //                                                                    ^^^ fg=#e6db74 fs=
    //                                                                       ^^ fg=#f8f8f2 fs=

    $x = __FILE__ . PHP_VERSION . XYZ;
    //   ^^^^^^^^ fg=#ae81ff fs=
    //            ^ fg=#f92672 fs=
    //              ^^^^^^^^^^^ fg=#66d9ef fs=
    //                          ^ fg=#f92672 fs=
    //                            ^^^ fg=#ae81ff fs=
    //                               ^ fg=#f8f8f2 fs=

    echo X[1];
    //   ^ fg=#ae81ff fs=
    //    ^ fg=#f8f8f2 fs=
    //     ^ fg=#ae81ff fs=
    //      ^ fg=#f8f8f2 fs=
    //       ^ fg=#f8f8f2 fs=

    echo $var['x'][1];
    // ^ fg=#66d9ef fs=
    //   ^^^^^ fg=#f8f8f2 fs=
    //        ^^^ fg=#e6db74 fs=
    //           ^^ fg=#f8f8f2 fs=
    //             ^ fg=#ae81ff fs=
    //              ^^ fg=#f8f8f2 fs=

    $x = (int) (integer) $x;
    //   ^ fg=#f8f8f2 fs=
    //    ^ fg=#66d9ef fs=italic
    //       ^ fg=#f8f8f2 fs=
    //         ^ fg=#f8f8f2 fs=
    //           ^ fg=#66d9ef fs=italic
    //                 ^ fg=#f8f8f2 fs=

    $x = (bool) (boolean) $y;
    //   ^ fg=#f8f8f2 fs=
    //    ^ fg=#66d9ef fs=italic
    //        ^ fg=#f8f8f2 fs=
    //          ^ fg=#f8f8f2 fs=
    //           ^ fg=#66d9ef fs=italic
    //                  ^ fg=#f8f8f2 fs=

    $x = (float) (double) (real) $y;
    //   ^ fg=#f8f8f2 fs=
    //    ^ fg=#66d9ef fs=italic
    //         ^ fg=#f8f8f2 fs=
    //           ^ fg=#f8f8f2 fs=
    //            ^ fg=#66d9ef fs=italic
    //                  ^ fg=#f8f8f2 fs=
    //                    ^ fg=#f8f8f2 fs=
    //                     ^ fg=#66d9ef fs=italic
    //                         ^ fg=#f8f8f2 fs=

    $x = (string) $y;
    //   ^ fg=#f8f8f2 fs=
    //    ^ fg=#66d9ef fs=italic
    //          ^ fg=#f8f8f2 fs=

    $x = (array) $y;
    //   ^ fg=#f8f8f2 fs=
    //    ^ fg=#66d9ef fs=italic
    //         ^ fg=#f8f8f2 fs=

    $x = (object) $y;
    //   ^ fg=#f8f8f2 fs=
    //    ^ fg=#66d9ef fs=italic
    //          ^ fg=#f8f8f2 fs=

    $x = (unset) $y;
    //   ^ fg=#f8f8f2 fs=
    //    ^ fg=#66d9ef fs=italic
    //         ^ fg=#f8f8f2 fs=

    $x = new stdClass();
    //   ^ fg=#f92672 fs=
    //       ^ fg=#66d9ef fs=italic
    //               ^^^ fg=#f8f8f2 fs=

    $x = new N();
    //   ^ fg=#f92672 fs=
    //       ^ fg=#66d9ef fs=italic
    //        ^^^ fg=#f8f8f2 fs=

    $x = new A\B\C();
    //   ^ fg=#f92672 fs=
    //       ^^^^ fg=#f8f8f2 fs=
    //           ^ fg=#66d9ef fs=italic
    //            ^^^ fg=#f8f8f2 fs=

    clone $obj;
    // ^ fg=#66d9ef fs=italic
    //    ^^^^^ fg=#f8f8f2 fs=

    var_dump($x instanceof X);
    //      ^^^ fg=#f8f8f2 fs=
    //          ^^^^^^^^^^ fg=#f92672 fs=
    //                     ^ fg=#66d9ef fs=italic
    //                      ^ fg=#f8f8f2 fs=

    var_dump($x instanceof X\Y\Z);
    //                     ^^^^ fg=#f8f8f2 fs=
    //                         ^ fg=#66d9ef fs=italic
    //                          ^ fg=#f8f8f2 fs=

    var_dump($x instanceof Countable);
    //                     ^^^^^^^^^ fg=#66d9ef fs=italic
    //                              ^ fg=#f8f8f2 fs=

    var_dump($x instanceof $y);
    //                     ^^^ fg=#f8f8f2 fs=

    $x = &$obj;
    //   ^ fg=#f92672 fs=
    //    ^^^^^ fg=#f8f8f2 fs=

    add(...[1, 2]);
    // ^ fg=#f8f8f2 fs=
    //  ^^^ fg=#f92672 fs=
    //     ^ fg=#f8f8f2 fs=
    //      ^ fg=#ae81ff fs=
    //       ^^ fg=#f8f8f2 fs=
    //         ^ fg=#ae81ff fs=
    //          ^^^ fg=#f8f8f2 fs=

    echo "x $x";
    //   ^^^ fg=#e6db74 fs=
    //      ^^ fg=#f8f8f2 fs=
    //        ^ fg=#e6db74 fs=
    //         ^ fg=#f8f8f2 fs=

    echo "x ${$x}";
    //   ^^^ fg=#e6db74 fs=
    //      ^^^^^ fg=#f8f8f2 fs=
    //           ^ fg=#e6db74 fs=
    //            ^ fg=#f8f8f2 fs=

    echo "x $x[0]";
    //   ^^^ fg=#e6db74 fs=
    //      ^^^ fg=#f8f8f2 fs=
    //         ^ fg=#ae81ff fs=
    //          ^ fg=#f8f8f2 fs=
    //           ^ fg=#e6db74 fs=
    //            ^ fg=#f8f8f2 fs=

    echo "x $x[xyz]";
    //   ^^^ fg=#e6db74 fs=
    //      ^^^ fg=#f8f8f2 fs=
    //         ^^^ fg=#ae81ff fs=
    //            ^ fg=#f8f8f2 fs=
    //             ^ fg=#e6db74 fs=
    //              ^ fg=#f8f8f2 fs=

    echo "x $x->y";
    //   ^^^ fg=#e6db74 fs=
    //      ^^ fg=#f8f8f2 fs=
    //        ^^ fg=#f92672 fs=
    //          ^ fg=#f8f8f2 fs=
    //           ^ fg=#e6db74 fs=
    //            ^ fg=#f8f8f2 fs=

    echo "{$x} {$x->y} {$x['y']}"
    //   ^ fg=#e6db74 fs=
    //    ^^^^ fg=#f8f8f2 fs=
    //        ^ fg=#e6db74 fs=
    //         ^^^ fg=#f8f8f2 fs=
    //            ^^ fg=#f92672 fs=
    //              ^^ fg=#f8f8f2 fs=
    //                ^ fg=#e6db74 fs=
    //                 ^^^^ fg=#f8f8f2 fs=
    //                     ^^^ fg=#e6db74 fs=
    //                        ^^ fg=#f8f8f2 fs=
    //                          ^ fg=#e6db74 fs=

    echo "x {${$name}}"
    //   ^^^ fg=#e6db74 fs=
    //      ^ fg=#f8f8f2 fs=
    //       ^^ fg=#e6db74 fs=
    //         ^^^^^^ fg=#f8f8f2 fs=
    //               ^^ fg=#e6db74 fs=

    echo "x {$x->$y}"
    //   ^^^ fg=#e6db74 fs=
    //      ^^^ fg=#f8f8f2 fs=
    //         ^^ fg=#f92672 fs=
    //           ^^^ fg=#f8f8f2 fs=
    //              ^ fg=#e6db74 fs=

    echo "x {$x->{$y[1]}} z";
    //   ^^^ fg=#e6db74 fs=
    //      ^^^ fg=#f8f8f2 fs=
    //         ^^ fg=#f92672 fs=
    //           ^^^^ fg=#f8f8f2 fs=
    //               ^ fg=#ae81ff fs=
    //                ^^^ fg=#f8f8f2 fs=
    //                   ^^^ fg=#e6db74 fs=
    //                      ^ fg=#f8f8f2 fs=

    $x = <<<EOT
    //   ^^^ fg=#e6db74 fs=
    //      ^^^ fg=#f92672 fs=
<div>
    <p>{$x}</p>
//  ^^^ fg=#e6db74 fs=
//     ^^^^ fg=#f8f8f2 fs=
//         ^^^^ fg=#e6db74 fs=

    <p>{$x->y()}</p>
//  ^^^ fg=#e6db74 fs=
//     ^ fg=#f8f8f2 fs=
//      ^^ fg=#f8f8f2 fs=
//        ^^ fg=#f92672 fs=
//          ^^^ fg=#f8f8f2 fs=
//             ^ fg=#f8f8f2 fs=
//              ^^^^ fg=#e6db74 fs=
    <p>{$x->y}</p>
//  ^^^ fg=#e6db74 fs=
//     ^ fg=#f8f8f2 fs=
//      ^^ fg=#f8f8f2 fs=
//        ^^ fg=#f92672 fs=
//          ^ fg=#f8f8f2 fs=
//           ^ fg=#f8f8f2 fs=
//            ^^^^ fg=#e6db74 fs=
    <p>{$x::class}</p>
//  ^^^ fg=#e6db74 fs=
//     ^ fg=#f8f8f2 fs=
//      ^^ fg=#f8f8f2 fs=
//        ^^ fg=#f92672 fs=
//          ^^^^^ fg=#ae81ff fs=
//               ^ fg=#f8f8f2 fs=
//                ^^^^ fg=#e6db74 fs=
    <p>{$x->y()->z()}</p>
//  ^^^ fg=#e6db74 fs=
//     ^ fg=#f8f8f2 fs=
//      ^^ fg=#f8f8f2 fs=
//        ^^ fg=#f92672 fs=
//          ^^^ fg=#f8f8f2 fs=
//             ^^ fg=#f92672 fs=
//               ^^^ fg=#f8f8f2 fs=
//                  ^ fg=#f8f8f2 fs=
//                   ^^^^ fg=#e6db74 fs=
</div>
EOT;

    $x = <<<'EOT'
    //   ^^^ fg=#e6db74 fs=
    //      ^ fg=#e6db74 fs=
    //       ^^^ fg=#f92672 fs=
    //          ^ fg=#e6db74 fs=
<div>
    <p>{$x}</p>
//  ^^^^^^^^^^^ fg=#e6db74 fs=
</div>
EOT;

}

if (true) {
// ^ fg=#f8f8f2 fs=
//  ^^^^ fg=#ae81ff fs=
//      ^ fg=#f8f8f2 fs=
//        ^ fg=#f8f8f2 fs=

    if (x('y') && $x instanceof Countable) {
    // ^ fg=#f8f8f2 fs=
    //  ^ fg=#f8f8f2 fs=
    //   ^ fg=#f8f8f2 fs=
    //    ^^^ fg=#e6db74 fs=
    //       ^ fg=#f8f8f2 fs=
    //         ^^ fg=#f92672 fs=
    //            ^^ fg=#f8f8f2 fs=
    //               ^^^^^^^^^^ fg=#f92672 fs=
    //                          ^^^^^^^^^ fg=#66d9ef fs=italic
    //                                   ^ fg=#f8f8f2 fs=
    //                                     ^ fg=#f8f8f2 fs=

        for ($i = 0; $i < 2; $i++) {}
        //^ fg=#f92672 fs=
        //  ^^^ fg=#f8f8f2 fs=
        //      ^ fg=#f92672 fs=
        //        ^ fg=#ae81ff fs=
        //         ^ fg=#f8f8f2 fs=
        //           ^^ fg=#f8f8f2 fs=
        //              ^ fg=#f92672 fs=
        //                ^ fg=#ae81ff fs=
        //                 ^ fg=#f8f8f2 fs=
        //                   ^^ fg=#f8f8f2 fs=
        //                     ^^ fg=#f92672 fs=
        //                       ^ fg=#f8f8f2 fs=
        //                         ^^ fg=#f8f8f2 fs=

        foreach ($x as $y) {
        // ^ fg=#f92672 fs=
        //      ^^^ fg=#f8f8f2 fs=
        //          ^^ fg=#f92672 fs=
        //             ^^^ fg=#f8f8f2 fs=
        //                 ^ fg=#f8f8f2 fs=
            continue;
            // ^ fg=#f92672 fs=
            //      ^ fg=#f8f8f2 fs=
        }
    //  ^ fg=#f8f8f2 fs=

        switch ($expr) {
        // ^ fg=#f92672 fs=
        //     ^^^^^^^ fg=#f8f8f2 fs=
        //             ^ fg=#f8f8f2 fs=

            case 1:
            // ^ fg=#f92672 fs=
            //   ^ fg=#ae81ff fs=
            //    ^ fg=#f8f8f2 fs=
                break;
                // ^ fg=#f92672 fs=
                //   ^ fg=#f8f8f2 fs=

            default:
            // ^ fg=#f92672 fs=
            //     ^ fg=#f8f8f2 fs=
                break;
                // ^ fg=#f92672 fs=
                //   ^ fg=#f8f8f2 fs=
        }
    //  ^ fg=#f8f8f2 fs=

        try {
        //^ fg=#f92672 fs=
        //  ^ fg=#f8f8f2 fs=

        } catch (Exception $e) {
    //  ^ fg=#f8f8f2 fs=
        // ^ fg=#f92672 fs=
        //      ^ fg=#f8f8f2 fs=
        //       ^ fg=#66d9ef fs=italic
        //                 ^^^ fg=#f8f8f2 fs=
        //                     ^ fg=#f8f8f2 fs=

        } finally {
    //  ^ fg=#f8f8f2 fs=
        // ^ fg=#f92672 fs=
        //        ^ fg=#f8f8f2 fs=

        }
    //  ^ fg=#f8f8f2 fs=

        while (1 >= 3) {}
        // ^ fg=#f92672 fs=
        //    ^ fg=#f8f8f2 fs=
        //     ^ fg=#ae81ff fs=
        //       ^^ fg=#f92672 fs=
        //          ^ fg=#ae81ff fs=
        //           ^ fg=#f8f8f2 fs=
        //             ^^ fg=#f8f8f2 fs=

        do {
    //  ^ fg=#f92672 fs=
        // ^ fg=#f8f8f2 fs=
        } while (0);
    //  ^ fg=#f8f8f2 fs=
        // ^ fg=#f92672 fs=
        //      ^ fg=#f8f8f2 fs=
        //       ^ fg=#ae81ff fs=
        //        ^^ fg=#f8f8f2 fs=

        if (0) {
    //  ^^ fg=#f92672 fs=
        // ^ fg=#f8f8f2 fs=
        //  ^ fg=#ae81ff fs=
        //   ^ fg=#f8f8f2 fs=
        //     ^ fg=#f8f8f2 fs=
        } elseif ($arg === 1) {
    //  ^ fg=#f8f8f2 fs=
        // ^^^^^ fg=#f92672 fs=
        //       ^^^^^ fg=#f8f8f2 fs=
        //             ^^^ fg=#f92672 fs=
        //                 ^ fg=#ae81ff fs=
        //                  ^ fg=#f8f8f2 fs=
        //                    ^ fg=#f8f8f2 fs=
        } else {
    //  ^ fg=#f8f8f2 fs=
        // ^^^ fg=#f92672 fs=
        //     ^ fg=#f8f8f2 fs=
        }
    //  ^ fg=#f8f8f2 fs=
    }
//  ^ fg=#f8f8f2 fs=
}

     ?>
<!-- ^^ fg=#f8f8f2 fs= -->
    <?php
//  ^^^^^ fg=#f8f8f2 fs=
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

?>

    <?php if ($expr == true): ?>
<!--^^^^^ fg=#f8f8f2 fs= -->
<!--      ^^ fg=#f92672 fs= -->
<!--         ^^^^^^ fg=#f8f8f2 fs= -->
<!--                ^^ fg=#f92672 fs= -->
<!--                   ^^^^ fg=#ae81ff fs= -->
<!--                       ^^ fg=#f8f8f2 fs= -->
<!--                          ^^ fg=#f8f8f2 fs= -->
        Text
<!--    ^^^^ fg=#f8f8f2 fs= -->
    <?php else: ?>
<!--^^^^^ fg=#f8f8f2 fs= -->
<!--      ^^^^ fg=#f92672 fs= -->
<!--          ^ fg=#f8f8f2 fs= -->
<!--            ^^ fg=#f8f8f2 fs= -->
        Text
<!--    ^^^^ fg=#f8f8f2 fs= -->
    <?php endif; ?>
<!--^^^^^ fg=#f8f8f2 fs= -->
<!--      ^^^^^ fg=#f92672 fs= -->
<!--           ^ fg=#f8f8f2 fs= -->
<!--             ^^ fg=#f8f8f2 fs= -->

<?php


class x
{
    const X = 1;
    // ^ fg=#f92672 fs=
    //    ^ fg=#ae81ff fs=
    //      ^ fg=#f92672 fs=
    //        ^ fg=#ae81ff fs=
    //         ^ fg=#f8f8f2 fs=

    public $x;
    // ^ fg=#f92672 fs=
    //     ^^^ fg=#f8f8f2 fs=

    protected $x;
    // ^ fg=#f92672 fs=

    private $x;
    // ^ fg=#f92672 fs=

    public static $x;
    // ^ fg=#f92672 fs=
    //     ^ fg=#f92672 fs=

    public function x() {}
    // ^ fg=#f92672 fs=
    //     ^ fg=#66d9ef fs=italic
    //              ^ fg=#a6e22e fs=
    //               ^^ fg=#f8f8f2 fs=
    //                  ^^ fg=#f8f8f2 fs=

    public static function x() {}
    //     ^ fg=#f92672 fs=

    abstract public function x();
    // ^ fg=#f92672 fs=

    final public function x() {}
    // ^ fg=#f92672 fs=

    public function __construct() {}
    //              ^^^^^^^^^^^ fg=#66d9ef fs=

    public function __toString() {}
    //              ^^^^^^^^^^ fg=#66d9ef fs=

    public function x()
    {
        user_defined();
        // ^^^^^^^^^ fg=#f8f8f2 fs=
        //          ^^ fg=#f8f8f2 fs=
        //            ^ fg=#f8f8f2 fs=

        phpversion();
        // ^^^^^^^ fg=#66d9ef fs=
        //        ^^ fg=#f8f8f2 fs=
        //          ^ fg=#f8f8f2 fs=

        parent::a();
        // ^ fg=#fd971f fs=italic
        //    ^^ fg=#f92672 fs=
        //      ^ fg=#f8f8f2 fs=
        //       ^^^ fg=#f8f8f2 fs=

        self::class;
        // ^ fg=#fd971f fs=italic
        //  ^^ fg=#f92672 fs=
        //    ^^^^^ fg=#ae81ff fs=
        //         ^ fg=#f8f8f2 fs=

        self::$x;
        // ^ fg=#fd971f fs=italic
        //  ^^ fg=#f92672 fs=
        //    ^^^ fg=#f8f8f2 fs=

        self::a();
        // ^ fg=#fd971f fs=italic
        //  ^^ fg=#f92672 fs=
        //    ^ fg=#f8f8f2 fs=
        //     ^^^ fg=#f8f8f2 fs=

        static::$x;
        // ^ fg=#fd971f fs=italic
        //    ^^ fg=#f92672 fs=
        //      ^^^ fg=#f8f8f2 fs=

        static::a();
        // ^ fg=#fd971f fs=italic
        //    ^^ fg=#f92672 fs=
        //      ^ fg=#f8f8f2 fs=
        //       ^^^ fg=#f8f8f2 fs=

        $this->x;
        // ^ fg=#fd971f fs=italic
        //   ^^ fg=#f92672 fs=
        //     ^^ fg=#f8f8f2 fs=

        $this->a();
        // ^ fg=#fd971f fs=italic
        //   ^^ fg=#f92672 fs=
        //     ^ fg=#f8f8f2 fs=
        //      ^^^ fg=#f8f8f2 fs=

        $this->$x();
        // ^ fg=#fd971f fs=italic
        //   ^^ fg=#f92672 fs=
        //     ^^^^^ fg=#f8f8f2 fs=

        $this->a()->c()->d();
        // ^ fg=#fd971f fs=italic
        //   ^^ fg=#f92672 fs=
        //     ^ fg=#f8f8f2 fs=
        //      ^^ fg=#f8f8f2 fs=
        //        ^^ fg=#f92672 fs=
        //          ^ fg=#f8f8f2 fs=
        //           ^^ fg=#f8f8f2 fs=
        //             ^^ fg=#f92672 fs=
        //               ^ fg=#f8f8f2 fs=
        //                ^^^ fg=#f8f8f2 fs=

        Abcd::$x;
        // ^ fg=#66d9ef fs=italic
        //  ^^ fg=#f92672 fs=
        //    ^^^ fg=#f8f8f2 fs=

        Abcd::X;
        // ^ fg=#66d9ef fs=italic
        //  ^^ fg=#f92672 fs=
        //    ^ fg=#ae81ff fs=
        //     ^ fg=#f8f8f2 fs=

        echo X::class;
        // ^ fg=#66d9ef fs=
        //   ^ fg=#66d9ef fs=italic
        //    ^^ fg=#f92672 fs=
        //      ^^^^^ fg=#ae81ff fs=
        //           ^ fg=#f8f8f2 fs=

        $x = new X();
        //   ^ fg=#f92672 fs=
        //       ^ fg=#66d9ef fs=italic
        //        ^^^ fg=#f8f8f2 fs=

        $x = new self();
        //   ^ fg=#f92672 fs=
        //       ^ fg=#fd971f fs=italic
        //           ^^^ fg=#f8f8f2 fs=

        $x = new static();
        //   ^ fg=#f92672 fs=
        //       ^ fg=#fd971f fs=italic
        //             ^^^ fg=#f8f8f2 fs=

        $abc->a();
        // ^ fg=#f8f8f2 fs=
        //  ^^ fg=#f92672 fs=
        //    ^ fg=#f8f8f2 fs=
        //     ^^^ fg=#f8f8f2 fs=

        $abc::a();
        // ^ fg=#f8f8f2 fs=
        //  ^^ fg=#f92672 fs=
        //    ^ fg=#f8f8f2 fs=
        //     ^^^ fg=#f8f8f2 fs=

        $abc::$x;
        // ^ fg=#f8f8f2 fs=
        //  ^^ fg=#f92672 fs=
        //    ^^^ fg=#f8f8f2 fs=

        $abc->$x();
        // ^ fg=#f8f8f2 fs=
        //  ^^ fg=#f92672 fs=
        //    ^^^^^ fg=#f8f8f2 fs=

        $this->x = array_merge($this->y, $z);
        // ^ fg=#fd971f fs=italic
        //   ^^ fg=#f92672 fs=
        //     ^ fg=#f8f8f2 fs=
        //       ^ fg=#f92672 fs=
        //         ^^^^^^^^^^^ fg=#66d9ef fs=
        //                    ^ fg=#f8f8f2 fs=
        //                     ^^^^^ fg=#fd971f fs=italic
        //                          ^^ fg=#f92672 fs=
        //                            ^^ fg=#f8f8f2 fs=
        //                               ^^^^ fg=#f8f8f2 fs=

        $this->x($k, $v);
        // ^ fg=#fd971f fs=italic
        //     ^^^^^ fg=#f8f8f2 fs=
        //           ^^^^ fg=#f8f8f2 fs=

        $a = isset($this->b) ? $this->b->c('d') : new X();
        // ^ fg=#f92672 fs=
        //   ^^^^^ fg=#66d9ef fs=
        //        ^ fg=#f8f8f2 fs=
        //         ^^^^^ fg=#fd971f fs=italic
        //              ^^ fg=#f92672 fs=
        //                ^^ fg=#f8f8f2 fs=
        //                   ^ fg=#f8f8f2 fs=
        //                     ^^^^^ fg=#fd971f fs=italic
        //                          ^^ fg=#f92672 fs=
        //                            ^ fg=#f8f8f2 fs=
        //                             ^^ fg=#f92672 fs=
        //                               ^^ fg=#f8f8f2 fs=
        //                                 ^^^ fg=#e6db74 fs=
        //                                    ^ fg=#f8f8f2 fs=
        //                                      ^ fg=#f8f8f2 fs=
        //                                        ^^^ fg=#f92672 fs=
        //                                            ^ fg=#66d9ef fs=italic
        //                                             ^^^ fg=#f8f8f2 fs=

        if (!in_array($x, [false, 'a', 'b'], true)) {
        // ^ fg=#f8f8f2 fs=
        //  ^ fg=#f92672 fs=
        //   ^^^^^^^^ fg=#66d9ef fs=
        //           ^^^^ fg=#f8f8f2 fs=
        //                ^ fg=#f8f8f2 fs=
        //                 ^^^^^ fg=#ae81ff fs=
        //                      ^ fg=#f8f8f2 fs=
        //                        ^^^ fg=#e6db74 fs=
        //                           ^ fg=#f8f8f2 fs=
        //                             ^^^ fg=#e6db74 fs=
        //                                ^^ fg=#f8f8f2 fs=
        //                                   ^^^^ fg=#ae81ff fs=
        //                                       ^^ fg=#f8f8f2 fs=
        //                                          ^ fg=#f8f8f2 fs=
            throw new InvalidArgumentException('x');
            // ^ fg=#f92672 fs=
            //    ^ fg=#f92672 fs=
            //        ^ fg=#66d9ef fs=italic
            //                                ^ fg=#f8f8f2 fs=
            //                                 ^^^ fg=#e6db74 fs=
            //                                    ^^ fg=#f8f8f2 fs=
        }

        if (isset(static::$x[$y])) {}
        // ^ fg=#f8f8f2 fs=
        //  ^^^^^ fg=#66d9ef fs=
        //       ^ fg=#f8f8f2 fs=
        //        ^^^^^^ fg=#fd971f fs=italic
        //              ^^ fg=#f92672 fs=
        //                ^^ fg=#f8f8f2 fs=
        //                  ^ fg=#f8f8f2 fs=
        //                   ^^ fg=#f8f8f2 fs=
        //                     ^ fg=#f8f8f2 fs=
        //                      ^^ fg=#f8f8f2 fs=
        //                         ^^ fg=#f8f8f2 fs=

        return new self();
        // ^ fg=#f92672 fs=
        //     ^ fg=#f92672 fs=
        //         ^^^^ fg=#fd971f fs=italic
        //             ^^^ fg=#f8f8f2 fs=
    }

    public function x(callable $v, int $v2, string $v3) {}
    // ^ fg=#f92672 fs=
    //     ^ fg=#66d9ef fs=italic
    //              ^ fg=#a6e22e fs=
    //               ^ fg=#f8f8f2 fs=
    //                ^^^^^^^^ fg=#66d9ef fs=italic
    //                         ^^ fg=#fd971f fs=italic
    //                           ^ fg=#f8f8f2 fs=
    //                             ^^^ fg=#66d9ef fs=italic
    //                                 ^^^ fg=#fd971f fs=italic
    //                                    ^ fg=#f8f8f2 fs=
    //                                      ^^^^^^ fg=#66d9ef fs=italic
    //                                             ^^^ fg=#fd971f fs=italic
    //                                                ^ fg=#f8f8f2 fs=
    //                                                  ^^ fg=#f8f8f2 fs=
}
