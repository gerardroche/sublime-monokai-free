-- COLOR SCHEME TEST "MonokaiFree/MonokaiFree.tmTheme" "SQL"

SELECT * FROM x;
# ^ fg=#f92672 fs=
#      ^ fg=#f92672 fs=
#        ^^^^ fg=#f92672 fs=
#             ^^ fg=#f8f8f2 fs=

SELECT VERSION(), CURRENT_DATE;
# ^ fg=#f92672 fs=
#      ^^^^^^^^^^ fg=#f8f8f2 fs=
#                 ^^^^^^^^^^^^ fg=#66d9ef fs=
#                             ^ fg=#f8f8f2 fs=

SELECT SIN(PI() / 4), (4 + 1) * 5;
# ^ fg=#f92672 fs=
#      ^^^^^^^^ fg=#f8f8f2 fs=
#               ^ fg=#f92672 fs=
#                 ^ fg=#ae81ff fs=
#                  ^^ fg=#f8f8f2 fs=
#                     ^ fg=#f8f8f2 fs=
#                      ^ fg=#ae81ff fs=
#                        ^ fg=#f92672 fs=
#                          ^ fg=#ae81ff fs=
#                           ^ fg=#f8f8f2 fs=
#                             ^ fg=#f92672 fs=
#                               ^ fg=#ae81ff fs=
#                                ^ fg=#f8f8f2 fs=

SELECT * FROM a WHERE b = 'c' AND d < 30;
# ^^^^ fg=#f92672 fs=
#      ^ fg=#f92672 fs=
#        ^^^^ fg=#f92672 fs=
#             ^ fg=#f8f8f2 fs=
#               ^^^^^ fg=#f92672 fs=
#                     ^ fg=#f8f8f2 fs=
#                       ^ fg=#f92672 fs=
#                         ^^^ fg=#e6db74 fs=
#                             ^^^ fg=#f92672 fs=
#                                 ^ fg=#f8f8f2 fs=
#                                   ^ fg=#f92672 fs=
#                                     ^^ fg=#ae81ff fs=
#                                       ^ fg=#f8f8f2 fs=
