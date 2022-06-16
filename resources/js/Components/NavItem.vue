<template>
  <li>
    <Link
      :href="href"
      :class="['block px-3 py-2 rounded-md', isActive ? 'bg-sky-500 text-white' : 'bg-slate-50']"
    >
      <slot></slot>
    </Link>
  </li>
</template>

<script>
  import { Link } from '@inertiajs/inertia-vue3';

  export default {
    components: {
        Link,
    },
    props: {
      href: {
        type: String,
        required: true,
      },
      isActive: Boolean,
    },
  }
</script>
