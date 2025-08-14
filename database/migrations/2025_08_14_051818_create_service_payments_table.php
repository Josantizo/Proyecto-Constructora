<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('service_payments', function (Blueprint $table) {
            $table->id();
            $table->string('stripe_session_id')->unique(); // ID de sesión de Stripe
            $table->string('stripe_payment_intent_id')->nullable(); // ID del intento de pago
            $table->string('service_type'); // Tipo de servicio
            $table->decimal('amount', 10, 2); // Monto del pago
            $table->string('currency', 3)->default('USD'); // Moneda
            $table->text('description'); // Descripción del servicio
            $table->string('customer_name'); // Nombre del cliente
            $table->string('customer_email'); // Email del cliente
            $table->string('customer_phone')->nullable(); // Teléfono del cliente
            $table->string('status'); // Estado del pago (pending, completed, failed, cancelled)
            $table->string('payment_method')->nullable(); // Método de pago usado
            $table->timestamp('paid_at')->nullable(); // Cuándo se completó el pago
            $table->json('stripe_metadata')->nullable(); // Metadatos adicionales de Stripe
            $table->text('notes')->nullable(); // Notas adicionales del administrador
            $table->string('invoice_number')->nullable(); // Número de factura
            $table->timestamps();
            
            // Índices para búsquedas rápidas
            $table->index(['customer_email', 'status']);
            $table->index(['service_type', 'status']);
            $table->index(['paid_at']);
            $table->index(['stripe_session_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('service_payments');
    }
};