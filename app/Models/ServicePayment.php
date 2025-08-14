<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'stripe_session_id',
        'stripe_payment_intent_id',
        'service_type',
        'amount',
        'currency',
        'description',
        'customer_name',
        'customer_email',
        'customer_phone',
        'status',
        'payment_method',
        'paid_at',
        'stripe_metadata',
        'notes',
        'invoice_number',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'stripe_metadata' => 'array',
        'paid_at' => 'datetime',
    ];

    // Generar número de factura automáticamente
    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($payment) {
            if ($payment->status === 'completed' && !$payment->invoice_number) {
                $payment->invoice_number = 'INV-' . date('Y') . '-' . str_pad(static::count() + 1, 4, '0', STR_PAD_LEFT);
            }
        });
    }

    // Scope para pagos completados
    public function scopeCompleted($query)
    {
        return $query->where('status', 'completed');
    }

    // Scope para pagos pendientes
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    // Scope para pagos fallidos
    public function scopeFailed($query)
    {
        return $query->where('status', 'failed');
    }

    // Formatear monto para mostrar
    public function getFormattedAmountAttribute()
    {
        return '$' . number_format($this->amount, 2);
    }

    // Verificar si el pago está completado
    public function isCompleted()
    {
        return $this->status === 'completed';
    }

    // Verificar si el pago está pendiente
    public function isPending()
    {
        return $this->status === 'pending';
    }
}