
<section class="product_section layout_padding">
   <div class="container">
      <div class="heading_container heading_center">
         <h2>
            MY <span>Trends</span>
         </h2>
      </div>
      <div class="row">


         @foreach ($product as $products)



         <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="box">
               <div class="option_container">
                  <div class="options">
                     <a href="{{url('product_details',$products->id)}}" class="option2">
                     Product Details
                     </a>
                     {{-- <a href="" class="option2">
                     Buy Now
                     </a> --}}
                  </div>
               </div>
               <div class="img-box">
                  <img src="product/{{$products->image}}" alt="">
               </div>
               <div class="detail-box">
                  <h5>
                     {{$products->title}}
                  </h5>

                  @if ($products->discount_price!=null)
                  <h6>
                     <span style="color:green">{{$products->discount_price}}$</span>
                     <span style="text-decoration:line-through;color:red" >{{$products->price}}$</span>
                  </h6>
                  @else
                     <h6 style="color:green">{{$products->price}}$</h6>
                  @endif
               </div>
            </div>
         </div>
      
      @endforeach
      {{-- <span style="padding-top: 20px;">
         {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}
      </span> --}}
      
   </div>
</section>