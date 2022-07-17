function toggleText(){
    var x = document.getElementById("good");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }


  $(document).ready(function () {
    $("#picture").on('change',function(event){
             picture=$(this).val();
        if(picture!==''){
        $("#btn").attr('disabled',false);
        }

    })
    });