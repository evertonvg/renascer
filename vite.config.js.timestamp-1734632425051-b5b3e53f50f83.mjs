// vite.config.js
import { defineConfig } from "file:///H:/laragon/www/cristiano-vargas/node_modules/vite/dist/node/index.js";
import laravel from "file:///H:/laragon/www/cristiano-vargas/node_modules/laravel-vite-plugin/dist/index.js";
import path from "path";
import * as glob from "file:///H:/laragon/www/cristiano-vargas/node_modules/glob/dist/esm/index.js";
var __vite_injected_original_dirname = "H:\\laragon\\www\\cristiano-vargas";
var vite_config_default = defineConfig({
  plugins: [
    laravel({
      input: [
        // Compilar todos os arquivos CSS dentro da pasta global e páginas
        ...glob.sync("resources/css/global/*.scss"),
        ...glob.sync("resources/css/pages/*.scss"),
        // Compilar todos os arquivos JS dentro da pasta global e páginas
        ...glob.sync("resources/js/global/*.js"),
        ...glob.sync("resources/js/pages/*.js")
      ],
      refresh: true
    })
  ],
  build: {
    outDir: "build",
    // Define o diretório de saída
    manifest: true,
    // Gera o manifest.json
    emptyOutDir: true
    // Limpa a pasta de saída antes de compilar
  },
  server: {
    watch: {
      // Explicitar os diretórios para observar
      usePolling: true,
      ignoreInitial: false,
      paths: [
        "resources/css/global/**/*",
        "resources/css/pages/**/*",
        "resources/js/global/**/*",
        "resources/js/pages/**/*"
      ]
    }
  },
  resolve: {
    alias: {
      "@": path.resolve(__vite_injected_original_dirname, "resources")
    }
  }
});
export {
  vite_config_default as default
};
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcuanMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCJIOlxcXFxsYXJhZ29uXFxcXHd3d1xcXFxjcmlzdGlhbm8tdmFyZ2FzXCI7Y29uc3QgX192aXRlX2luamVjdGVkX29yaWdpbmFsX2ZpbGVuYW1lID0gXCJIOlxcXFxsYXJhZ29uXFxcXHd3d1xcXFxjcmlzdGlhbm8tdmFyZ2FzXFxcXHZpdGUuY29uZmlnLmpzXCI7Y29uc3QgX192aXRlX2luamVjdGVkX29yaWdpbmFsX2ltcG9ydF9tZXRhX3VybCA9IFwiZmlsZTovLy9IOi9sYXJhZ29uL3d3dy9jcmlzdGlhbm8tdmFyZ2FzL3ZpdGUuY29uZmlnLmpzXCI7aW1wb3J0IHsgZGVmaW5lQ29uZmlnIH0gZnJvbSAndml0ZSc7XG5pbXBvcnQgbGFyYXZlbCBmcm9tICdsYXJhdmVsLXZpdGUtcGx1Z2luJztcbmltcG9ydCBwYXRoIGZyb20gJ3BhdGgnO1xuaW1wb3J0ICogYXMgZ2xvYiBmcm9tICdnbG9iJztcblxuZXhwb3J0IGRlZmF1bHQgZGVmaW5lQ29uZmlnKHtcbiAgICBwbHVnaW5zOiBbXG4gICAgICAgIGxhcmF2ZWwoe1xuICAgICAgICAgICAgaW5wdXQ6IFtcbiAgICAgICAgICAgICAgICAvLyBDb21waWxhciB0b2RvcyBvcyBhcnF1aXZvcyBDU1MgZGVudHJvIGRhIHBhc3RhIGdsb2JhbCBlIHBcdTAwRTFnaW5hc1xuICAgICAgICAgICAgICAgIC4uLmdsb2Iuc3luYygncmVzb3VyY2VzL2Nzcy9nbG9iYWwvKi5zY3NzJyksXG4gICAgICAgICAgICAgICAgLi4uZ2xvYi5zeW5jKCdyZXNvdXJjZXMvY3NzL3BhZ2VzLyouc2NzcycpLFxuXG4gICAgICAgICAgICAgICAgLy8gQ29tcGlsYXIgdG9kb3Mgb3MgYXJxdWl2b3MgSlMgZGVudHJvIGRhIHBhc3RhIGdsb2JhbCBlIHBcdTAwRTFnaW5hc1xuICAgICAgICAgICAgICAgIC4uLmdsb2Iuc3luYygncmVzb3VyY2VzL2pzL2dsb2JhbC8qLmpzJyksXG4gICAgICAgICAgICAgICAgLi4uZ2xvYi5zeW5jKCdyZXNvdXJjZXMvanMvcGFnZXMvKi5qcycpLFxuICAgICAgICAgICAgXSxcbiAgICAgICAgICAgIHJlZnJlc2g6IHRydWUsXG4gICAgICAgIH0pLFxuICAgIF0sXG4gICAgYnVpbGQ6IHtcbiAgICAgICAgb3V0RGlyOiAnYnVpbGQnLCAvLyBEZWZpbmUgbyBkaXJldFx1MDBGM3JpbyBkZSBzYVx1MDBFRGRhXG4gICAgICAgIG1hbmlmZXN0OiB0cnVlLCAvLyBHZXJhIG8gbWFuaWZlc3QuanNvblxuICAgICAgICBlbXB0eU91dERpcjogdHJ1ZSwgLy8gTGltcGEgYSBwYXN0YSBkZSBzYVx1MDBFRGRhIGFudGVzIGRlIGNvbXBpbGFyXG4gICAgfSxcblx0c2VydmVyOiB7XG4gICAgICAgIHdhdGNoOiB7XG4gICAgICAgICAgICAvLyBFeHBsaWNpdGFyIG9zIGRpcmV0XHUwMEYzcmlvcyBwYXJhIG9ic2VydmFyXG4gICAgICAgICAgICB1c2VQb2xsaW5nOiB0cnVlLFxuICAgICAgICAgICAgaWdub3JlSW5pdGlhbDogZmFsc2UsXG4gICAgICAgICAgICBwYXRoczogW1xuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvY3NzL2dsb2JhbC8qKi8qJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Nzcy9wYWdlcy8qKi8qJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2pzL2dsb2JhbC8qKi8qJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2pzL3BhZ2VzLyoqLyonXG4gICAgICAgICAgICBdLFxuICAgICAgICB9LFxuICAgIH0sXG4gICAgcmVzb2x2ZToge1xuICAgICAgICBhbGlhczoge1xuICAgICAgICAgICAgJ0AnOiBwYXRoLnJlc29sdmUoX19kaXJuYW1lLCAncmVzb3VyY2VzJyksXG4gICAgICAgIH0sXG4gICAgfSxcbn0pOyJdLAogICJtYXBwaW5ncyI6ICI7QUFBdVIsU0FBUyxvQkFBb0I7QUFDcFQsT0FBTyxhQUFhO0FBQ3BCLE9BQU8sVUFBVTtBQUNqQixZQUFZLFVBQVU7QUFIdEIsSUFBTSxtQ0FBbUM7QUFLekMsSUFBTyxzQkFBUSxhQUFhO0FBQUEsRUFDeEIsU0FBUztBQUFBLElBQ0wsUUFBUTtBQUFBLE1BQ0osT0FBTztBQUFBO0FBQUEsUUFFSCxHQUFRLFVBQUssNkJBQTZCO0FBQUEsUUFDMUMsR0FBUSxVQUFLLDRCQUE0QjtBQUFBO0FBQUEsUUFHekMsR0FBUSxVQUFLLDBCQUEwQjtBQUFBLFFBQ3ZDLEdBQVEsVUFBSyx5QkFBeUI7QUFBQSxNQUMxQztBQUFBLE1BQ0EsU0FBUztBQUFBLElBQ2IsQ0FBQztBQUFBLEVBQ0w7QUFBQSxFQUNBLE9BQU87QUFBQSxJQUNILFFBQVE7QUFBQTtBQUFBLElBQ1IsVUFBVTtBQUFBO0FBQUEsSUFDVixhQUFhO0FBQUE7QUFBQSxFQUNqQjtBQUFBLEVBQ0gsUUFBUTtBQUFBLElBQ0QsT0FBTztBQUFBO0FBQUEsTUFFSCxZQUFZO0FBQUEsTUFDWixlQUFlO0FBQUEsTUFDZixPQUFPO0FBQUEsUUFDSDtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLE1BQ0o7QUFBQSxJQUNKO0FBQUEsRUFDSjtBQUFBLEVBQ0EsU0FBUztBQUFBLElBQ0wsT0FBTztBQUFBLE1BQ0gsS0FBSyxLQUFLLFFBQVEsa0NBQVcsV0FBVztBQUFBLElBQzVDO0FBQUEsRUFDSjtBQUNKLENBQUM7IiwKICAibmFtZXMiOiBbXQp9Cg==
