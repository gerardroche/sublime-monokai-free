<?php // COLOR SCHEME TEST "molokai/Monokai.tmTheme" "PHP"
        // This test is testing
        // the whitespace before
        // the comment.
// ^ fg=#f8f8f2 bg=#272822 fs=

    namespace Name;
//  ^ fg=#f92672 fs=
//            ^ fg=#a6e22e fs=
//                ^ fg=#f8f8f2 fs=

    use A\B;
//  ^ fg=#f92672 fs=
//      ^^ fg=#f8f8f2 fs=
//         ^ fg=#f8f8f2 fs=

    use A\B\C as D;
//  ^ fg=#f92672 fs=
//      ^^^^ fg=#f8f8f2 fs=
//            ^^ fg=#f92672 fs=
//               ^ fg=#a6e22e fs=
//                ^ fg=#f8f8f2 fs=

    use function E\F;
//  ^ fg=#f92672 fs=
//      ^ fg=#66d9ef fs=italic
//               ^^ fg=#f8f8f2 fs=
//                  ^ fg=#f8f8f2 fs=

    use const G\H;
//  ^ fg=#f92672 fs=
//      ^ fg=#66d9ef fs=italic
//            ^^ fg=#f8f8f2 fs=

     ?>
<!-- ^^ fg=#f8f8f2 fs= -->

    <?php
//  ^^^^^ fg=#f8f8f2 fs=

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

    null;
//  ^ fg=#ae81ff fs=

    true;
//  ^ fg=#ae81ff fs=

    false;
//  ^ fg=#ae81ff fs=

    1;
//  ^ fg=#ae81ff fs=

    -1;
//  ^ fg=#f92672 fs=
//   ^ fg=#ae81ff fs=

    0123;
//  ^^^^ fg=#ae81ff fs=

    0x1A;
//  ^^^^ fg=#ae81ff fs=

    0b11111111;
//  ^^^^^^^^^^ fg=#ae81ff fs=
//            ^ fg=#f8f8f2 fs=

    1.2;
//  ^^^ fg=#ae81ff fs=

    1.2e3;
//  ^^^^^ fg=#ae81ff fs=

    7E-10;
//  ^^^^^ fg=#ae81ff fs=

    'str';
//  ^^^^^ fg=#e6db74 fs=

    array();
//  ^ fg=#66d9ef fs=
//       ^^ fg=#f8f8f2 fs=
//         ^ fg=#f8f8f2 fs=

    array(
//  ^ fg=#66d9ef fs=
//       ^ fg=#f8f8f2 fs=
        "x" => "y",
//      ^^^ fg=#e6db74 fs=
//          ^^ fg=#f92672 fs=
//             ^^^ fg=#e6db74 fs=
//                ^ fg=#f8f8f2 fs=
    );
//  ^^ fg=#f8f8f2 fs=

    [];
//  ^^ fg=#f8f8f2 fs=
//    ^ fg=#f8f8f2 fs=

    [
//  ^ fg=#f8f8f2 fs=
        "x" => "y",
//      ^^^ fg=#e6db74 fs=
//          ^^ fg=#f92672 fs=
//             ^^^ fg=#e6db74 fs=
//                ^ fg=#f8f8f2 fs=
    ];
//  ^^ fg=#f8f8f2 fs=

    __FILE__;
//  ^^^^^^^^ fg=#ae81ff fs=
//          ^ fg=#f8f8f2 fs=

    PHP_VERSION;
//  ^ fg=#66d9ef fs=
//             ^ fg=#f8f8f2 fs=

    USER_CONSTANT;
//  ^ fg=#ae81ff fs=
//               ^ fg=#f8f8f2 fs=

    const USER_CONSTANT_2 = 1;
//  ^ fg=#f92672 fs=
//        ^ fg=#ae81ff fs=
//                        ^ fg=#f92672 fs=
//                          ^ fg=#ae81ff fs=
//                           ^ fg=#f8f8f2 fs=

   $GLOBALS;
// ^^ fg=#f8f8f2 fs=

   $_SERVER['DOCUMENT_ROOT'];
// ^^ fg=#f8f8f2 fs=
//          ^^ fg=#e6db74 fs=
//                         ^^ fg=#f8f8f2 fs=

   $_GET['id'];
// ^^^ fg=#f8f8f2 fs=
//       ^^^^ fg=#e6db74 fs=
//           ^^ fg=#f8f8f2 fs=

   $_POST['id'];
// ^^^ fg=#f8f8f2 fs=
//        ^^^^ fg=#e6db74 fs=
//            ^^ fg=#f8f8f2 fs=

   $_FILES;
// ^^^ fg=#f8f8f2 fs=

   $_COOKIE['id'];
// ^^^ fg=#f8f8f2 fs=
//          ^^^^ fg=#e6db74 fs=
//              ^^ fg=#f8f8f2 fs=

   $_SESSION['id'];
// ^^^ fg=#f8f8f2 fs=
//           ^^^^ fg=#e6db74 fs=
//               ^^ fg=#f8f8f2 fs=

   $_REQUEST['id'];
// ^^^ fg=#f8f8f2 fs=
//           ^^^^ fg=#e6db74 fs=
//               ^^ fg=#f8f8f2 fs=

   $_ENV;
// ^^^ fg=#f8f8f2 fs=

   $var;
// ^^ fg=#f8f8f2 fs=

echo $var['x'][1];
// ^ fg=#66d9ef fs=
//   ^^ fg=#f8f8f2 fs=
//        ^^^ fg=#e6db74 fs=
//           ^^ fg=#f8f8f2 fs=
//             ^ fg=#ae81ff fs=
//              ^^ fg=#f8f8f2 fs=

echo 'str';
// ^ fg=#66d9ef fs=
//   ^^^^^ fg=#e6db74 fs=
//        ^ fg=#f8f8f2 fs=

echo "str";
// ^ fg=#66d9ef fs=
//   ^^^^^ fg=#e6db74 fs=
//        ^ fg=#f8f8f2 fs=

echo "str\t\ning";
// ^ fg=#66d9ef fs=
//   ^^^^ fg=#e6db74 fs=
//       ^^^^ fg=#ae81ff fs=
//           ^^^^ fg=#e6db74 fs=
//               ^ fg=#f8f8f2 fs=

print('str');
// ^ fg=#66d9ef fs=
//   ^ fg=#f8f8f2 fs=
//    ^^^^^ fg=#e6db74 fs=
//         ^^ fg=#f8f8f2 fs=

isset($var);
// ^^ fg=#66d9ef fs=
//   ^^^^^^^ fg=#f8f8f2 fs=

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

    new Name();
//  ^ fg=#f92672 fs=
//      ^ fg=#66d9ef fs=italic
//          ^^^ fg=#f8f8f2 fs=

    new A\B\C();
//  ^ fg=#f92672 fs=
//      ^^^^ fg=#f8f8f2 fs=
//          ^ fg=#66d9ef fs=italic
//           ^^^ fg=#f8f8f2 fs=

    exit;
//  ^ fg=#f92672 fs=
//      ^ fg=#f8f8f2 fs=

    die;
//  ^ fg=#f92672 fs=
//     ^ fg=#f8f8f2 fs=

    return;
//  ^ fg=#f92672 fs=
//        ^ fg=#f8f8f2 fs=

    require_once 'file.php';
//  ^ fg=#f92672 fs=
//               ^^^^^^^^^ fg=#e6db74 fs=

    clone $obj;
//  ^^^^^ fg=#66d9ef fs=italic

$_ = &$obj;
//   ^ fg=#f92672 fs=
//    ^^^^^ fg=#f8f8f2 fs=

    if ($arg == 1) {
//  ^^ fg=#f92672 fs=
//     ^^^^^ fg=#f8f8f2 fs=
//           ^^ fg=#f92672 fs=
//              ^ fg=#ae81ff fs=
//               ^ fg=#f8f8f2 fs=
//                 ^ fg=#f8f8f2 fs=
        try {
//      ^ fg=#f92672 fs=
//          ^ fg=#f8f8f2 fs=

        } catch (Exception $e) {
//      ^ fg=#f8f8f2 fs=
//        ^ fg=#f92672 fs=
//              ^ fg=#f8f8f2 fs=
//               ^ fg=#66d9ef fs=italic
//                         ^^^ fg=#f8f8f2 fs=
//                             ^ fg=#f8f8f2 fs=
        } finally {
//      ^ fg=#f8f8f2 fs=
//        ^ fg=#f92672 fs=
//                ^ fg=#f8f8f2 fs=
        }
//      ^ fg=#f8f8f2 fs=

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

function name() {}
// ^ fg=#66d9ef fs=italic
//       ^ fg=#a6e22e fs=
//           ^^ fg=#f8f8f2 fs=
//              ^^ fg=#f8f8f2 fs=

    function() {
//  ^ fg=#66d9ef fs=italic
//          ^^ fg=#f8f8f2 fs=
//             ^ fg=#f8f8f2 fs=
    };
//  ^^ fg=#f8f8f2 fs=

interface i_name_a {}
// ^ fg=#66d9ef fs=italic
//        ^ fg=#a6e22e fs=
//                 ^^ fg=#f8f8f2 fs=

interface i_name_b {
// ^ fg=#66d9ef fs=italic
//        ^ fg=#a6e22e fs=
//                 ^ fg=#f8f8f2 fs=

    public function a();
//  ^ fg=#f92672 fs=
//         ^ fg=#66d9ef fs=italic
//                  ^ fg=#a6e22e fs=
//                   ^^^ fg=#f8f8f2 fs=

   }
// ^ fg=#f8f8f2 fs=

trait t_name_a {}
// ^ fg=#66d9ef fs=italic
//    ^ fg=#a6e22e fs=
//             ^^ fg=#f8f8f2 fs=

class c_name_a {}
// ^ fg=#66d9ef fs=italic
//    ^ fg=#a6e22e fs=
//             ^^ fg=#f8f8f2 fs=

class c_name_b extends c_name_a {}
//    ^ fg=#a6e22e fs=
//             ^ fg=#f92672 fs=
//                     ^ fg=#a6e22e fs=italic
//                              ^^ fg=#f8f8f2 fs=

class name_impl implements i_name_a {}
//    ^ fg=#a6e22e fs=
//              ^ fg=#f92672 fs=
//                         ^ fg=#a6e22e fs=italic
//                                  ^^ fg=#f8f8f2 fs=

final class name_b {}
// ^ fg=#f92672 fs=
//    ^ fg=#66d9ef fs=italic
//          ^ fg=#a6e22e fs=
//                 ^^ fg=#f8f8f2 fs=

abstract class name_c {
// ^ fg=#f92672 fs=
//       ^ fg=#66d9ef fs=italic
//             ^ fg=#a6e22e fs=
//                    ^ fg=#f8f8f2 fs=

    const CLASS_CONSTANT = 1;
//  ^ fg=#f92672 fs=
//        ^ fg=#ae81ff fs=
//                       ^ fg=#f92672 fs=
//                         ^ fg=#ae81ff fs=
//                          ^ fg=#f8f8f2 fs=

    public $pub;
//  ^ fg=#f92672 fs=
//         ^^^^^ fg=#f8f8f2 fs=

    protected $pro;
//  ^ fg=#f92672 fs=
//            ^^^^^ fg=#f8f8f2 fs=

    private $pri;
//  ^ fg=#f92672 fs=
//          ^^^^^ fg=#f8f8f2 fs=

    public static $pubS;
//  ^ fg=#f92672 fs=
//         ^ fg=#f92672 fs=
//                ^^^^^^ fg=#f8f8f2 fs=

    protected function a() {}
//  ^ fg=#f92672 fs=
//            ^ fg=#66d9ef fs=italic
//                     ^ fg=#a6e22e fs=
//                      ^^ fg=#f8f8f2 fs=
//                         ^^ fg=#f8f8f2 fs=

    public function __construct() {}
//                  ^ fg=#66d9ef fs=

    public function __toString() {}
//                  ^ fg=#66d9ef fs=

    public function b()
//  ^ fg=#f92672 fs=
//         ^ fg=#66d9ef fs=italic
//                  ^ fg=#a6e22e fs=
//                   ^^ fg=#f8f8f2 fs=
    {
//  ^ fg=#f8f8f2 fs=

        parent::a();
//      ^ fg=#66d9ef fs=italic
//            ^^ fg=#f92672 fs=
//              ^ fg=#f8f8f2 fs=
//               ^^^ fg=#f8f8f2 fs=


        self::class;
//      ^ fg=#66d9ef fs=italic
//          ^^ fg=#f92672 fs=
//            ^^^^^ fg=#ae81ff fs=
//                 ^ fg=#f8f8f2 fs=

        self::$pubS;
//      ^ fg=#66d9ef fs=italic
//          ^^ fg=#f92672 fs=
//            ^^^^^^ fg=#f8f8f2 fs=

        self::a();
//      ^ fg=#66d9ef fs=italic
//          ^^ fg=#f92672 fs=
//            ^ fg=#f8f8f2 fs=
//             ^^^ fg=#f8f8f2 fs=

        static::$pubS;
//      ^ fg=#66d9ef fs=italic
//            ^^ fg=#f92672 fs=
//              ^^^^^^ fg=#f8f8f2 fs=

        static::a();
//      ^ fg=#66d9ef fs=italic
//            ^^ fg=#f92672 fs=
//              ^ fg=#f8f8f2 fs=
//               ^^^ fg=#f8f8f2 fs=

        $this->pub;
//           ^^ fg=#f92672 fs=
//             ^^^^ fg=#f8f8f2 fs=

        $this->a();
//           ^^ fg=#f92672 fs=
//             ^ fg=#f8f8f2 fs=
//              ^^^ fg=#f8f8f2 fs=

        $this->a()->c()->d();
//           ^^ fg=#f92672 fs=
//             ^ fg=#f8f8f2 fs=
//              ^^ fg=#f8f8f2 fs=
//                ^^ fg=#f92672 fs=
//                  ^ fg=#f8f8f2 fs=
//                   ^^ fg=#f8f8f2 fs=
//                     ^^ fg=#f92672 fs=
//                       ^ fg=#f8f8f2 fs=
//                        ^^^ fg=#f8f8f2 fs=

        NAME_C::$pubS;
//      ^ fg=#66d9ef fs=italic
//            ^^ fg=#f92672 fs=
//              ^^^^^^ fg=#f8f8f2 fs=

        NAME_C::CLASS_CONSTANT;
//      ^ fg=#66d9ef fs=italic
//            ^^ fg=#f92672 fs=
//              ^ fg=#ae81ff fs=
//                            ^ fg=#f8f8f2 fs=

        $i = new I_Name_A();
//      ^^ fg=#f8f8f2 fs=
//         ^ fg=#f92672 fs=
//           ^ fg=#f92672 fs=
//               ^ fg=#66d9ef fs=italic
//                       ^^^ fg=#f8f8f2 fs=

        $i = new self();
//      ^^ fg=#f8f8f2 fs=
//         ^ fg=#f92672 fs=
//           ^ fg=#f92672 fs=
//               ^^^^ fg=#66d9ef fs=italic
//                   ^^^ fg=#f8f8f2 fs=

        $i = new static();
//      ^^ fg=#f8f8f2 fs=
//         ^ fg=#f92672 fs=
//           ^ fg=#f92672 fs=
//               ^^^^^^ fg=#66d9ef fs=italic
//                     ^^^ fg=#f8f8f2 fs=

        $i->a();
//      ^^ fg=#f8f8f2 fs=
//        ^^ fg=#f92672 fs=
//          ^ fg=#f8f8f2 fs=
//           ^^^ fg=#f8f8f2 fs=

        $i::a();
//      ^^ fg=#f8f8f2 fs=
//        ^^ fg=#f92672 fs=
//          ^ fg=#f8f8f2 fs=
//           ^^^ fg=#f8f8f2 fs=

        $i::$pubS;
//      ^^ fg=#f8f8f2 fs=
//        ^^ fg=#f92672 fs=
//          ^^^^^^ fg=#f8f8f2 fs=

    }
//  ^ fg=#f8f8f2 fs=

    private function c() {}
//  ^ fg=#f92672 fs=
//          ^ fg=#66d9ef fs=italic
//                   ^ fg=#a6e22e fs=
//                    ^^ fg=#f8f8f2 fs=
//                       ^^ fg=#f8f8f2 fs=

    public static function d() {}
//  ^ fg=#f92672 fs=
//         ^ fg=#f92672 fs=
//                ^ fg=#66d9ef fs=italic
//                         ^ fg=#a6e22e fs=
//                          ^^ fg=#f8f8f2 fs=
//                             ^^ fg=#f8f8f2 fs=

    protected static function e() {}
//  ^ fg=#f92672 fs=
//            ^ fg=#f92672 fs=
//                   ^ fg=#66d9ef fs=italic
//                            ^ fg=#a6e22e fs=
//                             ^^ fg=#f8f8f2 fs=
//                                ^^ fg=#f8f8f2 fs=

    private static function f() {}
//  ^ fg=#f92672 fs=
//          ^ fg=#f92672 fs=
//                 ^ fg=#66d9ef fs=italic
//                          ^ fg=#a6e22e fs=
//                           ^^ fg=#f8f8f2 fs=
//                              ^^ fg=#f8f8f2 fs=

    abstract public function g();
//  ^ fg=#f92672 fs=
//           ^ fg=#f92672 fs=
//                  ^ fg=#66d9ef fs=italic
//                           ^ fg=#a6e22e fs=
//                            ^^^ fg=#f8f8f2 fs=

    abstract protected function h();
//  ^ fg=#f92672 fs=
//           ^ fg=#f92672 fs=
//                     ^ fg=#66d9ef fs=italic
//                              ^ fg=#a6e22e fs=
//                               ^^^ fg=#f8f8f2 fs=

    final public function i() {}
//  ^ fg=#f92672 fs=
//        ^ fg=#f92672 fs=
//               ^ fg=#66d9ef fs=italic
//                        ^ fg=#a6e22e fs=
//                         ^^ fg=#f8f8f2 fs=
//                            ^^ fg=#f8f8f2 fs=

    final protected function j() {}
//  ^ fg=#f92672 fs=
//        ^ fg=#f92672 fs=
//                  ^ fg=#66d9ef fs=italic
//                           ^ fg=#a6e22e fs=
//                            ^^ fg=#f8f8f2 fs=
//                               ^^ fg=#f8f8f2 fs=

    final private function k() {}
//  ^ fg=#f92672 fs=
//        ^ fg=#f92672 fs=
//                ^ fg=#66d9ef fs=italic
//                         ^ fg=#a6e22e fs=
//                          ^^ fg=#f8f8f2 fs=
//                             ^^ fg=#f8f8f2 fs=

   }
// ^ fg=#f8f8f2 fs=

?>

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
