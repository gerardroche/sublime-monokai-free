// COLOR SCHEME TEST "MonokaiFree/MonokaiFree.tmTheme" "Rust"

#[derive(Debug)]
pub enum State {
//^ fg=#f92672 fs=
//  ^ fg=#66d9ef fs=italic
//       ^ fg=#a6e22e fs=
//             ^ fg=#f8f8f2 fs=
    Start,
    // ^ fg=#f8f8f2 fs=
    //   ^ fg=#f8f8f2 fs=
    Transient,
    Closed,
}

impl From<&'a str> for State {
// ^ fg=#66d9ef fs=italic
//            ^ fg=#66d9ef fs=italic
//               ^ fg=#f8f8f2 fs=
//                 ^ fg=#f92672 fs=
//                     ^ fg=#a6e22e fs=
//                           ^ fg=#f8f8f2 fs=
    fn from(s: &'a str) -> Self {
//  ^ fg=#66d9ef fs=italic
//     ^ fg=#a6e22e fs=
//         ^ fg=#f8f8f2 fs=
//          ^ fg=#fd971f fs=italic
//           ^ fg=#f8f8f2 fs=
//                 ^ fg=#66d9ef fs=italic
//                    ^ fg=#f8f8f2 fs=
//                      ^^ fg=#f92672 fs=
//                         ^ fg=#66d9ef fs=italic
//                              ^ fg=#f8f8f2 fs=
        match s {
//      ^ fg=#f92672 fs=
//            ^ fg=#f8f8f2 fs=
//              ^ fg=#f8f8f2 fs=
            "start" => State::Start,
            // ^ fg=#e6db74 fs=
            //    ^ fg=#e6db74 fs=
            //      ^^ fg=#f92672 fs=
            //              ^^ fg=#f92672 fs=
            "closed" => State::Closed,
            //       ^^ fg=#f92672 fs=
            //               ^^ fg=#f92672 fs=
            _ => unreachable!(),
        }
    }
}

