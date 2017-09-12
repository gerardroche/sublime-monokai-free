<?php // COLOR SCHEME TEST "MonokaiFree/MonokaiFree.tmTheme" "PHP"
        // This indented comment is to the preceding whitespace.
// ^ fg=#f8f8f2 bg=#272822 fs=
namespace X;
// ^ fg=#f92672 fs=
//        ^ fg=#a6e22e fs=
//         ^ fg=#f8f8f2 fs=
use A\B;
//^ fg=#f92672 fs=
//  ^^ fg=#f8f8f2 fs=
//     ^ fg=#f8f8f2 fs=
use A\B\C as D;
//^ fg=#f92672 fs=
//  ^^^^ fg=#f8f8f2 fs=
//        ^^ fg=#f92672 fs=
//           ^ fg=#a6e22e fs=
//            ^ fg=#f8f8f2 fs=
use function E\F;
//  ^ fg=#66d9ef fs=italic
//           ^^ fg=#f8f8f2 fs=
//              ^ fg=#f8f8f2 fs=
use const G\H;
//  ^ fg=#66d9ef fs=italic
//        ^^ fg=#f8f8f2 fs=
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

    $x = null;
//  ^^ fg=#f8f8f2 fs=
//     ^ fg=#f92672 fs=
//       ^^^^ fg=#ae81ff fs=
//           ^ fg=#f8f8f2 fs=

$the = $a = (29 - 10 + 2) * 2;
//   ^ fg=#f92672 fs=
//     ^^ fg=#f8f8f2 fs=
//        ^ fg=#f92672 fs=
//          ^ fg=#f8f8f2 fs=
//           ^^ fg=#ae81ff fs=
//              ^ fg=#f92672 fs=
//                ^^ fg=#ae81ff fs=
//                   ^ fg=#f92672 fs=
//                     ^ fg=#ae81ff fs=
//                      ^ fg=#f8f8f2 fs=
//                        ^ fg=#f92672 fs=
//                          ^ fg=#ae81ff fs=
//                           ^ fg=#f8f8f2 fs=

$x = true | false;
//   ^^^^ fg=#ae81ff fs=
//        ^ fg=#f92672 fs=
//          ^^^^^ fg=#ae81ff fs=
//               ^ fg=#f8f8f2 fs=

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

echo 'ab' . "ab";
// ^ fg=#66d9ef fs=
//  ^ fg=#f8f8f2 fs=
//   ^^^^ fg=#e6db74 fs=
//        ^ fg=#f92672 fs=
//          ^^^^ fg=#e6db74 fs=
//              ^ fg=#f8f8f2 fs=

print("a\t\nb");
// ^ fg=#66d9ef fs=
//   ^ fg=#f8f8f2 fs=
//    ^^ fg=#e6db74 fs=
//      ^^^^ fg=#ae81ff fs=
//          ^^ fg=#e6db74 fs=
//            ^^ fg=#f8f8f2 fs=

$_ = array();
//   ^^^^^ fg=#66d9ef fs=
//        ^^^ fg=#f8f8f2 fs=

$_ = [];
//  ^^^^ fg=#f8f8f2 fs=

$_ = array(
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

$_ = __FILE__ . PHP_VERSION . X;
//   ^^^^^^^^ fg=#ae81ff fs=
//            ^ fg=#f92672 fs=
//              ^^^^^^^^^^^ fg=#66d9ef fs=
//                          ^ fg=#f92672 fs=
//                            ^ fg=#ae81ff fs=
//                             ^ fg=#f8f8f2 fs=

const X = 1;
// ^ fg=#f92672 fs=
//    ^ fg=#ae81ff fs=
//        ^ fg=#ae81ff fs=
//         ^ fg=#f8f8f2 fs=

if (isset($x)) {
// ^ fg=#f8f8f2 fs=
//  ^^^^^ fg=#66d9ef fs=
//       ^^^^^ fg=#f8f8f2 fs=
//             ^ fg=#f8f8f2 fs=
    $_SERVER['DOCUMENT_ROOT'];
//  ^^^^^^^^^ fg=#f8f8f2 fs=
//           ^^^^^^^^^^^^^^^ fg=#e6db74 fs=
//                          ^^ fg=#f8f8f2 fs=
    $_GET['x']; $_POST['x'];
//  ^^^^^^ fg=#f8f8f2 fs=
//        ^^^ fg=#e6db74 fs=
//           ^^^^^^^^^^ fg=#f8f8f2 fs=
//                     ^^^ fg=#e6db74 fs=
//                        ^^^ fg=#f8f8f2 fs=
    $_COOKIE['x']; $_SESSION['x']; $_REQUEST['x'];
//  ^^^^^^^^^ fg=#f8f8f2 fs=
//           ^^^ fg=#e6db74 fs=
//              ^^^^^^^^^^^^^ fg=#f8f8f2 fs=
//                           ^^^ fg=#e6db74 fs=
//                              ^^^^^^^^^^^^^ fg=#f8f8f2 fs=
//                                           ^^^ fg=#e6db74 fs=
//                                              ^^ fg=#f8f8f2 fs=
    $_FILES; $_ENV; $GLOBALS
//  ^^^^^^^^^^^^^^^^^^^^^^^^ fg=#f8f8f2 fs=
    echo $var['x'][1];
    //   ^^^^^ fg=#f8f8f2 fs=
    //        ^^^ fg=#e6db74 fs=
    //           ^^ fg=#f8f8f2 fs=
    //             ^ fg=#ae81ff fs=
    //              ^^ fg=#f8f8f2 fs=
    (int) (integer) $_;
//  ^ fg=#f8f8f2 fs=
//   ^ fg=#66d9ef fs=italic
//      ^ fg=#f8f8f2 fs=
//        ^ fg=#f8f8f2 fs=
//          ^ fg=#66d9ef fs=italic
//                ^ fg=#f8f8f2 fs=
    (bool) (boolean) $_;
//  ^ fg=#f8f8f2 fs=
//   ^ fg=#66d9ef fs=italic
//       ^ fg=#f8f8f2 fs=
//         ^ fg=#f8f8f2 fs=
//          ^ fg=#66d9ef fs=italic
//                 ^ fg=#f8f8f2 fs=

    (float) (double) (real) $_;
//  ^ fg=#f8f8f2 fs=
//   ^ fg=#66d9ef fs=italic
//        ^ fg=#f8f8f2 fs=
//          ^ fg=#f8f8f2 fs=
//           ^ fg=#66d9ef fs=italic
//                 ^ fg=#f8f8f2 fs=
//                   ^ fg=#f8f8f2 fs=
//                    ^ fg=#66d9ef fs=italic
//                        ^ fg=#f8f8f2 fs=
    (string) $_;
//  ^ fg=#f8f8f2 fs=
//   ^ fg=#66d9ef fs=italic
//         ^ fg=#f8f8f2 fs=
    (array) $_;
//  ^ fg=#f8f8f2 fs=
//   ^ fg=#66d9ef fs=italic
//        ^ fg=#f8f8f2 fs=
    (object) $_;
//  ^ fg=#f8f8f2 fs=
//   ^ fg=#66d9ef fs=italic
//         ^ fg=#f8f8f2 fs=
    (unset) $_;
//  ^ fg=#f8f8f2 fs=
//   ^ fg=#66d9ef fs=italic
//        ^ fg=#f8f8f2 fs=
    new stdClass();
//  ^ fg=#f92672 fs=
//      ^ fg=#66d9ef fs=italic
//              ^^^ fg=#f8f8f2 fs=
    new N();
//  ^ fg=#f92672 fs=
//      ^ fg=#66d9ef fs=italic
//       ^^^ fg=#f8f8f2 fs=
    new A\B\C();
//  ^ fg=#f92672 fs=
//      ^^^^ fg=#f8f8f2 fs=
//          ^ fg=#66d9ef fs=italic
//           ^^^ fg=#f8f8f2 fs=

    clone $obj;
    // ^ fg=#66d9ef fs=italic
    //    ^^^^^ fg=#f8f8f2 fs=

    $_ = &$obj;
    // ^ fg=#f92672 fs=
    //   ^ fg=#f92672 fs=
    //    ^^^^^ fg=#f8f8f2 fs=

    return;
    // ^ fg=#f92672 fs=
    //    ^ fg=#f8f8f2 fs=
}

exit;
// ^ fg=#f92672 fs=
//  ^ fg=#f8f8f2 fs=

require_once 'file.php';
// ^ fg=#f92672 fs=
//           ^^^^^^^^^ fg=#e6db74 fs=


    if ($arg == 1) {
//  ^^ fg=#f92672 fs=
//     ^^^^^ fg=#f8f8f2 fs=
//           ^^ fg=#f92672 fs=
//              ^ fg=#ae81ff fs=
//               ^ fg=#f8f8f2 fs=
//                 ^ fg=#f8f8f2 fs=
        try {
    //  ^ fg=#f92672 fs=
    //      ^ fg=#f8f8f2 fs=

        } catch (Exception $e) {
    //  ^ fg=#f8f8f2 fs=
    //    ^ fg=#f92672 fs=
    //          ^ fg=#f8f8f2 fs=
    //           ^ fg=#66d9ef fs=italic
    //                     ^^^ fg=#f8f8f2 fs=
    //                         ^ fg=#f8f8f2 fs=
        } finally {
    //  ^ fg=#f8f8f2 fs=
    //    ^ fg=#f92672 fs=
    //            ^ fg=#f8f8f2 fs=
        }
    //  ^ fg=#f8f8f2 fs=

        for ($i = 0; $i < 2; $i++) {
//      ^ fg=#f92672 fs=
//          ^^^ fg=#f8f8f2 fs=
//              ^ fg=#f92672 fs=
//                ^ fg=#ae81ff fs=
//                 ^ fg=#f8f8f2 fs=
//                   ^^ fg=#f8f8f2 fs=
//                      ^ fg=#f92672 fs=
//                        ^ fg=#ae81ff fs=
//                         ^ fg=#f8f8f2 fs=
//                           ^^ fg=#f8f8f2 fs=
//                             ^^ fg=#f92672 fs=
//                               ^ fg=#f8f8f2 fs=
//                                 ^ fg=#f8f8f2 fs=
        }
//      ^ fg=#f8f8f2 fs=

        foreach ($collection as $value) {
//      ^ fg=#f92672 fs=
//              ^^^ fg=#f8f8f2 fs=
//                           ^^ fg=#f92672 fs=
//                              ^^ fg=#f8f8f2 fs=
//                                      ^ fg=#f8f8f2 fs=

            continue;
//          ^ fg=#f92672 fs=
//                  ^ fg=#f8f8f2 fs=
        }
//      ^ fg=#f8f8f2 fs=

        switch ($expr) {
//      ^ fg=#f92672 fs=
//             ^^^^^^^ fg=#f8f8f2 fs=
//                     ^ fg=#f8f8f2 fs=

            case 1:
//          ^ fg=#f92672 fs=
//               ^ fg=#ae81ff fs=
//                ^ fg=#f8f8f2 fs=
                break;
//              ^ fg=#f92672 fs=
//                   ^ fg=#f8f8f2 fs=

            default:
//          ^ fg=#f92672 fs=
//                 ^ fg=#f8f8f2 fs=
                break;
//              ^ fg=#f92672 fs=
//                   ^ fg=#f8f8f2 fs=
        }
//      ^ fg=#f8f8f2 fs=

    } elseif ($arg === 1) {
//  ^ fg=#f8f8f2 fs=
//    ^ fg=#f92672 fs=
//           ^^^^^ fg=#f8f8f2 fs=
//                 ^^^ fg=#f92672 fs=
//                     ^ fg=#ae81ff fs=
//                      ^ fg=#f8f8f2 fs=
//                        ^ fg=#f8f8f2 fs=

        while (1 >= 3) {
//      ^ fg=#f92672 fs=
//            ^ fg=#f8f8f2 fs=
//             ^ fg=#ae81ff fs=
//               ^^ fg=#f92672 fs=
//                  ^ fg=#ae81ff fs=
//                   ^ fg=#f8f8f2 fs=
//                     ^ fg=#f8f8f2 fs=
        }
//      ^ fg=#f8f8f2 fs=

    } else {
//  ^ fg=#f8f8f2 fs=
//    ^ fg=#f92672 fs=
//         ^ fg=#f8f8f2 fs=

        do {
//      ^ fg=#f92672 fs=
//         ^ fg=#f8f8f2 fs=
        } while (false);
//      ^ fg=#f8f8f2 fs=
//        ^ fg=#f92672 fs=
//              ^ fg=#f8f8f2 fs=
//               ^ fg=#ae81ff fs=
//                    ^^ fg=#f8f8f2 fs=
    }
//  ^ fg=#f8f8f2 fs=

phpversion();
// ^ fg=#66d9ef fs=
//        ^^ fg=#f8f8f2 fs=
//          ^ fg=#f8f8f2 fs=

use_func();
// ^ fg=#66d9ef fs=

function x() {}
// ^ fg=#66d9ef fs=italic
//       ^ fg=#a6e22e fs=
//        ^^ fg=#f8f8f2 fs=
//           ^^ fg=#f8f8f2 fs=

interface i {
// ^ fg=#66d9ef fs=italic
//        ^ fg=#a6e22e fs=
//          ^ fg=#f8f8f2 fs=
    public function a();
//  ^ fg=#f92672 fs=
//         ^ fg=#66d9ef fs=italic
//                  ^ fg=#a6e22e fs=
//                   ^^^ fg=#f8f8f2 fs=
}

trait t {}
// ^ fg=#66d9ef fs=italic
//    ^ fg=#a6e22e fs=
//      ^^ fg=#f8f8f2 fs=

class c {}
// ^ fg=#66d9ef fs=italic
//    ^ fg=#a6e22e fs=
//      ^^ fg=#f8f8f2 fs=

class c extends a {}
//    ^ fg=#a6e22e fs=
//      ^ fg=#f92672 fs=
//              ^ fg=#a6e22e fs=italic

class c implements i {}
//    ^ fg=#a6e22e fs=
//      ^ fg=#f92672 fs=
//                 ^ fg=#a6e22e fs=italic

final class n {}
// ^ fg=#f92672 fs=

abstract class c {}
// ^ fg=#f92672 fs=

class c {

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

    protected function a() {}
    // ^ fg=#f92672 fs=
    //        ^ fg=#66d9ef fs=italic
    //                 ^ fg=#a6e22e fs=
    //                  ^^ fg=#f8f8f2 fs=
    //                     ^^ fg=#f8f8f2 fs=

    public function __construct() {}
    //              ^^^^^^^^^^^ fg=#66d9ef fs=

    public function __toString() {}
    //              ^^^^^^^^^^ fg=#66d9ef fs=

    public function x()
    {
        parent::a();
        // ^ fg=#66d9ef fs=italic
        //    ^^ fg=#f92672 fs=
        //      ^ fg=#f8f8f2 fs=
        //       ^^^ fg=#f8f8f2 fs=

        self::class;
        // ^ fg=#66d9ef fs=italic
        //  ^^ fg=#f92672 fs=
        //    ^^^^^ fg=#ae81ff fs=
        //         ^ fg=#f8f8f2 fs=

        self::$x;
        // ^ fg=#66d9ef fs=italic
        //  ^^ fg=#f92672 fs=
        //    ^^^ fg=#f8f8f2 fs=

        self::a();
        // ^ fg=#66d9ef fs=italic
        //  ^^ fg=#f92672 fs=
        //    ^ fg=#f8f8f2 fs=
        //     ^^^ fg=#f8f8f2 fs=

        static::$x;
        // ^ fg=#66d9ef fs=italic
        //    ^^ fg=#f92672 fs=
        //      ^^^ fg=#f8f8f2 fs=

        static::a();
        // ^ fg=#66d9ef fs=italic
        //    ^^ fg=#f92672 fs=
        //      ^ fg=#f8f8f2 fs=
        //       ^^^ fg=#f8f8f2 fs=

        $this->x;
        // ^ fg=#66d9ef fs=italic
        //   ^^ fg=#f92672 fs=
        //     ^^ fg=#f8f8f2 fs=

        $this->a();
        // ^ fg=#66d9ef fs=italic
        //   ^^ fg=#f92672 fs=
        //     ^ fg=#f8f8f2 fs=
        //      ^^^ fg=#f8f8f2 fs=

        $this->a()->c()->d();
        // ^ fg=#66d9ef fs=italic
        //   ^^ fg=#f92672 fs=
        //     ^ fg=#f8f8f2 fs=
        //      ^^ fg=#f8f8f2 fs=
        //        ^^ fg=#f92672 fs=
        //          ^ fg=#f8f8f2 fs=
        //           ^^ fg=#f8f8f2 fs=
        //             ^^ fg=#f92672 fs=
        //               ^ fg=#f8f8f2 fs=
        //                ^^^ fg=#f8f8f2 fs=

        NAME::$x;
        // ^ fg=#66d9ef fs=italic
        //  ^^ fg=#f92672 fs=
        //    ^^^ fg=#f8f8f2 fs=

        NAME::X;
        // ^ fg=#66d9ef fs=italic
        //  ^^ fg=#f92672 fs=
        //    ^ fg=#ae81ff fs=
        //     ^ fg=#f8f8f2 fs=

        $i = new C();
        //   ^ fg=#f92672 fs=
        //       ^ fg=#66d9ef fs=italic
        //        ^^^ fg=#f8f8f2 fs=

        $i = new self();
        //   ^ fg=#f92672 fs=
        //       ^^^^ fg=#66d9ef fs=italic
        //           ^^^ fg=#f8f8f2 fs=

        $i = new static();
        //   ^ fg=#f92672 fs=
        //       ^^^^^^ fg=#66d9ef fs=italic
        //             ^^^ fg=#f8f8f2 fs=

        $i->a();
        //^^ fg=#f92672 fs=
        //  ^ fg=#f8f8f2 fs=
        //   ^^^ fg=#f8f8f2 fs=

        $i::a();
        //^^ fg=#f92672 fs=
        //  ^ fg=#f8f8f2 fs=
        //   ^^^ fg=#f8f8f2 fs=

        $i::$x;
        //^^ fg=#f92672 fs=
        //  ^^^ fg=#f8f8f2 fs=
    }


    public static function d() {}
//  ^ fg=#f92672 fs=
//         ^ fg=#f92672 fs=

    protected static function e() {}
//  ^ fg=#f92672 fs=
//            ^ fg=#f92672 fs=

    private static function f() {}
//  ^ fg=#f92672 fs=
//          ^ fg=#f92672 fs=

    abstract public function g();
//  ^ fg=#f92672 fs=
//           ^ fg=#f92672 fs=

    abstract protected function h();
//  ^ fg=#f92672 fs=
//           ^ fg=#f92672 fs=

    final public function i() {}
//  ^ fg=#f92672 fs=
//        ^ fg=#f92672 fs=

    final protected function j() {}
//  ^ fg=#f92672 fs=
//        ^ fg=#f92672 fs=

    final private function k() {}
//  ^ fg=#f92672 fs=
//        ^ fg=#f92672 fs=

    public function x(callable $v, int $v2, string $v3)
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
    {
        echo B::class;
        // ^ fg=#66d9ef fs=
        //   ^ fg=#66d9ef fs=italic
        //    ^^ fg=#f92672 fs=
        //      ^^^^^ fg=#ae81ff fs=
        //           ^ fg=#f8f8f2 fs=

        return new self();
        // ^ fg=#f92672 fs=
        //     ^ fg=#f92672 fs=
        //         ^^^^ fg=#66d9ef fs=italic
        //             ^^^ fg=#f8f8f2 fs=
    }
}

if (true) {

         ?>
    <!-- ^^ fg=#f8f8f2 fs= -->

            <?php if ($expr == true): ?>
    <!--    ^^^^^ fg=#f8f8f2 fs= -->
    <!--          ^^ fg=#f92672 fs= -->
    <!--             ^^^^^^ fg=#f8f8f2 fs= -->
    <!--                    ^^ fg=#f92672 fs= -->
    <!--                       ^^^^ fg=#ae81ff fs= -->
    <!--                           ^^ fg=#f8f8f2 fs= -->
    <!--                              ^^ fg=#f8f8f2 fs= -->

                This will show if true.
    <!--        ^^^^^^^^^^^^^^^^^^^^^^^ fg=#f8f8f2 fs= -->

            <?php else: ?>
    <!--    ^^^^^ fg=#f8f8f2 fs= -->
    <!--          ^^^^ fg=#f92672 fs= -->
    <!--              ^ fg=#f8f8f2 fs= -->
    <!--                ^^ fg=#f8f8f2 fs= -->

                Otherwise this will show.
    <!--        ^ fg=#f8f8f2 fs= -->

            <?php endif; ?>
    <!--    ^^^^^ fg=#f8f8f2 fs= -->
    <!--          ^^^^^ fg=#f92672 fs= -->
    <!--               ^ fg=#f8f8f2 fs= -->
    <!--                 ^^ fg=#f8f8f2 fs= -->

            <?php
    //      ^^^^^ fg=#f8f8f2 fs=

}

class Test1 extends stdClass implements Countable {}
// ^ fg=#66d9ef fs=italic
//    ^ fg=#a6e22e fs=
//          ^ fg=#f92672 fs=
//                  ^ fg=#66d9ef fs=italic
//                           ^ fg=#f92672 fs=
//                                      ^ fg=#66d9ef fs=italic
//                                                ^^ fg=#f8f8f2 fs=

class ClassName extends /* */ \MyNamespace\Foo implements \MyNamespace\Baz {
// ^ fg=#66d9ef fs=italic
//    ^ fg=#a6e22e fs=
//              ^ fg=#f92672 fs=
//                      ^^^^^ fg=#75715e fs=
//                            ^^^^^^^^^^^^^^^^ fg=#a6e22e fs=italic
//                                             ^ fg=#f92672 fs=
//                                                        ^^^^^^^^^^^^^^^^ fg=#a6e22e fs=italic
//                                                                         ^ fg=#f8f8f2 fs=

function a($a = array(), $b = "hi") {}
// ^ fg=#66d9ef fs=italic
//       ^ fg=#a6e22e fs=
//        ^ fg=#f8f8f2 fs=
//         ^^ fg=#fd971f fs=italic
//            ^ fg=#f92672 fs=
//              ^^^^^ fg=#66d9ef fs=
//                   ^^^ fg=#f8f8f2 fs=
//                       ^^ fg=#fd971f fs=italic
//                          ^ fg=#f92672 fs=
//                            ^^^^ fg=#e6db74 fs=
//                                ^ fg=#f8f8f2 fs=
//                                  ^^ fg=#f8f8f2 fs=
function b($a = [], $b = "hi") {}
//         ^^ fg=#fd971f fs=italic
//              ^^ fg=#f8f8f2 fs=
//                  ^^ fg=#fd971f fs=italic

function d(array $a = [], $b = "hi") {}
//         ^^^^^ fg=#66d9ef fs=italic
function e(array $a = [1, 2, 3, 4],  $b = "hi") {}
//                    ^ fg=#f8f8f2 fs=
//                     ^ fg=#ae81ff fs=
//                      ^ fg=#f8f8f2 fs=
//                        ^ fg=#ae81ff fs=
//                         ^ fg=#f8f8f2 fs=
//                           ^ fg=#ae81ff fs=
//                            ^ fg=#f8f8f2 fs=
//                              ^ fg=#ae81ff fs=
//                               ^ fg=#f8f8f2 fs=
function f(array $a = null, $b = "hi") {}
//                    ^^^^ fg=#ae81ff fs=
function i(
//        ^ fg=#f8f8f2 fs=
    $a,
//  ^^ fg=#fd971f fs=italic
//    ^ fg=#f8f8f2 fs=
    $b
//  ^^ fg=#fd971f fs=italic
    ){}
//  ^^^ fg=#f8f8f2 fs=
    $x = function(N $c) use ($v1, $v2) {
//  ^^ fg=#f8f8f2 fs=
//     ^ fg=#f92672 fs=
//       ^ fg=#66d9ef fs=italic
//               ^ fg=#f8f8f2 fs=
//                ^ fg=#66d9ef fs=italic
//                  ^^ fg=#fd971f fs=italic
//                    ^ fg=#f8f8f2 fs=
//                      ^^^ fg=#f92672 fs=
//                          ^ fg=#f8f8f2 fs=
//                           ^^^ fg=#fd971f fs=italic
//                              ^ fg=#f8f8f2 fs=
//                                ^^^ fg=#fd971f fs=italic
//                                   ^ fg=#f8f8f2 fs=
//                                     ^ fg=#f8f8f2 fs=
