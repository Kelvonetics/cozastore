@extends('layouts.app')

@section('content')



<div class="row margin_tb" style="width: 100%; margin: 7% auto">
    <div class="col-xl-4">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title"> Top 5 Best Sellers Products</h4>
                <div id="" style=""><canvas id="product_chart"></canvas></div> 

            </div>
        </div>
    </div>

    <div class="col-xl-4">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title"> Top 5 Most Category </h4>
                <div id="" style=""><canvas id="category_chart"></canvas></div> 

            </div>
        </div>
    </div>

    <div class="col-xl-4">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title"> Top 5 Most Ordered Brand </h4>
                <div id="" style=""><canvas id="brand_chart"></canvas></div> 

            </div>
        </div>
    </div>
</div>




@endsection
@section('script')


<script type="text/javascript"> //FUNCTIONS TO LOAD EDIT MODALS
   
    //TOP 5 Most selling Product 
    var ctx = document.getElementById('product_chart').getContext('2d');
    var chart = new Chart(ctx, 
    {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: 
        {
            labels: [ @foreach($top_product as $top_products)"{{$top_products->product_name}}", @endforeach],
            datasets: 
            [          
                {
                    label: "Products", 
                    backgroundColor: ['#5B92E5'],  /* '#77c949', '#FFC1CC', '#ffbb44', '#f32f53', '#67a8e4' */
                    borderColor: '#ffffff',
                    data: [@foreach($top_product as $top_products) "{{$top_products->unit_price}}", @endforeach],
                },           
           ]
        },

        // Configuration options go here
        options: {}
    });


    //TOP 5 Most Selling Category  
    var ctx = document.getElementById('category_chart').getContext('2d');
    var chart = new Chart(ctx, 
    {
        // The type of chart we want to create
        type: 'pie',

        // The data for our dataset
        data: 
        {
            labels: [ @foreach($top_category as $top_categories)"{{$top_categories->category->category_name}}", @endforeach],
            datasets: 
            [          
                {
                    label: "Category", 
                    backgroundColor: ['#77c949', '#FFC1CC', '#ffbb44', '#f32f53', '#67a8e4'],  /* '#77c949', '#FFC1CC', '#ffbb44', '#f32f53', '#67a8e4' */
                    borderColor: '#ffffff',
                    data: [@foreach($top_category as $top_categories) "{{$top_categories->cost_price}}", @endforeach],
                },           
           ]
        },

        // Configuration options go here
        options: {}
    });


    //TOP 5 Most Selling Category  
    var ctx = document.getElementById('brand_chart').getContext('2d');
    var chart = new Chart(ctx, 
    {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
        data: 
        {
            labels: [ @foreach($top_cart as $top_carts)"{{$top_carts->product->product_name}}", @endforeach],
            datasets: 
            [          
                {
                    label: "Brands", 
                    backgroundColor: ['#202020', '#BF94E4', '#CD7F32', '#f32f53', '#67a8e4'],  /* '#77c949', '#FFC1CC', '#ffbb44', '#f32f53', '#67a8e4' */
                    borderColor: '#ffffff',
                    data: [@foreach($top_cart as $top_carts) "{{$top_carts->product->unit_price}}", @endforeach],
                },           
           ]
        },

        // Configuration options go here
        options: {}
    });

</script>


@endsection  