export default {
  // Global page headers: https://go.nuxtjs.dev/config-head
  head: {
    title: 'client',
    htmlAttrs: {
      lang: 'en'
    },
    bodyAttrs: {
      class: 'bg-gray-100'
  },
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: '' },
      { name: 'format-detection', content: 'telephone=no' }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' },
      {
        rel: 'stylesheet',
        href: 'https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap'
    }
    ]
  },

  

  // Global CSS: https://go.nuxtjs.dev/config-css
  css: [
  ],

  // Plugins to run before rendering page: https://go.nuxtjs.dev/config-plugins
  plugins: [
  ],

  // Auto import components: https://go.nuxtjs.dev/config-components
  components: true,

  // Modules for dev and build (recommended): https://go.nuxtjs.dev/config-modules
  buildModules: [
    '@nuxtjs/eslint-module',
    // https://go.nuxtjs.dev/tailwindcss
    // '@nuxt/postcss8'
  ],

  // Modules: https://go.nuxtjs.dev/config-modules
  modules: [
    '@nuxtjs/tailwindcss',
    // https://go.nuxtjs.dev/axios
    '@nuxtjs/axios',
    '@nuxtjs/auth-next'
  ],

  
  
  auth: {
    strategies: {
      laravelSanctum: {
        provider: 'laravel/sanctum',
        url: 'http://localhost:8000',
        cookie: {
          endpoints: {
              csrf: {
                  url: '/sanctum/csrf-cookie'
              },
              login: {
                  url: '/login'
              },
              logout: {
                  url: '/logout'
              },
              user: {
                  url: '/user'
              }
          },
          user: {
              property: 'data'
          },
      },
        user: {
          property: false
        }
      }
    },

    redirect:{
      login: '/login',
      logout: '/',
      home: '/dashboard'
    },

    plugins: ['~/plugins/axios'],

  },

    // Defaults options
    tailwindcss: {
      cssPath: ['~/assets/css/tailwind.css', { injectPosition: "first" }],
      configPath: 'tailwind.config',
      exposeConfig: {
        level: 2
      },
      config: {},
      viewer: true,
      editorSupport: true,
    },

    axios: {
      baseURL: 'http://localhost:8000',
      credentials: true,
  },


  // Build Configuration: https://go.nuxtjs.dev/config-build
  build: {
  }
  
}
