# COLOR SCHEME TEST "molokai/Monokai.tmTheme" "Python"  # flake8: noqa
    # This test is testing
    # the whitespace before
    # the comment.
# ^ fg=#f8f8f2 bg=#272822 fs=

import os
# ^ fg=#f92672 fs=
#      ^ fg=#f8f8f2 fs=


_AB = 'ab'
# ^ fg=#f8f8f2 fs=
#   ^ fg=#f92672 fs=
#     ^^^ fg=#e6db74 fs=

f_name(_AB)
# ^ fg=#66d9ef fs=
#     ^^^^^ fg=#f8f8f2 fs=

x = isinstance(y, list)
#   ^ fg=#66d9ef fs=
#              ^^ fg=#f8f8f2 fs=
#                 ^ fg=#66d9ef fs=italic

y = '|'.join(sorted(x))
#   ^^^ fg=#e6db74 fs=
#      ^ fg=#f8f8f2 fs=
#       ^ fg=#66d9ef fs=
#           ^ fg=#f8f8f2 fs=
#            ^ fg=#66d9ef fs=
#                  ^^^^ fg=#f8f8f2 fs=


@requires_x
# ^ fg=#f8f8f2 fs=
def f_name(arg1='', arg2=0):
# ^ fg=#66d9ef fs=italic
#   ^ fg=#a6e22e fs=
#          ^ fg=#fd971f fs=italic
#              ^ fg=#f92672 fs=
#               ^^ fg=#e6db74 fs=
#                 ^ fg=#f8f8f2 fs=
#                   ^ fg=#fd971f fs=italic
#                       ^ fg=#f92672 fs=
#                        ^ fg=#ae81ff fs=
    r'''A docstring'''
    if arg1 > arg2: # interesting
#   ^ fg=#f92672 fs=
    #       ^ fg=#f92672 fs=
        print 'Gre\'ater'
        # ^ fg=#f92672 fs=
        #     ^^^^ fg=#e6db74 fs=
        #         ^^ fg=#ae81ff fs=
        #           ^^^^^ fg=#e6db74 fs=

    xyz = arg2[0]
    # ^ fg=#f8f8f2 fs=
    #      ^ fg=#f8f8f2 fs=
    arg1.f_name(xyz)
    # ^^^ fg=#f8f8f2 fs=
    #    ^ fg=#66d9ef fs=
    #          ^^^^^ fg=#f8f8f2 fs=

    return None
    # ^ fg=#f92672 fs=
    #      ^ fg=#ae81ff fs=


class PassMe():
# ^ fg=#66d9ef fs=italic
#     ^ fg=#a6e22e fs=
#           ^^^ fg=#f8f8f2 fs=
    pass
#   ^ fg=#f92672 fs=


class AClassName():

    def __init__(self, arg1):
    # ^ fg=#66d9ef fs=italic
        # ^ fg=#66d9ef fs=
    #           ^ fg=#f8f8f2 fs=
    #             ^ fg=#fd971f fs=italic
    #                ^ fg=#f8f8f2 fs=
    #                  ^ fg=#fd971f fs=italic
    #                      ^^ fg=#f8f8f2 fs=
        self.arg1 = arg1
        # ^ fg=#fd971f fs=italic
        #   ^^ fg=#f8f8f2 fs=
        #         ^ fg=#f92672 fs=
        #           ^ fg=#f8f8f2 fs=

        self.ab()
        # ^ fg=#fd971f fs=italic
        #   ^ fg=#f8f8f2 fs=
        #    ^ fg=#66d9ef fs=
        #      ^^ fg=#f8f8f2 fs=

        self.prop.ab()
        # ^ fg=#fd971f fs=italic
        #   ^ fg=#f8f8f2 fs=
        #        ^ fg=#f8f8f2 fs=
        #         ^ fg=#66d9ef fs=
        #           ^^ fg=#f8f8f2 fs=

        abc(arg1)
        # ^ fg=#66d9ef fs=
        #         ^^^^^^ fg=#f8f8f2 fs=


    def ab():
        pass


>>> message = '''interpreter
#^^ fg=#f92672 fs=
#   ^ fg=#f8f8f2 fs=
#           ^ fg=#f92672 fs=
#             ^^^^^^^^^^^^^^ fg=#e6db74 fs=
... prompt'''
# ^ fg=#e6db74 fs=
