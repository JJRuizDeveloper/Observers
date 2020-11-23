<?php

namespace App\Observers;
use App\Models\Invoice;

class OrderObserver
{
    public function saved($model)
    {
        $invoice = new Invoice;
        $invoice->order_id = $model->id;
        $invoice->invoice_info = "Some text here";
        $invoice->save();
    }
}
