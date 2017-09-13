<?php // COLOR SCHEME TEST "MonokaiFree/MonokaiFree.tmTheme" "PHP"

use \Psr\Http\Message\ServerRequestInterface as Request;
//^ fg=#f92672 fs=
//  ^^^^^^^^^^^^^^^^^^ fg=#f8f8f2 fs=
//                    ^^^^^^^^^^^^^^^^^^^^^^ fg=#66d9ef fs=italic
//                                           ^^ fg=#f92672 fs=
//                                              ^^^^^^^ fg=#a6e22e fs=
//                                                     ^ fg=#f8f8f2 fs=
use \Psr\Http\Message\ResponseInterface as Response;
//^ fg=#f92672 fs=
//  ^^^^^^^^^^^^^^^^^^ fg=#f8f8f2 fs=
//                    ^^^^^^^^^^^^^^^^^ fg=#66d9ef fs=italic
//                                      ^^ fg=#f92672 fs=
//                                         ^^^^^^^^ fg=#a6e22e fs=
//                                                 ^ fg=#f8f8f2 fs=

require 'vendor/autoload.php';
// ^^^^ fg=#f92672 fs=
//      ^^^^^^^^^^^^^^^^^^^^^ fg=#e6db74 fs=
//                           ^ fg=#f8f8f2 fs=

$app = new \Slim\App;
// ^ fg=#f8f8f2 fs=
//   ^
//     ^^^ fg=#f92672 fs=
//         ^^^^^^ fg=#f8f8f2 fs=
//               ^^^ fg=#66d9ef fs=italic
//                  ^ fg=#f8f8f2 fs=
$app->get('/hello/{name}', function (Request $request, Response $response) {
// ^ fg=#f8f8f2 fs=
//  ^^ fg=#f92672 fs=
//    ^^^ fg=#f8f8f2 fs=
//        ^^^^^^^^^^^^^^^ fg=#e6db74 fs=
//                         ^^^^^^^^ fg=#66d9ef fs=italic
//                                   ^^^^^^^ fg=#66d9ef fs=italic
//                                                     ^^^^^^^ fg=#66d9ef fs=italic
    $name = $request->getAttribute('name');
    // ^^ fg=#f8f8f2 fs=
    //    ^ fg=#f92672 fs=
    //      ^^^^^^^^ fg=#f8f8f2 fs=
    //              ^^ fg=#f92672 fs=
    //                ^^^^^^^^^^^^ fg=#f8f8f2 fs=
    //                             ^^^^^^ fg=#e6db74 fs=
    $response->getBody()->write("Hello, $name");
    // ^^^^^^ fg=#f8f8f2 fs=
    //       ^^ fg=#f92672 fs=
    //         ^^^^^^^ fg=#f8f8f2 fs=
    //                ^^ fg=#f8f8f2 fs=
    //                  ^^ fg=#f92672 fs=
    //                    ^^^^^ fg=#f8f8f2 fs=
    //                          ^^^^^^^ fg=#e6db74 fs=
    //                                  ^^^^^ fg=#f8f8f2 fs=
    //                                       ^ fg=#e6db74 fs=

    return $response;
    // ^^^ fg=#f92672 fs=
    //     ^^^^^^^^^ fg=#f8f8f2 fs=
});

$app->run();
// ^ fg=#f8f8f2 fs=
//  ^^ fg=#f92672 fs=
//    ^^^ fg=#f8f8f2 fs=
