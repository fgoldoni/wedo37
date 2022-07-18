import './bootstrap';

import internationalNumber from './Plugins/internationalNumber'
import 'intl-tel-input/build/css/intlTelInput.css'

import Alpine from 'alpinejs';

import { useExitIntent } from './Plugins/exit-intent.js'

window.Alpine = Alpine;

Alpine.data('internationalNumber', internationalNumber)


Alpine.start();

const { initExitIntent } = useExitIntent()

initExitIntent()
