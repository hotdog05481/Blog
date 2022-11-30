@extends('layouts.master')

@section('title','Pics')
{{ $global }}
@section('content')
<div class="container">
	<div class="top">
    	<ul>
        	<li><a href="#img_1"><img src="https://static.accupass.com/eventbanner/2203220314341224901699.jpg"></a></li>
            <li><a href="#img_2"><img src="https://cdntwrunning.biji.co/800_15bec0f75dac6833b65ff706bd14ae6febb9a1268270e18223f72abae590f02d.jpg"></a></li>
            <li><a href="#img_3"><img src="https://pic.pimg.tw/wevily/1526875556-1051185653_l.jpg"></a></li>
            <li><a href="#img_4"><img src="https://jazko.com/wp-content/uploads/2019/10/58673-S-696x338.jpg"></a></li>
            <li><a href="#img_5"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/JadeMountainSouthernPeak.jpg/1200px-JadeMountainSouthernPeak.jpg"></a></li>
            <li><a href="#img_6"><img src="https://www.beclass.com/share/201901/22413985c2f1941d80d30400r.jpg"></a></li>
            <li><a href="#img_7"><img src="https://pic.pimg.tw/ilovemyperi/1535299449-2847724130_n.jpg"></a></li>
            <li><a href="#img_8"><img src="https://assets.hikingbook.net/posts/y0nxub4pqt90lt99ikew890cw/7d0EWhpIS4S07EWzlD997Mw.jpe"></a></li>
            <li><a href="#img_9"><img src="https://www.ysnp.gov.tw/UploadPlugin?file=i%2BifzMiqxoOGxT%2FVr25SKzsDjCs7OItEOJlnGmQ4RxioKSyVMT2HTz%2FAUV5FmIAPQWWezlfj3DBNV%2Bu9f%2BYxVQ%3D%3D"></a></li>
            <li><a href="#img_10"><img src="http://www.sunriver.com.tw/blog/wp-content/uploads/C-a-039-09.jpg"></a></li>
            <li><a href="#img_11"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5a/HsuehMountainNorthenPeak.jpg/1024px-HsuehMountainNorthenPeak.jpg"></a></li>
            <li><a href="#img_12"><img src="https://cdntwrunning.biji.co/800_48384135f68f671782263a4549948bbb92503d0d5995e8907ee66581f5e42b0d.jpg"></a></li>
            <li><a href="#img_13"><img src="https://upload.wikimedia.org/wikipedia/commons/5/54/Looking_down_towards_the_Dashueiku_Cabin.jpg"></a></li>
            <li><a href="#img_14"><img src="https://1.bp.blogspot.com/-GFXXtp5C_aM/XcK5VHe3n6I/AAAAAAAA5co/wMZJP4ss8dUYR1XV-n9WQe9HmOKNw5nlACLcBGAsYHQ/s1600/_MG_2743.JPG"></a></li>
            <li><a href="#img_15"><img src="http://www.sunriver.com.tw/blog/wp-content/uploads/D-b-074-02.jpg"></a></li>
            <li><a href="#img_16"><img src="https://pic.pimg.tw/wevily/1429627027-3226056541_l.jpg"></a></li>
        </ul>
        <a href="#_1" class="lightbox trans" id="img_1"><img src="https://static.accupass.com/eventbanner/2203220314341224901699.jpg"></a>
        <a href="#_2" class="lightbox trans" id="img_2"><img src="https://cdntwrunning.biji.co/800_15bec0f75dac6833b65ff706bd14ae6febb9a1268270e18223f72abae590f02d.jpg"></a>
        <a href="#_3" class="lightbox trans" id="img_3"><img src="https://pic.pimg.tw/wevily/1526875556-1051185653_l.jpg"></a>
        <a href="#_4" class="lightbox trans" id="img_4"><img src="https://jazko.com/wp-content/uploads/2019/10/58673-S-696x338.jpg"></a>
        <a href="#_5" class="lightbox trans" id="img_5"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/JadeMountainSouthernPeak.jpg/1200px-JadeMountainSouthernPeak.jpg"></a>
        <a href="#_6" class="lightbox trans" id="img_6"><img src="https://www.beclass.com/share/201901/22413985c2f1941d80d30400r.jpg"></a>
        <a href="#_7" class="lightbox trans" id="img_7"><img src="https://pic.pimg.tw/ilovemyperi/1535299449-2847724130_n.jpg"></a>
        <a href="#_8" class="lightbox trans" id="img_8"><img src="https://assets.hikingbook.net/posts/y0nxub4pqt90lt99ikew890cw/7d0EWhpIS4S07EWzlD997Mw.jpe"></a>
        <a href="#_9" class="lightbox trans" id="img_9"><img src="https://www.ysnp.gov.tw/UploadPlugin?file=i%2BifzMiqxoOGxT%2FVr25SKzsDjCs7OItEOJlnGmQ4RxioKSyVMT2HTz%2FAUV5FmIAPQWWezlfj3DBNV%2Bu9f%2BYxVQ%3D%3D"></a>
        <a href="#_10" class="lightbox trans" id="img_10"><img src="http://www.sunriver.com.tw/blog/wp-content/uploads/C-a-039-09.jpg"></a>
        <a href="#_11" class="lightbox trans" id="img_11"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5a/HsuehMountainNorthenPeak.jpg/1024px-HsuehMountainNorthenPeak.jpg"></a>
        <a href="#_12" class="lightbox trans" id="img_12"><img src="https://cdntwrunning.biji.co/800_48384135f68f671782263a4549948bbb92503d0d5995e8907ee66581f5e42b0d.jpg"></a>
        <a href="#_13" class="lightbox trans" id="img_13"><img src="https://upload.wikimedia.org/wikipedia/commons/5/54/Looking_down_towards_the_Dashueiku_Cabin.jpg"></a>
        <a href="#_14" class="lightbox trans" id="img_14"><img src="https://1.bp.blogspot.com/-GFXXtp5C_aM/XcK5VHe3n6I/AAAAAAAA5co/wMZJP4ss8dUYR1XV-n9WQe9HmOKNw5nlACLcBGAsYHQ/s1600/_MG_2743.JPG"></a>
        <a href="#_15" class="lightbox trans" id="img_15"><img src="http://www.sunriver.com.tw/blog/wp-content/uploads/D-b-074-02.jpg"></a>
        <a href="#_16" class="lightbox trans" id="img_16"><img src="https://pic.pimg.tw/wevily/1429627027-3226056541_l.jpg"></a>
    </div>
</div>
@endsection

@section('css')
 <link rel="stylesheet" href="pics/style.css">
@endsection

@section('js')
 <script  src="pics/script.js"></script>
@endsection

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - CSS Gallery (Lightbox)</title>
</head>
<body>
<!-- partial:index.partial.html -->
<!-- partial -->
  <script  src="pics/script.js"></script>

</body>
</html>
