# COLOR SCHEME TEST "MonokaiFree/MonokaiFree.tmTheme" "Python" # flake8: noqa

    # This indented comment is to the preceding whitespace.
# ^ fg=#f8f8f2 bg=#272822 fs=

import os
# ^^^^ fg=#f92672 fs=
#      ^^ fg=#f8f8f2 fs=

import path from os
#           ^^^^ fg=#f92672 bg=#f9267260 fs= build>=3154

__all__
# ^^^^^ fg=#66d9ef fs=

__file__
# ^^^^^^ fg=#66d9ef fs=

__missing__
# ^^^^^^^^^ fg=#66d9ef fs= build>=3127

__bool__
# ^^^^^^ fg=#66d9ef fs= build>=3127

__debug__
# ^^^^^^^ fg=#ae81ff fs= build>=3127

abc = 'x'
# ^ fg=#f8f8f2 fs=
#   ^ fg=#f92672 fs=
#     ^^^ fg=#e6db74 fs=

x = "_\x00_\xaa_\'_%s_"
#   ^^ fg=#e6db74 fs=
#     ^^^^ fg=#ae81ff fs=
#         ^ fg=#e6db74 fs=
#          ^^^^ fg=#ae81ff fs=
#              ^ fg=#e6db74 fs=
#               ^^ fg=#ae81ff fs=
#                 ^ fg=#e6db74 fs=
#                  ^^ fg=#ae81ff fs=
#                    ^^ fg=#e6db74 fs=

x = '_\m_\\m_'
#   ^^ fg=#e6db74 fs=
#     ^^ fg=#fd5ff0 bg=#fd5ff060 build>=3154
#       ^ fg=#e6db74 fs=
#        ^^ fg=#ae81ff fs=
#          ^^^ fg=#e6db74 fs=

x = b'x'
#   ^ fg=#66d9ef fs=italic
#    ^^^ fg=#e6db74 fs=

'ab'.upper()
# ^^ fg=#e6db74 fs=
#   ^ fg=#f8f8f2 fs=
#    ^^^^^ fg=#66d9ef fs=
#         ^^ fg=#f8f8f2 fs=

x = '|'.join(sorted(x))
#   ^^^ fg=#e6db74 fs=
#      ^ fg=#f8f8f2 fs=
#       ^^^^ fg=#66d9ef fs=
#           ^ fg=#f8f8f2 fs=
#            ^^^^^^ fg=#66d9ef fs=
#                  ^^^^ fg=#f8f8f2 fs=

x = f"{x}"
#   ^ fg=#66d9ef fs=italic
#    ^ fg=#e6db74 fs=
#     ^^^ fg=#f8f8f2 fs=
#        ^ fg=#e6db74 fs=

def x():
# ^ fg=#66d9ef fs=italic
#   ^ fg=#a6e22e fs=
#    ^^^ fg=#f8f8f2 fs=
    pass
    # ^ fg=#f92672 fs=

def x():
    """x"""
#   ^^^^^^^ fg=#75715e fs=
    pass

def x():
    """
#   ^^^ fg=#75715e fs=
    x
#   ^ fg=#75715e fs=
    """
#   ^^^ fg=#75715e fs=
#   pass

def x():

    abc = 'x'
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

    call(x=y)
    # ^^ fg=#66d9ef fs=
    #   ^ fg=#f8f8f2 fs=
    #    ^ fg=#fd971f fs=italic
    #     ^ fg=#f92672 fs=
    #      ^^ fg=#f8f8f2 fs=

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
    #   ^^ fg=#f92672 fs=
        #  ^^^ fg=#66d9ef fs=
        #     ^^^^ fg=#f8f8f2 fs=
            print('Hi')
            # ^ fg=#66d9ef fs=
            #    ^ fg=#f8f8f2 fs=
            #     ^^^^ fg=#e6db74 fs=
            #         ^ fg=#f8f8f2 fs=

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

    x = u'x%s' % y
    #   ^ fg=#66d9ef fs=italic
    #    ^^ fg=#e6db74 fs=
    #      ^^ fg=#ae81ff fs=
    #        ^ fg=#e6db74 fs=
    #          ^ fg=#f92672 fs=
    #            ^ fg=#f8f8f2 fs=

    x = "x {y} z".format(y=z)
    #   ^^^ fg=#e6db74 fs=
    #      ^^^ fg=#ae81ff fs=
    #         ^^^ fg=#e6db74 fs=
    #            ^ fg=#f8f8f2 fs=
    #             ^^^^^^ fg=#66d9ef fs=
    #                   ^ fg=#f8f8f2 fs=
    #                    ^ fg=#fd971f fs=italic
    #                     ^ fg=#f92672 fs=
    #                      ^^ fg=#f8f8f2 fs=

    x = re.match('^.+\\.x$')
    #   ^^^ fg=#f8f8f2 fs=
    #      ^^^^^ fg=#66d9ef fs=
    #           ^ fg=#f8f8f2 fs=
    #            ^^^^ fg=#e6db74 fs=
    #                ^^ fg=#ae81ff fs= build>=3154
    #                  ^^^^ fg=#e6db74 fs=
    #                      ^ fg=#f8f8f2 fs=

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

    if a > b: # x
#   ^^ fg=#f92672 fs=
    #  ^ fg=#f8f8f2 fs=
    #    ^ fg=#f92672 fs=
    #      ^^ fg=#f8f8f2 fs=
    #         ^^^ fg=#75715e fs=
        print 'a\'b'
        # ^ fg=#f92672 fs=
        #     ^^ fg=#e6db74 fs=
        #       ^^ fg=#ae81ff fs=
        #         ^^ fg=#e6db74 fs=

    abc = d[0]
    # ^ fg=#f8f8f2 fs=
    #   ^ fg=#f92672 fs=
    #     ^^ fg=#f8f8f2 fs=
    #       ^ fg=#ae81ff fs=
    #        ^ fg=#f8f8f2 fs=

    abc.d(e)
    # ^^ fg=#f8f8f2 fs=
    #   ^ fg=#66d9ef fs=
    #    ^^^ fg=#f8f8f2 fs=

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

    def __str__(self)
    # ^ fg=#66d9ef fs=italic
    #   ^^^^^^^ fg=#66d9ef fs=
    #          ^ fg=#f8f8f2 fs=
    #           ^^^^ fg=#fd971f fs=italic
    #               ^ fg=#f8f8f2 fs=
        return 'x'

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

    @zyx
#   ^^^^ fg=#f8f8f2 fs= build>=3127
    def x(self):
        pass


>>> msg = '''interpreter
#^^ fg=#f92672 fs=
#   ^^^ fg=#f8f8f2 fs=
#       ^ fg=#f92672 fs=
#         ^^^^^^^^^^^^^^ fg=#e6db74 fs=
... prompt'''
# ^^^^^^^^^^^ fg=#e6db74 fs=
