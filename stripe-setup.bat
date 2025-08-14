@echo off
echo ========================================
echo    CONFIGURACION DE STRIPE CLI
echo ========================================
echo.

echo 1. Instalando Stripe CLI...
winget install --id Stripe.Stripe

echo.
echo 2. Configurando Stripe CLI...
echo Por favor, sigue las instrucciones en el navegador para loguearte.
stripe login

echo.
echo 3. Iniciando servidor Laravel...
echo Abre otra terminal y ejecuta: php artisan serve
echo.

echo 4. Forwardeando webhooks...
echo Este comando mantendra los webhooks funcionando localmente.
stripe listen --forward-to localhost:8000/stripe/webhook

echo.
echo ========================================
echo    CONFIGURACION COMPLETADA
echo ========================================
echo.
echo Ahora puedes:
echo - Ejecutar: php artisan serve
echo - En otra terminal: stripe listen --forward-to localhost:8000/stripe/webhook
echo - Probar pagos en: http://localhost:8000/payment
echo.
pause 