@component('mail::message')
# 📩 Nueva Sugerencia Recibida

Se ha recibido una nueva sugerencia desde la web:

**Nombre:** {{ $sugerencia->nombre }}  
**Email:** {{ $sugerencia->email }}

---

### 📜 Mensaje
{{ $sugerencia->mensaje }}

@component('mail::button', ['url' => url('/')])
Ir a la web
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
