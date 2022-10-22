import { defineConfig } from 'vite'
import liveReload from 'vite-plugin-live-reload'
const { resolve } = require('path')

// https://vitejs.dev/config
export default defineConfig({
  plugins: [liveReload(__dirname + '/**/*.php')],

  // config
  root: '',
  base: './dist',
  build: {
    outDir: resolve(__dirname, './dist'),
    emptyOutDir: true,
    manifest: false,
    target: 'es2021',
    rollupOptions: {
      output: {
        entryFileNames: `[name].js`,
        chunkFileNames: `[name].js`,
        assetFileNames: `[name].[ext]`
      },
      input: {
        main: resolve(__dirname + '/main.js')
      }
    },
    minify: true,
    write: true,
    watch: {}
  },

  server: {
    cors: true,
    strictPort: true,
    port: 3000,
    https: false,
    hmr: {
      host: 'http://wpchildsite.local/'
    }
  },
  resolve: {
    alias: {}
  }
})
