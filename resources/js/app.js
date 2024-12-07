import './bootstrap';

import Alpine from 'alpinejs'
import intersect from '@alpinejs/intersect'
import Glide from '@glidejs/glide';

window.Glide = Glide


window.Alpine = Alpine
Alpine.plugin(intersect)


Alpine.start()
