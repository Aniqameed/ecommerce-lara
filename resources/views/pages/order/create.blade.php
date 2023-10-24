@extends('layouts.main') {{-- Assuming you have a layout file --}}

@section('content')
<div class="container">
    <h1>Create New Order</h1>
    <form method="post" action="{{ route('order.store') }}">
        @csrf {{-- CSRF protection --}}

        {{-- Customer Information --}}
        <div class="form-group">
            <label for="customer_name">Customer Name</label>
            <input type="text" name="customer_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="customer_email">Customer Email</label>
            <input type="email" name="customer_email" class="form-control" required>
        </div>

        {{-- Product Selection --}}

        {{-- <div class="form-group">
            <label for="product_id">Select Product</label>
            <select name="product_id" class="form-control" required>
                <option value="">Select a product</option>
                @foreach($products as $product)
                    <option value="{{ $product_id->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div> --}}

        {{-- Order Details --}}
        <div class="form-group">
            <label for="order_number">Order Number:</label>
            <input type="text" name="order_number" class="form-control" id="order_number" required>
        </div>

        <div class="form-group">
            <label for="order_date">Order Date:</label>
            <input type="date" name="order_date" class="form-control" id="order_date" required>
        </div>

        <div class="form-group">
            <label for="total_amount">Total Amount:</label>
            <input type="number" name="total_amount" class="form-control" id="total_amount" required>
        </div>

        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
            <label for="status" class="col-md-4 control-label">Status</label>

            <div class="col-md-6">
                <select id="status" name="status" class="form-control">
                    <option value="Package Processing">Package Processing</option>
                    <option value="Processed and Ready">Processed and Ready</option>
                    <option value="Package Picked">Package Picked</option>
                    <option value="Delivered">Delivered</option>
                </select>

                @if ($errors->has('status'))
                    <span class="help-block">
                        <strong>{{ $errors->first('status') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="payment_method">Payment Method:</label>
                <select class="form-control" id="payment_method" name="payment_method">
                    <option value="card">Card Payment</option>
                    <option value="cash">Cash on Delivery</option>
                </select>
            </div>


        <div class="form-group">
            <label for="shipping_address">Shipping Address:</label>
            <textarea name="shipping_address" class="form-control" id="shipping_address" required></textarea>
        </div>

        <div class="form-group">
            <label for="billing_address">Billing Address:</label>
            <textarea name="billing_address" class="form-control" id="billing_address" required></textarea>
        </div>


        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="order_notes">Order Notes</label>
            <textarea name="order_notes" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create Order</button>
    </form>
</div>
@endsection
