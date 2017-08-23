# COLOR SCHEME TEST "molokai/Monokai.tmTheme" "Ruby"
    # This test is testing
    # the whitespace before
    # the comment.
# ^ fg=#f8f8f2 bg=#272822 fs=

class Greeter
# ^ fg=#f92672 fs=
#     ^ fg=#a6e22e fs=

  def initialize(name)
  # ^ fg=#f92672 fs=
  #   ^ fg=#a6e22e fs=
  #             ^ fg=#f8f8f2 fs=
  #              ^^^^ fg=#fd971f fs=italic
  #                  ^ fg=#f8f8f2 fs=
    @name = name.capitalize
#   ^^ fg=#f8f8f2 fs=
    #     ^ fg=#f92672 fs=
    #       ^ fg=#66d9ef fs=
    #           ^ fg=#f8f8f2 fs=
    #            ^ fg=#f8f8f2 fs=
  end
  # ^ fg=#f92672 fs=

  def salute
  # ^ fg=#f92672 fs=
  #   ^ fg=#a6e22e fs=
    puts "Hello #{@name}!"
    # ^ fg=#66d9ef fs=
    #    ^^^^^^ fg=#e6db74 fs=
    #           ^^^^^^^^^^ fg=#e6db74 fs=
  end
  # ^ fg=#f92672 fs=
end
# ^ fg=#f92672 fs=

g = Greeter.new("world")
# ^ fg=#f92672 fs=
#   ^ fg=#66d9ef fs=italic
#          ^ fg=#f8f8f2 fs=
#           ^^^ fg=#f92672 fs=
#              ^ fg=#f8f8f2 fs=
#               ^^^^^^^ fg=#e6db74 fs=
#                      ^ fg=#f8f8f2 fs=
g.salute
#^ fg=#f8f8f2 fs=
# ^ fg=#f8f8f2 fs=
