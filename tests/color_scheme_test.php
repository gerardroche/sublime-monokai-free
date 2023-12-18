<?php // COLOR SCHEME TEST "MonokaiFree.sublime-color-scheme" "PHP"

        // This indented comment is to the preceding whitespace.
// ^ fg=#f8f8f2 bg=#272822 fs=

declare(strict_types=1);
// ^ fg=#f92672 fs=
//     ^ fg=#f8f8f2 fs=
//      ^^^^^^^^^^^^ fg=#ae81ff fs=
//                  ^ fg=#f92672 fs=
//                   ^ fg=#ae81ff fs=
//                    ^^ fg=#f8f8f2 fs=

namespace A;
// ^ fg=#f92672 fs=
//        ^ fg=#a6e22e fs=
//         ^ fg=#f8f8f2 fs=

namespace A\B\C;
// ^ fg=#f92672 fs=
//        ^^^^^ fg=#a6e22e fs=
//             ^ fg=#f8f8f2 fs=

use A;
//^ fg=#f92672 fs=
// ^ fg=#f8f8f2 fs=
//  ^ fg=#66d9ef fs=italic
//   ^ fg=#f8f8f2 fs=

use Countable;
//  ^ fg=#66d9ef fs=italic

use UserDefined;
//  ^ fg=#66d9ef fs=italic

use A\B\C;
//^ fg=#f92672 fs=
//  ^^^^ fg=#f8f8f2 fs= build>=4148
//      ^ fg=#66d9ef fs=italic
//       ^ fg=#f8f8f2 fs=

use A\B\Exception;
//      ^ fg=#66d9ef fs=italic

use A\B\UserDefined2;
//      ^ fg=#66d9ef fs=italic

use A\B\C as B;
//^ fg=#f92672 fs=
//  ^^^^ fg=#f8f8f2 fs= build>=4148
//      ^ fg=#66d9ef fs=italic
//        ^^ fg=#f92672 fs=
//           ^ fg=#a6e22e fs=
//            ^ fg=#f8f8f2 fs=

use function a;
//^ fg=#f92672 fs=
//  ^^^^^^^^ fg=#f92672 fs=italic build>=4143
//           ^ fg=#66d9ef fs=
//            ^ fg=#f8f8f2 fs=

use function a\b\c;
//^ fg=#f92672 fs=
//  ^^^^^^^^ fg=#f92672 fs=italic build>=4143
//           ^^^^ fg=#f8f8f2 fs= build>=4148
//               ^ fg=#66d9ef fs=
//                ^ fg=#f8f8f2 fs=

use function a\b\c as b;
//^ fg=#f92672 fs=
//  ^^^^^^^^ fg=#f92672 fs=italic build>=4143
//           ^^^^ fg=#f8f8f2 fs= build>=4148
//                ^ fg=#f8f8f2 fs=
//                 ^^ fg=#f92672 fs=
//                    ^ fg=#a6e22e fs=
//                     ^ fg=#f8f8f2 fs=

use const A;
//^ fg=#f92672 fs=
//  ^^^^^ fg=#f92672 fs=italic build>=4143
//        ^ fg=#ae81ff fs=
//         ^ fg=#f8f8f2 fs=

use const A\B\C;
//^ fg=#f92672 fs=
//  ^^^^^ fg=#f92672 fs=italic build>=4143
//        ^^^^ fg=#f8f8f2 fs= build>=4148
//            ^ fg=#ae81ff fs=
//             ^ fg=#f8f8f2 fs=

use const A\B\C as X;
//^ fg=#f92672 fs=
//  ^^^^^ fg=#f92672 fs=italic build>=4143
//        ^^^^ fg=#f8f8f2 fs= build>=4148
//            ^ fg=#ae81ff fs=
//              ^^ fg=#f92672 fs=
//                 ^ fg=#ae81ff fs=
//                  ^ fg=#f8f8f2 fs=

const B = 1;
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
// ^ fg=#f92672 fs=italic build>=4143
//       ^ fg=#a6e22e fs=
//        ^^ fg=#f8f8f2 fs=
//           ^^ fg=#f8f8f2 fs=

interface x {}
// ^ fg=#f92672 fs=italic build>=4143
//       ^ fg=#f8f8f2 fs=
//        ^ fg=#a6e22e fs=
//          ^^ fg=#f8f8f2 fs=

trait x {}
// ^ fg=#f92672 fs=italic build>=4143
//    ^ fg=#a6e22e fs=
//      ^^ fg=#f8f8f2 fs=

class x {}
// ^ fg=#f92672 fs=italic build>=4143
//    ^ fg=#a6e22e fs=
//      ^^ fg=#f8f8f2 fs=

final class x {}
// ^ fg=#f92672 fs=
//    ^ fg=#f92672 fs=italic build>=4143
//         ^ fg=#f8f8f2 fs=
//            ^^ fg=#f8f8f2 fs=

abstract class x {}
// ^ fg=#f92672 fs=
//       ^ fg=#f92672 fs=italic build>=4143
//             ^ fg=#a6e22e fs=
//               ^^ fg=#f8f8f2 fs=

class x extends y {}
// ^ fg=#f92672 fs=italic build>=4143
//    ^ fg=#a6e22e fs=
//      ^ fg=#f92672 fs=
//              ^ fg=#f8f8f2 fs=italic underline build>=4168
//                ^^ fg=#f8f8f2 fs=

class x implements y {}
// ^ fg=#f92672 fs=italic build>=4143
//    ^ fg=#a6e22e fs=
//      ^ fg=#f92672 fs=
//                 ^ fg=#f8f8f2 fs=italic underline build>=4168
//                   ^^ fg=#f8f8f2 fs=

class x extends y implements z {}
// ^ fg=#f92672 fs=italic build>=4143
//    ^ fg=#a6e22e fs=
//      ^ fg=#f92672 fs=
//              ^ fg=#f8f8f2 fs=italic underline build>=4168
//                ^ fg=#f92672 fs=
//                           ^ fg=#f8f8f2 fs=italic underline build>=4168
//                             ^^ fg=#f8f8f2 fs=

class x extends stdClass implements Countable {}
// ^ fg=#f92672 fs=italic build>=4143
//    ^ fg=#a6e22e fs=
//      ^ fg=#f92672 fs=
//              ^ fg=#66d9ef fs=italic
//                       ^ fg=#f92672 fs=
//                                  ^ fg=#66d9ef fs=italic
//                                            ^^ fg=#f8f8f2 fs=

class x extends /* */ \a\b implements \c\d {}
// ^ fg=#f92672 fs=italic build>=4143
//    ^ fg=#a6e22e fs=
//      ^ fg=#f92672 fs=
//              ^^^^^ fg=#75715e fs=
//                    ^^^ fg=#a6e22e fs=italic underline build>=4143
//                       ^ fg=#f8f8f2 fs=italic underline build>=4168
//                         ^ fg=#f92672 fs=
//                                    ^^^ fg=#a6e22e fs=italic underline build>=4143
//                                       ^ fg=#f8f8f2 fs=italic underline build>=4168
//                                         ^^ fg=#f8f8f2 fs=

function d($a = array(), $b = "x") {}
// ^ fg=#f92672 fs=italic build>=4143
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

function e($a = []) {}
//              ^^ fg=#f8f8f2 fs=

function f(array $a = [], $b = "x") {}
//         ^^^^^ fg=#66d9ef fs=italic

function g(array $a = [1, 2, 3, 4],  $b = "x") {}
//                    ^ fg=#f8f8f2 fs=
//                     ^ fg=#ae81ff fs=
//                      ^ fg=#f8f8f2 fs=
//                        ^ fg=#ae81ff fs=
//                         ^ fg=#f8f8f2 fs=
//                           ^ fg=#ae81ff fs=
//                            ^ fg=#f8f8f2 fs=
//                              ^ fg=#ae81ff fs=
//                               ^ fg=#f8f8f2 fs=

function h(array $a = null, $b = "x") {}
//                    ^^^^ fg=#ae81ff fs=

function i(&$x) {}
//       ^ fg=#a6e22e fs=
//        ^ fg=#f8f8f2 fs=
//         ^ fg=#f92672 fs=
//          ^^ fg=#fd971f fs=italic
//            ^ fg=#f8f8f2 fs=
//              ^^ fg=#f8f8f2 fs=

function j(X $c) {}
//       ^ fg=#a6e22e fs=
//        ^ fg=#f8f8f2 fs=
//         ^ fg=#66d9ef fs=italic
//           ^^ fg=#fd971f fs=italic
//             ^ fg=#f8f8f2 fs=

function k(Coutable $c) {}
//       ^ fg=#a6e22e fs=
//        ^ fg=#f8f8f2 fs=
//         ^^^^^^^^ fg=#66d9ef fs=italic
//                  ^^ fg=#fd971f fs=italic
//                    ^ fg=#f8f8f2 fs=
//                     ^^ fg=#f8f8f2 fs=

function l(int $a, string $b, bool $c, float $d) {}
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

function l2(int|float|array $p) {}
//          ^ fg=#66d9ef fs=italic build>=4140
//             ^ fg=#f8f8f2 fs= build>=4140
//                   ^ fg=#f8f8f2 fs= build>=4140
//              ^ fg=#66d9ef fs=italic build>=4140
//                    ^ fg=#66d9ef fs=italic build>=4140

function l3(): float {}
//             ^ fg=#66d9ef fs=italic build>=4140

function l4(): int|float|array {}
//             ^ fg=#66d9ef fs=italic build>=4140
//                ^ fg=#f8f8f2 fs= build>=4140
//                      ^ fg=#f8f8f2 fs= build>=4140
//                 ^ fg=#66d9ef fs=italic build>=4140
//                       ^ fg=#66d9ef fs=italic build>=4140

function m(...$x) {}
//       ^ fg=#a6e22e fs=
//        ^ fg=#f8f8f2 fs=
//         ^^^ fg=#f92672 fs= build>=4061
//            ^^ fg=#fd971f fs=italic
//              ^ fg=#f8f8f2 fs=

function n(
    //    ^ fg=#f8f8f2 fs=
        $a,
    //  ^^ fg=#fd971f fs=italic
    //    ^ fg=#f8f8f2 fs=
        $b
    //  ^^ fg=#fd971f fs=italic
        ){}
    //  ^^^ fg=#f8f8f2 fs=


function o(): X {}
// ^^^^^ fg=#f92672 fs=italic build>=4143
//       ^ fg=#a6e22e fs=
//        ^^^ fg=#f8f8f2 fs=
//            ^ fg=#66d9ef fs=italic
//              ^^ fg=#f8f8f2 fs=

function p(): Countable {}
//       ^ fg=#a6e22e fs=
//        ^^^ fg=#f8f8f2 fs=
//            ^^^^^^^^^ fg=#66d9ef fs=italic

$abc = function() {};
// ^ fg=#f8f8f2 fs=
//   ^ fg=#f92672 fs=
//     ^^^^^^^^ fg=#f92672 fs=italic build>=4143
//             ^^ fg=#f8f8f2 fs=
//                ^^^ fg=#f8f8f2 fs=

$x = function(N $c) use ($a, $b) {};
//   ^ fg=#f92672 fs=italic build>=4143
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

$abc->y(function (A $a, B $b) {
// ^ fg=#f8f8f2 fs=
//  ^^ fg=#f92672 fs=
//    ^^ fg=#f8f8f2 fs=
//      ^^^^^^^^ fg=#f92672 fs=italic build>=4143
//               ^ fg=#f8f8f2 fs=
//                ^ fg=#66d9ef fs=italic
//                  ^^ fg=#fd971f fs=italic
//                    ^ fg=#f8f8f2 fs=
//                      ^ fg=#66d9ef fs=italic
//                        ^^ fg=#fd971f fs=italic
//                          ^ fg=#f8f8f2 fs=
//                            ^ fg=#f8f8f2 fs=
    $c = $a->b('c');
//  ^^ fg=#f8f8f2 fs=
//     ^ fg=#f92672 fs=
//       ^^ fg=#f8f8f2 fs=
//         ^^ fg=#f92672 fs=
//           ^^ fg=#f8f8f2 fs=
//             ^^^ fg=#e6db74 fs=
//                ^^ fg=#f8f8f2 fs=
    $b->c("d $c");
//  ^^ fg=#f8f8f2 fs=
//    ^^ fg=#f92672 fs=
//      ^^ fg=#f8f8f2 fs=
//        ^^ fg=#e6db74 fs=
//           ^^ fg=#f8f8f2 fs=
//             ^ fg=#e6db74 fs=
//              ^^ fg=#f8f8f2 fs=
    });
//  ^^^ fg=#f8f8f2 fs=

    \defined('SIGINT');
//  ^ fg=#f8f8f2 fs=

if (isset($x) && is_callable($x)) {
//  ^^^^^ fg=#66d9ef fs=
//       ^^^^ fg=#f8f8f2 fs=
//            ^^ fg=#f92672 fs=
//               ^^^^^^^^^^^ fg=#66d9ef fs=
//                          ^^^^^ fg=#f8f8f2 fs=
//                                ^ fg=#f8f8f2 fs=

    if ((29 - 10 + 2) * 2 > 4.2) {}
    // ^^ fg=#f8f8f2 fs=
    //   ^^ fg=#ae81ff fs=
    //      ^ fg=#f92672 fs=
    //        ^^ fg=#ae81ff fs=
    //           ^ fg=#f92672 fs=
    //             ^ fg=#ae81ff fs=
    //              ^ fg=#f8f8f2 fs=
    //                ^ fg=#f92672 fs=
    //                  ^ fg=#ae81ff fs=
    //                    ^ fg=#f92672 fs=
    //                      ^^^ fg=#ae81ff fs=
    //                         ^ fg=#f8f8f2 fs=
    //                           ^^ fg=#f8f8f2 fs=

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

    $x = 014;  // Non-prefix octal literal
    //   ^^^ fg=#ae81ff fs= build>=4140
    $x = 0o14; // Prefixed octal literal
    //   ^^^^ fg=#ae81ff fs= build>=4140

    print("a\t\nb" . 'ab');
    // ^^ fg=#66d9ef fs=
    //   ^ fg=#f8f8f2 fs=
    //    ^^ fg=#e6db74 fs=
    //      ^^^^ fg=#ae81ff fs=
    //          ^^ fg=#e6db74 fs=
    //             ^ fg=#f92672 fs=
    //               ^^^^ fg=#e6db74 fs=
    //                   ^^ fg=#f8f8f2 fs=

    $x = "_\n_\\n_\m_\\m_";
    //   ^^ fg=#e6db74 fs=
    //     ^^ fg=#ae81ff fs=
    //       ^ fg=#e6db74 fs=
    //        ^^ fg=#ae81ff fs=
    //          ^^^^^ fg=#e6db74 fs=
    //               ^^ fg=#ae81ff fs=
    //                 ^^^ fg=#e6db74 fs=
    //                    ^ fg=#f8f8f2 fs=

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


    $unpacking = [...$arr1, 'c' => 'd'];
    //            ^^^ fg=#f92672 fs= build>=4140

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

    $x = new Exception();
    //   ^ fg=#f92672 fs=
    //       ^ fg=#66d9ef fs=italic

    $x = new A\B\C();
    //   ^ fg=#f92672 fs=
    //       ^^^^ fg=#f8f8f2 fs= build>=4148
    //           ^ fg=#66d9ef fs=italic
    //            ^^^ fg=#f8f8f2 fs=

    $x = new A\B\Exception();
    //       ^^^^ fg=#f8f8f2 fs= build>=4148
    //           ^ fg=#66d9ef fs=italic

    $x = new A\B\Countable();
    //       ^^^^ fg=#f8f8f2 fs= build>=4148
    //           ^ fg=#66d9ef fs=italic

    $x = new A\B\UserDefined();
    //       ^^^^ fg=#f8f8f2 fs= build>=4148
    //           ^ fg=#66d9ef fs=italic

    $x = new A\B\C(
    //       ^^^^ fg=#f8f8f2 fs= build>=4134
    //           ^ fg=#66d9ef fs=italic build>=4134
        $a,
        $b
    );

    clone $obj;
    // ^ fg=#f92672 fs= build>=4134
    //    ^^^^^ fg=#f8f8f2 fs=

    var_dump($x instanceof X);
    //      ^^^ fg=#f8f8f2 fs=
    //          ^^^^^^^^^^ fg=#f92672 fs=
    //                     ^ fg=#66d9ef fs=italic
    //                      ^ fg=#f8f8f2 fs=

    var_dump($x instanceof X\Y\Z);
    //                     ^^^^ fg=#f8f8f2 fs= build>=4148
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

    $nullSafe?->getUser(5)?->name;
    //       ^^^ fg=#f92672 fs= build>=4140
    //                    ^^^ fg=#f92672 fs= build>=4140

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

    echo "{$x} {$x->y} {$x['y']}";
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
    //                           ^ fg=#f8f8f2 fs=

    echo "x {${$name}}";
    //   ^^^ fg=#e6db74 fs=
    //      ^ fg=#f8f8f2 fs=
    //       ^ fg=#f8f8f2 fs= build>=4092
    //        ^ fg=#f8f8f2 fs= build>=4134
    //         ^^^^^^ fg=#f8f8f2 fs=
    //               ^ fg=#f8f8f2 fs= build>=4134
    //                ^ fg=#e6db74 fs= build>=4134
    //                 ^ fg=#f8f8f2 fs= build>=4134

    echo "x {$x->$y}";
    //   ^^^ fg=#e6db74 fs=
    //      ^^^ fg=#f8f8f2 fs=
    //         ^^ fg=#f92672 fs=
    //           ^^^ fg=#f8f8f2 fs=
    //              ^ fg=#e6db74 fs=
    //               ^ fg=#f8f8f2 fs=

    echo "x {$x->{$y[1]}} z";
    //   ^^^ fg=#e6db74 fs=
    //      ^^^ fg=#f8f8f2 fs=
    //         ^^ fg=#f92672 fs=
    //           ^^^^ fg=#f8f8f2 fs=
    //               ^ fg=#ae81ff fs=
    //                ^^^ fg=#f8f8f2 fs=
    //                   ^^^ fg=#e6db74 fs=
    //                      ^ fg=#f8f8f2 fs=

    echo '/x/{y}';
    //   ^^^^^^^^ fg=#e6db74 fs=
    //           ^ fg=#f8f8f2 fs=

    $test = <<<EOT
//  ^^ fg=#f8f8f2 fs=
//        ^ fg=#f92672 fs= build>=4134
//          ^^^^^^ fg=#f92672 fs= build>=4134 -->
<div>
    <p>$x</p>
//  ^^^ fg=#e6db74 fs=
//     ^^ fg=#f8f8f2 fs=
//       ^^^^ fg=#e6db74 fs=
    <p>${x}</p>
//  ^^^ fg=#e6db74 fs=
//     ^^ fg=#f8f8f2 fs= build>=4134
//       ^ fg=#ae81ff fs= build>=4134
//        ^ fg=#f8f8f2 fs= build>=4134
//         ^^^^ fg=#e6db74 fs=
    <p>{$x}</p>
//  ^^^ fg=#e6db74 fs=
//     ^^^^ fg=#f8f8f2 fs=
//         ^^^^ fg=#e6db74 fs=
    <p>{ $x }</p>
//  ^^^^ fg=#e6db74 fs=
//       ^^ fg=#f8f8f2 fs=
//          ^^^^^ fg=#e6db74 fs=
    <p>{$x[1]}</p>
//  ^^^ fg=#e6db74 fs=
//     ^^^^ fg=#f8f8f2 fs=
//         ^ fg=#ae81ff fs=
//          ^^ fg=#f8f8f2 fs=
//            ^^^^ fg=#e6db74 fs=
    <p>{$x['y']}</p>
//  ^^^ fg=#e6db74 fs=
//     ^^^^ fg=#f8f8f2 fs=
//         ^^^ fg=#e6db74 fs=
//            ^^ fg=#f8f8f2 fs=
//              ^^^^ fg=#e6db74 fs=
    <p>$x->y</p>
//  ^^^ fg=#e6db74 fs=
//     ^^ fg=#f8f8f2 fs=
//       ^^ fg=#f92672 fs=
//         ^ fg=#f8f8f2 fs=
//          ^^^^ fg=#e6db74 fs=
    <p>{$x->y}</p>
//  ^^^ fg=#e6db74 fs=
//     ^ fg=#f8f8f2 fs=
//      ^^ fg=#f8f8f2 fs=
//        ^^ fg=#f92672 fs=
//          ^ fg=#f8f8f2 fs=
//           ^ fg=#f8f8f2 fs=
//            ^^^^ fg=#e6db74 fs=
    <p>{$x->y[1]}</p>
//  ^^^ fg=#e6db74 fs=
//     ^^^ fg=#f8f8f2 fs=
//        ^^ fg=#f92672 fs=
//          ^^ fg=#f8f8f2 fs=
//            ^ fg=#ae81ff fs=
//             ^^ fg=#f8f8f2 fs=
//               ^^^^ fg=#e6db74 fs=
    <p>{$x->y()}</p>
//  ^^^ fg=#e6db74 fs=
//     ^ fg=#f8f8f2 fs=
//      ^^ fg=#f8f8f2 fs=
//        ^^ fg=#f92672 fs=
//          ^^^ fg=#f8f8f2 fs=
//             ^ fg=#f8f8f2 fs=
//              ^^^^ fg=#e6db74 fs=
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
    <p>{$this->y()}</p>
//      ^^^^^ fg=#fd971f fs=italic
//     ^ fg=#f8f8f2 fs=
//           ^^ fg=#f92672 fs=
//             ^^^^ fg=#f8f8f2 fs=
</div>
EOT;
//^ fg=#f92672 fs=
// ^ fg=#f8f8f2 fs=

    $x = <<<'EOT'
//  ^^ fg=#f8f8f2 fs=
//     ^ fg=#f92672 fs=
//       ^^^^^^^^ fg=#f92672 fs=
<div>
    <p>$x</p>
//  ^^^^^^^^^ fg=#e6db74 fs=
    <p>{$x}</p>
//  ^^^^^^^^^^^ fg=#e6db74 fs=
    <p>$x->y</p>
//  ^^^^^^^^^^^^ fg=#e6db74 fs=
    <p>{$x->y[1]}</p>
//  ^^^^^^^^^^^^^^^^^ fg=#e6db74 fs=
</div>
EOT;
//^ fg=#f92672 fs=
// ^ fg=#f8f8f2 fs=

    $x = <<<XML
<!--^^ fg=#f8f8f2 fs= build>=3154 -->
<!--   ^ fg=#f92672 fs= build>=3154 -->
<!--     ^^^^^^ fg=#f92672 fs= build>=3154 -->
<?xml version="1.0" encoding="UTF-8"?>
<!--^ fg=#f92672 fs= build>=3154 -->
<!--  ^^^^^^^ fg=#a6e22e fs= build>=3154 -->
<!--         ^ fg=#f8f8f2 fs= build>=3154 -->
<!--          ^^^^^ fg=#e6db74 fs= build>=3154 -->
<!--                ^^^^^^^^ fg=#a6e22e fs= build>=3154 -->
<!--                        ^ fg=#f8f8f2 fs= build>=3154 -->
<!--                         ^^^^^^^ fg=#e6db74 fs= build>=3154 -->
<!--                                ^^ fg=#f8f8f2 fs= build>=3154 -->
    <food>
<!--^ fg=#f8f8f2 fs= build>=3154 -->
    <!--^ fg=#f92672 fs= build>=3154 -->
    <!-- ^ fg=#f8f8f2 fs= build>=3154 -->
        <name>Belgian Waffles</name>
    <!--^ fg=#f8f8f2 fs= build>=3154 -->
        <!--^ fg=#f92672 fs= build>=3154 -->
        <!-- ^ fg=#f8f8f2 fs= build>=3154 -->
        <!--  ^ fg=#f8f8f2 fs= build>=3154 -->
        <!--                 ^^ fg=#f8f8f2 fs= build>=3154 -->
        <!--                   ^ fg=#f92672 fs= build>=3154 -->
        <!--                       ^ fg=#f8f8f2 fs= build>=3154 -->
    </food>
</xml>
XML;
//^ fg=#f92672 fs= build>=3154
// ^ fg=#f8f8f2 fs= build>=3154

    $x = <<<CSS
/*  ^^ fg=#f8f8f2 fs= build>=3154 */
/*     ^ fg=#f92672 fs= build>=3154 */
/*       ^^^^^^ fg=#f92672 fs= build>=3154 */
    body {}
/*  ^^^^ fg=#f92672 fs= build>=3154 */
/*       ^^ fg=#f8f8f2 fs= build>=3154 */

    #id {}
/*  ^^^ fg=#fd971f fs= build>=3154 */
/*      ^^ fg=#f8f8f2 fs= build>=3154 */

    .class {}
/*  ^^^^^^ fg=#a6e22e fs= build>=3154 */
/*         ^^ fg=#f8f8f2 fs= build>=3154 */
CSS;
//^ fg=#f92672 fs= build>=3154
// ^ fg=#f8f8f2 fs= build>=3154

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

/**
 * @param int $x desc
// ^^^^^^ fg=#75715e fs=bold
//        ^^^ fg=#75715e fs=
//            ^^ fg=#75715e fs=
//               ^^^^ fg=#75715e fs=
 */

/**
 * @param X $x desc
// ^^^^^^ fg=#75715e fs=bold
//        ^ fg=#75715e fs=
//          ^^ fg=#75715e fs=
//             ^^^^ fg=#75715e fs=
 */

/**
 * @return int
// ^^^^^^^ fg=#75715e fs=bold
//         ^^^ fg=#75715e fs=
 */

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

    public const X2 = 1;
    // ^ fg=#f92672 fs= build>=4140
    //     ^ fg=#f92672 fs= build>=4140

    final public const X3 = "foo";
    // ^ fg=#f92672 fs= build>=4140
    //    ^ fg=#f92672 fs= build>=4140
    //           ^ fg=#f92672 fs= build>=4140

    public $a;
    // ^ fg=#f92672 fs=
    //     ^^^ fg=#f8f8f2 fs=

    protected $b;
    // ^ fg=#f92672 fs=

    private $c;
    // ^ fg=#f92672 fs=

    public static $d;
    // ^ fg=#f92672 fs=
    //     ^ fg=#f92672 fs=

    protected Fizz&Buzz $test;
    //        ^^^^ fg=#66d9ef fs=italic build>=4134
    //            ^ fg=#f92672 fs= build>=4134
    //             ^^^^ fg=#66d9ef fs=italic build>=4134
    //                  ^^^^^^ fg=#f8f8f2 fs=

    public readonly string $readonly;
    //     ^ fg=#f92672 fs= build>=4140

    public function a() {}
    // ^ fg=#f92672 fs=
    //     ^ fg=#f92672 fs=italic build>=4143
    //              ^ fg=#a6e22e fs=
    //               ^^ fg=#f8f8f2 fs=
    //                  ^^ fg=#f8f8f2 fs=

    public static function b() {}
    //     ^ fg=#f92672 fs=

    abstract public function c();
    // ^ fg=#f92672 fs=

    final public function d() {}
    // ^ fg=#f92672 fs=

    public function __construct() {}
    //              ^^^^^^^^^^^ fg=#66d9ef fs=

    public function __toString() {}
    //              ^^^^^^^^^^ fg=#66d9ef fs=

    public function e()
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
        //    ^^^^^ fg=#ae81ff fs=italic
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
        //      ^^^^^ fg=#ae81ff fs=italic
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

        $x = new A\B\C();
        //   ^ fg=#f92672 fs= build>=4134
        //       ^^^^ fg=#f8f8f2 fs= build>=4134
        //           ^ fg=#66d9ef fs=italic build>=4134
        //            ^^^ fg=#f8f8f2 fs= build>=4134

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
        //                   ^ fg=#f92672 fs= build>=4085
        //                     ^^^^^ fg=#fd971f fs=italic
        //                          ^^ fg=#f92672 fs=
        //                            ^ fg=#f8f8f2 fs=
        //                             ^^ fg=#f92672 fs=
        //                               ^^ fg=#f8f8f2 fs=
        //                                 ^^^ fg=#e6db74 fs=
        //                                    ^ fg=#f8f8f2 fs=
        //                                      ^ fg=#f92672 fs= build>=4085
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

        \defined('SIGINT');
    //  ^ fg=#f8f8f2 fs= build>=4000

        \A\B::class;
    //  ^ fg=#f8f8f2 fs= build>=4000
    //   ^ fg=#f8f8f2 fs= build>=4000
    //    ^ fg=#f8f8f2 fs= build>=4000
    //     ^ fg=#66d9ef fs=italic

        return new self();
        // ^ fg=#f92672 fs=
        //     ^ fg=#f92672 fs=
        //         ^^^^ fg=#fd971f fs=italic
        //             ^^^ fg=#f8f8f2 fs=
    }

    public function x(callable $v, int $v2, string $v3) {}
    // ^ fg=#f92672 fs=
    //     ^ fg=#f92672 fs=italic build>=4143
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

class ClassNamespaces extends Extended
//    ^ fg=#a6e22e fs= build>=4000
//                            ^^ fg=#f8f8f2 fs=italic underline build>=4168
{
    use Used;
    //  ^ fg=#f8f8f2 fs=italic >=4168
    use \Fi\zz\Buzz;
    //   ^^ fg=#f8f8f2 fs= >=4168
    //      ^^ fg=#f8f8f2 fs= >=4168
    //         ^^ fg=#f8f8f2 fs=italic >=4168

    protected $x = [
        \A\B::class,
    //  ^^^ fg=#f8f8f2 fs= build>=4000
        \A\B\C::class,
    //  ^^^^^ fg=#f8f8f2 fs= build>=4000
    ];
}

class ConstructorPromotion
{
    public function __construct(public int $x, protected int $y = 0)
    //                          ^ fg=#f92672 fs= build>=4140
    //                                            ^ fg=#f92672 fs= build>=4140
    {
    }
}

enum Suit
// ^ fg=#f92672 fs= build>=4140
//   ^ fg=#a6e22e fs= build>=4140
{
    case Hearts;
//  ^ fg=#f92672 fs=
//       ^ fg=#ae81ff fs= build>=4140
}

    #[Attribute]
//  ^^ fg=#f92672 fs= build>=4168
//             ^ fg=#f92672 fs= build>=4168
    class Title { }

    #[\Attribute]
//  ^^ fg=#f92672 fs= build>=4168
//              ^ fg=#f92672 fs= build>=4168
    class Title { }

    #[\Fizz\Buzz\Attribute]
//  ^^ fg=#f92672 fs= build>=4168
//                        ^ fg=#f92672 fs= build>=4168
    class Title { }
