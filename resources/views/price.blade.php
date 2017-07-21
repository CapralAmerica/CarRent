@extends('layouts.master')
@section('title')
    {{ 'Price' }}
@endsection
@section('content')
    <div id="price_form">
       <div class="days_amount">
            <form class="form-inline">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter amount of days" v-model="input">
                </div>
                <button type="submit" class="btn btn-primary" @click.prevent="CalculatePrice">Show price</button>
            </form>
        </div>

        <div class="total_price">
            <form class="form-inline price">
                <div class="form-group">
                    <label class="sr-only" for="exampleInputAmount">Amount</label>
                    <div class="input-group">
                        <div class="input-group-addon">$</div>
                        <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount" v-model="amount">
                        <div class="input-group-addon">.00</div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="price_text">
        <h3 class="text-right">Please enter quantity of days you want to rent the car.</h3>
    </div>
@endsection
