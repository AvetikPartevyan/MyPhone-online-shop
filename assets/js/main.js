
      // if(document.getElementById('register_form')){
    
        $('#register_form').submit(function (e) { 
            e.preventDefault();
            let form_data = new FormData(document.getElementById('register_form'));
        // console.log(form_data);
            $.ajax({
                type: "post",
                url: "/",
                data: form_data,
                dataType: false,
                processData: false,
                contentType: false,
                success: function (response) {
                    console.log(response)
                    if(response != 0){
                        window.location.href = '/login';
                    }
                    else{
                        console.log('error')
                    }
                }
            });
        });
    // }
    // if(document.getElementById('login_form')){
        
        $('#login_form').submit(function (e) { 
            e.preventDefault();
            let form_data = new FormData(document.getElementById('login_form'));
        // console.log(form_data);
            $.ajax({
                type: "post",
                url: "/",
                data: form_data,
                dataType: false,
                processData: false,
                contentType: false,
                success: function (response) {
                    console.log(response)
                    if(response != 0){
                        window.location.href = '/home';
                    }
                    else{
                        // console.log('error')
                        $('.error').text('Login or email is incorrect')
                    }
                }
            });
        });
    // }
    // if(document.getElementById('add_products')){
        
        $('#add_products').submit(function (e) { 
            e.preventDefault();
            let form_data = new FormData(document.getElementById('add_products'));
        // console.log(form_data);
            $.ajax({
                type: "post",
                url: "/",
                data: form_data,
                dataType: false,
                processData: false,
                contentType: false,
                success: function (response) {
                    console.log(response)
                    // if(response != 0){
                        // window.location.href = '/products';
                    // }
                    // else{
                        // console.log('error')
                        // $('.error').text('Login or email is incorrect')
                    // }
                }
            });
        });
    // }

