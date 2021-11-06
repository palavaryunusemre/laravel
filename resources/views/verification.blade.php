<html>
<head>
    <link href="assets/css/verification.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<div class="container">
    @if(session("status"))
        <div class="alert alert-primary" role="alert">
            {{session("status")}}
        </div>
    @endif
    <div class="verification">
        <span class="code"></span>
        <div class="expire-bar">
            <div class="color-bar"></div>
        </div>
    </div>

    <form action="{{route('edit.post')}}" method="POST">
        {{csrf_field()}}
        <a>kodu giriniz</a>
        <input type="text" name="kod">
        <div class="centered">
            <button type="submit"><a >Onay</a> </button>
        </div>
    </form>


</div>

<script src="assets/js/verification.js"></script>

</body>
</html>





