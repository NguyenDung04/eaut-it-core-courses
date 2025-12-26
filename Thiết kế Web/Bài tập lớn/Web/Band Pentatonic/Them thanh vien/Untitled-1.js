<script>
    function validateForm() function validatePhone(phone){
      // Kiểm tra các trường bắt buộc
      var name = document.forms["myForm"]["name"].value;
      var email = document.forms["myForm"]["email"].value;
      var message = document.forms["myForm"]["message"].value;
        var phone = document.forms["myForm"]["phone"].value;
      }
      
        if (phone == "") {
          alert("Số điện thoại không hợp lệ.");
          return false;
        }
        return true;
      
      if (name == "") {
        alert("Vui lòng nhập họ tên");
        return false;
      }
      
      if (email == "") {
        alert("Vui lòng nhập địa chỉ email");
        return false;
      }
      
      if (message == "") {
        alert("Vui lòng nhập nội dung");
        return false;
      }
  </script>