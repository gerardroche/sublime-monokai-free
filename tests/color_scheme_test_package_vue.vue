<!-- COLOR SCHEME TEST "MonokaiFree/MonokaiFree.sublime-color-scheme" SKIP IF NOT "Vue Syntax Highlight/Vue Component"

Vue Syntax Highlight
========================
https://packagecontrol.io/packages/Vue%20Syntax%20Highlight
-->
<script setup>
// ^ fg=#f92672 fs=
//      ^ fg=#a6e22e fs=
defineProps({
// ^ fg=#66d9ef fs=
  on: Boolean,
// ^^ fg=#f8f8f2 fs=
//    ^ fg=#66d9ef fs=italic
})
</script>

<template #title>
<!--  ^ fg=#b32657 fs= -->
    <!--  ^^ fg=#fd971f fs= -->
    <slot name="title" />
    <!--  ^ fg=#a6e22e fs= -->

    <div v-if="x" :href="x" :fizz="x">
    <!-- ^^^^ fg=#66d9ef fs= -->
    <!--          ^^ fg=#66d9ef fs= -->
    <!--                    ^^ fg=#66d9ef fs= -->
        fizz</div>
    <div v-else :class="x">
    <!-- ^^ fg=#66d9ef fs= -->
    <!--        ^^ fg=#66d9ef fs= -->
        buzz</div>

        <template>
<!--    ^^^^^^^^^^ fg=#b32657 fs= -->
        </template>
<!--    ^^^^^^^^^^^ fg=#b32657 fs= -->

</template>
