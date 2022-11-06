<template>
<div class="breadcrumbs-wrapper">
  <a v-for="(item , index) in card.breadcrumbs" 
  :key="index" 
  :href="item.url" 
  class="breadcrumb-item text-primary-500" 
  :class="{'deactive': !item?.active}"
  v-text="item.title"></a>
</div>
</template>

<script>
export default {
  props: [
    'card',

    // The following props are only available on resource detail cards...
    // 'resource',
    // 'resourceId',
    // 'resourceName',
  ],
}
</script>
