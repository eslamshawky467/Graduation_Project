<!DOCTYPE html>
<html lang="en">

@include('patient.patient_styles')
<body>
<!-- sidebar -->
<div class="wrapper">
<!-- Sidebar Holder -->
@include('Patient.patient_sidebar')
<!-- Page Content Holder -->
<div id="content">
    <!-- Back to top button -->
<div class="back-to-top"></div>

@include('Patient.patient_header')

@include('Patient.patient_PPM')



    




<div class="page-section bg-light">
    <div class="container">
    <h1 class="text-center wow fadeInUp">الأطباء</h1>
    <div class="row mt-5">
            
                
        
        <div  class="container bootdey" style="float: right">
            <div  class="col-md-12">
            <section class="panel">
                <div style="background-color: rgba(240, 248, 255, 0.74); margin-top:0px;border-radius: 50px 20px;" class="panel-body">
                    <div class="col-md-6"style="background-color: #fff;" >
                        <div style="margin-top: 25px; " class="pro-img-details">
                            <img src="{{ asset('/image_medicineFolder/'.$product->medicine_image) }}" style="width: 600px;height:400px;" class="thumbnail" style="width: 700px;height:290px; margin-top:47px" alt="new-arrivals images">
                        </div>
                    
                    </div>
                    <div class="col-md-6" style="background-color: #fff ; color:black">
                        <h4 class="pro-d-title">
                            <a href="#7386D5" class="">
                                {{$product->name}}
                            </a>
                        </h4>
                        <p style="color:azure" >
                            {{$product->description}}                        
                        </p>
                        <p style="color:azure" >
                            {{$product->medicine_status}}                        
                        </p>
                        
                        <div class="product_meta">
                            <span class="posted_in"> <strong>Categories:</strong> <a rel="tag" href="{{url('getcategory/'.$product->id)}}">{{$product->illness}}</a>.</span>
                            <span class="tagged_as"> </br><strong>available quantity:</strong> .</span>
                        </div>
                        <div class="m-bot15"> <strong>Price : </strong> <span class="amount-old">${{$product->price}}</span>  <span class="pro-price"> ${{$product->price}}</span></div>
                        <div class="form-group">
                        
                            <p>
                                <form method="POST" action="{{url('medicine_make_order/'.$product->id)}}">
                                    @csrf
                                    <div>
                                        <label>Quantity</label>
                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                                        <input type="button" value="-" id="minus" class="form-control quantity" />
                                        <input type="number" id="quantity" value="" name="qty" class="form-control quantity" />
                                        <input type="button" value="+" id="plus" class="form-control quantity" />
                                    
                                    </div>
                                    <button type="submit" style="margin-top:10px; height:42px;width:50%;margin-left:180px" class="form-control btn btn-primary ">
                                        Add To Cart
                                    </button>
                                </form>
                                                        
                            </p>
                        </div>
                        
                    </div>
                </div>
            </section>
            </div>
            </div>
        
        



        

        
    </div>
    </div>
</div> <!-- .page-section -->

<!-- .page-section -->

<!-- .banner-home -->


@include('Patient.patient_footer')
</div>
</div>
<!-- end sidebar-->



@include('Patient.patient_scripts')
<script>
    $('#plus').click(function add() {
    var $qtde = $("#quantity");
    var a = $qtde.val();
    
    a++;
    $("#minus").attr("disabled", !a);
    $qtde.val(a);
});
$("#minus").attr("disabled", !$("#quantity").val());

$('#minus').click(function minust() {
    var $qtde = $("#quantity");
    var b = $qtde.val();
    if (b >= 1) {
        b--;
        $qtde.val(b);
    }
    else {
        $("#minus").attr("disabled", true);
    }
});

/* On change */
$(document).ready(function()
{
    function updatePrice()
    {
        var price = parseFloat($("#quantity").val());
        var total = (price + 1) * 1.05;
        var total = total.toFixed(2);
        $("#total-price").val(total);
    }
    $(document).on("change, keyup, focus", "#quantity", updatePrice);
});
</script>
</body>
</html>