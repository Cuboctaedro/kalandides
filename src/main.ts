import Alpine from 'alpinejs';
import { menuStore } from './menu'
import './style.css'

//@ts-ignore
window.Alpine = Alpine

Alpine.store('menu', menuStore)

Alpine.start()
