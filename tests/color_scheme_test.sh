# COLOR SCHEME TEST "MonokaiFree/MonokaiFree.sublime-color-scheme" SKIP IF NOT "Bash"

set -e
# ^ fg=#66d9ef fs=
#   ^^ fg=#fd971f fs=italic

unset CDPATH
# ^ fg=#66d9ef fs=
#     ^ fg=#f8f8f2 fs=

abc="y"
# ^ fg=#f8f8f2 fs=
#  ^ fg=#f92672 fs=
#   ^^^ fg=#e6db74 fs=

x="$y"
# ^ fg=#e6db74 fs=
#  ^^ fg=#f8f8f2 fs=
#    ^ fg=#e6db74 fs=

x="$(basename "$y")"
# ^ fg=#e6db74 fs=
#  ^ fg=#f8f8f2 fs=
#   ^ fg=#f8f8f2 fs=
#    ^^^^^^^^ fg=#66d9ef fs=
#             ^ fg=#e6db74 fs=
#              ^^ fg=#f8f8f2 fs=
#                ^ fg=#e6db74 fs=
#                 ^ fg=#f8f8f2 fs=
#                  ^ fg=#e6db74 fs=

x="./${x#$HOME/}"
# ^^^ fg=#e6db74 fs=
#    ^ fg=#f8f8f2 fs=
#     ^ fg=#f8f8f2 fs=
#      ^ fg=#f8f8f2 fs=
#       ^ fg=#f92672 fs=
#        ^^^^^ fg=#f8f8f2 fs=
#             ^ fg=#f8f8f2 fs= build>=4090
#              ^ fg=#f8f8f2 fs=
#               ^ fg=#e6db74 fs=

a=${b%/} c=${d%.e}
# ^ fg=#f8f8f2 fs=
#  ^ fg=#f8f8f2 fs=
#   ^ fg=#f8f8f2 fs=
#    ^ fg=#f92672 fs= build>=4090
#     ^ fg=#f8f8f2 fs= build>=4090
#      ^ fg=#f8f8f2 fs=
#        ^ fg=#f8f8f2 fs=
#         ^ fg=#f92672 fs=
#          ^ fg=#f8f8f2 fs=
#           ^ fg=#f8f8f2 fs=
#            ^ fg=#f8f8f2 fs=
#             ^ fg=#f92672 fs=
#              ^^ fg=#f8f8f2 fs= build>=4090
#                ^ fg=#f8f8f2 fs=
