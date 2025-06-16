import "@fontsource-variable/inter";
import axios from "axios";
import Alpine from "alpinejs";
import collapse from '@alpinejs/collapse'

window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

Alpine.plugin(collapse)
window.Alpine = Alpine;
