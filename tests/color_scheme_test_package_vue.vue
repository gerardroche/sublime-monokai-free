<!-- COLOR SCHEME TEST "MonokaiFree/MonokaiFree.tmTheme" SKIP IF NOT "Vue Syntax Highlight/Vue Component"

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
<!--  ^ fg=#f92672aa fs= -->
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
<!--    ^^^^^^^^^^ fg=#f92672aa fs= -->
        </template>
<!--    ^^^^^^^^^^^ fg=#f92672aa fs= -->

</template>
