<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->        
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="container-fluid">
            <div class="row     justify-content-center">
              <div class="col-md-8">
                <div class="card mt-5 mb-5">
                  <div class="card-header card-header-success">
                    <h4 class="card-title">{{$Title}} Blog Data</h4>
                  </div>
                  <div class="card-body">
                    <form class="form-sub-main" method="post" action="{{ route('update')}}" enctype="multipart/form-data">
                      {!! csrf_field() !!}
                      <input type="hidden"  name="cid"  value="{{ $Info -> id }}">
                      <div class="form-group margin-text">
                        <label>Blog Heading</label>                                              
                        <input type="text"  name="blog_title" value="{{ $Info -> blog_title}}"  class="form-control" required="">
                      </div>

                      <div class="form-group margin-text">
                        <label>Blog Article Author</label>                                              
                        <input type="text"  name="blog_article_author" value="{{ $Info -> blog_article_author}}"    class="form-control" required="">
                      </div>

                      <div class="form-group margin-text">  
                        <label>Written Date</label>                                            
                        <input type="date"  name="written_date" value="{{ $Info -> written_date}}"  class="form-control" required="">
                      </div>

                      <div class="form-group margin-text">  
                        <label>Blog Released Date</label>                                            
                        <input type="date"  name="blog_released_date" value="{{ $Info -> blog_released_date}}"  class="form-control" required="">
                      </div>
                
                      <div class="form-group margin-text"> 
                        <label>Blog Summary</label> 
                        <textarea name="blog_description" class="form-control" required="" rows="3">{{ $Info -> blog_description}}</textarea>                                            
                      </div>

                      <div class="form-group margin-text">  
                        <label>First Blog Explanation</label>
                        <textarea name="meta_description1"  id="first"  class="form-control" required="" rows="3">{{ $Info -> meta_description1}}</textarea>                                            
                      </div>

                      <div class="form-group margin-text">     
                        <label class="mt-4">Blog Image</label>                                         
                        <input type="file"  name="blog_image" value="{{ $Info -> blog_image}}"   class="form-control">
                      </div>

                      <div class="form-group margin-text"> 
                        <label>Second Blog Explanation</label> 
                        <textarea name="meta_description2" id="second"   class="form-control" required="" rows="3">{{ $Info -> meta_description2}}</textarea>
                      </div>

                      <div class="form-group margin-text">
                        <div class="btn_uy">
                          <input type="submit" value="Update" name="submit" class="submit-button"></input>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- your contant end here -->

        </div>
      </div>
</body>
</html>
