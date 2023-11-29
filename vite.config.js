import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

// https://vitejs.dev/config/
export default defineConfig({
  css:{
    preprocessorOptions:{
      sass:{
        additionalData: "@import 'src/sass/variables.sass' \n"
      }
    }
  },
  plugins: [vue({
    template: {
        transformAssetUrls: {
            base: null,
            includeAbsolute: false,
        },
    },
})],
})
