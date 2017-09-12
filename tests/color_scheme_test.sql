-- COLOR SCHEME TEST "MonokaiFree/MonokaiFree.tmTheme" "SQL"

SELECT * FROM tbl;
-- ^ fg=#f92672 fs=
--     ^ fg=#f92672 fs=
--       ^^^^ fg=#f92672 fs=
--            ^^^^ fg=#f8f8f2 fs=

SELECT VERSION(), CURRENT_DATE;
-- ^ fg=#f92672 fs=
--     ^^^^^^^^^^ fg=#f8f8f2 fs=
--                ^^^^^^^^^^^^ fg=#66d9ef fs=
--                            ^ fg=#f8f8f2 fs=

SELECT VERSION(), CURRENT_DATE;
-- ^ fg=#f92672 fs=
--     ^^^^^^^^^^ fg=#f8f8f2 fs=
--                ^^^^^^^^^^^^ fg=#66d9ef fs=
--                            ^ fg=#f8f8f2 fs=

select version(), current_date;
-- ^ fg=#f92672 fs=
--     ^^^^^^^^^^ fg=#f8f8f2 fs=
--                ^^^^^^^^^^^^ fg=#66d9ef fs=
--                            ^ fg=#f8f8f2 fs=

SeLeCt vErSiOn(), current_DATE;
-- ^ fg=#f92672 fs=
--     ^^^^^^^^^^ fg=#f8f8f2 fs=
--                ^^^^^^^^^^^^ fg=#66d9ef fs=
--                            ^ fg=#f8f8f2 fs=

SELECT SIN(PI() / 4), (4 + 1) * 5;
--     ^^^^^^^^ fg=#f8f8f2 fs=
--              ^ fg=#f92672 fs=
--                ^ fg=#ae81ff fs=
--                     ^ fg=#ae81ff fs=
--                       ^ fg=#f92672 fs=
--                         ^ fg=#ae81ff fs=
--                            ^ fg=#f92672 fs=
--                              ^ fg=#ae81ff fs=

SELECT * FROM my_table WHERE name = 'Smith' AND age < 30;
--       ^ fg=#f92672 fs=
--            ^ fg=#f8f8f2 fs=
--                     ^ fg=#f92672 fs=
--                           ^ fg=#f8f8f2 fs=
--                                  ^^^^^^^ fg=#e6db74 fs=
--                                          ^^^ fg=#f92672 fs=
--                                              ^ fg=#f8f8f2 fs=
--                                                  ^ fg=#f92672 fs=
--                                                    ^^ fg=#ae81ff fs=
--                                                      ^ fg=#f8f8f2 fs=
