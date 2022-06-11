<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
 <h2>Posts</h2>
   <ul>

       @foreach($posts as $post)
           <pre>{{$post}}<br></pre>
           <li>
{{--               <img src="{{"\/storage\/canvas\/images\/".$post->img}}" alt="image" width="50px">--}}
               <h3>{{$post->title}}</h3>
               <p>{{$post->summary}}</p>
           </li>

       @endforeach
   </ul>

</body>
</html>
