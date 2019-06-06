<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\PaymentRequest;
    use App\Payment;

    class PaymentController extends Controller
    {
        public function index()
        {
            $payments = Payment::get();
            return response()->json($payments);
        }
        public function store(PaymentRequest $request)
        {
            $payment = Payment::create($request->all());
            return response()->json($payment, 201);
        }
        public function show($id)
        {
            $payment = Payment::findOrFail($id);
            return response()->json($payment);
        }
        public function update(PaymentRequest $request, $id)
        {
            $payment = Payment::findOrFail($id);
            $payment->update($request->all());
            return response()->json($payment, 200);
        }
        public function destroy($id)
        {
            Payment::destroy($id);
            return response()->json(null, 204);
        }
    }