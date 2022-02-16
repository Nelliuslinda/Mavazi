// init Isotope
var $grid = $('.collection-list').isotope({
    // options
  });
  // filter items on button click
  $('.filter-button-group').on( 'click', 'button', function() {
    var filterValue = $(this).attr('data-filter');
    resetFilterBtns();
    $(this).addClass('active-filter-btn');
    $grid.isotope({ filter: filterValue });
  });

  var filterBtns = $('.filter-button-group').find('button');
  function resetFilterBtns() {
      filterBtns.each(function() {
          $(this).removeClass('active-filter-btn');
      });
  }

// // Register ajax
// $(function() {
//       $("#registerForm").validate({
//         rules:{
//           firstname:{
//             required:true
//           },
//           lastname:{
//             required:true
//           },
//           email:{
//             required:true,
//             email:true
//           },
//           password:{
//             required:true,
//             minlength:3,
//             maxlength:20
//           },
//           retype_password:{
//             required:true,
//             minlength:3,
//             maxlength:20,
//             equalTo:'#new_password'
//           },
//         },
//         messages:{
//           firstname:{
//             required:'First name required'
//           },
//           lastname:{
//             required:'Last name required'
//           },
//           email:{
//             required:'Email address required',
//             email:'Invalid Email address'
//           },
//           password:{
//             required:'Password required'
//           },
//           retype_password:{
//             required:'Retype new required'
//           },
//         },
//         submitHandler:function(frm){
//           toastr.remove();
//           $.ajax({
//             url:$(frm).attr('action'),
//             method:$(frm).attr('method'),
//             data:new FormData(frm),
//             processData:false,
//             dataType:'json',
//             contentType:'false',
//             success:function(result){
//                 if (result.status == 0) {
//                   toastr.error(result.msg);
//                 }else{
//                   toastr.success(result.msg);
//                   frm.reset();
//                 }
//             }
//           })

//           return false;
//         }
//       })
//   });

// //Login ajax
// $('#loginForm').validate({
//   rules:{
//     email:{
//       required:true,
//       email:true
//     },
//     password:{
//       required:true
//     }
//   },
//   messages:{
//     email:{
//       required:'Enter your email',
//       email:'Invalid email'
//     },
//     password:{
//       required:'Enter your password'
//     }
//   },
//   submitHandler:function(frm){
//     $.ajax({
//       url:$(frm).attr('action'),
//       method:$(frm).attr('method'),
//       processData:false,
//       dataType:'json',
//       contentType:false,
//       success:function(result){
//         if(result.status == 0){
//           toastr.error(result.msg);
//         }else{
//           window.location.href = result.msg;
//         }
//       }
//     })

//     return false;
//   }
// })

 