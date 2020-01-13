-- COLOR SCHEME TEST "MonokaiFree/MonokaiFree.tmTheme" "SQL"

SELECT * FROM x;
-- ^ fg=#f92672 fs=
--     ^ fg=#fd971f fs=italic build>=4061
--       ^^^^ fg=#f92672 fs=
--            ^^ fg=#f8f8f2 fs=



SELECT 'x''y';
-- ^ fg=#f92672 fs=
--     ^^ fg=#e6db74 fs=
--       ^^ fg=#ae81ff fs=
--         ^^ fg=#e6db74 fs=
--           ^ fg=#f8f8f2 fs=

SELECT "x""y" FROM z;
-- ^ fg=#f92672 fs=
--     ^^ fg=#e6db74 fs=
--       ^^ fg=#ae81ff fs=
--         ^^ fg=#e6db74 fs=
--            ^^^^ fg=#f92672 fs=
--                 ^^ fg=#f8f8f2 fs=

SELECT VERSION(), CURRENT_DATE;
-- ^ fg=#f92672 fs=
--     ^^^^^^^^^^ fg=#f8f8f2 fs=
--                ^^^^^^^^^^^^ fg=#66d9ef fs=
--                            ^ fg=#f8f8f2 fs=

SELECT SIN(PI() / 4), (4 + 1) * 5;
-- ^ fg=#f92672 fs=
--     ^^^^^^^^ fg=#f8f8f2 fs=
--              ^ fg=#f92672 fs=
--                ^ fg=#ae81ff fs=
--                 ^^ fg=#f8f8f2 fs=
--                    ^ fg=#f8f8f2 fs=
--                     ^ fg=#ae81ff fs=
--                       ^ fg=#f92672 fs=
--                         ^ fg=#ae81ff fs=
--                          ^ fg=#f8f8f2 fs=
--                            ^ fg=#fd971f fs=italic build>=4061
--                              ^ fg=#ae81ff fs=
--                               ^ fg=#f8f8f2 fs=

SELECT * FROM a WHERE b = 'c' AND d < 30;
-- ^^^ fg=#f92672 fs=
--     ^ fg=#fd971f fs=italic build>=4061
--       ^^^^ fg=#f92672 fs=
--            ^ fg=#f8f8f2 fs=
--              ^^^^^ fg=#f92672 fs=
--                    ^ fg=#f8f8f2 fs=
--                      ^ fg=#f92672 fs=
--                        ^^^ fg=#e6db74 fs=
--                            ^^^ fg=#f92672 fs=
--                                ^ fg=#f8f8f2 fs=
--                                  ^ fg=#f92672 fs=
--                                    ^^ fg=#ae81ff fs=
--                                      ^ fg=#f8f8f2 fs=

/*!40101 SET character_set_client = utf8 */;
-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ fg=#75715e fs=
--                                         ^ fg=#f8f8f2 fs=

CREATE TABLE `x` (
-- ^ fg=#f92672 fs=
--     ^ fg=#f92672 fs=
--           ^ fg=#f8f8f2 fs=
--            ^ fg=#a6e22e fs=
--             ^ fg=#f8f8f2 fs=
--               ^ fg=#f8f8f2 fs=
  `a` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
-- ^^ fg=#e6db74 fs=
--    ^^^^^^ fg=#66d9ef fs=italic
--          ^ fg=#f8f8f2 fs=
--           ^^ fg=#ae81ff fs=
--              ^^^^^^^^^ fg=#f8f8f2 fs=
--                        ^^^ fg=#f92672 fs=
--                            ^^^^ fg=#ae81ff fs= build>=4061
--                                 ^^^^^^^^^^^^^^^ fg=#f8f8f2 fs=
  `b` int(10) unsigned NOT NULL,
--    ^^^ fg=#66d9ef fs=italic
--       ^ fg=#f8f8f2 fs=
--        ^^ fg=#ae81ff fs=
  PRIMARY KEY (`x`),
-- ^ fg=#f92672 fs=
--            ^ fg=#f8f8f2 fs=
--             ^^^ fg=#e6db74 fs=
--                ^^ fg=#f8f8f2 fs=
  KEY `x` (`y`)
-- ^ fg=#f8f8f2 fs=
--    ^^^ fg=#e6db74 fs=
--        ^ fg=#f8f8f2 fs=
--         ^^^ fg=#e6db74 fs=
--            ^ fg=#f8f8f2 fs=
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
-- ^^^^^ fg=#f8f8f2 fs=
--      ^ fg=#f92672 fs=
--       ^^^^^^ fg=#f8f8f2 fs=
--              ^^^^^^^ fg=#f92672 fs=
--                      ^^^^^^^ fg=#f8f8f2 fs=
--                             ^ fg=#f92672 fs=
--                              ^^^^^^^^^^^^ fg=#f8f8f2 fs=
--                                          ^ fg=#f92672 fs=
--                                           ^^^^^^^^^^^^^^^^ fg=#f8f8f2 fs=

INSERT INTO `x` (`a`, `b`) VALUES ('c', 'd');
-- ^ fg=#f92672 fs=
--          ^^^ fg=#e6db74 fs=
--              ^ fg=#f8f8f2 fs=
--               ^^^ fg=#e6db74 fs=
--                  ^ fg=#f8f8f2 fs=
--                    ^^^ fg=#e6db74 fs=
--                        ^ fg=#f8f8f2 fs=
--                         ^ fg=#f92672 fs=
--                                ^ fg=#f8f8f2 fs=
--                                 ^^^ fg=#e6db74 fs=
--                                    ^ fg=#f8f8f2 fs=
--                                      ^^^ fg=#e6db74 fs=
--                                         ^^ fg=#f8f8f2 fs=
