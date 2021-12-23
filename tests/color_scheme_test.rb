# COLOR SCHEME TEST "MonokaiFree/MonokaiFree.tmTheme" "Ruby"

    # This indented comment is to the preceding whitespace.
# ^ fg=#f8f8f2 bg=#272822 fs=

x = nil
#   ^^^ fg=#ae81ff fs=

x = false
#   ^^^^^ fg=#ae81ff fs=

x = __dir__
#   ^^^^^^^ fg=#66d9ef fs=

x = __FILE__
#   ^^^^^^^^ fg=#fd971f fs=italic

abc.to_s
# ^^ fg=#f8f8f2 fs=
#   ^^^^ fg=#66d9ef fs=

x = String.new("x")
#   ^^^^^^ fg=#66d9ef fs=
#         ^ fg=#f8f8f2 fs=
#          ^^^ fg=#f92672 fs=
#             ^ fg=#f8f8f2 fs=
#              ^^^ fg=#e6db74 fs=
#                 ^ fg=#f8f8f2 fs=

x = "x%dy\nz"
#   ^^ fg=#e6db74 fs=
#     ^^ fg=#ae81ff fs=
#       ^ fg=#e6db74 fs=
#        ^^ fg=#ae81ff fs=
#          ^^ fg=#e6db74 fs=

puts "x"
# ^ fg=#66d9ef fs=
#    ^^^ fg=#e6db74 fs=

x = %(x)
#   ^^^^ fg=#e6db74 fs=

x = %[x]
#   ^^^^ fg=#e6db74 fs=

x = %{x}
#   ^^^^ fg=#e6db74 fs=

x = "a#{x}b"
#   ^^ fg=#e6db74 fs=
#     ^^^^ fg=#f8f8f2 fs= build>=3177
#         ^^ fg=#e6db74 fs=

x = "a#{x.y}b"
#   ^^ fg=#e6db74 fs=
#     ^^^^^^ fg=#f8f8f2 fs= build>=3177
#           ^^ fg=#e6db74 fs=

x = "a#{X.inspect}b"
#   ^^ fg=#e6db74 fs=
#     ^^ fg=#f8f8f2 fs= build>=3177
#       ^ fg=#ae81ff fs= build>=4118
#        ^ fg=#f8f8f2 fs= build>=3177
#         ^^^^^^^ fg=#66d9ef fs=
#                ^ fg=#f8f8f2 fs= build>=3177
#                 ^^ fg=#e6db74 fs=

x = "a#{X.y}b"
#   ^^ fg=#e6db74 fs=
#     ^^ fg=#f8f8f2 fs= build>=3177
#       ^ fg=#ae81ff fs= build>=4118
#        ^^^ fg=#f8f8f2 fs= build>=3177
#           ^^ fg=#e6db74 fs=

x = "y".freeze
#   ^^^ fg=#e6db74 fs=
#      ^ fg=#f8f8f2 fs=
#       ^^^^^^ fg=#66d9ef fs=

x = /^\/?(a|b|c|\(\w*\))/
#   ^^ fg=#e6db74 fs=
#     ^^ fg=#ae81ff fs=
#       ^^^^^^^^ fg=#e6db74 fs=
#               ^^^^ fg=#ae81ff fs=
#                   ^ fg=#e6db74 fs=
#                    ^^ fg=#ae81ff fs=
#                      ^^ fg=#e6db74 fs=

x = []
#   ^^ fg=#f8f8f2 fs=

x = ["a", "b"]
#   ^ fg=#f8f8f2 fs=
#    ^^^ fg=#e6db74 fs=
#       ^ fg=#f8f8f2 fs=
#         ^^^ fg=#e6db74 fs=
#            ^ fg=#f8f8f2 fs=

x = [:a, :b]
#   ^ fg=#f8f8f2 fs=
#    ^^ fg=#ae81ff fs=
#      ^ fg=#f8f8f2 fs=
#        ^^ fg=#ae81ff fs=
#          ^ fg=#f8f8f2 fs=

x = [a, b, c].x.join(".")
#   ^^^ fg=#f8f8f2 fs=
#       ^^ fg=#f8f8f2 fs=
#          ^^^^^^^^^^ fg=#f8f8f2 fs=
#                    ^^^ fg=#e6db74 fs=
#                       ^ fg=#f8f8f2 fs=

x = [A, B, C].x.join(".")
#   ^ fg=#f8f8f2 fs=
#    ^ fg=#ae81ff fs=
#     ^ fg=#f8f8f2 fs=
#       ^ fg=#ae81ff fs=
#        ^ fg=#f8f8f2 fs=
#          ^ fg=#ae81ff fs=
#           ^ fg=#f8f8f2 fs=
#            ^^^^^^^^ fg=#f8f8f2 fs=
#                    ^^^ fg=#e6db74 fs=
#                       ^ fg=#f8f8f2 fs=

x = {}
#   ^^ fg=#f8f8f2 fs=

x = { a: "b", c: "d" }
#   ^ fg=#f8f8f2 fs=
#     ^^ fg=#ae81ff fs=
#        ^^^ fg=#e6db74 fs=
#           ^ fg=#f8f8f2 fs=
#             ^^ fg=#ae81ff fs=
#                ^^^ fg=#e6db74 fs=
#                    ^ fg=#f8f8f2 fs=

x = Class.new(X::Abc)
#   ^^^^^ fg=#66d9ef fs=italic
#        ^ fg=#f8f8f2 fs=
#         ^^^ fg=#f92672 fs=
#            ^ fg=#f8f8f2 fs=
#             ^ fg=#ae81ff fs= build>=4118
#              ^^ fg=#f8f8f2 fs=
#                ^^^ fg=#66d9ef fs=italic build>=4118
#                   ^ fg=#f8f8f2 fs=

x = merge("a" => x.y, "b" => X.y)
#   ^^^^^^ fg=#f8f8f2 fs=
#         ^^^ fg=#e6db74 fs=
#             ^^ fg=#f92672 fs=
#                ^^^^ fg=#f8f8f2 fs=
#                     ^^^ fg=#e6db74 fs=
#                         ^^ fg=#f92672 fs=
#                            ^ fg=#ae81ff fs= build>=4125
#                             ^^^ fg=#f8f8f2 fs= build>=4118

x = merge(
  "a" => x.y,
  #   ^^ fg=#f92672 fs=
  #      ^^^^ fg=#f8f8f2 fs=
  "b" => X.y
  #   ^^ fg=#f92672 fs=
  #      ^ fg=#ae81ff fs= build>=4118
  #       ^^ fg=#f8f8f2 fs=
)

call(/regex/, "x")
# ^^^ fg=#f8f8f2 fs=
#    ^^^^^^^ fg=#e6db74 fs=
#           ^ fg=#f8f8f2 fs=
#             ^^^ fg=#e6db74 fs=
#                ^ fg=#f8f8f2 fs=

abc = X.new("y")
# ^ fg=#f8f8f2 fs=
#   ^ fg=#f92672 fs=
#     ^ fg=#ae81ff fs= build>=4118
#      ^ fg=#f8f8f2 fs=
#       ^^^ fg=#f92672 fs=
#          ^ fg=#f8f8f2 fs=
#           ^^^ fg=#e6db74 fs=
#              ^ fg=#f8f8f2 fs=

abc.x
# ^^^ fg=#f8f8f2 fs=

ABC::X
# ^ fg=#ae81ff fs= build>=4118
#  ^^ fg=#f8f8f2 fs=
#    ^ fg=#ae81ff fs= build>=4118

ABC::X.Y
# ^ fg=#ae81ff fs= build>=4118
#  ^^ fg=#f8f8f2 fs=
#    ^ fg=#ae81ff fs= build>=4118
#     ^^ fg=#f8f8f2 fs=

ABC::X.y
# ^ fg=#ae81ff fs= build>=4118
#  ^^ fg=#f8f8f2 fs=
#    ^ fg=#ae81ff fs= build>=4118
#     ^^ fg=#f8f8f2 fs=

if name.is_a?(Pathname)

x = <<END
# ^ fg=#f92672 fs=
#   ^^^^^ fg=#f92672 fs=
  string
  # ^ fg=#e6db74 fs=
END
# ^ fg=#f92672 fs=

x = <<-END
  # ^^^^^^ fg=#f92672 fs=
  string
  # ^ fg=#e6db74 fs=
END
# ^ fg=#f92672 fs=

x = <<~EOF
  # ^^^^^^ fg=#f92672 fs=
  string
  # ^ fg=#e6db74 fs=
EOF
# ^ fg=#f92672 fs=

abc.each do |x|
# ^^^^^^ fg=#f8f8f2 fs=
#        ^^ fg=#f92672 fs=
#           ^ fg=#f8f8f2 fs=
#            ^ fg=#fd971f fs=italic
#             ^ fg=#f8f8f2 fs=
end
# ^ fg=#f92672 fs=

module X
# ^ fg=#f92672 fs= build>=4092
end
# ^ fg=#f92672 fs=

class X
# ^ fg=#66d9ef fs=italic build>=4081
#     ^ fg=#a6e22e fs=
end
# ^ fg=#f92672 fs=

class X::Y
#     ^^^^ fg=#a6e22e fs=
end

class X < Y
#     ^ fg=#a6e22e fs=
#       ^ fg=#f92672 fs=
#         ^ fg=#a6e22e fs=italic
end

class A::B < C::D
#     ^^^^ fg=#a6e22e fs=
#          ^ fg=#f92672 fs=
#            ^^^^ fg=#a6e22e fs=italic
end

class X # :nodoc
#       ^^^^^^^^ fg=#75715e fs=
end

class X
  x "y"
# ^ fg=#f8f8f2 fs=
#   ^^^ fg=#e6db74 fs=

  X = "y"
# ^ fg=#a6e22e fs=
#   ^ fg=#f92672 fs=
#     ^^^ fg=#e6db74 fs=

  def self.v
# ^ fg=#66d9ef fs=italic build>=4081
#     ^^^^ fg=#fd971f fs=italic
#         ^ fg=#f8f8f2 fs=
#          ^ fg=#a6e22e fs=
    A::B.new C::D
#   ^ fg=#ae81ff fs= build>=4118
#    ^^ fg=#f8f8f2 fs=
#      ^ fg=#ae81ff fs= build>=4118
#       ^ fg=#f8f8f2 fs=
#        ^^^ fg=#f92672 fs=
#            ^ fg=#ae81ff fs= build>=4118
#             ^^ fg=#f8f8f2 fs=
#               ^ fg=#ae81ff fs= build>=4118
  end
# ^ fg=#f92672 fs=

  module C
# ^ fg=#f92672 fs= build>=4092
#        ^ fg=#a6e22e fs=
    A = 5
#   ^ fg=#a6e22e fs=
#     ^ fg=#f92672 fs=
#       ^ fg=#ae81ff fs=
    B = 2
    C = 0
    D = [a, b, c].compact.join(".")
#       ^^^^^^^^^^^^^^^^^^^^^^^ fg=#f8f8f2 fs=
#                              ^^^ fg=#e6db74 fs=
#                                 ^ fg=#f8f8f2 fs=
    E = [A, B, C].compact.join(".")
#       ^ fg=#f8f8f2 fs=
#        ^ fg=#ae81ff fs=
#         ^ fg=#f8f8f2 fs=
#           ^ fg=#ae81ff fs=
#            ^ fg=#f8f8f2 fs=
#              ^ fg=#ae81ff fs=
#               ^^^^^^^^^^^^^^^ fg=#f8f8f2 fs=
#                              ^^^ fg=#e6db74 fs=
#                                 ^ fg=#f8f8f2 fs=
  end
# ^ fg=#f92672 fs=


  private
# ^ fg=#f92672 fs=

    def x
#   ^ fg=#66d9ef fs=italic build>=4081
#       ^ fg=#a6e22e fs=
    end
#   ^ fg=#f92672 fs=
end
# ^ fg=#f92672 fs=

class X

  include X::Y::Z
  # ^ fg=#f92672 fs=
  #       ^ fg=#ae81ff fs= build>=4118
  #        ^^ fg=#f8f8f2 fs=
  #          ^ fg=#ae81ff fs= build>=4118
  #           ^^ fg=#f8f8f2 fs=
  #             ^ fg=#ae81ff fs= build>=4118

  autoload :X, "y"
  # ^ fg=#66d9ef fs=
  #        ^^ fg=#ae81ff fs=
  #          ^ fg=#f8f8f2 fs=
  #            ^^^ fg=#e6db74 fs=

  def x
  # ^ fg=#66d9ef fs=italic build>=4081
  #   ^ fg=#a6e22e fs=

    puts "Hi #{@name}!"
    # ^ fg=#66d9ef fs=
    #    ^^^ fg=#e6db74 fs=
    #        ^^^^^^^^ fg=#f8f8f2 fs= build>=3177
    #                ^^ fg=#e6db74 fs=

    abc = @y
    # ^ fg=#f8f8f2 fs=
    #   ^ fg=#f92672 fs=
    #     ^^ fg=#f8f8f2 fs=

    ABC.y = z
    # ^ fg=#ae81ff fs= build>=4118
    #  ^^ fg=#f8f8f2 fs=
    #     ^ fg=#f92672 fs=
    #       ^ fg=#f8f8f2 fs=

    ABC.y(:z, x)
    # ^ fg=#ae81ff fs= build>=4118
    #  ^^^ fg=#f8f8f2 fs=
    #     ^^ fg=#ae81ff fs=
    #        ^^^ fg=#f8f8f2 fs=

    abc "y", z, Dir.pwd
    # ^ fg=#f8f8f2 fs=
    #   ^^^ fg=#e6db74 fs=
    #      ^ fg=#f8f8f2 fs=
    #        ^^ fg=#f8f8f2 fs=
    #           ^^^ fg=#66d9ef fs=italic
    #              ^^^^ fg=#f8f8f2 fs=

    @x = false
  # ^^ fg=#f8f8f2 fs=
  #    ^ fg=#f92672 fs=
  #      ^^^^^ fg=#ae81ff fs=

    @x = Class.new(X::Abc)
  # ^^ fg=#f8f8f2 fs=
  #    ^ fg=#f92672 fs=
  #      ^^^^^ fg=#66d9ef fs=italic
  #           ^ fg=#f8f8f2 fs=
  #            ^^^ fg=#f92672 fs=
  #               ^ fg=#f8f8f2 fs=
  #                ^ fg=#ae81ff fs= build>=4118
  #                 ^^ fg=#f8f8f2 fs=
  #                   ^^^ fg=#66d9ef fs=italic build>=4118
    @x = @y
  # ^^ fg=#f8f8f2 fs=
  #    ^ fg=#f92672 fs=
  #      ^^ fg=#f8f8f2 fs=

    x = "a#{@x['y']}b"
    #   ^^ fg=#e6db74 fs=
    #     ^^^^ fg=#f8f8f2 fs= build>=3177
    #       ^^ fg=#f8f8f2 fs=
    #         ^ fg=#f8f8f2 fs=
    #          ^^^ fg=#e6db74 fs=
    #             ^ fg=#f8f8f2 fs=
    #              ^ fg=#f8f8f2 fs= build>=3177
    #               ^^ fg=#e6db74 fs=

    super.merge(
    # ^^^ fg=#66d9ef fs= build>=4081
    #    ^^^^^^^ fg=#f8f8f2 fs=
      "a" => x.y,
    # ^^^ fg=#e6db74 fs=
    #     ^^ fg=#f92672 fs=
    #        ^^^^ fg=#f8f8f2 fs=
      "b" => X.y
    # ^^^ fg=#e6db74 fs=
    #     ^^ fg=#f92672 fs=
    #        ^ fg=#ae81ff fs= build>=4118
    #         ^^ fg=#f8f8f2 fs=
    )
  # ^ fg=#f8f8f2 fs=
  end

  class << self
  #     ^^ fg=#f92672 fs=
  #        ^^^^ fg=#fd971f fs=italic
    def x(y)
    #   ^ fg=#a6e22e fs=
    #    ^ fg=#f8f8f2 fs=
    #     ^ fg=#fd971f fs=italic
    #      ^ fg=#f8f8f2 fs=
      super
      # ^ fg=#66d9ef fs= build>=4081
    end

    def x
      super.x!
      # ^^^ fg=#66d9ef fs= build>=4081
      #    ^^^ fg=#f8f8f2 fs=
    end

    def x(x = {}, &block)
    #   ^ fg=#a6e22e fs=
    #    ^ fg=#f8f8f2 fs=
    #     ^ fg=#fd971f fs=italic
    #       ^ fg=#f92672 fs=
    #         ^^^ fg=#f8f8f2 fs=
    #             ^ fg=#f92672 fs=
    #              ^^^^^ fg=#fd971f fs=italic
    #                   ^ fg=#f8f8f2 fs=
      new(x, &block).x!
      # ^ fg=#f92672 fs=
      #  ^^^ fg=#f8f8f2 fs=
      #      ^ fg=#f92672 fs=
      #       ^^^^^^^^^ fg=#f8f8f2 fs=
    end

    attr_accessor :x, :y
    # ^ fg=#f92672 fs=
    alias_method :x?, :y
    # ^ fg=#f92672 fs=
    attr_reader :x, :y, :z
    # ^ fg=#f92672 fs=

    delegate :a, :b=, c: :d
    # ^ fg=#f8f8f2 fs=

    def x?
    #   ^^ fg=#a6e22e fs=
    end

    def x(name)
    #     ^^^^ fg=#fd971f fs=italic
      if name.is_a?(Pathname)
        y = name
      else
        y = Pathname.new("#{p["c"].e.f}/#{name}.yml")
      end
    rescue X::SyntaxError => e
    # ^ fg=#f92672 fs=
    #      ^ fg=#ae81ff fs= build>=4118
    #       ^^ fg=#f8f8f2 fs=
    #         ^^^^^^^^^^^ fg=#66d9ef fs=italic build>=4118
    #                     ^^ fg=#f92672 fs=
    #                        ^ fg=#f8f8f2 fs=
      raise "A #{x}" \
      # ^ fg=#f92672 fs=
      #     ^^ fg=#e6db74 fs=
      #        ^^^^ fg=#f8f8f2 fs= build>=3177
      #            ^ fg=#e6db74 fs=
      #              ^ fg=#f8f8f2 fs=
        "B" \
      # ^^^ fg=#e6db74 fs=
      #     ^ fg=#f8f8f2 fs=
        "C: #{e.message}"
      # ^^^ fg=#e6db74 fs=
      #     ^^^^^^^^^^^^ fg=#f8f8f2 fs= build>=3177
      #                 ^ fg=#e6db74 fs=
    end
  end
