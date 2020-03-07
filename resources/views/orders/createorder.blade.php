<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.dynamic').change(function(){
                if($(this).val() !== '')
                {
                    var value = $(this).val();
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('getproductsbycategory') }}",
                        method:"POST",
                        data:{value:value, _token:_token},
                        success:function(result)
                        {
                            console.dir(result);
                            let tag = document.querySelector('#product');
                            tag.innerHTML = '';
                            result.forEach((element) => {
                                let opt = document.createElement('option');
                                opt.appendChild(document.createTextNode(element.name));
                                opt.value = element.id;
                                tag.appendChild(opt);
                            });
                        }
                    })
                }
            });
        });
    </script>
</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            New product
        </div>
        <form method="post" action="{{ route('order.store') }}">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group" id="select-form">
                        <select id="category" class="form-control input-group-lg dynamic"  name="category_name" data-dependent = "product">
                            <option>Select category</option>
                            @foreach($categories as $category)
                            <option> {{ $category->name }}</option>
                            @endforeach
                        </select>
                        <select name="product_id" id="product" class="form-control input-group-lg">
                            <option>Select product</option>
                        </select>
                        <input type="text" name="quantity" class="form-control" placeholder="Quantity">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

    </div>
</div>
</body>
</html>
