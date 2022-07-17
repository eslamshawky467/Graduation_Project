<!DOCTYPE html>
<html lang="en">
  @include('patient.patient_styles')
<style>
    #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

</style>
<body >
<!-- sidebar -->
<div class="wrapper" >
  <!-- Sidebar Holder -->
  @include('Patient.patient_sidebar')
  <!-- Page Content Holder -->
  <div id="content" >
    <!-- Back to top button -->
    <div class="back-to-top"></div>

    @include('Patient.patient_header')
  
  
    @include('Patient.patient_PPM')
  
      {{-- <div class="page-section pb-0" style="direction: rtl; background-color: white;"> --}}

        <br>

        <h1 style="text-align: center;color:rgb(12, 116, 116);"><b>تقرير الفحص</b></h1>
        <br>
        <br>

        {{-- <h2 style=" margin-left:10px ;margin-right:20px ; background-color:lightseagreen" >Your Data </h2> --}}
        <div style="margin-left:25px" >
            <div class="row">
                <div class="col-xs-6 col-md-6" style="background-color:none;">
                
                    <div style="width:70%; background-color:lavenderblush ;text-align:left; font-size:25px; font-family:Times New Roman, Times, serif" >Name </div>
                
                </div>
                <div class="col-xs-6 col-md-6" style="text-align:left; font-size:25px; font-family:Times New Roman, Times, serif"> 
                <div style="width:84%; background-color:lavenderblush ;text-align:left" >Social ID</div>
                </div>
            </div>
            <br>
    
        <div class="row">
            <div class="col-xs-6 col-md-6" style="background-color:none;margin-left:-80px">
            
                <div style="text-align:center" >{{$data->name}} </div>
            
            </div>
            <div class="col-xs-6 col-md-6" style="background-color:none;"> 
            <div style="text-align:center" >{{$data->socialid}}</div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-xs-12 col-md-12" style="background-color:none;">  
                <div style="max-width:92%; background-color:lavenderblush ;text-align:left; font-size:25px; font-family:Times New Roman, 				Times, serif" >Email 
                </div> 
            </div>
        
        </div>
        <br>
        <div class="row">
            <div class="col-xs-6 col-md-6" style="background-color:none;margin-left:0px">
            
                <div style="text-align:center" > {{$data->email}}</div>
            
            </div>
        
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-xs-6 col-md-6" style="background-color:none;">
            
                <div style="width:70%; background-color:lavenderblush ;text-align:left; font-size:25px; font-family:Times New Roman, Times, serif" >Age</div>
            
            </div>
            <div class="col-xs-6 col-md-6" style="text-align:left; font-size:25px; font-family:Times New Roman, Times, serif"> 
            <div style="width:84%; background-color:lavenderblush ;text-align:left" >Gender</div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-6 col-md-6" style="background-color:none;margin-left:-80px">
            
                <div style="text-align:center" >{{$data->age}}</div>
            
            </div>
            <div class="col-xs-6 col-md-6" style="background-color:none;"> 
            <div style="text-align:center" >{{$data->gender}}</div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-xs-6 col-md-6" style="background-color:none;">
            
                <div style="width:70%; background-color:lavenderblush ;text-align:left; font-size:25px; font-family:Times New Roman, Times, serif" >Phone Number</div>
            
            </div>
            <div class="col-xs-6 col-md-6" style="text-align:left; font-size:25px; font-family:Times New Roman, Times, serif"> 
            <div style="width:84%; background-color:lavenderblush ;text-align:left" >Address</div>
            </div>
        </div>

        <br>
    <div class="row">
        <div class="col-xs-6 col-md-6" style="background-color:none;margin-left:-80px">
        
            <div style="text-align:center" >{{$data->phonenumber}}</div>
        
        </div>
        <div class="col-xs-6 col-md-6" style="background-color:none;"> 
        <div style="text-align:center" >{{$data->address}}</div>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-xs-12 col-md-12" style="background-color:none;">  
            <div style="max-width:92%; background-color:lavenderblush ;text-align:left; font-size:25px; font-family:Times New Roman, 				Times, serif" >Checkup Image 
            </div> 
        </div>
    
    </div>
    <br>
    <div class="row">
        <div class="col-xs-6 col-md-6" style="background-color:none;margin-left:0px">
        
            <div style="text-align:center" ><img src="/machinefolder/{{$data->imagefile}}"></div>
        
        </div>
    
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-xs-6 col-md-6" style="background-color:none;">
        
            <div style="width:70%; background-color:lavenderblush ;text-align:left; font-size:25px; font-family:Times New Roman, Times, serif" >Class No</div>
        
        </div>
        <div class="col-xs-6 col-md-6" style="text-align:left; font-size:25px; font-family:Times New Roman, Times, serif"> 
        <div style="width:84%; background-color:lavenderblush ;text-align:left" >Class Name</div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-6 col-md-6" style="background-color:none;margin-left:-80px">
        
            <div style="text-align:center" >{{$data->classnumber}}</div>
        
        </div>
        <div class="col-xs-6 col-md-6" style="background-color:none;"> 
        <div style="text-align:center" >{{$data->classname}}</div>
        </div>
    </div>


        </div>


        <div style="margin-top: 80px"></div>
        

          
    {{-- </div> <!-- .page-section --> --}}
  
    <!-- .page-section -->
  
    <!-- .banner-home -->
  
    @include('Patient.patient_footer')
  
  </div>
</div>
<!-- end sidebar-->
  <!-- Back to top button -->
  
  @include('Patient.patient_scripts')

</body>
</html>