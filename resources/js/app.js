import './bootstrap';
import '../css/app.css';

import.meta.glob(['../images/**']);


import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';

window.Alpine = Alpine;
Livewire.start();
