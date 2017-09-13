# COLOR SCHEME TEST "MonokaiFree/MonokaiFree.tmTheme" "Python" # flake8: noqa

    # This indented comment is to the preceding whitespace.
# ^ fg=#f8f8f2 bg=#272822 fs=

import os
# ^^^^ fg=#f92672 fs=
#      ^^ fg=#f8f8f2 fs=

def name():
# ^ fg=#66d9ef fs=italic
#   ^^^^ fg=#a6e22e fs=
#       ^^^ fg=#f8f8f2 fs=
    var = 'x'
    # ^ fg=#f8f8f2 fs=
    #   ^ fg=#f92672 fs=
    #     ^^^ fg=#e6db74 fs=
    call(x, 'y', True, False)
    # ^^ fg=#66d9ef fs=
    #   ^^^ fg=#f8f8f2 fs=
    #       ^^^ fg=#e6db74 fs=
    #          ^ fg=#f8f8f2 fs=
    #            ^^^^ fg=#ae81ff fs=
    #                ^ fg=#f8f8f2 fs=
    #                  ^^^^^ fg=#ae81ff fs=
    #                       ^ fg=#f8f8f2 fs=

    if isinstance(var, list):
#   ^^ fg=#f92672 fs=
    #  ^^^^^^^^^^ fg=#66d9ef fs=
    #            ^^^^^ fg=#f8f8f2 fs=
    #                  ^^^^ fg=#66d9ef fs=italic
    #                      ^^ fg=#f8f8f2 fs=
        arr = []
        # ^ fg=#f8f8f2 fs=
        #   ^ fg=#f92672 fs=
        #     ^^ fg=#f8f8f2 fs=
        arr.append('x')
        # ^^ fg=#f8f8f2 fs=
        #   ^^^^^^ fg=#66d9ef fs=
        #         ^ fg=#f8f8f2 fs=
        #          ^^^ fg=#e6db74 fs=
        #             ^ fg=#f8f8f2 fs=
        arr.sort()
        # ^^ fg=#f8f8f2 fs=
        #   ^^^^ fg=#66d9ef fs=
        #       ^^ fg=#f8f8f2 fs=

        if len(x):
        #  ^^^ fg=#66d9ef fs=
        #     ^^^^ fg=#f8f8f2 fs=
            print('Hi')
            # ^ fg=#66d9ef fs=
            #    ^ fg=#f8f8f2 fs=
            #     ^^^^ fg=#e6db74 fs=
            #         ^ fg=#f8f8f2 fs=

    _ = '|'.join(sorted(x))
    #   ^^^ fg=#e6db74 fs=
    #      ^ fg=#f8f8f2 fs=
    #       ^^^^ fg=#66d9ef fs=
    #           ^ fg=#f8f8f2 fs=
    #            ^^^^^^ fg=#66d9ef fs=
    #                  ^^^^ fg=#f8f8f2 fs=

    fmt = 'x={}'.format(s['y'])
    # ^ fg=#f8f8f2 fs=
    #   ^ fg=#f92672 fs=
    #     ^^^ fg=#e6db74 fs=
    #        ^^ fg=#ae81ff fs=
    #          ^ fg=#e6db74 fs=
    #           ^ fg=#f8f8f2 fs=
    #            ^^^^^^ fg=#66d9ef fs=
    #                  ^^^ fg=#f8f8f2 fs=
    #                     ^^^ fg=#e6db74 fs=
    #                        ^^ fg=#f8f8f2 fs=
    fmt += '_\n_'
    # ^ fg=#f8f8f2 fs=
    #   ^^ fg=#f92672 fs=
    #      ^^ fg=#e6db74 fs=
    #        ^^ fg=#ae81ff fs=
    #          ^^ fg=#e6db74 fs=

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
#           ^ fg=#f92672 fs=
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


class X():
# ^^^ fg=#66d9ef fs=italic
#    ^ fg=#f8f8f2 fs=
#     ^ fg=#a6e22e fs=
#      ^^^ fg=#f8f8f2 fs=
    pass
#   ^^^^ fg=#f92672 fs=


class X(Y):
#   ^ fg=#66d9ef fs=italic
#    ^ fg=#f8f8f2 fs=
#     ^ fg=#a6e22e fs=
#      ^ fg=#f8f8f2 fs=
#       ^ fg=#a6e22e fs=italic
#        ^^ fg=#f8f8f2 fs=

    def __init__(self):
    # ^ fg=#66d9ef fs=italic
    #   ^^^^^^^^ fg=#66d9ef fs=
    #           ^ fg=#f8f8f2 fs=
    #            ^^^^ fg=#fd971f fs=italic
    #                ^^ fg=#f8f8f2 fs=
        self.x = 123
        # ^ fg=#fd971f fs=italic
        #   ^ fg=#f8f8f2 fs=
        #    ^ fg=#f8f8f2 fs=
        #      ^ fg=#f92672 fs=
        #        ^^^ fg=#ae81ff fs=

        self.x()
        # ^ fg=#fd971f fs=italic
        #   ^ fg=#f8f8f2 fs=
        #    ^ fg=#66d9ef fs=
        #     ^^ fg=#f8f8f2 fs=

        self.x.y()
        # ^ fg=#fd971f fs=italic
        #   ^ fg=#f8f8f2 fs=
        #    ^ fg=#f8f8f2 fs=
        #     ^ fg=#f8f8f2 fs=
        #      ^ fg=#66d9ef fs=
        #       ^^ fg=#f8f8f2 fs=

        abc(y)
        # ^ fg=#66d9ef fs=
        #  ^^^ fg=#f8f8f2 fs=

    def z(self, a, b):
    # ^ fg=#66d9ef fs=italic
    #   ^ fg=#a6e22e fs=
    #    ^ fg=#f8f8f2 fs=
    #     ^^^^ fg=#fd971f fs=italic
    #         ^ fg=#f8f8f2 fs=
    #           ^ fg=#fd971f fs=italic
    #            ^ fg=#f8f8f2 fs=
    #              ^ fg=#fd971f fs=italic
    #               ^^ fg=#f8f8f2 fs=
        if a == b:
    #   ^^ fg=#f92672 fs=
        #  ^ fg=#f8f8f2 fs=
        #    ^^ fg=#f92672 fs=
        #       ^^ fg=#f8f8f2 fs=
            if fcall(a, b):
        #   ^^ fg=#f92672 fs=
            #  ^^^^^ fg=#66d9ef fs=
            #       ^^^ fg=#f8f8f2 fs=
            #           ^^^ fg=#f8f8f2 fs=
                return True
                #    ^ fg=#f92672 fs=
                #      ^^^^ fg=#ae81ff fs=

        return None
        #    ^ fg=#f92672 fs=
        #      ^^^^ fg=#ae81ff fs=


>>> message = '''interpreter
#^^ fg=#f92672 fs=
#   ^ fg=#f8f8f2 fs=
#           ^ fg=#f92672 fs=
#             ^^^^^^^^^^^^^^ fg=#e6db74 fs=
... prompt'''
# ^ fg=#e6db74 fs=
