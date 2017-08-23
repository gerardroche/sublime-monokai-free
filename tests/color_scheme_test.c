// COLOR SCHEME TEST "molokai/Monokai.tmTheme" "C"
        // This test is testing
        // the whitespace before
        // the comment.
// ^ fg=#f8f8f2 bg=#272822 fs=

#define UNICODE
// ^ fg=#f92672 fs=
//      ^ fg=#a6e22e fs=
#include <windows.h>
// ^ fg=#f92672 fs=
//          ^ fg=#e6db74 fs=

int main(int argc, char **argv) {
//^ fg=#66d9ef fs=italic
//  ^ fg=#a6e22e fs=
//        ^ fg=#66d9ef fs=italic
//                  ^ fg=#66d9ef fs=italic

    int speed = 0, speed1 = 0, speed2 = 0; // 1-20
    //          ^ fg=#ae81ff fs=
    //                      ^ fg=#ae81ff fs=
    //                                  ^ fg=#ae81ff fs=

    printf("Set Mouse Speed by Maverick\n");
    // ^ fg=#66d9ef fs=
    //     ^^ fg=#e6db74 fs=
    //                                 ^^ fg=#ae81ff fs=
    //                                   ^ fg=#e6db74 fs=

    SystemParametersInfo(SPI_GETMOUSESPEED, 0, &speed, 0);
    // ^ fg=#66d9ef fs=
    //                                      ^ fg=#ae81ff fs=
    //                                                 ^ fg=#ae81ff fs=

    printf("Current speed: %2d\n", speed);
    // ^ fg=#66d9ef fs=
    //     ^^ fg=#e6db74 fs=
    //                     ^^^^^ fg=#ae81ff fs=
    //                          ^ fg=#e6db74 fs=

    if (argc == 1) return 0;
//  ^ fg=#f92672 fs=
    //          ^ fg=#ae81ff fs=
    //             ^ fg=#f92672 fs=
    //                    ^ fg=#ae81ff fs=

    if (argc >= 2) sscanf(argv[1], "%d", &speed1);
//  ^ fg=#f92672 fs=
    //          ^ fg=#ae81ff fs=
    //             ^ fg=#66d9ef fs=
    //                         ^ fg=#ae81ff fs=
    //                              ^^ fg=#ae81ff fs=

    if (argc >= 3) sscanf(argv[2], "%d", &speed2);
//  ^ fg=#f92672 fs=
    //          ^ fg=#ae81ff fs=
    //             ^ fg=#66d9ef fs=
    //                         ^ fg=#ae81ff fs=
    //                              ^^ fg=#ae81ff fs=

    if (argc == 2) // set speed to first value
//  ^ fg=#f92672 fs=
    //          ^ fg=#ae81ff fs=
        speed = speed1;
    else if (speed == speed1 || speed == speed2) // alternate
    // ^ fg=#f92672 fs=
    //   ^ fg=#f92672 fs=
            speed = speed1 + speed2 - speed;
    else
    // ^ fg=#f92672 fs=
        speed = speed1;  // start with first value

    SystemParametersInfo(SPI_SETMOUSESPEED, 0,  speed, 0);
    // ^ fg=#66d9ef fs=
    //                                      ^ fg=#ae81ff fs=
    //                                                 ^ fg=#ae81ff fs=

    SystemParametersInfo(SPI_GETMOUSESPEED, 0, &speed, 0);
    // ^ fg=#66d9ef fs=
    //                                      ^ fg=#ae81ff fs=
    //                                                 ^ fg=#ae81ff fs=

    printf("New speed: %2d\n", speed);
    // ^ fg=#66d9ef fs=
    //     ^^ fg=#e6db74 fs=
    //                 ^^^^^ fg=#ae81ff fs=
    //                      ^ fg=#e6db74 fs=

    return 0;
    // ^ fg=#f92672 fs=
    //     ^ fg=#ae81ff fs=
}
