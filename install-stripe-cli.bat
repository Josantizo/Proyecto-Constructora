@echo off
echo ========================================
echo    INSTALANDO STRIPE CLI
echo ========================================
echo.

echo 1. Creando carpeta temporal...
if not exist "temp" mkdir temp
cd temp

echo 2. Descargando Stripe CLI...
powershell -Command "Invoke-WebRequest -Uri 'https://github.com/stripe/stripe-cli/releases/latest/download/stripe_1.19.1_windows_x86_64.zip' -OutFile 'stripe-cli.zip'"

echo 3. Extrayendo archivo...
powershell -Command "Expand-Archive -Path 'stripe-cli.zip' -DestinationPath '.' -Force"

echo 4. Moviendo stripe.exe a Windows...
copy stripe.exe C:\Windows\stripe.exe

echo 5. Limpiando archivos temporales...
cd ..
rmdir /s /q temp

echo.
echo ========================================
echo    INSTALACION COMPLETADA
echo ========================================
echo.
echo Ahora puedes usar:
echo - stripe --version
echo - stripe login
echo - stripe listen --forward-to localhost:8000/stripe/webhook
echo.
pause 