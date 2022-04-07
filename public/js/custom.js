    

$(document).ready(function(){
$('#customer').on('submit',function(e){
    e.preventDefault();

    
    let customer_id = $('#customer_id').val();
    let name = $('#name').val();
    let phone = $('#phone').val();
    let _token = $('#_token').val(); 

    var fd ={
      name:name, phone:phone, _token:'{{ csrf_token() }}'
    };
    console.log(fd);
    var form = document.getElementById("customer");

    $.ajax({
      url: "/addcustomer",
      type:"POST",  
      data:new FormData(form),
      beforeSend: function () {
        Swal.fire({
            type: 'info',
            title: 'Submit!',
            text: 'Submitting...'
        });
      },
      success: function (data) {
        if (data === 200) {
            Swal.fire({
                type: 'success',
                title: 'SAVED!',
                showConfirmButton: false,
                timer: 1000
            });
        } else {
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Error processing request! Please try again.'
            });
        }
    },
    error: function (xhr, ajaxOptions, thrownError) {
      alert(xhr.status);
      alert(thrownError);
    }
      })
  })
})


