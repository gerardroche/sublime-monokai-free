<!-- COLOR SCHEME TEST "MonokaiFree.sublime-color-scheme" SKIP IF NOT "Vue Syntax Highlight/Vue Component"

Vue Syntax Highlight
========================
https://packagecontrol.io/packages/Vue%20Syntax%20Highlight
-->
<script setup>
// ^ fg=#f92672 fs= build>=4148
//      ^ fg=#a6e22e fs= build>=4148
//
import { ref } from 'vue'
// ^ fg=#f92672 fs= build>=4168
//     ^ fg=#f8f8f2 fs= build>=4168
//       ^^^ fg=#f8f8f2 fs= build>=4168
//           ^ fg=#f8f8f2 fs= build>=4168
//             ^ fg=#f92672 fs= build>=4168
//                  ^^^^ fg=#e6db74 fs= build>=4168

defineProps({
// ^ fg=#66d9ef fs= build>=4148
  on: Boolean,
// ^^ fg=#f8f8f2 fs= build>=4148
//    ^ fg=#66d9ef fs=italic build>=4148
})

const props = defineProps(['title'])
// ^ fg=#f92672 fs=italic build>=4168
//    ^ fg=#f8f8f2 fs= build>=4168
//            ^ fg=#66d9ef fs= build>=4168

const count = ref(0)
// ^ fg=#f92672 fs=italic build>=4168
//    ^ fg=#f8f8f2 fs= build>=4168
//            ^ fg=#66d9ef fs= build>=4168
//                ^ fg=#ae81ff fs= build>=4168

const publishedBooksMessage = computed(() => {
// ^ fg=#f92672 fs=italic build>=4168
//                            ^ fg=#66d9ef fs= build>=4168
//                                        ^^ fg=#f92672 fs= build>=4168
  return author.books.length > 0 ? 'Yes' : 'No'
})

function increment() {
// ^ fg=#66d9ef fs=italic build>=4168
//       ^ fg=#a6e22e fs= build>=4168
  count.value++
//    ^ fg=#f8f8f2 fs= build>=4168
//     ^ fg=#f8f8f2 fs= build>=4168
//      ^ fg=#f8f8f2 fs= build>=4168
}

</script>

<template #title>
<!--  ^ fg=#f92672 fs= build>=4168 -->
<!--            ^ fg=#f8f8f2 fs= build>=4168 -->
    <!--  ^^^^^^ fg=#a6e22e fs= build>=4168 -->
    <slot name="title" />
    <!--  ^ fg=#a6e22e fs= build>=4148 -->

    <div v-if="x" :href="x" :fizz="x">
    <!-- ^^^^ fg=#a6e22e fs= build>=4168 -->
    <!--          ^^^^^ fg=#a6e22e fs= build>=4168 -->
    <!--                    ^^^^^ fg=#a6e22e fs= build>=4168 -->
        fizz</div>
    <div v-else :class="x">
    <!-- ^^^^^^ fg=#a6e22e fs= build>=4168 -->
    <!--        ^^^^^^ fg=#a6e22e fs= build>=4168 -->
        buzz</div>

        <template>
<!--    ^ fg=#f8f8f2 fs= build>=4168 -->
<!--     ^^^^^^^^  fg=#f92672 fs= build>=4168 -->
<!--             ^ fg=#f8f8f2 fs= build>=4168 -->
          <button @click="increment">
          <!--    ^^ fg=#a6e22e fs= build>=4168 -->
          <!--           ^ fg=#e6db74 fs= build>=4168 -->
          <!--            ^ fg=#f8f8f2 fs= build>=4168 -->
          <!--                     ^ fg=#e6db74 fs= build>=4168 -->
            {{ count }}
          </button>
          <span :key="text">{{ text }}</span>
          <button class="btn" v-bind="$attrs">click me</button>
          <!--                        ^ fg=#f8f8f2 fs= build>=4168 -->
          <!--                         ^ fg=#f8f8f2 fs= build>=4168 -->
          <p :class="$attrs.class">Hi!</p>
          <!--       ^ fg=#fd971f fs= build>=4168 -->
          <!--        ^ fg=#fd971f fs= build>=4168 -->
          <!--             ^ fg=#f8f8f2 fs= build>=4168 -->
          <!--              ^ fg=#f8f8f2 fs= build>=4168 -->
          <p :class="$page.post.id">Hi!</p>
          <!--       ^ fg=#fd971f fs= build>=4168 -->
          <!--        ^ fg=#fd971f fs= build>=4168 -->
          <!--            ^ fg=#f8f8f2 fs= build>=4168 -->
          <!--             ^ fg=#f8f8f2 fs= build>=4168 -->
          <!--                 ^ fg=#f8f8f2 fs= build>=4168 -->
          <!--                  ^ fg=#f8f8f2 fs= build>=4168 -->
        </template>
<!--    ^^ fg=#f8f8f2 fs= build>=4168 -->
<!--      ^^^^^^^^  fg=#f92672 fs= build>=4168 -->
<!--              ^ fg=#f8f8f2 fs= build>=4168 -->

</template>
<!-- ^^^^^  fg=#f92672 fs= build>=4168 -->
<!--      ^ fg=#f8f8f2 fs= build>=4168 -->
