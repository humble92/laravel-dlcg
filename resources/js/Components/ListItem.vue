<template>
  <article class="flex items-start space-x-6 p-6">
    <div class="min-w-0 relative flex-auto">
      <h2 class="font-semibold text-slate-900 truncate pr-20">{{ item.name }}</h2>
      <dl class="mt-2 flex flex-wrap text-sm leading-6 font-medium">
        <div class="flex-none w-full mt-2 font-normal">
          <dt class="sr-only">Price</dt>
          <dd class="text-slate-700">$ {{ item.price }}</dd>
        </div>
      </dl>
    </div>
  </article>
</template>

<script>
export default {
  props: ['item'],
}
</script>