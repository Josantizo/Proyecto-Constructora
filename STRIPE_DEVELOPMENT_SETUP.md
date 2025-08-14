# 🚀 Configuración de Stripe para Desarrollo (Sin Dominio)

## 📋 **Opciones Disponibles:**

### **🎯 Opción 1: Stripe CLI (RECOMENDADA)**

#### **Paso 1: Instalar Stripe CLI**
```bash
# Windows (PowerShell como administrador)
winget install --id Stripe.Stripe

# O descarga manual desde:
# https://github.com/stripe/stripe-cli/releases
```

#### **Paso 2: Configurar Stripe CLI**
```bash
# Loguearte en Stripe
stripe login

# Esto abrirá tu navegador para autenticarte
```

#### **Paso 3: Ejecutar Servidor Laravel**
```bash
# Terminal 1: Servidor Laravel
php artisan serve
```

#### **Paso 4: Forwardear Webhooks**
```bash
# Terminal 2: Stripe CLI
stripe listen --forward-to localhost:8000/stripe/webhook
```

#### **Paso 5: Configurar Variables de Entorno**
```env
# En tu archivo .env
STRIPE_KEY=pk_test_...  # Tu public key de test
STRIPE_SECRET=sk_test_...  # Tu secret key de test
STRIPE_WEBHOOK_SECRET=whsec_...  # Te lo da el comando stripe listen
```

### **🌐 Opción 2: ngrok (Alternativa)**

#### **Paso 1: Instalar ngrok**
```bash
# Descarga desde: https://ngrok.com/download
# O usa winget:
winget install --id ngrok.ngrok
```

#### **Paso 2: Registrar cuenta ngrok**
1. Ve a: https://ngrok.com/signup
2. Crea cuenta gratuita
3. Obtén tu authtoken

#### **Paso 3: Configurar ngrok**
```bash
# Configurar token
ngrok config add-authtoken TU_TOKEN_AQUI

# Ejecutar servidor Laravel
php artisan serve

# En otra terminal, crear túnel
ngrok http 8000
```

#### **Paso 4: Configurar Webhook en Stripe**
1. Ve a: https://dashboard.stripe.com/webhooks
2. Crea nuevo webhook
3. URL: `https://TU_ID.ngrok.io/stripe/webhook`
4. Eventos: `checkout.session.completed`, `payment_intent.succeeded`

### **☁️ Opción 3: Deploy Temporal**

#### **Vercel (Recomendado)**
```bash
# 1. Sube tu código a GitHub
# 2. Ve a: https://vercel.com
# 3. Conecta tu repositorio
# 4. Deploy automático
# 5. Obtienes: https://tu-proyecto.vercel.app
```

#### **Railway**
```bash
# 1. Ve a: https://railway.app
# 2. Conecta GitHub
# 3. Deploy automático
# 4. Dominio: https://tu-proyecto.railway.app
```

## 🧪 **Testing del Sistema**

### **Tarjetas de Prueba de Stripe:**
```
✅ Pago Exitoso: 4242 4242 4242 4242
❌ Pago Fallido: 4000 0000 0000 0002
🔄 Pago Requiere Autenticación: 4000 0025 0000 3155
```

### **Flujo de Prueba:**
1. Ve a: `http://localhost:8000/payment`
2. Completa el formulario
3. Usa tarjeta de prueba
4. Verifica confirmación

## 🔧 **Configuración de Variables**

### **Archivo .env:**
```env
# Stripe Configuration (TEST MODE)
STRIPE_KEY=pk_test_51ABC123...
STRIPE_SECRET=sk_test_51ABC123...
STRIPE_WEBHOOK_SECRET=whsec_ABC123...

# Para producción, cambia a:
# STRIPE_KEY=pk_live_...
# STRIPE_SECRET=sk_live_...
```

## 📊 **Monitoreo de Webhooks**

### **Con Stripe CLI:**
```bash
# Ver webhooks en tiempo real
stripe listen --forward-to localhost:8000/stripe/webhook

# Verás algo como:
# 2023-01-01 12:00:00   --> checkout.session.completed [evt_123]
# 2023-01-01 12:00:01   <--  [200] POST http://localhost:8000/stripe/webhook [evt_123]
```

### **Logs de Laravel:**
```bash
# Ver logs en tiempo real
tail -f storage/logs/laravel.log

# Buscar logs de Stripe
grep "Stripe" storage/logs/laravel.log
```

## 🚨 **Solución de Problemas**

### **Error: "Invalid signature"**
```bash
# Verifica que el webhook secret sea correcto
# En .env debe coincidir con el de stripe listen
```

### **Error: "Webhook not found"**
```bash
# Asegúrate de que el servidor Laravel esté corriendo
php artisan serve

# Y que stripe listen esté activo
stripe listen --forward-to localhost:8000/stripe/webhook
```

### **Error: "Connection refused"**
```bash
# Verifica que el puerto 8000 esté libre
# O cambia el puerto:
php artisan serve --port=8080
stripe listen --forward-to localhost:8080/stripe/webhook
```

## 🎯 **Comandos Rápidos**

### **Iniciar todo el sistema:**
```bash
# Terminal 1
php artisan serve

# Terminal 2  
stripe listen --forward-to localhost:8000/stripe/webhook

# Terminal 3 (opcional - logs)
tail -f storage/logs/laravel.log
```

### **Probar pago:**
1. Abre: `http://localhost:8000/payment`
2. Usa tarjeta: `4242 4242 4242 4242`
3. Verifica confirmación

---

## ✅ **¡Listo para Desarrollar!**

Con esta configuración puedes:
- ✅ Probar pagos localmente
- ✅ Recibir webhooks en tiempo real
- ✅ Debuggear transacciones
- ✅ Desarrollar sin dominio público

**¡Que disfrutes recibiendo pagos! 🚀** 