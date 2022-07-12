import './bootstrap';

import Alpine from 'alpinejs';

import { useExitIntent } from './Plugins/exit-intent.js'

window.Alpine = Alpine;

Alpine.start();

const { initExitIntent } = useExitIntent()

initExitIntent()
