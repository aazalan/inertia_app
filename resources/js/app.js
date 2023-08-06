import { createApp, h } from 'vue';
import { Link, createInertiaApp, Head } from '@inertiajs/vue3';
import Layout from './Shared/Layout.vue'

createInertiaApp({
  resolve: async name => {
    // const pages = import.meta.glob('./Pages/**/*.vue', { eager: true });
    // pages[`./Pages/${name}.vue`].default.layout = Layout;
    // return pages[`./Pages/${name}.vue`];

    const pages = await import.meta.glob('./Pages/**/*.vue', { eager: true });
    const page = await pages[`./Pages/${name}.vue`]
    page.default.layout = await Layout;
    return page;
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .component('Link', Link)
      .component('Head', Head)
      .mount(el)
  },
  title: (title) => 'My App - ' + title,
  progress: {
    color: '#000',
    showSpinner: false
  }
});