<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head></head>
    <body class="antialiased">
        <div class="form-example">
            <label for="name">Enter link for get rss info</label>
            <input type="text" name="name" id="link">
        </div>
        <div>
            <button id="send">Get data</button>
        </div>

        <div class="result">
            <div id="title"></div>
            <div id="small-title"></div>
            <div id="content"></div>
            <div style="color: red" id="error"></div>
        </div>

        <script src="{{asset('js/jquery-3.7.0.min.js')}}"></script>
        <script src="{{asset('js/script.js')}}"></script>
    </body>
</html>
