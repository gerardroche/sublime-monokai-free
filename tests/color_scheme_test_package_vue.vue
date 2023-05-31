<!-- COLOR SCHEME TEST "MonokaiFree/MonokaiFree.sublime-color-scheme" SKIP IF NOT "Vue Syntax Highlight/Vue Component"

Vue Syntax Highlight
========================
https://packagecontrol.io/packages/Vue%20Syntax%20Highlight
-->
<script setup>
// ^ fg=#f92672 fs= build>=4148
//      ^ fg=#a6e22e fs= build>=4148
defineProps({
// ^ fg=#66d9ef fs= build>=4148
  on: Boolean,
// ^^ fg=#f8f8f2 fs= build>=4148
//    ^ fg=#66d9ef fs=italic build>=4148
})
</script>

<template #title>
<!--  ^ fg=#b32657 fs= build>=4148 -->
    <!--  ^^ fg=#fd971f fs= build>=4148 -->
    <slot name="title" />
    <!--  ^ fg=#a6e22e fs= build>=4148 -->

    <div v-if="x" :href="x" :fizz="x">
    <!-- ^^^^ fg=#66d9ef fs= build>=4148 -->
    <!--          ^^ fg=#66d9ef fs= build>=4148 -->
    <!--                    ^^ fg=#66d9ef fs= build>=4148 -->
        fizz</div>
    <div v-else :class="x">
    <!-- ^^ fg=#66d9ef fs= build>=4148 -->
    <!--        ^^ fg=#66d9ef fs= build>=4148 -->
        buzz</div>

        <template>
<!--    ^^^^^^^^^^ fg=#b32657 fs= build>=4148 -->
        </template>
<!--    ^^^^^^^^^^^ fg=#b32657 fs= build>=4148 -->

</template>
